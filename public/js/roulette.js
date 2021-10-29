$(function() {
    let $inner = $('.inner'),
        $spin = $('#spin'),
        $reset = $('#reset'),
        $data = $('.data'),
        $mask = $('.mask'),
        maskDefault = 'spin to one correct',
        timer = 9000;

    let red = [1, 2, 1, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 16, 17, 18, 19];

    $reset.hide();

    $mask.text(maskDefault);
    $('.comment').html('');
    $spin.on('click', function() {
        $('.comment').remove;
        // get a random number between 0 and 36 and apply it to the nth-child selector
        var randomNumber = Math.floor(Math.random() * 36),
            color = null;
        $inner.attr('data-spinto', randomNumber).find('li:nth-child(' + randomNumber + ') input').prop('checked', 'checked');
        // prevent repeated clicks on the spin button by hiding it
        $spin.hide();
        // disable the reset button until the ball has stopped spinning
        $reset.addClass('disabled').prop('disabled', 'disabled').show();

        $('.placeholder').remove();
        randomNumber = 0;
        setTimeout(function() {
            $mask.text('Please wait');
        }, timer / 2);

        setTimeout(function() {
            $mask.text(maskDefault);
        }, timer + 500);
        // remove the disabled attribute when the ball has stopped
        setTimeout(function() {
            $reset.removeClass('disabled').prop('disabled', '');

            if ($.inArray(randomNumber, red) !== -1) { color = 'red' } else { color = 'black' };
            if (randomNumber == 0) { color = 'green' };

            if (color != 'black') {
                $('.result-number').text(randomNumber);
            } else {
                $('.result-number').text('×');
            }

            $('.result-color').text(color);
            $('.result').css({ 'background-color': '' + color + '' });
            $data.addClass('reveal');
            $inner.addClass('rest');

            //加筆部分
            if (color === 'black') {
                $thisResult = '<li class="previous-result color-' + color + '"><span class="previous-number">ハズレ</span><span class="previous-color">' + color + '</span></li>';
            } else {
                $thisResult = '<li class="previous-result color-' + color + '"><span class="previous-number">' + randomNumber + '</span><span class="previous-color">' + color + '</span></li>';
            }
            $('.previous-list').prepend($thisResult);

        }, timer);
        if (randomNumber == 0) {
            setTimeout(function() {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                })
                $.ajax({
                    url: "/api/roulette",
                    type: "POST",
                    data: {
                        flag: true
                    },
                    dataType: "json",
                    success: function(json) {　　　　
                        console.log(json);　　　
                    }
                }).done(function(data1, textStatus, jqXHR) {
                    console.log(jqXHR.status); //例：200
                    console.log(randomNumber); //1
                    let requestNumber = alert('おめでとうございます。答えはHOMEの「答え」に掲載されました。');

                }).fail(function(jqXHR, textStatus, errorThrown) {
                    console.log("err:" + jqXHR.status); //例：404
                    console.log(textStatus); //例：error
                    let requestNumber = alert('すでに回答してあります。');
                }).always(function() {})　

            }, timer + 1000)
        }
    })



    $reset.on('click', function() {
        // remove the spinto data attr so the ball 'resets'
        $inner.attr('data-spinto', '').removeClass('rest');
        $(this).hide();
        $spin.show();
        $data.removeClass('reveal');
        // so you can swipe it too
        var myElement = document.getElementById('plate');
        var mc = new Hammer(myElement);
        mc.on("swipe", function(ev) {
            if (!$reset.hasClass('disabled')) {
                if ($spin.is(':visible')) {
                    $spin.click();
                } else {
                    $reset.click();
                }
            }
        })
    })
})
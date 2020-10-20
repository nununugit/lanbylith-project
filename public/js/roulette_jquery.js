$(function() {
    $('#spin').on('click', function() {

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $.ajax({
            url: "/api/roulette",
            type: "POST",
            data: {
                _token: $('#signup-token').val(),
                user_id: '1',
                number: randomNumber
            },
            dataType: "json",
            success: function(json) {　　　　
                console.log(json);　　　
            },
            　　　 //失敗した場合
            　　　error: function(XMLHttpRequest, textStatus, errorThrown) {　　　　 alert("エラーが発生しました：" + textStatus + ":\n" + errorThrown);　　　 }
        })
    })
})
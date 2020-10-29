$(function() {
    $.ajax({
        type: "GET",
        url: "/api/car",
        dataType: "json",
        cache: false,
        success: function(data, status, xhr) {
            console.log(data);
            counter = 0;
            for (i = 0; i < 74; i++) {
                for (j = counter; j < data.length; j++) {
                    if (data[j].question_qid == i + 1) {
                        let percent = 0
                        percent = (data[j].ac_count / 5) * 100
                        percent = percent.toFixed(0)
                        let obi = 2.53 * percent
                        obi = obi.toFixed(0)
                        let obisiro = 253 - obi

                        $('.car' + (i + 1)).html('正答率 ' + percent + '%')
                        $('.car' + (i + 1)).parents('.obi').css({
                            'background': 'linear-gradient(to right, #CCFFFF ' + obi + 'px, #F7F7F7 ' + obi + 'px, #F7F7F7 ' + obisiro + 'px)'
                        });

                        counter++
                        break
                    }
                }
            }
        },
        error: function(XMLHttpRequest, status, errorThrown) {
            console.log("fail:" + XMLHttpRequest);
            console.log("status:" + status);
        }
    });
});
$(function() {
    for (i = 0; i < 6; i++) {
        let url = $('.url' + i + ' a').attr('href');　
        if (document.URL.match(url)) {
            $('.url' + i).addClass('current')　 //指定する文字列がURLに含まれる場合に実行する内容
                　
        };
    }
})
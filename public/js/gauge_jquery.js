$(function(){
    $.ajax({
        type : "GET",
        url : "/api/ac",
        dataType : "json",
        cache : false,
        success: function(data, status, xhr){
            console.log(data.length)
            g_count = data.length%6

            for(let i=1;i<=g_count;i++){
                $('.gauge'+i).css('background','red')
            }
            
            if(g_count==0&&data.length!=0){
                for(i=1;i<=6;i++){
                $('.gauge'+i).css('background', 'yellow')
                }
                console.log('gacha go!!!')
            }else{
                console.log('more than'+(6 - data.length)+'correct answer')
            }
        },
        error: function(XMLHttpRequest, status, errorThrown){
            console.log("fail:" + XMLHttpRequest);
	    console.log("status:" + status);
        }});
    });

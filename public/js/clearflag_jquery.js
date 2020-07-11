$(function(){
    $.ajax({
        type : "GET",
        url : "/api/clearflag",
        dataType : "json",
        cache : false,
        success: function(data, status, xhr){
            console.log(data);
            for(i=0; i<data.length ; i++){
            console.log(data.length);
                $('.flagcori'+data[i].question_qid).addClass('cleard');
                $(".cleard").addClass("animate__animated animate__flip");
                }
        },
        error: function(XMLHttpRequest, status, errorThrown){
            console.log("fail:" + XMLHttpRequest);
	    console.log("status:" + status);
            return 処理結果;
        }
    })
})

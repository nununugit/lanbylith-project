$(function(){
    var $ppc = $('.progress-pie-chart'),
      percent = parseInt($ppc.data('percent')),
      deg = 360*percent/100;
    if (percent > 50) {
      $ppc.addClass('gt-50');
    }
    $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
    $('.ppc-percents span').html(percent+'%');

    $.ajax({
        type : "GET",
        url : "/api/car",
        dataType : "json",
        cache : false,
        success: function(data, status, xhr){
            console.log(data);
            counter =0;

            for(i=1; i<=60 ; i++){
                for(j=counter; j<data.length;j++){
                    if(data[j].question_qid == i){
                        console.log(i +'clearcount'+data[j].ac_count)
                        counter++
                        break
                    }

                }
            }
        },
        error: function(XMLHttpRequest, status, errorThrown){
            console.log("fail:" + XMLHttpRequest);
	    console.log("status:" + status);
        }});
});

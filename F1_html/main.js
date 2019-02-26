//operowanie na obiektach(klasach) było zbyteczne
function scrol(){
window.onscroll = function() {scrollFunction()};

        $(document).ready(function () {
            Slider = $('#slider').Swipe({
                auto: 3000,
                continuous: true
            }).data('Swipe');

            $('.next').on('click', Slider.next);
            $('.prev').on('click', Slider.prev);

            $("#scrollup").click(function(){
                $('html, body').animate({ scrollTop: 0 }, 600);
            })
        });
    }


function animation(){
$(document).ready(function () {  
    var prec=0;    
    var txt=setInterval(function(){
        if(prec<99)
            prec+=3;
        else
            prec=100;
        $('.progressPrec').text(prec+"%"); 
        if(prec==100)
        clearInterval(txt);
    },120);

    document.getElementById("loading").style.display="inherit";
    setTimeout(function(){
        $('.picture').remove();
        $('#loading').fadeOut("slow");  
        document.cookie='app_start=true';
    },4400); //4400

});
}



function time(){
    var data=new Date();
    var sec=data.getSeconds();
    var min=data.getMinutes();
    var hours=data.getHours();
    if(sec<10)
        sec='0'+sec;
    if(min<10)
        min='0'+min;

    dtime=hours+":"+min+":"+sec;
    document.getElementById("timer").innerHTML=dtime;

    setTimeout(time,1000);
}

function scrollFunction(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("scrollup").style.display = "inline";
      } 
    else {
        document.getElementById("scrollup").style.display ="none";
      }

}
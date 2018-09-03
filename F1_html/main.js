
$(document).ready(function () {  
    var proc=0;    
    var txt=setInterval(function(){
        if(proc<99)
            proc+=3;
        else
            proc=100;
        $('.odliczanie').text(proc+"%"); 
        if(proc==100)
        clearInterval(txt);
    },120);
    var s = document.cookie;
    var tab=s.split('=');
    
    if(tab[1]!='true'){
    document.getElementById("przyciemnienie").style.display="inherit";
    setTimeout(function(){
        $('.obrazek').remove();
        $('#przyciemnienie').fadeOut("slow");  
        document.cookie='app_start=true';
    },4400); //4400
    }
    else{
        $('#przyciemnienie').remove();
    }

    $('#coin-slider').coinslider();
    Slider = $('#slider').Swipe({
		auto: 5000,
		continuous: true
	}).data('Swipe');
	$('.next').on('click', Slider.next);
	$('.prev').on('click', Slider.prev);
});




function czas(){
    var data=new Date();
    var sek=data.getSeconds();
    var min=data.getMinutes();
    var godz=data.getHours();
    if(sek<10)
        sek='0'+sek;
    if(min<10)
        min='0'+min;

    godzina=godz+":"+min+":"+sek;
    document.getElementById("zegar").innerHTML=godzina;

    setTimeout(czas,1000);
}

function scrollFunction(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("scrollup").style.display = "inline";

      } else {
        document.getElementById("scrollup").style.display ="none";

      }

}
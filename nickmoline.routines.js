$(function(){
     $(window).resize(function(){
         if($(this).width() >= 767){
             $.backstretch("/optimized/portraitleft.jpg", {speed: 150});
         }
      })
      .resize();//trigger resize on page load
});
// ==ClosureCompiler==
// @compilation_level ADVANCED_OPTIMIZATIONS
// @output_file_name nickmoline.min.js
// @code_url http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js
// @code_url https://raw.github.com/srobbin/jquery-backstretch/master/jquery.backstretch.js
// ==/ClosureCompiler==

$(function(){
     $(window).resize(function(){
         if($(this).width() >= 767){
             $.backstretch("/portraitleft.jpg", {speed: 150});
         }
      })
      .resize();//trigger resize on page load
});
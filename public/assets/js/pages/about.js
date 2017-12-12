'use strict';
$(document).ready(function(){
   $('.alternar-respuesta').on('click',function(e){
   $('#test, #test1, #test2').hide(500);
   $(this).parent().next().toggle();
   e.preventDefault();
});
});

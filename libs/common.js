"use strict";
$(document).ready(function () {
$(".block h2").css({'margin-bottom':'30px'});




 let multiPly = 0;
 let countFinish = 10;
 for (let i = 1; i <= countFinish; i++) {
    multiPly *= i;
    }
    console.info( multiPly );

    let getMultyplySpan = document.getElementById('get-multiply-span').innerHTML;
    console.info(getMultyplySpan);


});
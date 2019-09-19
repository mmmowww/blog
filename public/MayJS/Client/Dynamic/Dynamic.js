function Client(W,H){ // динемичное изменение сайта
var WidtchClient = W;
var HeightClient = H;
console.log("Dynamic");
$('.setings').css('width',WidtchClient);
 //$('.setings').css('height',HeightClient);
 ///////
 $('.client').css('width',WidtchClient);
 //$('.client').css('height',HeightClient);
 /////
 $('.sate').css('width',WidtchClient);
 //$('.sate').css('height',HeightClient);
 /////
 $('.log').css('width',WidtchClient);
 $('.log').css('height',HeightClient/6.41);
 /////
 $('.Name').css('width',WidtchClient);
 //$('.Name').css('height',HeightClient);
 ////
 $('.Contact').css('width',WidtchClient);
 //$('.Contact').css('height',HeightClient);
 ////
 $('.menu').css('width',WidtchClient);
 $('.menu').css('height',HeightClient/11.033);
 ////
 $('.content').css('width',WidtchClient);
 //$('.content').css('height',HeightClient);
 //
 $('.foter').css('opacity','100');
 $('.foter').css('width',WidtchClient);
 
};

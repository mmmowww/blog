function CLI(){ // Обхват настроек клиента
var cli = [2]; // Масив настроек клиента
var Height = document.documentElement.clientHeight;  //Узнаём высоту
var Width =	document.documentElement.clientWidth;   // Узнаём ширину
var MobaileW = [128,220];      // Ширина мобильных 
var PlanshetW = [320,480];    // ширина планшетов
var KomputerW = [500];       // ширина комьтеров
if(Width > MobaileW[0] && Width < MobaileW[1] ){
	cli[2] = "Mob"; //Мобильную версию использует
    $('.client').text(cli[2]);
};
if(Width > PlanshetW[0] && Width < PlanshetW[1]){
	cli[2] = "Pla"; // Планшетную
	$('.client').text(cli[2]);
};
if(Width > KomputerW[0]){
	cli[2] = "PC"; // Компютерную
	$('.client').text(cli[2]);
};

// Заполняем массив
cli [0] = Height; // Вносим длину
cli [1] = Width; // Вносим ширину
console.log(cli[0]);
console.log(cli[1]);

$('.H').text(cli[0]);
$('.W').text(cli[1]);
$('.client').text(cli[2]);
$('.using').text();
$('.data').text();
return cli;
};
///////////////
CLI();
$('.setings').css('display','none'); // Скрываем настроечный блок
//$('.setings').css('display','blok'); // открываем настроечный блок

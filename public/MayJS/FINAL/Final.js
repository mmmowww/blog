CLI();// Спрашиваем у клиента экран
var Plotform = $(".client").text();
if(Plotform =="Mob"){ClientMobaile();}// Функцыя разметки для мобилок};
if(Plotform =="Pla"){ClientPlanset();} // Функцыя разметки для Планшеток};
if(Plotform =="PC"){ClientPC();} // Функцыя разметки для Компютеров};
$('.setings').css('display','none');
console.log(Plotform);


new Vue({
	el: '#content',
	data: {
		greet: 'good'
	},
	methods: {
		changeText(){
		this.greet = "TEXT";
		console.log("ТЫК");
	}
	}});
	var i = 0;
window.addEventListener('resize',function(event){
	i++;
	console.log(i);
	var W,H = 0;
	H = document.documentElement.clientHeight;
	W = document.documentElement.clientWidth;
	Client(W,H);
	

})
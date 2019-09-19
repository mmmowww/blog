// Форма оценки (INSERT)
var InsertWorker = new Vue({
	el:'.MyInsert',
	methods:{
		ReadyInsert:function(){
			var BigData = new Date();
		     var Mount = BigData.getMonth()+1;
		     var Year = BigData.getFullYear();
			 $('.MyMouthInsert').val(Mount);
			$('.MyYearInsert').val(Year);
			console.log("ТЫК!",Mount,Year);
		},
	},
});
//// Форма для отсчёта
var SearchWorker = new Vue({
	el:'.Report',
	methods:{
	Ready:function(){
			//$('.RenderMonth').attr('readonly',false);
			//$('.RenderYear').attr('readonly',false);
		    var BigData = new Date();
		     var Mount = BigData.getMonth();
		     var Year = BigData.getFullYear();
			 Mount++; //Текущая дата
			 ///////
			 Mount--// Прошлый месяц
			$('.MyRenderMonth').val(Mount);
			$('.MyRenderYear').val(Year);
			//$('.RenderMonth').attr('readonly',true);
			//$('.RenderYear').attr('readonly',true);
			console.log('123',Year);
		}
	}
	
});

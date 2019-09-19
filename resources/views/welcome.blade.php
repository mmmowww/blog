<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	<?php //Подключаем фреймворки
	?>
	<script src = "JS_Frame/jQvery.js"></script>
	<script src = "JS_Frame/Vue.js"></script>
	
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
		</br>
	
		<style>
		.MySearch{
			border:1px solid black;
			margin: 1px;
		}
		</style>
		
	
 <form action = "/Senks" method="post" class = "MyInsert">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Id Работника    <input type="text" name="Name" /></p>
 <p> Оценка производительности <input type="text" name="Rating" /></p>
 <p>Пазицыя <input type="text" name="Position" /></p>
 <p>Коментарий <input type="text" name="Comment" /></p>
 
 <p>Текущий месяц <input v-on:click="ReadyInsert" type="text" name="Month" class = "MyMouthInsert" value = "Clik"/></p>
 <p>Год <input v-on:click="ReadyInsert" type="text" name="Year" class = "MyYearInsert" value = "Clik"/></p>
 <p>Подпись: <input type="text" name="Manager_Signature" /></p>
 <p><input type="submit" /></p>
</form>
<style> .MyInsert {
border:1px solid;	
}
</style>
 <form action = "/RenderNumero" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по имени работника   <input type="text" name="SearhName" /></p>
  <p><input type="submit" /></p>

</form>
 <form action = "/RenderRating" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по Оценке   <input type="text" name="SearhRating" /></p>
  <p><input type="submit" /></p>

</form>
 <form action = "/RenderPosition" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по позицыии   <input type="text" name="SearhPosition" /></p>
  <p><input type="submit" /></p>

</form>
 <form action = "/RenderMonth" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по Месяцу   <input type="text" name="SearhMonth" /></p>
  <p><input type="submit" /></p>
 
</form>
 <form action = "/RenderYear" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по году   <input type="text" name="SearhYear" /></p>
  <p><input type="submit" /></p>
 
</form>
 <form action = "/RenderMenager" method="post" class = "MySearch">
 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
 <p>Поиск по имени оценившего менеджера   <input type="text" name="SearhMenager" /></p>
  <p><input type="submit" /></p>
 
</form>
<form action = "Report" method = "post" class = "Report">
<h3>Подготовить отсчёт</h3>
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<p>Номер работника для отсчёта за предыдущий месяц   <input type="text" name="RenderName"/></p>
<p>предыдущий месяц   <input v-on:click="Ready" type="text" name="RenderMonth" class = "MyRenderMonth" value = "Clik" /></p>
<p>Год   <input v-on:click="Ready" type="text" name="RenderYear" class = "MyRenderYear" value = "Clik" /></p>
<p><input type="submit" /></p>
</form>

<?
///     <h3>Рендор всей БД</h3>
///	<div class = "IS">
///		@foreach ($SELECT as $Myis)
///		</br>
///	    <div class = "Rating">
///		<style type = "text/css"> 
///		.Rating{border-style: solid;}
///		</style>
///		<li>ID запеси {{$Myis->id}}</li></br>
///		<li>Оценка {{$Myis->Rating}}</li></br>
///		<li>Позицыя {{$Myis->Position}}</li></br>
///		<li>Имя сотрудника {{$Myis->Name}}</li></br>
///		<li>Коментарий {{$Myis->Comment}}</li></br>
///		<li>Дата("Полная") {{$Myis->FULL_Data}}</li></br>
///		<li>Месяц {{$Myis->Month}}</li></br>
///		<li>Год {{$Myis->Year}}</li></br>
///		<li>Подпись менеджера : {{$Myis->Menager}}</li></br>
///		</br>
///	    </div>
///		@endforeach
///		</div>
///		?>
<?// Подключаем свой код
?>		
<script src = "JS_Sourse\FORM\FORM.js"></script>
	</body>
</html>

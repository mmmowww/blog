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
	<?php //Подключаем фреймворки
	?>
	<script src = "JS_Frame/jQvery.js"></script>
	<script src = "JS_Frame/Vue.js"></script>
    <body>
	</br>
		<h2>Результат запроса</h2>
		<a href = '/Works'><button>Вернуться</button></a>
		<div class = "">
		<h3>Количество записей</h3>
		@foreach ($SELECTID as $Myis)
		Количество записей {{$Myis->cid}}</br>
		Имя сотрудника {{$Myis->Name}}</br>
		За месяц {{$Myis->Month}}</br>
		За год {{$Myis->Year}}</br>
		@endforeach</div></br>
		<div class = "">
		<h3>Средняя "Общая "оценка</h3>
		@foreach ($RatingUser as $Myis)
		Средняя общая оценка {{$Myis->avR}}</br>
		Имя сотрудника {{$Myis->Name}}</br>
		@endforeach</div></br>
		<div class = "">
		<h3>Средняя оценка по кухни</h3>
		@foreach ($SELECTPOSITION_one as $Myis)
		Средняя оценка {{$Myis->avR}}</br>
		Имя сотрудника {{$Myis->Name}}</br>
		За месяц {{$Myis->Month}}</br>
		За год {{$Myis->Year}}</br>
		@endforeach</div></br>
		<h3>Средняя оценка по Залу</h3>
		@foreach ($SELECTPOSITION_two as $Myis)
		Средняя оценка {{$Myis->avR}}</br>
		Имя сотрудника{{$Myis->Name}}</br>
		За месяц {{$Myis->Month}}</br>
		За год {{$Myis->Year}}</br>
		@endforeach</div></br>
		<h3>Средняя оценка по Кассе </h3>
		@foreach ($SELECTPOSITION_tree as $Myis)
		Средняя оценка {{$Myis->avR}}</br>
		Имя сотрудника {{$Myis->Name}}</br>
		За месяц{{$Myis->Month}}</br>
		За год {{$Myis->Year}}</br>
		@endforeach</div></br>
		<div class = ""><h3>Менеджеры давшые оценку</h3>
		@foreach ($SELECTMENAGER_signature as $Myis)
		Имя сотрудника {{$Myis->Name}}</br>
		За месяц {{$Myis->Month}}</br>
		За год {{$Myis->Year}}</br>
		Имя менеджеров которые оценивали № {{$Myis->Menager}}</br>
		<h5>--</h5>
		@endforeach</div></br>
		
		
		
<?// Подключаем свой код
?>		
<script src = "JS_Sourse\FORM\FORM.js"></script>
	</body>
</html>

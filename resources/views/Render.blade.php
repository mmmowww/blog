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
	
	
	
	
	
		</br>
		<h2>Результат запроса</h2>
		<a href = '/Works'><button>Вернуться</button></a>
		<div class = "IS">
		@foreach ($SELECT as $Myis)
		</br>
	    <div class = "Rating">
		<style type = "text/css"> 
		.Rating{border-style: solid;}
		</style>
		<li>ID запеси {{$Myis->id}}</li></br>
		<li>Оценка {{$Myis->Rating}}</li></br>
		<li>Позицыя {{$Myis->Position}}</li></br>
		<li>Имя сотрудника {{$Myis->Name}}</li></br>
		<li>Коментарий {{$Myis->Comment}}</li></br>
		<li>Дата("Полная") {{$Myis->FULL_Data}}</li></br>
		<li>Месяц {{$Myis->Month}}</li></br>
		<li>Год {{$Myis->Year}}</li></br>
		<li>Подпись менеджера : {{$Myis->Menager}}</li></br>
		</br>
	    </div>
		@endforeach
		</div>

	</body>
</html>

<html>
<!DOCTYPE>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('MayCSS/CSS.CSS') }}" >
</head>
<body>
<div class = "setings">
<p class = "client">CLient</p>
<p class = "W">Width</p>
<p class = "H">Height</p>
<p class = "using">USING</p>
<p class = "data">DATA</p>
</div>

<div class = "sate">
<div class = "Log">
<div class = "Name">Название компании</div>
<div class = "Contact">Телефоны</div>
</div>
<div class = "menu">
<a href ="/">Home</a>
<a href ="/photo">Альбом</a>
<a href ="/contact">Контакты</a>
<a href ="/price">Price-List</a>
</div>

<div class = "content">Content photo</div>
<div class = "foter">Footer</div>
</div>
<div = "LOAD">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="MayJS/Client/js.js"></script>
<script src="MayJS/Client/mobaile.js"></script>
<script src="MayJS/Client/PC.js"></script>
<script src="MayJS/Client/planshet.js"></script>
<script src="MayJS/FINAL/Final.js"></script>
</div>
<style>
* { margin: 0; padding: 0; }
.setings{background:red;}

.client{background:red;}

.W{background:red;}

.H{background:red;}

.using{background:red;}

.data{background:red;}

.sate{background:red;}

.log{background-color:  #212121;
 height: 150px;
 width: 1600px;
 display: flex;
 justify-content: space-between;}

.Name{width: 80px;
       height: 70px;
	   margin:10px;}
.Contact{width: 80px;
          height: 70px;
		margin:10px;}

.menu{background-color:  #030303;
width: 1600px;
height: 60px;
display:flex;
justify-content:between;}
.menu a {color:#ffffff;
	     padding-right:6px;
         padding-left:6px;
		 padding-top:10px;
		 border-style: solid 1px;}
.menu a:hover{color:green
              }

.content{width:1600;
         height:870px;
		 background-color:red;}

.foter{width: 1600px;
       height: 900px;
	   background-color:green;}

</style>
</div>
</body>
</html>
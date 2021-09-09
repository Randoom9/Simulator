
<?php


if (isset($_POST['done'])) {
	if ($_POST['answer'] == "") {
		echo "";
	} else if (trim($_POST['answer']) == "πR+4R= R(π+4)") {
		header("Location:finish.php");
	} else {
		$err = "error";
	}
}

if (isset($_POST['done'])) {
	if ($_POST['answer2'] == "") {
		echo "";
	} else if (trim($_POST['answer2']) == "0,21") {
		header("Location:finish.php");
	} else if (trim($_POST['answer2']) == "0.21") {
		header("Location:finish.php");
	} else {
		$err = "error";
	}
}



 ?>






 <!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Периметр геометрических фигур</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../style/guiders-1.3.0.css" />


	<script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="../../js/guiders-1.3.0.js"></script>


</head>
<body>
	<img class="face hide" src="../../style/img/face_in_progress.png" alt="" >
	<img class="pancil hide" src="../../style/img/pencil_and_compass.png" alt="" >
	<img class="formula hide" src="../../style/img/the_squared_difference.png" alt="">
	<style media="screen">
	.face {
		position: absolute;
		z-index: 0;
		top: 70px;
		left: 1300px;
	}

	.pancil {
		position: absolute;
		z-index: 0;
		top: 400px;
		left: 70px;
	}

	.formula {
		position: absolute;
		z-index: 0;
		top: 80px;
		left: 70px;
		transform: rotate(-30deg);
	}
	</style>

  <style media="screen">
  .hide {
    opacity:0; /*Элемент полностью прозрачный (невидимый)*/
    transition: 0.3s; /*Скорость перехода состояния элемента*/
    animation: show 0.5s 1; /* Указываем название анимации, её время и количество повторов*/
    animation-fill-mode: forwards; /* Чтобы элемент оставался в конечном состоянии анимации */
    animation-delay: 0.6s; /* Задержка перед началом */
  }

  @keyframes show{
   0%{ opacity:0; }
   100% { opacity:1; }
  }
	body {
		background-image: url(../../style/img/desk.jpg);
	}
	.pillar {
			background-image: url(../../style/img/stik.png);
			border: 1px solid white;
			border-radius: 20px;
	}
.name	h1 {
		position: absolute;
		text-transform: uppercase;
	}

	.name {
		height: 50px;

		background-image: url(../../style/img/stik.png)
	}
  </style>
	<div class="wrapper">

		<div class="pillar hide" style="min-height: 950px;">
			<div class="name">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="definitions">

			</div>
			<br>
			<div class="task">
				<img src="img/icecream.gif" alt="Мороженное" style="width: 500px; height: 350px;">
				<img src="img/icecream2.gif" alt="Мороженное" class="picture"> <br>
				<p><span>Задание№3:</span><p class="red">Математический десерт</p></p>
				<p><span>Дано: s</span>стаканчик с мороженным.Считать видимую часть мороженного - полусферой D=60мм. Высота самого стаканчика равна трём радиусам видимой части мороженного.</p>
				<p>1.Составьте, напишите формулу и вычислите периметр всего контура мороженного(вид сбоку)</p>
				<p style="color: green;">Формула:P=<form style="position: relative; top: 100px; right: 450px;" action="" method="post"><input type="text" autocomplete="off" name="answer"><p style="position: relative; left:1020px; bottom: 100px;"><input type="text" name="answer2">M</p><input style="position: relative; top: 25px; left: 500px;" type="submit" name="done"></form> Значение:P=</p><br>
				<p><span>Примечание:</span> при расчетах принять π=3</p>
				<p style="position: relative; color: red; bottom: 25px; right: 111px;"><?php if(isset($err)){echo "Ошибка";}; ?></p>
				<p style="position: relative; color: red; bottom: 25px; left: 450px;"><?php if(isset($err)){echo "Ошибка";}; ?></p>

			</div>






		</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>
				<button id="go"><a href="#">Далее</a></button>
				<button><a href="../five/perimetr2.1.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">


					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Ответ",
					    description: "Pмороженого = πR+4R= R(π+4) - формула |  P мороженого = 30*(3+4)=30*7=210мм=0,21м",
					    id: "tip",
					    overlay: true,
					    position:12,
					    autoFocus:true
					    }).show();
					});

					$('#go').click(function(){
					    guiders.createGuider({
					    attachTo: "#go",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Выполните задание",
					    description: "",
					    id: "tip",
					    overlay: true,
					    position:12,
					    autoFocus:true
					    }).show();
					});
				</script>
		</div>


	</div>
</body>
</html>

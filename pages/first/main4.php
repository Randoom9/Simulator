
<?php

if (isset($_POST['done'])) {
	if ($_POST['answer'] == "") {
		echo "";
	} else if (trim($_POST['answer']) == 21) {
		header("Location:../second/checkyouself.php");
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
	<img class="face hide" src="../../style/img/bender.png" alt="" >
	<img class="pancil " src="../../style/img/pencil_and_compass.png" alt="" >
	<img class="formula hide" src="../../style/img/dont_write.png" alt="">
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

	<style>
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
			min-height: 650px;
	}
	.name	h1 {
		display: block;
		font-size: 2em;
		margin-block-start: 0.67em;
		margin-block-end: 0.67em;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
		font-weight: bold;
		}

		.name {
			height: 50px;
			width: 60%;
	    background: white;
	    text-align: center;
	    margin: auto;
	    font-family: 'Signika', sans-serif;
			background-image: url(../../style/img/stik.png)
		}
	</style>
	<div class="wrapper">

		<div class="pillar">
			<div class="name">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="definition">
				<p><span>ОПРЕДЕЛЕНИЕ:</span>«Периметр многоугольника – это сумма длин всех его сторон»</p>
				<p>Формула периметра многоугольника <img src="img/formula..png" alt="Формула"></p>

			</div>

			<div class="example row">
				<img src="img/2.formula.png" alt="Пример 2">
				<p><span>Пример:</span>для треугольника ABC, P<sub>A</sub><sub>B</sub><sub>C</sub> = |a<sub>1</sub>| + |a<sub>2</sub>| + |a<sub>3</sub>| </p>
				<p>Теперь подставим значения длины сторон, и получим:</p>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub> = 2 + 4 + 5</p>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub> = 11</p>
			</div>

			<div class="task">
				<img src="img/3.figure.png" alt="Задание">
				<p><span>Задание:</span></p>
				<p>Напишите формулу периметра для пятиугольника ABCDE,</p><br>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub>= </p> <p>|a|+|b|+|c|+|d|+|e|</p>
				<div class="task2 hide">
				<p class="">Подставьте, числовые значения в формулу и вычислите устно периметр:P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub></p><br>
				<p>|a|=3,|b|=7,|c|=2,|d|=4,|e|=5,</p><form style="position: relative; top: 175px; right: 190px;" action="" method="post"><input  autocomplete="off" name="answer" type="text" placeholder="ведите конечный ответ"><input name="done" type="submit"></form></div></div> <p style="position: relative; color:red; top: 160px; right: 180px;"> <?php if(isset($err)){echo "Ошибка";}; ?> </p>



		</div>
		<div class="buttons">
			<button><a href="../../index.php">Выйти</a></button>
			<button id="go"><a href="#">Далее</a></button>
			<button><a href="main3.php">Назад</a></button>
			<button id="help"><a href="#">Помощь</a></button>


			<script type="text/javascript">

				$('#help').click(function(){
				    guiders.createGuider({
				    attachTo: "#help",
				    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
				    title: "Ответ",
				    description: "3+7+2+4+5=21",
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

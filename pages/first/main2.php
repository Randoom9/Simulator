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
</head>
<body>
	<img class="face " src="../../style/img/face_in_progress.png" alt="" >
	<img class="pancil " src="../../style/img/pencil_and_compass.png" alt="" >
	<img class="formula " src="../../style/img/the_squared_difference.png" alt="">
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

			<div class="example hide">
				<img src="img/geom.gif" alt="Пример 2">
				<p><span>Пример:</span>для треугольника ABC, P<sub>A</sub><sub>B</sub><sub>C</sub> = |a<sub>1</sub>| + |a<sub>2</sub>| + |a<sub>3</sub>| </p>
				<p>Теперь подставим значения длины сторон, и получим:</p>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub> = 2 + 4 + 5</p>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub> = 11</p>
			</div>
		</div>
		<div class="buttons">
			<button><a href="../../index.php">Выйти</a></button>
			<button><a href="main3.php">Далее</a></button>
			<button><a href="main.php">Назад</a></button>


		</div>


	</div>
</body>
</html>

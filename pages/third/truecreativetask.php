<?php
session_start();
		$answer1 = $_SESSION['answer1'];
		$answer2 = $_SESSION['answer2'];
		$answer3 = $_SESSION['answer3'];
		$answer4 = $_SESSION['answer4'];
		$answer5 = $_SESSION['answer5'];
		$answer6 = $_SESSION['answer6'];


if (isset($_POST['done'])) {
	if ($_POST['answer'] == "") {
		echo "";
	} else if ($_POST['answer'] == "|a|*6") {
		header("Location:../fourth/perimetr.php");
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
	<img class="pancil hide" src="../../style/img/alone_home.png" alt="" >
	<img class="formula3 hide" src="../../style/img/the_squared_difference.png" alt="">
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

	.formula3 {
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

		<div class="pillar">
			<div class="name">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="definitions row ">
				<p><span>Определение:</span>Периметр многоугольника - это сумма длин всех его сторон.</p>
				<p>Формула периметра многоугольника: P = |a<sub>1</sub>|+|a<sub>2</sub>|+...+|a<sub>n</sub>|, n &isin;[3,+&infin;)</p>
			</div>

			<div class="task">
				<img class="row" src="img/correctfig..png" alt="Фигура">

					<p><span>Задание:дан шестиугольника ABCDEF.</span></p>
					<p><span>Введите такие длины всех его сторон,чтобы получился равносторонний <br><span>шестиугольник:</span></span></p>
				<div class="formula row">
					<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub><sub>F</sub>=|a|+|b|+|c|+|d|+|e|+|f|</p><br>
					<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub><sub>F</sub>=	  | <?php echo $answer1; ?>|
																									 +| <?php echo $answer2; ?>|
																									 +| <?php echo $answer3; ?>|
																									 +| <?php echo $answer4; ?>|
																									 +| <?php echo $answer5;?>|
																									 +| <?php echo $answer6; ?>|</p><br>
									<!-- <form action="truecreativetask.html"><button>Применить</button></form> -->
				</div>
				<div class="formula2 clear hide">
					<p>|a|=|b|=|c|=|d|=|e|=|f|</p>
				</div>

				<div class="task2 hide">
					<p><span>Задание: учитывая,что у правильного шестиугольника все стороны равны между собой,<br> <span style="float: left;">запишите формулу его периметра в кратком виде:</span></span><p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub><sub>F</sub>=<form action="" method="post"><input type="text"  autocomplete="off" name="answer" style="width: 75px;"></p> <input type="submit" name="done"></form> <p style="color: red;"><?php if(isset($err)){echo "Ошибка";}; ?></p>
				</div>
			</div>



		</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>
				<button id="go"><a href="#">Далее</a></button>
				<button><a href="../second/checkyouself.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">


					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Ответ",
					    description: "|a|*6",
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

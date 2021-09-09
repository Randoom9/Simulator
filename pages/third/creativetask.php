
<?php
session_start();

if (isset($_POST['done'])) {
		$answer1 = trim($_POST['answer1']);
		$answer2 = trim($_POST['answer2']);
		$answer3 = trim($_POST['answer3']);
		$answer4 = trim($_POST['answer4']);
		$answer5 = trim($_POST['answer5']);
		$answer6 = trim($_POST['answer6']);
		$_SESSION['answer1'] = $answer1;
		$_SESSION['answer2'] = $answer2;
		$_SESSION['answer3'] = $answer3;
		$_SESSION['answer4'] = $answer4;
		$_SESSION['answer5'] = $answer5;
		$_SESSION['answer6'] = $answer6;
	if ($answer1 && $answer2 == $answer1) {
		if ($answer3 && $answer4 == $answer1) {
			if ($answer5 && $answer6 == $answer1) {
				header("Location:truecreativetask.php");
			} else {
				$err = "error";
			}
		}else {
			$err = "error";
		}
	} else {
		$err = "error";
	}

}


 ?>


<!-- header("Location:truecreativetask.php"); -->





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
	<img class="face hide" src="../../style/img/for_what_face_mem.png" alt="" >
	<img class="pancil hide" src="../../style/img/pencil_and_compass.png" alt="" >
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

		<div class="pillar ">
			<div class="name hide">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="definitions row hide">
				<p><span>Определение:</span>Периметр многоугольника - это сумма длин всех его сторон.</p>
				<p>Формула периметра многоугольника: P = |a<sub>1</sub>|+|a<sub>2</sub>|+...+|a<sub>n</sub>|, n &isin;[3,+&infin;)</p>
			</div>

			<div class="task hide">
				<img class="row" src="img/fig..png" alt="Фигура">

					<p><span>Задание:дан шестиугольника ABCDEF.</span></p>
					<p><span>Введите такие длины всех его сторон,чтобы получился равносторонний <br><span>шестиугольник:</span></span></p>
				<div class="formula">
					<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub><sub>F</sub>=|a|+|b|+|c|+|d|+|e|+|f|</p><br>
					<form action="" method="post"><p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub><sub>E</sub><sub>F</sub>=
												 |<input  autocomplete="off" type="text" class="inputnum" name="answer1">|
												+|<input  autocomplete="off" type="text" class="inputnum" name="answer2">|
												+|<input  autocomplete="off" type="text" class="inputnum" name="answer3">|
												+|<input  autocomplete="off" type="text" class="inputnum" name="answer4">|
												+|<input  autocomplete="off" type="text" class="inputnum" name="answer5">|
												+|<input  autocomplete="off" type="text" class="inputnum" name="answer6">|</p><br>
												<input type="submit" name="done">	<p style="color: red;"><?php if(isset($err)){echo "Ошибка";} ?></p></form>

				</div>
			</div>



		</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>
				<button id="go"><a href="#">Далее</a></button>
				<button><a href="../second/checkyouself2.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">

					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Помошь",
					    description: "У любого правильного  многоугольника равны все стороны». ",
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

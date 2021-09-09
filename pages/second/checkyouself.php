
<?php
if (isset($_POST['done'])) {
	if ($_POST['answer'] == "") {
		echo "";
	} else if (trim($_POST['answer']) == 3) {
		header("Location:checkyouself2.php");
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
	<img class="pancil hide" src="../../style/img/6x7.png" alt="" >
	<img class="formula hide" src="../../style/img/angry_face.png" alt="">
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

		<div class="pillar">
			<div class="name hide">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="check hide">
				<p><span>Проверь себя:</span></p><br>
				<p>Укажите номер правильного определения периметра многоугольника</p><br>
				<p>Периметром многоугольника называется:</p><br>
				<p>1.сумма сторон и углов многоугольника</p><br>
				<p>2.произведение сторон многоугольника</p><br>
				<p>3.сумма длин всех сторон многоугольника</p><br>
				<p><span>Правильный ответ: <form style="position: relative; right: 100px;" action="" method="post"><input type="text" autocomplete="off" name="answer"><input type="submit" name="done"></form></span></p> <p style="color: red;"><?php if(isset($err)){echo "Ошибка";}; ?></p>

			</div>

			<!-- <div class="example">
				<img src="img/figur.png" alt="Фигура">
				<p><span>Пример:</span> для параллелограмма ABCD,</p><br>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub> = |a<sub>1</sub>|+|a<sub>2</sub>|+|a<sub>3</sub>|+|a<sub>4</sub>|</p><br>
				<p>при: |a<sub>1</sub>|=|a<sub>3</sub>|=7; |a<sub>2</sub>|=|a<sub>4</sub>|=5;</p>
				<p>P<sub>A</sub><sub>B</sub><sub>C</sub><sub>D</sub> = <input type="text" name="text"></p>
			</div> -->

			</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>
				<button id="go"><a href="#">Далее</a></button>
				<button><a href="../first/main4.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">

					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "???????",
					    description: "??????",
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

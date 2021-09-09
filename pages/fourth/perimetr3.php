 <?php
session_start();
$answer01 = $_SESSION['answer01'];
$how = false;


if (isset($_POST['done'])) {
	if ($_POST['answer'] == "") {
		echo "";
	} else if (trim($_POST['answer']) == "D+πD/2") {
		// header("Location:../five/perimetr2.1.php");
    $how = true;
	} else {
		$err = "error";
	}
}

if (isset($_POST['done'])) {
	if ($_POST['answer2'] == "") {
		echo "";
	} else if (trim($_POST['answer2']) == "1") {
    if($how == true){
  	header("Location:../five/perimetr2.1.php");
  } else {
    		$err2 = "error";
  }

	} else {
		$err2 = "error";
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
  <img class="face hide" src="../../style/img/fallout.png" alt="" >
  <img class="pancil hide" src="../../style/img/chan_reaction.png" alt="" >
  <img class="formula hide" src="../../style/img/vot_tak_vota.png" alt="">
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
.name  h1 {
    position: absolute;
    text-transform: uppercase;
  }

  .name {
    height: 50px;

    background-image: url(../../style/img/stik.png)
  }
  </style>
	<div class="wrapper">

		<div class="pillar" style="min-height: 850px;">
			<div class="name">
				<h1>ПЕРИМЕТР ГЕОМЕТРИЧЕСКИХ ФИГУР</h1>
			</div>
			<div class="definitions">
				<p><span>Определение:</span>«Периметр окружности равен длине этой окружности. </p>
			</div>
			<br>
			<div class="task">
				<img src="img/radius..png" alt="Круг">

				<p><span>Задание:</span>запишите формулу периметра окружности,<br> c радиусом R: P<sub>окр</sub>  <?php echo $answer01;?></p>
				<p>«Итак, формула периметра окружности: P = 2πR, где  π=3,14 - математическая постоянная, R – радиус окружности.»</p>
			</div>

			<div class="task1 hide">
				<p><span>Задание №1:</span></p><br>
				<p><span>Дано:</span>арбуз,диаметром D=40см</p><br>
				<p>1.Составьте и напишите формулу периметра(длины контура) <br> <p style="float: left;">дной дольки: P <sub>дольки</sub>=<form action="" method="post"> <input type="text" autocomplete="off" name="answer"><p style="color: red;"><?php if(isset($err)){echo "Ошибка";}; ?><p/></p></p>
				<p>2.Вычислите и напишите периметр контура одной дольки арбуза: P <sub>дольки</sub>= <input type="text" autocomplete="off" name="answer2">м<p style="color: red;"><?php if(isset($err2)){echo "Ошибка";}; ?></p></p>
				<p class="row"><span>Примечание:</span>при расчетах принять π=3 <input type="submit" name="done"></p></form>
				<img src="img/arbuz.gif" alt="Арбуз">
			</div>





		</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>
				<button id="go"><a href="#">Далее</a></button>
				<button><a href="perimetr2.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">


					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Ответ",
					    description: "D+πD/2 ",
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



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

  .centerimg {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }
  </style>
	<div class="wrapper">

		<div class="pillar hide" style="min-height: 700px;">
      <img class="centerimg" src="img/finish.png" alt="">
			<div class="name">

			</div>
			<div class="definitions">
			</div>

		</div>

			<div class="buttons">
				<button><a href="../../index.php">Выйти</a></button>

				<button><a href="end.php">Назад</a></button>
				<button id="help"><a href="#">Помощь</a></button>

				<script type="text/javascript">


					$('#help').click(function(){
					    guiders.createGuider({
					    attachTo: "#help",
					    buttons: [{name: "Закрыть",onclick:guiders.hideAll}],
					    title: "Ответ",
					    description: "Ты красавчик!",
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

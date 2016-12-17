﻿<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Кулибин</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link href="css/media-queries.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
	<script src="https://use.fontawesome.com/4c200ea55b.js"></script>
	<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	
  </head>
  <body>

	<header>
		<div class="container-fluid">
			<nav role="navigation" class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;"">
  <!-- Логотип и мобильное меню -->
				<div class="navbar-header">
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>	
				</div>
			  <!-- Навигационное меню -->
				<div id="navbarCollapse" class="collapse navbar-collapse">
				  <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Главная</a></li>
					<li><a href="#">Новичку</a></li>
					<li><a href="#">Задачки</a></li>
					<li><a href="#">Изобретения</a></li>
					<li><a href="#">Изобретатели</a></li>
					<li><a href="#">Конкурсы</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container-fluid" id="header">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<h1 id="header_logo" class="text-center">Кулибин 2.0<h1>
					<div class="intro-text">
						<p class="text-center text-muted header_quote">"Найди то, что нужно миру и только потом начинай изобретать"</p>
						<p class="text-center text-muted  header_quote">Томас Алва Эдисон</p>
					</div>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 buttons_menu">
					<a href="#" class=" btn  header_buttons" id="selected">Войти</a>
					<!-- Кнопка, для открытия модального окна -->
					<a href="#" class="btn header_buttons" data-toggle="modal" data-target="#feedbackForm">Регистрация</a>
				</div>
			</div>
			<!-- Форма обратной связи в модальном окне -->
  <div class="modal fade" id="feedbackForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Форма обратной связи</h4>
        </div>
        
        <div class="modal-body">
 
            <!-- Сообщение, отображаемое в случае успешной отправки данных -->
            <div class="alert alert-success hidden" role="alert" id="msgSubmit" style="margin-bottom: 0px;">
              Вы успешно зарегистрировались!
            </div>
 
            <!-- Форма обратной связи -->
            <form id="messageForm" enctype="multipart/form-data">
              <div class="row">
                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
                <!-- Имя и email пользователя -->
                <div class="col-sm-6">
                  <!-- Имя пользователя -->
                  <div class="form-group has-feedback">
                    <label for="name" class="control-label">Введите ваше имя:</label>
                    <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
				<div class="col-sm-6">
                  <!-- Имя пользователя -->
                  <div class="form-group has-feedback">
                    <label for="name" class="control-label">Введите вашу фамилию:</label>
                    <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- Email пользователя -->
                  <div class="form-group has-feedback">
                    <label for="email" class="control-label">Введите адрес email:</label>
                    <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, ivan@mail.ru" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
              </div>
              <hr style="margin-top: 3px; margin-bottom: 3px;">
              <!-- Капча к форме -->
              <!-- Изображение, содержащее код CAPTCHA-->		  
	            <img id="img-captcha" src="/feedback/captcha.php">
              <!--Элемент, запрашивающий новый код CAPTCHA-->
	            <div id="reload-captcha" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Обновить</div>
	            <!--Блок для ввода кода CAPTCHA-->
	            <div class="form-group has-feedback">
                <label id="label-captcha" for="captcha" class="control-label">Пожалуйста, введите указанный на изображении код:</label>
	              <input id="text-captcha" name="captcha" type="text" class="form-control" required="required" value="" minlength="6" maxlength="6" autocomplete="off">
	              <span class="glyphicon form-control-feedback"></span>
              </div>
              <!-- Кнопка, отправляющая форму по технологии AJAX -->  
              <button name="send-message" type="submit" class="btn btn-primary pull-right">Регистрация</button>
            </form><!-- Конец формы -->
            <div class="clearfix"></div>
 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
			
		</div>
	</header>	
	<section id="picture">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead">Наука - это не скучно!</p>
					<p class="lead">Наука - это одновременно и система знаний и их духовное производство, и практическая деятельность на их основе.</p>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center introduction">
					<p class="lead text-center">Кулибин 2.0 и далее текст типа "О НАС"</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 picture_table table-responsive">
				<img src="image/hand.png" class="img-responsive">
			</div>
			</div>
		</div>
	</section>
	<section id="news">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-right: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/newspaper.svg">
					 <?php
						include "admin/connection.php";

						$select = "SELECT * FROM news ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#"><h4>'.$row['name'].'</h4></a>';
							echo '<p>'.$row['date'].'</p>';
							echo '<p>'.$row['description'].'</p>';
						}
						
					?> 
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div">
					<img class="img-responsive news_img" src="image/warning.svg" style="width: 75.8px; height: auto;">
					<?php
						include "admin/connection.php";

						$select = "SELECT * FROM competition ORDER BY ID DESC limit 1";
						$sql_res = mysqli_query($mysqli, $select);
						while ($row = mysqli_fetch_assoc($sql_res))
						{
							echo '<a href="#"><h4>'.$row['name'].'</h4></a>';
							echo '<p>'.$row['date'].'</p>';
							echo '<p>'.$row['description'].'</p>';
						}
						
					?> 
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-right: 5px solid #F5F5F5; border-top: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/light-bulb.svg">
					<p class="text-center">Краткая информация о последнем изобретении</p>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 text-center news_div" style="border-top: 5px solid #F5F5F5;">
					<img class="img-responsive news_img" src="image/projection.svg" style="width: 75.8px; height: auto;">
					<p class="text-center">Информация о действующих научных конференциях или ссылка на какой-либо интересный научный порталы</p>
				</div>
			</div>
		</div>
	</section>
	<section id="signup">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center signup">
					<h2>Присоединяйтесь, чтобы сделашь шаг навстречу изобретениям</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="social">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center social">
					<a href="#"><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
				</div>
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center social_text">
					<p>© Untitled. All rights reserved.</p>
					<a href="admin/admin.php">Administrator</a>
				</div>
			</div>
		</div>
	</section>
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/script.js"></script>
	
  </body>
</html>

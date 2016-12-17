﻿<?php

	include "connection.php";

	//добавление в базу данных
	if ( $_POST['name'] != '' & $_POST['date'] != '' && $_POST['text'] != '' && $_POST['smalltext'] != '' &&
		$_POST['button'] && $_POST['button'] == 'Отправить')
		{
			$query = "INSERT INTO competition (name,date,text, description) VALUES ('".htmlspecialchars($_POST['name'])."',
											'".htmlspecialchars($_POST['date'])."',
											'".htmlspecialchars($_POST['text'])."',
											'".htmlspecialchars($_POST['smalltext'])."')";
		$sql_res = mysqli_query($mysqli, $query);
		}
	
	//удалить из базы данных
	if (isset($_GET['del_id']))
		$delete = mysqli_query($mysqli,'DELETE FROM competition WHERE id=\''.$_GET['del_id'].'\';');
?>



<section id="copmetiton_form">
	<div class="container-fluid">
		<div class="row text-center">
			<form role="form" method="post" action="#">
				<h1><span class="label label-default">Добавить конкурс</span></h1>
				<div class="form-group">
					<label for="exampleInputName" class="pull-left">Название</label>
					<input type="name" class="form-control" id="exampleInputNameCompetition" name="name" placeholder="Введите название конкурса">
				</div>
				<div class="form-group">
					<label for="exampleInputDate" class="pull-left">Дата</label>
					<input type="date" class="form-control" id="exampleInputDateCompetition" name="date" placeholder="Выберите дату">
				</div>
				<div class="form-group">
					<label for="exampleInputFile" class="pull-left">Изображение</label>
					<input type="file" id="exampleInputFile">
				</div>
				<div class="form-group">
					<label for="exampleInputeText" class="pull-left">Текст конкурса</label>
					<textarea class="form-control" rows="3" id="exampleInputText" name="text" placeholder="Введите описание конкурса"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleInputeText" class="pull-left">Краткое описание конкурса</label>
					<textarea class="form-control" rows="3" id="exampleInputText" name="smalltext" placeholder="Введите описание конкурса"></textarea>
				</div>
				<input type="submit" name="button" name="button" class="btn btn-default" value="Отправить">
			</form>
		</div>
	</div>
</section>
<section id="old_news">
	<div class="container-fluid">
		<div class="row">
				<!-- ВЫВОД СТАРЫХ КОНКУРСОВ ИЗ БАЗЫ ДАННЫХ -->
			<?php
				$select = "SELECT * FROM competition";
				$sql_res = mysqli_query($mysqli, $select);
				$ret = '<table class="table table-striped" style="width: 80%; margin: auto; margin-bottom: 100px;">';
				$ret .= '<tr><th>#</th><th>Название</th><th>Дата</th><th>Текст конкурса</th><th>Краткое описание</th><th>Удалить</th></tr>';
				while ($row = mysqli_fetch_assoc($sql_res))
				{
					//выводим каждую запись как строку таблицы
					$ret.='<tr><td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['date'].'</td>
							<td>'.$row['text'].'</td>
							<td>'.$row['description'].'</td>
							<td><a href="?page=competition&del_id='.$row['id'].'">Удалить</a></td>
							</tr>';
				}
				$ret.='</table>';		//заканчиваем формировать таблицы с контентом
				echo $ret;	//возвращаем сформированный контент
				
				
			?>
		</div>
	</div>
</section>		
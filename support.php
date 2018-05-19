<?php $page_title = "Техническая поддержка" ?>
<?php include('page-parts/header.inc.php'); ?>

<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="page-header">
					<h1><?= $page_title ?></h1>
				</div>
				<p class="bigger">Служба технической поддержки работает специально для Вас 24/7 <br>Мы всегда рады будем ответить на интересующие Вас вопросы! <br>Пожалуйста, описывайте проблему достаточно подробно! Не следует дублировать вопрос, <br>если Вы ещё не получили ответ на предыдущий! Спасибо что Вы с нами!</p>
				<p class="dark bigger">
					<strong>E-mail адрес: <a href="mailto:support@domen.com" class="btn btn-text">support@domen.com</a></strong>
				</p>
				<div class="support-form">
					<div class="form gray-fields">
						<div class="form-row">
							<div class="form-label">Выберите тему запроса: <span class="asterisk">*</span></div>
							<div class="form-field">
								<select>
									<option value="1">Вывод средств</option>
									<option value="2">Зачисление средств</option>
									<option value="3">Ошибка в работе</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-label">Ваше сообщение: <span class="asterisk">*</span></div>
							<div class="form-field">
								<textarea></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-fiedl">
								<button class="btn btn-default btn-lightgray">Отправить</button>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="big-header">
					<h5>История обращений</h5>
				</div>
				<table class="table no-side-paddings">
					<tr>
						<th>Дата</th>
						<th>Тема</th>
						<th>Статус</th>
						<th>Действие</th>
					</tr>
					<tr>
						<td>01.01.2018  10:45:22</td>
						<td>Вывод средств</td>
						<td>Закрыт</td>
						<td>
							<a href="#" class="btn btn-text">Удалить</a>
						</td>
					</tr>
					<tr>
						<td>01.01.2018  10:45:22</td>
						<td>Вывод средств</td>
						<td>Есть ответ</td>
						<td>
							<a href="#" class="btn btn-text">Открыть</a>
						</td>
					</tr>
					<tr>
						<td>01.01.2018  10:45:22</td>
						<td>Вывод средств</td>
						<td>В обработке</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

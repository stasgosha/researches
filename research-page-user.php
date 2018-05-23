<?php $page_title = "Название опроса" ?>
<?php include('page-parts/header-user.inc.php'); ?>

<div class="main-section">
	<?php include('page-parts/sidebar-user.inc.php'); ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><a href="my-researches.php">Мои опросы</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="page-header">
					<h1><?= $page_title ?></h1>
				</div>
				<ul class="info-list">
					<li>
						<div class="list-label">Статус:</div>
						<div class="list-value">Активный</div>
					</li>
					<li>
						<div class="list-label">Период проведения опроса:</div>
						<div class="list-value">15.03.2018 - 20.03.2018</div>
					</li>
					<li>
						<div class="list-label">Время для прохождения опроса:</div>
						<div class="list-value">без ограничений</div>
					</li>
					<li>
						<div class="list-label">Время для ответа на один вопрос:</div>
						<div class="list-value">00:03:00</div>
					</li>
					<li>
						<div class="list-label">Количество вопросов:</div>
						<div class="list-value">10</div>
					</li>
					<li>
						<div class="list-label">Заработок при прохождении:</div>
						<div class="list-value">5,25$</div>
					</li>
					<li>
						<div class="list-label">Среднее время прохождения:</div>
						<div class="list-value">1ч 38мин</div>
					</li>
					<li>
						<div class="list-label">Дата публикации:</div>
						<div class="list-value">01.01.2018</div>
					</li>
					<li>
						<div class="list-label">Тема опроса:</div>
						<div class="list-value">Образование</div>
					</li>
				</ul>
				<a href="#" class="btn btn-default">Пройти анкету</a>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

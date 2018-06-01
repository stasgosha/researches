<?php $page_title = "Мои опросы" ?>
<?php include('page-parts/header-user.inc.php'); ?>

<div class="main-section">
	<?php include('page-parts/sidebar-user.inc.php'); ?>
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
				<div class="params-list stretch-items">
					<a href="#" class="params-block current">
						<div class="label">Все</div>
						<div class="count">10</div>
					</a>
					<a href="#" class="params-block">
						<div class="label">Новые</div>
						<div class="count">5</div>
					</a>
					<a href="#" class="params-block">
						<div class="label">Незавершенные</div>
						<div class="count">3</div>
					</a>
					<a href="#" class="params-block">
						<div class="label">Завершенные</div>
						<div class="count">2</div>
					</a>
					<a href="#" class="params-block">
						<div class="label">Просроченные</div>
						<div class="count">0</div>
					</a>
				</div>
				<div class="sort-filters-section">
					<div class="caption">
						<p><strong>Отобразить по:</strong></p>
					</div>
					<div class="filters-list">
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-3">
									<div class="filter">
										<select name="" id="">
											<option value="0">Дате создания</option>
											<option value="asc">По возрастанию</option>
											<option value="desc">По убыванию</option>
										</select>
									</div>
								</div>
								<div class="flex-col col-3">
									<div class="filter">
										<select name="" id="">
											<option value="0">Дате завершения</option>
											<option value="asc">По возрастанию</option>
											<option value="desc">По убыванию</option>
										</select>
									</div>
								</div>
								<div class="flex-col col-3">
									<div class="filter">
										<select name="" id="">
											<option value="0">Стоимости</option>
											<option value="asc">По возрастанию</option>
											<option value="desc">По убыванию</option>
										</select>
									</div>
								</div>
								<div class="flex-col col-3">
									<div class="filter">
										<select name="" id="">
											<option value="0">Количество ответов</option>
											<option value="asc">По возрастанию</option>
											<option value="desc">По убыванию</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="researches-cards-list-wrapper">
					<div class="researches-cards-list">
						<div class="research-card">
							<div class="card-overlay"></div>
							<a href="research-page-user.php" class="card-image" style="background-image: url()"></a>
							<div class="card-timer">
								<div class="timer-block">
									<div class="timer-icon">
										<i class="icon icon-clock"></i>
									</div>
									<div class="timer-text">
										<div class="label">Таймер</div>
										<div class="countdown">01:25:48</div>
										<!-- Таймер <br>отключен -->
									</div>
								</div>
							</div>
							<div class="card-name">
								<h5><a href="#">Длинное название опроса в несколько строк</a></h5>
							</div>
							<div class="card-section space-around">
								<div class="item">
									<div class="card-stats">
										<div class="stats-label">Вопросов</div>
										<span class="stats-count">10</span>
									</div>
								</div>
								<div class="item">
									<div class="card-stats">
										<div class="stats-label">Заработок</div>
										<span class="stats-count">5,25$</span>
									</div>
									<!-- OLD -->
									<!-- <div class="card-actions">
										<div class="action-icons-list">
											<a href="#">
												<i class="icon icon-edit"></i>
											</a>
											<a href="#">
												<i class="icon icon-stats"></i>
											</a>
											<a href="#">
												<i class="icon icon-trash"></i>
											</a>
										</div>
									</div> -->
								</div>
							</div>
							<div class="card-section">
								<div class="item">
									<div class="card-text">
										<p>Ограничение по времени: <br><strong>2ч 45мин</strong></p>
										<p>Среднее время прохождения: <br><strong>1ч 38мин</strong></p>
									</div>
								</div>
							</div>
						</div>
						<?php for ($i = 0; $i < 5; $i++): ?>
							<div class="research-card">
								<div class="card-overlay"></div>
								<a href="research-page-user.php" class="card-image" style="background-image: url()"></a>
								<div class="card-timer">
									<div class="timer-block">
										<div class="timer-icon">
											<i class="icon icon-clock"></i>
										</div>
										<div class="timer-text">
											<div class="label">Таймер <br>отключен</div>
										</div>
									</div>
								</div>
								<div class="card-name">
									<h5><a href="#">Название опроса</a></h5>
								</div>
								<div class="card-section space-around">
									<div class="item">
										<div class="card-stats">
											<div class="stats-label">Вопросов</div>
											<span class="stats-count">10</span>
										</div>
									</div>
									<div class="item">
										<div class="card-stats">
											<div class="stats-label">Заработок</div>
											<span class="stats-count">5,25$</span>
										</div>
									</div>
								</div>
								<div class="card-section">
									<div class="item">
										<div class="card-text">
											<p>Ограничение по времени: <br><strong>2ч 45мин</strong></p>
											<p>Среднее время прохождения: <br><strong>1ч 38мин</strong></p>
										</div>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<div class="flex-center">
						<a href="#" class="btn btn-default btn-lightgray btn-big">Показать еще 10</a>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

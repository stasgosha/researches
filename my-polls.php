<?php $page_title = "Мои опросы" ?>
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
				<div class="interview-filters-list stretch-items">
					<div class="interview-filter current">
						<div class="label">Все</div>
						<div class="count">10</div>
					</div>
					<div class="interview-filter">
						<div class="label">Новые</div>
						<div class="count">5</div>
					</div>
					<div class="interview-filter">
						<div class="label">Незавершенные</div>
						<div class="count">3</div>
					</div>
					<div class="interview-filter">
						<div class="label">Завершенные</div>
						<div class="count">2</div>
					</div>
					<div class="interview-filter">
						<div class="label">Просроченные</div>
						<div class="count">0</div>
					</div>
					<!-- Add new poll block -->
					<!-- <div class="interview-filter dark">
						<div class="add-new">
							<span class="plus">+</span>
							<span class="text">Создать <br>опрос</span>
						</div>
					</div> -->
				</div>
				<div class="sort-filters-section">
					<div class="caption">
						<p><strong>Отобразить по:</strong></p>
					</div>
					<div class="filters-list">
						<div class="filter">
							<select name="" id="">
								<option value="0">Дате создания</option>
								<option value="asc">По возрастанию</option>
								<option value="desc">По убыванию</option>
							</select>
						</div>
						<div class="filter">
							<select name="" id="">
								<option value="0">Дате завершения</option>
								<option value="asc">По возрастанию</option>
								<option value="desc">По убыванию</option>
							</select>
						</div>
						<div class="filter">
							<select name="" id="">
								<option value="0">Стоимости</option>
								<option value="asc">По возрастанию</option>
								<option value="desc">По убыванию</option>
							</select>
						</div>
						<div class="filter">
							<select name="" id="">
								<option value="0">Количество ответов</option>
								<option value="asc">По возрастанию</option>
								<option value="desc">По убыванию</option>
							</select>
						</div>
					</div>
				</div>
				<div class="researches-cards-list-wrapper">
					<div class="researches-cards-list">
						<!-- Layout of the card without old item goes below this card in the for() loop -->
						<div class="research-card">
							<div class="card-overlay"></div>
							<a href="#" class="card-image" style="background-image: url()"></a>
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
								<!-- OLD -->
								<!-- <div class="item">
									<div class="card-toggle">
										<div class="switch">
											<input type="checkbox" id="card1">
											<label for="card1"></label>
										</div>
									</div>
								</div>
								<div class="item">
									
								</div> -->
							</div>
							<!-- OLD -->
							<!-- <div class="card-hidden-content">
								<div class="card-section">
									<div class="item">
										<div class="card-stats">
											<span class="count">100</span> коинов потрачено
										</div>
									</div>
								</div>
								<div class="card-section">
									<div class="card-share">
										<a href="#" class="item">
											<span class="item-icon">
												<i class="icon icon-print"></i>
											</span>
											<span class="item-text">Распечетать <br>анкету</span>
										</a>
										<a href="#" class="item">
											<span class="item-icon">
												<i class="icon icon-cloud"></i>
											</span>
											<span class="item-text">Загрузить <br>в облако</span>
										</a>
									</div>
								</div>
							</div> -->
						</div>
						<?php for ($i = 0; $i < 5; $i++): ?>
							<div class="research-card">
								<div class="card-overlay"></div>
								<a href="#" class="card-image" style="background-image: url()"></a>
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

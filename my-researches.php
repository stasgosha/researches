<?php $page_title = "Мои исследования" ?>
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
						<div class="label">Активные</div>
						<div class="count">5</div>
					</div>
					<div class="interview-filter">
						<div class="label">Черновики</div>
						<div class="count">3</div>
					</div>
					<div class="interview-filter">
						<div class="label">В ожидании</div>
						<div class="count">2</div>
					</div>
					<div class="interview-filter">
						<div class="label">Завершенные</div>
						<div class="count">0</div>
					</div>
					<div class="interview-filter dark">
						<div class="add-new">
							<span class="plus">+</span>
							<span class="text">Создать <br>опрос</span>
						</div>
					</div>
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
						<div class="research-card">
							<div class="card-overlay"></div>
							<a href="#" class="card-image" style="background-image: url()"></a>
							<div class="card-name">
								<h5><a href="#">Длинное название опроса в несколько строк</a></h5>
							</div>
							<div class="card-section">
								<div class="item">
									<div class="card-stats inline">
										<span class="stats-count">10</span>
										<div class="stats-label">Ответов</div>
									</div>
								</div>
								<div class="item">
									<div class="card-actions">
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
									</div>
								</div>
							</div>
							<div class="card-section">
								<div class="item">
									<div class="card-toggle">
										<div class="switch">
											<input type="checkbox" id="card1">
											<label for="card1"></label>
										</div>
									</div>
								</div>
								<div class="item">
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
							</div>
							<div class="card-hidden-content">
								<div class="card-section">
									<div class="item">
										<div class="card-stats inline">
											<span class="stats-count">100</span>
											<div class="stats-label">коинов потрачено</div>
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
							</div>
						</div>
						<?php for ($i = 0; $i < 5; $i++): ?>
							<div class="research-card">
								<div class="card-overlay"></div>
								<a href="#" class="card-image" style="background-image: url()"></a>
								<div class="card-name">
									<h5><a href="#">Название</a></h5>
								</div>
								<div class="card-section">
									<div class="item">
										<div class="card-stats inline">
											<span class="stats-count">10</span>
											<div class="stats-label">Ответов</div>
										</div>
									</div>
									<div class="item">
										<div class="card-actions">
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
										</div>
									</div>
								</div>
								<div class="card-section">
									<div class="item">
										<div class="card-toggle">
											<div class="switch">
												<input type="checkbox" id="card<?= $i + 2 ?>">
												<label for="card<?= $i + 2 ?>"></label>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="timer-block">
											<div class="timer-icon">
												<i class="icon icon-clock"></i>
											</div>
											<div class="timer-text">
												<div class="label">Таймер <br>отключен</div>
												<!-- Таймер <br>отключен -->
											</div>
										</div>
									</div>
								</div>
								<div class="card-hidden-content">
									<div class="card-section">
										<div class="item">
											<div class="card-stats inline">
												<span class="stats-count">100</span>
												<div class="stats-label">коинов потрачено</div>
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

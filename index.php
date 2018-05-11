<?php $page_title = "Экспресс-панель" ?>
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
				<div class="flex-container">
					<div class="flex-row space-between">
						<div class="flex-col col-5">
							<div class="section-caption">
								<h4>Создайте свой первый опрос</h4>
								<p>и наблюдайте за ответами респондентов <br>в реальном времени</p>
							</div>
							<a href="#" class="btn btn-default">Создать вопрос</a>
							<div class="margin-bottom-45px"></div>
							<div class="card-block">
								<img src="img/temp/histogram.png" alt="">
							</div>
							<div class="card-block">
								<div class="flex-container">
									<div class="flex-row">
										<div class="flex-col col-6">
											<div class="chart-block">
												<div class="chart-title">
													<h6>Мужчины</h6>
												</div>
												<div class="chart-area">
													<img src="img/temp/chart-80.png" alt="">
												</div>
											</div>
										</div>
										<div class="flex-col col-6">
											<div class="chart-block">
												<div class="chart-title">
													<h6>Женщины</h6>
												</div>
												<div class="chart-area">
													<img src="img/temp/chart-20.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-block">
								<div class="chart-block inline">
									<div class="chart-title">ПК</div>
									<div class="chart-area">
										<div class="inline-chart">
											<div class="bar" style="width: 80%;"></div>
										</div>
									</div>
								</div>
								<div class="chart-block inline">
									<div class="chart-title">Моб. устройства</div>
									<div class="chart-area">
										<div class="inline-chart">
											<div class="bar" style="width: 100%;"></div>
										</div>
									</div>
								</div>
								<div class="chart-block inline">
									<div class="chart-title">Другое</div>
									<div class="chart-area">
										<div class="inline-chart">
											<div class="bar" style="width: 15%;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-col col-5">
							<div class="section-caption">
								<h5>Краткое руководство по пользованию сервисом</h5>
							</div>
							<p>С другой стороны новая модель организационной деятельности позволяет выполнять важные задания по разработке модели развития.</p>
							<div class="video-container">
								<img src="img/temp/video-bg.png" alt="">
							</div>
							<a href="#" class="btn btn-default">Смотреть</a>
						</div>
					</div>
				</div>
				<hr>
				<div class="last-news-section">
					<div class="section-caption">
						<h4>Последние новости</h4>
					</div>
					<div class="flex-container">
						<div class="flex-row">
							<div class="flex-col col-4">
								<div class="news-block">
									<div class="title">
										<h5>
											<a href="#">Разнообразный и богатый опыт реализации</a>
										</h5>
									</div>
									<div class="block-content">
										<div class="image"><img src="" alt=""></div>
										<div class="excerpt">
											<p>Значимость этих проблем настолько очевидна, что консультация с широким активом...</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex-col col-4">
								<div class="news-block">
									<div class="title">
										<h5>
											<a href="#">Разнообразный и богатый опыт реализации</a>
										</h5>
									</div>
									<div class="block-content">
										<div class="image"><img src="" alt=""></div>
										<div class="excerpt">
											<p>Значимость этих проблем настолько очевидна, что консультация с широким активом...</p>
										</div>
									</div>
								</div>
							</div>
							<div class="flex-col col-4">
								<div class="news-block">
									<div class="title">
										<h5>
											<a href="#">Разнообразный и богатый опыт реализации</a>
										</h5>
									</div>
									<div class="block-content">
										<div class="image"><img src="" alt=""></div>
										<div class="excerpt">
											<p>Значимость этих проблем настолько очевидна, что консультация с широким активом...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

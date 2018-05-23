<?php $page_title = "Экспресс-панель" ?>
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
				<div class="page-header big-margin">
					<h1><?= $page_title ?></h1>
				</div>
				<div class="flex-container">
					<div class="flex-row space-between">
						<div class="flex-col col-5">
							<div class="section-caption">
								<h4>Расскажите немного о себе</h4>
							</div>
							<div class="form bold-labels">
								<div class="form-row">
									<div class="form-label">Место жительства</div>
									<div class="form-value">
										<div class="flex-container">
											<div class="flex-row">
												<div class="flex-col col-6">
													<div class="select">
														<select>
															<option value="0" selected disabled>Выберите страну</option>
															<option value="1">Украина</option>
														</select>
													</div>
												</div>
												<div class="flex-col col-6">
													<div class="select">
														<select>
															<option value="0" selected disabled>Выберите город</option>
															<option value="1">Киев</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-label">Возраст</div>
									<div class="form-value">
										<div class="flex-container">
											<div class="flex-row">
												<div class="flex-col col-3">
													<div class="select">
														<select>
															<option value="0" selected disabled>День</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
														</select>
													</div>
												</div>
												<div class="flex-col col-6">
													<div class="select">
														<select>
															<option value="0" selected disabled>Месяц</option>
															<option value="1">Январь</option>
															<option value="2">Февраль</option>
														</select>
													</div>
												</div>
												<div class="flex-col col-3">
													<div class="select">
														<select>
															<option value="0" selected disabled>Год</option>
															<option value="1">1990</option>
															<option value="2">1991</option>
															<option value="3">1992</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-label">Пол</div>
									<div class="form-value">
										<div class="controls-group">
											<div class="item">
												<div class="radio-block">
													<input type="radio" name="gender" id="gender_man">
													<label for="gender_man">Мужчина</label>
												</div>
											</div>
											<div class="item">
												<div class="radio-block">
													<input type="radio" name="gender" id="gender_woman">
													<label for="gender_woman">Женщина</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<button class="btn btn-default">Сохранить</button>
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

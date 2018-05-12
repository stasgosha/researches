<?php $page_title = "Создание опроса" ?>
<?php include('page-parts/header.inc.php'); ?>

<div class="main-section">
	<?php include('page-parts/sidebar.inc.php'); ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content page-text">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><a href="my-researches.php">Мои исследования</a></li>
					<li><?= $page_title ?></li>
				</ul>
				<div class="page-header">
					<h1><?= $page_title ?></h1>
				</div>
				<div class="form create-new-research-form">
					<div class="form-row">
						<div class="medium-header">
							<p>Название опроса</p>
						</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row width-50p big-margin">
						<div class="medium-header">
							<p>Тематика опроса</p>
						</div>
						<div class="form-field">
							<div class="select">
								<select>
									<option value="0" selected disabled>Выбрать тематику</option>
									<option value="1">Тема 1</option>
									<option value="2">Тема 2</option>
									<option value="3">Тема 3</option>
									<option value="4">Тема 4</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row big-margin">
						<div class="medium-header">
							<p>Превью</p>
						</div>
						<div class="upload-image-block">
							<div class="block-image" style="background-image: url();"></div>
							<div class="block-text">
								<div class="block-caption">Добавьте превью для опроса</div>
								<p>Допускаются файлы в форматах jpg, png, gif. Размер файла не более 500 КБ.</p>
								<div class="block-button">
									<div class="btn btn-default btn-gray">Выбрать файл</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row big-margin">
						<div class="medium-header">
							<p>Превью (с загруженной картинкой)</p>
						</div>
						<div class="upload-image-block">
							<div class="block-image uploaded" style="background-image: url(img/temp/flower.jpg);"></div>
							<div class="block-text">
								<div class="block-caption">Добавьте превью для опроса</div>
								<p>Допускаются файлы в форматах jpg, png, gif. Размер файла не более 500 КБ.</p>
								<div class="block-button">
									<div class="btn btn-default btn-gray">Выбрать файл</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="steps-list">
							<div class="item">
								<a href="create-new-research-step.php" class="step-block active">
									<span class="step">1</span>
									<span class="text">Выбор целевой аудитории</span>
								</a>
							</div>
							<div class="item">
								<a href="create-new-research-step-2.php" class="step-block">
									<span class="step">2</span>
									<span class="text">Создание вопросов</span>
								</a>
							</div>
							<div class="item">
								<div class="step-block disabled">
									<span class="step">3</span>
									<span class="text">Настройка логики</span>
								</div>
							</div>
							<div class="item">
								<div class="step-block disabled">
									<span class="step">4</span>
									<span class="text">Настройка дизайна</span>
								</div>
							</div>
							<div class="item">
								<div class="step-block disabled">
									<span class="step">5</span>
									<span class="text">Настройка опроса</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex-container">
					<div class="flex-row">
						<div class="flex-col col-8">
							<div class="nav-section">
								<div class="section-name">Аудитория</div>
								<div class="section-content">
									<ul class="tabs-nav">
										<li class="current"><a href="#">Новая</a></li>
										<li class="with-subnav">
											<a href="#">Сохраненная</a>
										</li>
										<li><a href="#">Без аудитории</a></li>
									</ul>
								</div>
							</div>
							<div class="form create-new-research-auditory-form">
								<div class="form-row">
									<div class="medium-header">
										<p><strong>Название опроса</strong></p>
									</div>
									<div class="form-field">
										<input type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="medium-header">
										<p><strong>География</strong></p>
									</div>
									<div class="form-field">
										<div class="flex-container">
											<div class="flex-row">
												<div class="flex-col col-4">
													<div class="select">
														<select name="" id="">
															<option value="0" disabled selected>Выберите страну</option>
															<option value="1">Список стран</option>
														</select>
													</div>
												</div>
												<div class="flex-col col-4">
													<div class="select">
														<select name="" id="">
															<option value="0" disabled selected>Выберите город</option>
															<option value="1">Список городов</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="medium-header">
										<p><strong>Возраст</strong></p>
									</div>
									<div class="form-field">
										<div class="from-to-fields">
											<div class="item from">
												<input type="tel" placeholder="от">
											</div>
											<div class="item to">
												<input type="tel" placeholder="до">
											</div>
										</div>
										<div class="margin-bottom-20px"></div>
										<div class="select-range">
											<img src="img/temp/range.png" alt="">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="medium-header">
										<p><strong>Пол</strong></p>
									</div>
									<div class="form-field">
										<div class="buttons-group">
											<div class="item">
												<div class="radio-block">
													<input type="radio" checked name="gender-group" value="all" id="gender-group-all">
													<label for="gender-group-all">Все</label>
												</div>
											</div>
											<div class="item">
												<div class="radio-block">
													<input type="radio" name="gender-group" value="man" id="gender-group-man">
													<label for="gender-group-man">Мужчины</label>
												</div>
											</div>
											<div class="item">
												<div class="radio-block">
													<input type="radio" name="gender-group" value="woman" id="gender-group-woman">
													<label for="gender-group-woman">Женщины</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-col col-4"></div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

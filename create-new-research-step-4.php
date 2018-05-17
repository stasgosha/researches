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
					<div class="form-row inline">
						<div class="form-label">
							<div class="medium-header">
								<p>Название опроса</p>
							</div>
						</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="steps-list">
							<div class="item">
								<a href="create-new-research.php" class="step-block active">
									<span class="step">1</span>
									<span class="text">Выбор целевой аудитории</span>
								</a>
							</div>
							<div class="item">
								<a href="create-new-research-step-2.php" class="step-block active">
									<span class="step">2</span>
									<span class="text">Создание вопросов</span>
								</a>
							</div>
							<div class="item">
								<a href="create-new-research-step-3.php" class="step-block active">
									<span class="step">3</span>
									<span class="text">Настройка логики</span>
								</a>
							</div>
							<div class="item">
								<a href="create-new-research-step-4.php" class="step-block active">
									<span class="step">4</span>
									<span class="text">Настройка дизайна</span>
								</a>
							</div>
							<div class="item">
								<a href="create-new-research-step-5.php" class="step-block">
									<span class="step">5</span>
									<span class="text">Настройка опроса</span>
								</a>
							</div>
						</div>
					</div>
					<div class="form-row">
						<ul class="tabs-nav with-bg">
							<li class="current"><a href="#" data-tab="#font-settings">Шрифт</a></li>
							<li><a href="#" data-tab="#rendering">Отображение</a></li>
							<li><a href="#" data-tab="#branding">Брендирование</a></li>
						</ul>
						<div class="tabs-container">
							<div class="tab" id="font-settings">
								<div class="form bold-labels small-rows-margin small-width">
									<div class="form-row inline">
										<div class="form-label">Шрифт</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">Arial</option>
													<option value="2">Helvetica</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Размер заголовка</div>
										<div class="form-field">
											<div class="font-params">
												<div class="item font-size">
													<div class="select">
														<select name="" id="">
															<option value="1">32</option>
															<option value="2">36</option>
														</select>
													</div>
												</div>
												<div class="item">
													<div class="radio-block squared gray">
														<input type="checkbox" checked id="font-bold">
														<label for="font-bold">
															<i class="fa fa-bold"></i>
														</label>
													</div>
												</div>
												<div class="item">
													<div class="radio-block squared gray">
														<input type="checkbox" id="font-italic">
														<label for="font-italic">
															<i class="fa fa-italic"></i>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Цвет заголовка</div>
										<div class="form-field">
											<input type="text">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Размер текста вопроса</div>
										<div class="form-field">
											<div class="font-params">
												<div class="item font-size">
													<div class="select">
														<select name="" id="">
															<option value="1">32</option>
															<option value="2">36</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Размер текста ответа</div>
										<div class="form-field">
											<div class="font-params">
												<div class="item font-size">
													<div class="select">
														<select name="" id="">
															<option value="1">32</option>
															<option value="2">36</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Цвет шрифта</div>
										<div class="form-field">
											<input type="text">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Цвет кнопок</div>
										<div class="form-field">
											<input type="text">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Цвет текста кнопок</div>
										<div class="form-field">
											<input type="text">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Цвет границы полей</div>
										<div class="form-field">
											<input type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="rendering">
								<div class="form bold-labels small-rows-margin small-width">
									<div class="form-row inline">
										<div class="form-label">Размер текста вопроса</div>
										<div class="form-field">
											<div class="font-params">
												<div class="item font-size">
													<div class="select">
														<select name="" id="">
															<option value="1">32</option>
															<option value="2">36</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="branding">
								<div class="form bold-labels small-rows-margin small-width">
									<div class="form-row inline">
										<div class="form-label">Фон</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">Прозрачный</option>
													<option value="2">Серый</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Прозрачность фона</div>
										<div class="form-field">
											<img src="img/temp/slide-input.png" alt="">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Шапка</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">Цвет</option>
												</select>
											</div>
											<div class="margin-bottom-5px"></div>
											<input type="text">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Размер шапки</div>
										<div class="form-field">
											<img src="img/temp/slide-input.png" alt="">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Закрепление шапки</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="fixed-header">
												<label for="fixed-header"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">На каждой странице</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="header-on-all-pages">
												<label for="header-on-all-pages"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Логотип</div>
										<div class="form-field wide">
											<div class="input-file">
												<input type="file" id="file-logo">
												<label for="file-logo">
													<span class="input-holder">
														<input type="text">
													</span>
													<span class="input-btn">
														<span class="btn btn-default small-paddings">Выбрать файл</span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Положение логотипа</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">По центру</option>
													<option value="2">Слева</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Заголовок</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">В шапке</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="question-preview">
					<div class="caption">Предварительный просмотр</div>
					<div class="question-title">1. Как вас зовут?</div>
					<div class="form">
						<div class="form-row">
							<div class="form-field">
								<div class="flex-container">
									<div class="item margin-right-10px">
										<input type="text">
									</div>
									<div class="item">
										<button class="btn btn-default">Кнопка</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

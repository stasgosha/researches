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
				<div class="form">
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
								<a href="create-new-research-step-5.php" class="step-block active">
									<span class="step">5</span>
									<span class="text">Настройка опроса</span>
								</a>
							</div>
						</div>
					</div>
					<div class="form-row">
						<ul class="tabs-nav with-bg">
							<li class="current"><a href="#" data-tab="#base-settings-tab">Основные</a></li>
							<li><a href="#" data-tab="#params-tab">Параметры</a></li>
							<li><a href="#" data-tab="#buttons-tab">Кнопки</a></li>
							<li><a href="#" data-tab="#notifications-tab">Оповещения</a></li>
						</ul>
						<div class="tabs-container">
							<div class="tab" id="base-settings-tab">
								<div class="form bold-labels small-rows-margin small-width">
									<div class="form-row inline">
										<div class="form-label">Название</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">Тест 1</option>
													<option value="2">Тест 2</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Заголовок</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">Тест 1</option>
													<option value="2">Тест 2</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Ссылка</div>
										<div class="form-field">
											<input type="text" value="http://3cb726caa92c62f5f.test.com">
											<div class="margin-bottom-5px"></div>
											<p class="gray">http://3cb726caa92c62f5f.test.com</p>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Начало</div>
										<div class="form-field">
											<input type="text" value="13.03.2018 01:11:57">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Конец</div>
										<div class="form-field">
											<input type="text" value="13.03.2018 01:11:57">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Приветствие</div>
										<div class="form-field">
											<div class="select">
												<select name="" id="">
													<option value="1">На странице опроса</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Текст приветствия</div>
										<div class="form-field fullwidth">
											<img style="width: 100%; height: auto; display: block;" src="img/temp/text-editor.png" alt="">
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Текст дисквалификации</div>
										<div class="form-field fullwidth">
											<textarea></textarea>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Сохранение незавершенных ответов:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="1_1">
												<label for="1_1"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Доступ по паролю:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="1_2">
												<label for="1_2"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Авторизация через Вконтакте:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="1_3">
												<label for="1_3"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Таймер</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="1_4">
												<label for="1_4"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Включить веб-хук для ответов:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="1_5">
												<label for="1_5"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Включить веб-хук для шаблона опроса:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="1_6">
												<label for="1_6"></label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="params-tab">
								<div class="form bold-labels small-rows-margin small-width">
									<div class="form-row inline">
										<div class="form-label">Показывать звездочку в обязательном вопросе:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="2_1">
												<label for="2_1"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Показывать номер вопроса:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="2_2">
												<label for="2_2"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Вернуться к вопросу:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="2_3">
												<label for="2_3"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Индикатор:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="2_4">
												<label for="2_4"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Ответ по клику:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="2_5">
												<label for="2_5"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Ограничение по IP-адресу:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" id="2_6">
												<label for="2_6"></label>
											</div>
										</div>
									</div>
									<div class="form-row inline">
										<div class="form-label">Запретить повторное заполнение с одного устройства:</div>
										<div class="form-field">
											<div class="switch yes-no">
												<input type="checkbox" checked id="2_7">
												<label for="2_7"></label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="buttons-tab">
								<p class="bigger dark"><strong>Вы можете изменить названия кнопок.</strong></p>
								<div class="form">
									<div class="form-row">
										<div class="form-field">
											<div class="flex-container">
												<div class="item margin-right-10px">
													<input type="text" placeholder="Ответить">
												</div>
												<div class="item">
													<button class="btn btn-default small-paddings" style="width: 120px;">Ответить</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-field">
											<div class="flex-container">
												<div class="item margin-right-10px">
													<input type="text" placeholder="Отправить">
												</div>
												<div class="item">
													<button class="btn btn-default small-paddings" style="width: 120px;">Отправить</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-field">
											<div class="flex-container">
												<div class="item margin-right-10px">
													<input type="text" placeholder="Назад">
												</div>
												<div class="item">
													<button class="btn btn-default small-paddings" style="width: 120px;">Назад</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="form-field">
											<div class="flex-container">
												<div class="item margin-right-10px">
													<input type="text" placeholder="Далее">
												</div>
												<div class="item">
													<button class="btn btn-default small-paddings" style="width: 120px;">Далее</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="notifications-tab">
								<p class="bigger dark"><strong>При завершении опроса происходит автоматическая проверка корректности выполнения. <br>Вы можете изменить текст оповещений.</strong></p>
								<div class="form bold-labels" style="max-width: 500px;">
									<div class="form-row">
										<div class="form-label">Предупреждение "Обязательный вопрос":</div>
										<div class="form-field">
											<input type="text" placeholder="Вопрос является обязательным">
										</div>
									</div>
									<div class="form-row">
										<div class="form-label">Предупреждение "Количество ответов":</div>
										<div class="form-field">
											<input type="text" placeholder="Необходимо ответов: min: {min}, max: {max}">
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

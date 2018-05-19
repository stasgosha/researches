<?php $page_title = "Название опроса" ?>
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
					<div class="form-row">
						<ul class="tabs-nav with-bg small-paddings">
							<li class="current"><a href="#" data-tab="#general-info-tab">Общая информация</a></li>
							<li><a href="#" data-tab="#results-tab">Результаты</a></li>
							<li><a href="#" data-tab="#answers-tab">Сбор ответов</a></li>
							<li><a href="#" data-tab="#edit-questions-tab">Редактировать вопросы</a></li>
							<li><a href="#" data-tab="#edit-steps-tab">Редактировать шаги</a></li>
						</ul>
						<div class="tabs-container">
							<div class="tab" id="general-info-tab">
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
										<div class="list-value">00:30:00</div>
									</li>
									<li>
										<div class="list-label">Время для ответа на один вопрос:</div>
										<div class="list-value">без ограничений</div>
									</li>
								</ul>
								<hr>
								<div class="medium-header">
									<h3>Статистические данные</h3>
								</div>
								<div class="params-list stretch-items">
									<div class="params-block no-link">
										<div class="label">Ответов</div>
										<div class="count">10</div>
									</div>
									<div class="params-block no-link">
										<div class="label">Переходы</div>
										<div class="count">45</div>
									</div>
									<div class="params-block no-link">
										<div class="label">Дисквалификация</div>
										<div class="count">3</div>
									</div>
									<div class="params-block no-link">
										<div class="label">Эффективность</div>
										<div class="count">78%</div>
									</div>
									<div class="params-block no-link">
										<div class="label">Среднее время выполнения</div>
										<div class="count">18:42</div>
									</div>
								</div>
								<div class="margin-bottom-40px"></div>
								<div class="radio-grid">
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_1">
											<label for="statistics_1">Ответов за выбранный период</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_2">
											<label for="statistics_2">Устройство</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_3">
											<label for="statistics_3">Источник распространения</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_4">
											<label for="statistics_4">Источник</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_5">
											<label for="statistics_5">Ушли с опроса на вопросе</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-block big">
											<input type="radio" name="statistics" id="statistics_6">
											<label for="statistics_6">Еще один параметр</label>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="results-tab">
								<div class="question-results-block">
									<div class="question-number">Вопрос 1</div>
									<div class="question-text">Сколько вам лет?</div>
									<ul class="question-stats">
										<li>Ответили: 5</li>
										<li>Пропустили: 0</li>
									</ul>
									<ul class="question-chart-type-list">
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_1_chart_type" id="question_1_chart_type_1" checked>
												<label for="question_1_chart_type_1">
													<i class="fa fa-bar-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_1_chart_type" id="question_1_chart_type_2">
												<label for="question_1_chart_type_2">
													<i class="fa fa-pie-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_1_chart_type" id="question_1_chart_type_3">
												<label for="question_1_chart_type_3">
													<i class="fa fa-line-chart"></i>
												</label>
											</div>
										</li>
									</ul>
									<div class="question-chart">
										<img src="img/temp/chart-bar.png" alt="">
									</div>
									<div class="question-stats-table">
										<table class="table">
											<tr>
												<th>Варианты ответа</th>
												<th>Количество ответивших</th>
												<th>% ответивших</th>
											</tr>
											<tr>
												<td>до 20</td>
												<td>2</td>
												<td>20%</td>
											</tr>
											<tr>
												<td>20-40</td>
												<td>8</td>
												<td>80%</td>
											</tr>
											<tr>
												<td>40 и больше</td>
												<td>0</td>
												<td>0%</td>
											</tr>
										</table>
									</div>
								</div>
								<hr>
								<div class="question-results-block">
									<div class="question-number">Вопрос 2</div>
									<div class="question-text">Какие фрукты вы предпочитаете?</div>
									<ul class="question-stats">
										<li>Ответили: 5</li>
										<li>Пропустили: 0</li>
									</ul>
									<ul class="question-chart-type-list">
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_2_chart_type" id="question_2_chart_type_1">
												<label for="question_2_chart_type_1">
													<i class="fa fa-bar-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_2_chart_type" id="question_2_chart_type_2">
												<label for="question_2_chart_type_2">
													<i class="fa fa-pie-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_2_chart_type" id="question_2_chart_type_3" checked>
												<label for="question_2_chart_type_3">
													<i class="fa fa-line-chart"></i>
												</label>
											</div>
										</li>
									</ul>
									<div class="question-chart">
										<img src="img/temp/chart-line.png" alt="">
									</div>
									<div class="question-stats-table">
										<table class="table">
											<tr>
												<th>Варианты ответа</th>
												<th>Количество ответивших</th>
												<th>% ответивших</th>
											</tr>
											<tr>
												<td>Ананасы</td>
												<td>6</td>
												<td>60%</td>
											</tr>
											<tr>
												<td>Апельсины</td>
												<td>2</td>
												<td>20%</td>
											</tr>
											<tr>
												<td>Памело</td>
												<td>2</td>
												<td>20%</td>
											</tr>
										</table>
									</div>
								</div>
								<hr>
								<div class="question-results-block">
									<div class="question-number">Вопрос 3</div>
									<div class="question-text">Какая сегодня погода?</div>
									<ul class="question-stats">
										<li>Ответили: 5</li>
										<li>Пропустили: 0</li>
									</ul>
									<ul class="question-chart-type-list">
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_3_chart_type" id="question_3_chart_type_1">
												<label for="question_3_chart_type_1">
													<i class="fa fa-bar-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_3_chart_type" id="question_3_chart_type_2" checked>
												<label for="question_3_chart_type_2">
													<i class="fa fa-pie-chart"></i>
												</label>
											</div>
										</li>
										<li>
											<div class="radio-block squared gray">
												<input type="radio" name="question_3_chart_type" id="question_3_chart_type_3">
												<label for="question_3_chart_type_3">
													<i class="fa fa-line-chart"></i>
												</label>
											</div>
										</li>
									</ul>
									<div class="question-chart">
										<img src="img/temp/chart-pie.png" alt="">
									</div>
									<div class="question-stats-table">
										<table class="table">
											<tr>
												<th>Варианты ответа</th>
												<th>Количество ответивших</th>
												<th>% ответивших</th>
											</tr>
											<tr>
												<td>Хорошая</td>
												<td>6</td>
												<td>60%</td>
											</tr>
											<tr>
												<td>Плохая</td>
												<td>4</td>
												<td>40%</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="margin-bottom-40px"></div>
								<a href="#" class="btn btn-default btn-two-lines">
									<span class="first-line">Экспортировать результаты</span>
									<span class="second-line">экспорт в формат .xls</span>
								</a>
							</div>
							<div class="tab" id="answers-tab">
								<div class="flex-container">
									<div class="flex-row">
										<div class="flex-col col-3">
											<div class="gray-section">
												<a href="#" class="btn btn-default btn-white medium-paddings fullwidth">Ссылка на вопрос</a>
											</div>
										</div>
										<div class="flex-col col-9">
											<div class="form">
												<div class="form-row">
													<div class="form-label">Скопируйте и пошлите своим респондентам ссылку: <br><br></div>
													<div class="form-field">
														<div class="share-link-block">
															<div class="block-input">
																<input class="gray-bg" type="text" value="http://test.com/Y3W3N6Q2D9L7J6K9X">
																<button class="btn btn-default medium-paddings">Копировать</button>
															</div>
															<div class="block-share-button">
																<button class="btn btn-default btn-light small-paddings">
																	<i class="fa fa-share-alt"></i>
																	<span>Поделиться</span>
																</button>
															</div>
														</div>
														<div class="margin-bottom-40px"></div>
														<button class="btn btn-default btn-light medium-paddings">
															<i class="fa fa-plus-circle"></i>
															<span>Добавить ссылку</span>
														</button>
													</div>
												</div>
												<div class="form-row">
													<div class="form-label">Ссылка</div>
													<div class="form-field">
														<input type="text" class="gray-bg" placeholder="www...">
													</div>
												</div>
												<div class="form-row">
													<div class="form-label">Комментарий</div>
													<div class="form-field">
														<textarea class="gray-bg"></textarea>
													</div>
												</div>
												<div class="form-row">
													<div class="form-field">
														<button class="btn btn-default btn-light small-paddings">
															<i class="fa fa-share-alt"></i>
															<span>Поделиться</span>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="edit-questions-tab">
								<div class="question-editor">
									<div class="editor-sidebar">
										<div class="scrollable-sidebar">
											<div class="block-content">
												<div class="block-content-inner">
													<div class="remove-paddings">
														<div class="radio-list">
															<div class="item">
																<input type="radio" name="question-type" id="question-type-1">
																<label for="question-type-1">Случайный выбор</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-3">
																<label for="question-type-3">Один из списка</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-3">
																<label for="question-type-3">Несколько из списка</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-4">
																<label for="question-type-4">Выбор изображения</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-5">
																<label for="question-type-5">Шкала</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-6">
																<label for="question-type-6">Матрица</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-7">
																<label for="question-type-7">Несколько из списка</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-8">
																<label for="question-type-8">Выбор изображения</label>
															</div>
															<div class="item">
																<input type="radio" name="question-type" id="question-type-9">
																<label for="question-type-9">Шкала</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="editor-content">
										<div class="edit-question-section">
											<img src="img/temp/qustion-editor.png" alt="">
										</div>
										<div class="edit-question-section">
											<img src="img/temp/qustion-editor.png" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="tab" id="edit-steps-tab"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

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
								<a href="create-new-research-step.php" class="step-block active">
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
								<a href="#" class="step-block">
									<span class="step">4</span>
									<span class="text">Настройка дизайна</span>
								</a>
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
				<div class="logic-editor">
					<div class="logic-page">
						<div class="logic-page-caption">Страница 1</div>
						<div class="logic-card">
							<div class="card-header">
								<div class="card-title">1. Как вас зовут?</div>
								<div class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
										<div class="conditions-count">Условий: <span>2</span></div>
									</div>
								</div>
								<div class="card-opener">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
							<div class="card-content">
								<div class="condition-cards">
									<div class="condition-card">
										<div class="condition-header">
											<div class="condition-title">Условие 1</div>
											<div class="condition-actions">
												<div class="item minimize">
													<i class="fa fa-window-minimize"></i>
												</div>
												<div class="item delete">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="condition-content">
											<div class="form logic-form no-margin">
												<div class="form-row inline">
													<div class="form-label">Респондент</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Выбрал варианты</option>
																<option value="2">Действие 2</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Ответы</div>
													<div class="form-field">
														<div class="checkboxes-list">
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" id="cond_ansrwers_1">
																	<label for="cond_ansrwers_1">Нет вообще</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_ansrwers_2">
																	<label for="cond_ansrwers_2">Иногда есть</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_ansrwers_3">
																	<label for="cond_ansrwers_3">Очень мало</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Переход</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Стандартное завершение</option>
																<option value="2">Нестандартное завершение</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="condition-card closed">
										<div class="condition-header">
											<div class="condition-title">Условие 2</div>
											<div class="condition-actions">
												<div class="item minimize">
													<i class="fa fa-window-minimize"></i>
												</div>
												<div class="item delete">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="condition-content">
											<div class="form logic-form no-margin">
												<div class="form-row inline">
													<div class="form-label">Респондент</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Выбрал варианты</option>
																<option value="2">Действие 2</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Ответы</div>
													<div class="form-field">
														<div class="checkboxes-list">
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" id="cond_2_ansrwers_1">
																	<label for="cond_2_ansrwers_1">Нет вообще</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_2_ansrwers_2">
																	<label for="cond_2_ansrwers_2">Иногда есть</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_2_ansrwers_3">
																	<label for="cond_2_ansrwers_3">Очень мало</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Переход</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Стандартное завершение</option>
																<option value="2">Нестандартное завершение</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="#" class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
									</div>
								</a>
							</div>
						</div>
						<div class="logic-card">
							<div class="card-header">
								<div class="card-title">2. Есть ли у вас свободное время?</div>
								<div class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
										<div class="conditions-count">Условий: <span>2</span></div>
									</div>
								</div>
								<div class="card-opener">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
							<div class="card-content">
								<div class="condition-cards">
									<div class="condition-card">
										<div class="condition-header">
											<div class="condition-title">Условие 1</div>
											<div class="condition-actions">
												<div class="item minimize">
													<i class="fa fa-window-minimize"></i>
												</div>
												<div class="item delete">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="condition-content">
											<div class="form logic-form no-margin">
												<div class="form-row inline">
													<div class="form-label">Респондент</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Выбрал варианты</option>
																<option value="2">Действие 2</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Ответы</div>
													<div class="form-field">
														<div class="checkboxes-list">
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" id="cond_3_ansrwers_1">
																	<label for="cond_3_ansrwers_1">Нет вообще</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_3_ansrwers_2">
																	<label for="cond_3_ansrwers_2">Иногда есть</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_3_ansrwers_3">
																	<label for="cond_3_ansrwers_3">Очень мало</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Переход</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Стандартное завершение</option>
																<option value="2">Нестандартное завершение</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="condition-card closed">
										<div class="condition-header">
											<div class="condition-title">Условие 2</div>
											<div class="condition-actions">
												<div class="item minimize">
													<i class="fa fa-window-minimize"></i>
												</div>
												<div class="item delete">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="condition-content">
											<div class="form logic-form no-margin">
												<div class="form-row inline">
													<div class="form-label">Респондент</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Выбрал варианты</option>
																<option value="2">Действие 2</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Ответы</div>
													<div class="form-field">
														<div class="checkboxes-list">
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" id="cond_4_ansrwers_1">
																	<label for="cond_4_ansrwers_1">Нет вообще</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_4_ansrwers_2">
																	<label for="cond_4_ansrwers_2">Иногда есть</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_4_ansrwers_3">
																	<label for="cond_4_ansrwers_3">Очень мало</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Переход</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Стандартное завершение</option>
																<option value="2">Нестандартное завершение</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="#" class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
									</div>
								</a>
							</div>
						</div>
						<div class="logic-page-caption">Страница 2</div>
						<div class="logic-card">
							<div class="card-header">
								<div class="card-title">3. Третий вопрос</div>
								<div class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
										<div class="conditions-count">Условий: <span>2</span></div>
									</div>
								</div>
								<div class="card-opener">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
							<div class="card-content">
								<div class="condition-cards">
									<div class="condition-card">
										<div class="condition-header">
											<div class="condition-title">Условие 3</div>
											<div class="condition-actions">
												<div class="item minimize">
													<i class="fa fa-window-minimize"></i>
												</div>
												<div class="item delete">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="condition-content">
											<div class="form logic-form no-margin">
												<div class="form-row inline">
													<div class="form-label">Респондент</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Выбрал варианты</option>
																<option value="2">Действие 2</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Ответы</div>
													<div class="form-field">
														<div class="checkboxes-list">
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" id="cond_5_ansrwers_1">
																	<label for="cond_5_ansrwers_1">Нет вообще</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_5_ansrwers_2">
																	<label for="cond_5_ansrwers_2">Иногда есть</label>
																</div>
															</div>
															<div class="item">
																<div class="checkbox-block">
																	<input type="checkbox" checked id="cond_5_ansrwers_3">
																	<label for="cond_5_ansrwers_3">Очень мало</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row inline">
													<div class="form-label">Переход</div>
													<div class="form-field">
														<div class="select">
															<select name="" id="">
																<option value="1">Стандартное завершение</option>
																<option value="2">Нестандартное завершение</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="#" class="card-conditions">
									<div class="block-add">
										<span>+</span>
									</div>
									<div class="block-text">
										<div class="add-text">Добавить условие</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

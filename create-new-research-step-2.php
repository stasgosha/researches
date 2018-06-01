<?php $page_title = "Создание опроса" ?>
<?php include('page-parts/header.inc.php'); ?>

<?php
	function rand_id(){
		return md5(time() + rand());
	}
?>

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
								<a href="create-new-research-step-3.php" class="step-block">
									<span class="step">3</span>
									<span class="text">Настройка логики</span>
								</a>
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
				<div class="question-editor">
					<div class="editor-sidebar">
						<div class="scrollable-sidebar">
							<div class="block-caption">Выберите тип вопроса</div>
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
							<div class="editor">
								<div class="editor-header">
									<div class="title">Вопрос №1 (1 из списка)</div>
									<div class="actions-list">
										<div class="item minimizeBtn"><i class="fa fa-window-minimize"></i></div>
										<div class="item"><i class="fa fa-clone"></i></div>
										<div class="item"><i class="fa fa-trash-o"></i></div>
									</div>
								</div>
								<div class="editor-content form">
									<div class="editor-section">
										<div class="question-text">
											<input type="text">
										</div>
										<div class="question-params">
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Подсказка</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Обязательный вопрос</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" checked id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Случайный порядок ответов</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row">
											<div class="left flex-right">
												<div class="icon pointer big black">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon pointer big black">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left flex-right">
												<div class="icon pointer big black">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon pointer big black">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="controls-list">
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить ответ</span>
														</a>
													</div>
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить списком</span>
														</a>
													</div>
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Свой ответ</span>
														</a>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Комментарий</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div style="max-width: 100px">
													<div class="select small">
														<select name="" id="">
															<option value="1">Строка</option>
														</select>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<input type="text" class="small" placeholder="Комментарий">
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Таймер</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="editor-timer">
													<div class="item">
														<div class="select small">
															<select>
																<option value="1">00</option>
															</select>
														</div>
														<p>час</p>
													</div>
													<div class="item">
														<div class="select small">
															<select>
																<option value="1">00</option>
															</select>
														</div>
														<p>мин</p>
													</div>
													<div class="item">
														<div class="select small">
															<select>
																<option value="1">00</option>
															</select>
														</div>
														<p>сек</p>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="margin-bottom-20px"></div>
							<div class="editor">
								<div class="editor-header">
									<div class="title">Вопрос №1 (несколько из списка)</div>
									<div class="actions-list">
										<div class="item minimizeBtn"><i class="fa fa-window-minimize"></i></div>
										<div class="item"><i class="fa fa-clone"></i></div>
										<div class="item"><i class="fa fa-trash-o"></i></div>
									</div>
								</div>
								<div class="editor-content form">
									<div class="editor-section">
										<div class="question-text">
											<input type="text">
										</div>
										<div class="question-params">
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Подсказка</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Обязательный вопрос</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" checked id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Случайный порядок ответов</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row">
											<div class="left flex-right">
												<div class="icon pointer big black">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon pointer big black">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left flex-right">
												<div class="icon pointer big black">
													<i class="fa fa-arrows"></i>
												</div>
											</div>
											<div class="center">
												<input type="text" class="small">
											</div>
											<div class="right">
												<div class="icon pointer big black">
													<i class="fa fa-trash-o"></i>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="controls-list">
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить ответ</span>
														</a>
													</div>
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить списком</span>
														</a>
													</div>
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Свой ответ</span>
														</a>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="fields-list">
													<div class="item">
														<div class="item-label">Min ответов</div>
														<input type="text" class="small">
													</div>
													<div class="item">
														<div class="item-label">Max ответов</div>
														<input type="text" class="small">
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Комментарий</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Таймер</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="margin-bottom-20px"></div>
							<div class="editor">
								<div class="editor-header">
									<div class="title">Вопрос №1 (Выбор изображения)</div>
									<div class="actions-list">
										<div class="item minimizeBtn"><i class="fa fa-window-minimize"></i></div>
										<div class="item"><i class="fa fa-clone"></i></div>
										<div class="item"><i class="fa fa-trash-o"></i></div>
									</div>
								</div>
								<div class="editor-content form">
									<div class="editor-section">
										<div class="question-text">
											<input type="text">
										</div>
										<div class="question-params">
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Подсказка</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Обязательный вопрос</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" checked id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row">
											<div class="left">
												<p>Отображение</p>
											</div>
											<div class="center">
												<div style="max-width: 130px">
													<div class="select small">
														<select>
															<option value="2">В два столбца</option>
															<option value="1">В один столбец</option>
														</select>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row with-columns">
											<div class="editor-col align-start">
												<div class="left flex-right">
													<div class="icon pointer big black">
														<i class="fa fa-arrows"></i>
													</div>
												</div>
												<div class="center">
													<input type="text" class="small">
													<div class="margin-bottom-15px"></div>
													<div class="answer-image"></div>
												</div>
												<div class="right">
													<div class="icon pointer big black">
														<i class="fa fa-trash-o"></i>
													</div>
												</div>
											</div>
											<div class="editor-col align-start">
												<div class="left flex-right">
													<div class="icon pointer big black">
														<i class="fa fa-arrows"></i>
													</div>
												</div>
												<div class="center">
													<input type="text" class="small">
													<div class="margin-bottom-15px"></div>
													<div class="answer-image"></div>
												</div>
												<div class="right">
													<div class="icon pointer big black">
														<i class="fa fa-trash-o"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="controls-list">
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить ответ</span>
														</a>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Комментарий</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Таймер</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="margin-bottom-20px"></div>
							<div class="editor">
								<div class="editor-header">
									<div class="title">Вопрос №1 (Выбор изображения)</div>
									<div class="actions-list">
										<div class="item minimizeBtn"><i class="fa fa-window-minimize"></i></div>
										<div class="item"><i class="fa fa-clone"></i></div>
										<div class="item"><i class="fa fa-trash-o"></i></div>
									</div>
								</div>
								<div class="editor-content form">
									<div class="editor-section">
										<div class="question-text">
											<input type="text">
										</div>
										<div class="question-params">
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Подсказка</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="controls-list">
													<div class="item">
														<div class="question-switch">
															<div class="switch-text">Обязательный вопрос</div>
															<div class="switch-control">
																<?php $rand_id = rand_id(); ?>
																<input type="checkbox" checked id="<?= $rand_id ?>">
																<label for="<?= $rand_id ?>"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row">
											<div class="left">
												<p>Отображение</p>
											</div>
											<div class="center">
												<div style="max-width: 130px">
													<div class="select small">
														<select>
															<option value="2">В два столбца</option>
															<option value="1">В один столбец</option>
														</select>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row with-columns">
											<div class="editor-col align-start">
												<div class="left flex-right">
													<div class="icon pointer big black">
														<i class="fa fa-arrows"></i>
													</div>
												</div>
												<div class="center">
													<input type="text" class="small">
													<div class="margin-bottom-15px"></div>
													<div class="answer-image"></div>
												</div>
												<div class="right">
													<div class="icon pointer big black">
														<i class="fa fa-trash-o"></i>
													</div>
												</div>
											</div>
											<div class="editor-col align-start">
												<div class="left flex-right">
													<div class="icon pointer big black">
														<i class="fa fa-arrows"></i>
													</div>
												</div>
												<div class="center">
													<input type="text" class="small">
													<div class="margin-bottom-15px"></div>
													<div class="answer-image"></div>
												</div>
												<div class="right">
													<div class="icon pointer big black">
														<i class="fa fa-trash-o"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="controls-list">
													<div class="item">
														<a href="#" class="control-link">
															<span class="link-icon">+</span>
															<span class="link-text">Добавить ответ</span>
														</a>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
										<div class="editor-row">
											<div class="left"></div>
											<div class="center">
												<div class="fields-list">
													<div class="item">
														<div class="item-label">Min ответов</div>
														<input type="text" class="small">
													</div>
													<div class="item">
														<div class="item-label">Max ответов</div>
														<input type="text" class="small">
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Комментарий</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
									<div class="editor-section">
										<div class="editor-row align-center">
											<div class="left">
												<p>Таймер</p>
											</div>
											<div class="center">
												<div class="question-switch">
													<div class="switch-control">
														<?php $rand_id = rand_id(); ?>
														<input type="checkbox" checked id="<?= $rand_id ?>">
														<label for="<?= $rand_id ?>"></label>
													</div>
												</div>
											</div>
											<div class="right"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="add-question-btn">
							<a href="#" class="btn btn-default btn-medium btn-gray">Добавить страницу</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

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
							<img src="img/temp/qustion-editor.png" alt="">
						</div>
						<div class="add-question-btn">
							<a href="#" class="btn btn-default btn-medium btn-gray">Добавить страницу</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

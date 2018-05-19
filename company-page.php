<?php $page_title = "Страница компании" ?>
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
				<div class="form settings-form bold-labels">
					<div class="form-row inline">
						<div class="form-label">Название компании</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row inline">
						<div class="form-label">Категория</div>
						<div class="form-field">
							<div class="select">
								<select>
									<option value="0" disabled selected>Выбрать</option>
									<option value="0">Категория 1</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<hr class="medium-margins">
				<div class="form settings-form bold-labels">
					<div class="form-row">
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-4">
									<div class="form-row">
										<div class="form-label">Страна</div>
										<div class="form-field">
											<div class="select">
												<select>
													<option value="0" disabled selected>Выбрать</option>
													<option value="0">Страна 1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-col col-4">
									<div class="form-row">
										<div class="form-label">Регион</div>
										<div class="form-field">
											<div class="select">
												<select>
													<option value="0" disabled selected>Выбрать</option>
													<option value="0">Регион 1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-col col-4">
									<div class="form-row">
										<div class="form-label">Город</div>
										<div class="form-field">
											<div class="select">
												<select>
													<option value="0" disabled selected>Выбрать</option>
													<option value="0">Город 1</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Адрес</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Телефоны</div>
						<div class="form-field">
							<div class="flex-container">
								<div class="flex-row">
									<div class="flex-col col-4">
										<input type="tel">
									</div>
									<div class="flex-col col-4">
										<input type="tel">
									</div>
									<div class="flex-col col-4">
										<input type="tel">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="form-label">Электронная почта</div>
									<div class="form-field">
										<input type="email">
									</div>
								</div>
								<div class="flex-col col-6">
									<div class="form-label">Сайт</div>
									<div class="form-field">
										<input type="url">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Описание</div>
						<div class="form-field">
							<textarea></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="flex-container">
							<div class="flex-row">
								<div class="flex-col col-6">
									<div class="form-label">Логотип</div>
									<div class="form-field">
										<div class="upload-image-block">
											<div class="block-image" style="background-image: url();"></div>
											<div class="block-text">
												<div class="block-caption">Файл не выбран</div>
												<div class="block-button small-margin">
													<div class="btn btn-default btn-light">Загрузить</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-col col-6">
									<div class="form-label">Фон</div>
									<div class="form-field">
										<div class="upload-image-block">
											<div class="block-image" style="background-image: url();"></div>
											<div class="block-text">
												<div class="block-caption">Файл не выбран</div>
												<div class="block-button small-margin">
													<div class="btn btn-default btn-light">Загрузить</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="medium-margins">
				<div class="form settings-form bold-labels">
					<div class="form-row">
						<div class="form-label">Разбрендирование</div>
						<div class="form-field">
							<div class="square-checkbox">
								<input type="checkbox" id="unrebrending">
								<label for="unrebrending">
									<strong>Убрать логотип нашего сервиса</strong><br>
									<span>данная функция доступна только для тарифного плана Plus</span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<hr class="medium-margins">
				<button class="btn btn-default">Сохранить изменения</button>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

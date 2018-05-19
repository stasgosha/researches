<?php $page_title = "Мои настройки" ?>
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
				<ul class="tabs-nav with-bg">
					<li class="current"><a href="#" data-tab="#general-settings-tab">Общие настройки</a></li>
					<li><a href="#" data-tab="#personal-settings-tab">Персональные данные</a></li>
					<li><a href="#" data-tab="#change-password-tab">Изменить пароль</a></li>
				</ul>
				<div class="tabs-container">
					<div class="tab" id="general-settings-tab">
						<div class="form bold-labels">
							<div class="flex-container">
								<div class="flex-row">
									<div class="flex-col col-8">
										<div class="flex-row">
											<div class="flex-col col-4">
												<div class="form-row">
													<div class="form-label">Тип аккаунта</div>
													<div class="form-field">
														<div class="select">
															<select>
																<option value="1">Заказчик</option>
																<option value="2">Пользователь</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="flex-col col-4">
												<div class="form-row">
													<div class="form-label">Язык</div>
													<div class="form-field">
														<div class="select">
															<select>
																<option value="1">Русский</option>
																<option value="2">English</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="flex-col col-4">
												<div class="form-row">
													<div class="form-label">Часовой пояс</div>
													<div class="form-field">
														<div class="select">
															<select>
																<option value="1">GTM +2</option>
																<option value="2">GTM +3</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="flex-col col-4">
										<div class="form-row">
											<div class="form-label">Вы с нами уже</div>
											<div class="form-field">
												<div class="time-span">1 год 2 недели 3 дня 14 часов</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr class="medium-margins">
						<p class="bigger dark"><strong>Удаление учетной записи без возможности восстановления</strong></p>
						<button class="btn btn-default">Удалить аккаунт</button>
					</div>
					<div class="tab" id="personal-settings-tab">
						<div class="controls-list">
							<div class="item">
								<div class="radio-block type-circle">
									<input type="radio" id="user-type-1" name="user-type" checked>
									<label for="user-type-1">Я являюсь частным лицом</label>
								</div>
							</div>
							<div class="item">
								<div class="radio-block type-circle">
									<input type="radio" id="user-type-2" name="user-type">
									<label for="user-type-2">Я являюсь представителем организации</label>
								</div>
							</div>
						</div>
						<div class="margin-bottom-40px"></div>
						<div class="form settings-form bold-labels">
							<div class="form-row inline">
								<div class="form-label">Имя</div>
								<div class="form-field">
									<input type="text">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Фамилия</div>
								<div class="form-field">
									<input type="text">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Контактный телефон</div>
								<div class="form-field">
									<input type="tel">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">E-mail</div>
								<div class="form-field">
									<input type="email">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Сфера вашей деятельности</div>
								<div class="form-field">
									<div class="select">
										<select>
											<option value="0" selected disabled>Выбрать</option>
											<option value="1">IT</option>
											<option value="2">Реклама</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Профессия</div>
								<div class="form-field">
									<input type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="tab" id="change-password-tab">
						<div class="form settings-form bold-labels">
							<div class="form-row inline">
								<div class="form-label">Текущий пароль</div>
								<div class="form-field">
									<input type="password">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Новый пароль</div>
								<div class="form-field">
									<input type="password">
								</div>
							</div>
							<div class="form-row inline">
								<div class="form-label">Повторите новый пароль</div>
								<div class="form-field">
									<input type="password">
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="medium-margins">
				<button class="btn btn-default">Сохранить изменения</button>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

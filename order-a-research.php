<?php $page_title = "Заказать исследование" ?>
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
				<div class="small-title">
					<p>Для заказа исследования заполните форму ниже <br>и мы свяжемся с вами в течение 1 часа</p>
				</div>
				<div class="form order-research-form bold-labels">
					<div class="form-row">
						<div class="form-label">Короткое описание исследования</div>
						<div class="form-field">
							<textarea></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Охват аудитории (количество человек)</div>
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
								<input value="20,80" type="range" multiple>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Ваше имя</div>
						<div class="form-field">
							<input type="text">
						</div>
					</div>
					<div class="form-row">
						<div class="form-label">Номер телефона</div>
						<div class="form-field">
							<input type="tel">
						</div>
					</div>
					<div class="form-row">
						<p>Если Вы являетесь представителем организации, <br>укажите, пожалуйста, ее название</p>
					</div>
					<div class="form-row">
						<div class="flex-container align-center">
							<button class="btn btn-default margin-right-40px">Отправить</button>
							<button class="btn btn-inline">Отменить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

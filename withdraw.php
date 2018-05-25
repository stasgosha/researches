<?php $page_title = "Вывод средств" ?>
<?php include('page-parts/header-user.inc.php'); ?>

<div class="main-section">
	<?php include('page-parts/sidebar-user.inc.php'); ?>
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
					<li class="current"><a href="#" data-tab="#withdraw-tab">Вывод</a></li>
					<li><a href="#" data-tab="#discounts-tab">Скидки и акции</a></li>
				</ul>
				<div class="tabs-container">
					<div class="tab" id="withdraw-tab">
						<div class="medium-header">
							<h4>Доступно для вывода: 10$</h4>
						</div>
						<p class="bigger">Вывод средств на указанный вами кошелек в течение 24 часов! <br>Минимальная сумма для вывода средств 5$.</p>
						<hr class="medium-margins">
						<div style="max-width: 760px">
							<p class="bigger dark"><strong>Выберите систему для вывода средств</strong></p>
							<div class="radio-grid pay-systems cols-4">
								<div class="item">
									<div class="radio-block">
										<input type="radio" name="pay-system" value="visa-mastercard" id="visa-mastercard">
										<label for="visa-mastercard" class="item-content">
											<img src="img/pay-systems/visa-mastercard.png" alt="">
										</label>
									</div>
									</div>
								<div class="item">
									<div class="radio-block">
										<input type="radio" name="pay-system" value="qiwi" id="qiwi">
										<label for="qiwi" class="item-content">
											<img src="img/pay-systems/qiwi.png" alt="">
										</label>
									</div>
									</div>
								<div class="item">
									<div class="radio-block">
										<input type="radio" name="pay-system" value="webmoney" id="webmoney">
										<label for="webmoney" class="item-content">
											<img src="img/pay-systems/webmoney.png" alt="">
										</label>
									</div>
								</div>
								<div class="item">
									<div class="radio-block">
										<input type="radio" name="pay-system" value="yandex" id="yandex">
										<label for="yandex" class="item-content">
											<img src="img/pay-systems/yandex.png" alt="">
										</label>
									</div>
								</div>
							</div>
							<a href="#" class="btn btn-default btn-bold">Добавить способ вывода</a>
							<div class="margin-bottom-40px"></div>
							<p class="bigger dark"><strong>Укажите номер кошелька и сумму для вывода средств</strong></p>
							<div class="form withdraw-form">
								<div class="wallet-id">
									<input type="text" placeholder="Номер кошелька">
								</div>
								<div class="amount">
									<input type="text" placeholder="Сумма">
								</div>
								<div class="button">
									<button class="btn btn-default btn-bold medium-paddings fullwidth">Заказать вывод</button>
								</div>
							</div>
						</div>
						<hr>
						<div class="medium-header">
							<h4>История вывода</h4>
						</div>
						<table class="table no-side-paddings">
							<tr>
								<th>
									<div class="sort-by">
										<span>Дата</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Сумма</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Способ вывода</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Статус</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
							</tr>
							<tr>
								<td>01.01.2018 10:45:22</td>
								<td>150,00</td>
								<td>Карта Mastercard</td>
								<td>
									<div class="status-block">
										<div class="block-icon">
											<i class="fa fa-check"></i>
										</div>
										<span class="block-text">Выполнено</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>01.01.2018 10:45:22</td>
								<td>150,00</td>
								<td>Карта Mastercard</td>
								<td>
									<div class="status-block">
										<div class="block-icon">
											<i class="fa fa-check"></i>
										</div>
										<span class="block-text">Выполнено</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>01.01.2018 10:45:22</td>
								<td>150,00</td>
								<td>Яндекс.Деньги</td>
								<td>
									<div class="status-block">
										<div class="block-icon">
											<i class="fa fa-ellipsis-h"></i>
										</div>
										<span class="block-text">В обработке</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>01.01.2018 10:45:22</td>
								<td>150,00</td>
								<td>Яндекс.Деньги</td>
								<td>
									<div class="status-block">
										<div class="block-icon">
											<i class="fa fa-check"></i>
										</div>
										<span class="block-text">Выполнено</span>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<div class="tab" id="discounts-tab">
						<table class="table no-side-paddings">
							<tr>
								<th>
									<div class="sort-by">
										<span>Производитель</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Название акции</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Скидка</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Срок действия</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>&nbsp;</th>
							</tr>
							<tr>
								<td>Название производителя</td>
								<td>Скидка на все услуги</td>
								<td>20%</td>
								<td>01.04.2018  12:00</td>
								<td>
									<a href="#" class="btn btn-default btn-small btn-gray">Получить скидку</a>
								</td>
							</tr>
							<tr>
								<td>Название производителя</td>
								<td>Скидка на все услуги</td>
								<td>20%</td>
								<td>01.04.2018  12:00</td>
								<td>
									<a href="#" class="btn btn-default btn-small btn-gray">Получить скидку</a>
								</td>
							</tr>
							<tr>
								<td>Название производителя</td>
								<td>Скидка на все услуги</td>
								<td>20%</td>
								<td>01.04.2018  12:00</td>
								<td>
									<a href="#" class="btn btn-default btn-small btn-gray">Получить скидку</a>
								</td>
							</tr>
							<tr>
								<td>Название производителя</td>
								<td>Скидка на все услуги</td>
								<td>20%</td>
								<td>01.04.2018  12:00</td>
								<td>
									<a href="#" class="btn btn-default btn-small btn-gray">Получить скидку</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

<?php $page_title = "Оплата" ?>
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
					<li class="current"><a href="#" data-tab="#payment-tab">Оплата</a></li>
					<li><a href="#" data-tab="#finances-tab">Финансы</a></li>
				</ul>
				<div class="tabs-container">
					<div class="tab" id="payment-tab">
						<p class="dark bigger"><strong>Выберите способ оплаты</strong></p>
						<div class="radio-grid pay-systems">
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
							<div class="item">
								<div class="radio-block">
									<input type="radio" name="pay-system" value="privat" id="privat">
									<label for="privat" class="item-content">
										<img src="img/pay-systems/privat.png" alt="">
									</label>
								</div>
							</div>
							<div class="item">
								<div class="radio-block">
									<input type="radio" name="pay-system" value="moneygram" id="moneygram">
									<label for="moneygram" class="item-content">
										<img src="img/pay-systems/moneygram.png" alt="">
									</label>
								</div>
							</div>
						</div>
						<div class="margin-bottom-20px"></div>
						<p class="dark bigger"><strong>Введите сумму и нажмите кнопку «Пополнить баланс»</strong></p>
						<div class="form payment-form">
							<input type="text">
							<button class="btn btn-default medium-paddings">Пополнить баланс</button>
						</div>
					</div>
					<div class="tab" id="finances-tab">
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
										<span>Вид активности</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Сумма</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
							</tr>
							<tr>
								<td>01.01.2018  10:45:22</td>
								<td>Пополнение личного счета</td>
								<td>10$</td>
							</tr>
							<tr>
								<td>01.01.2018  10:45:22</td>
								<td>Начисление от рефералов</td>
								<td>10$</td>
							</tr>
							<tr>
								<td>01.01.2018  10:45:22</td>
								<td>Оплата за пройденные опросы</td>
								<td>10$</td>
							</tr>
							<tr>
								<td>01.01.2018  10:45:22</td>
								<td>Оплата за проданные опросы в магазине</td>
								<td>10$</td>
							</tr>
							<tr>
								<td>01.01.2018  10:45:22</td>
								<td>Вывод средств</td>
								<td>10$</td>
							</tr>
						</table>
						<div class="margin-bottom-30px"></div>
						<a href="#" class="btn btn-default">Показать ещё</a>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

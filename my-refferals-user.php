<?php $page_title = "Мои рефералы" ?>
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
				<ul class="tabs-nav with-bg small-paddings">
					<li class="current"><a href="#" data-tab="#main-tab">Главная</a></li>
					<li><a href="#" data-tab="#stats-tab">Статистика</a></li>
					<li><a href="#" data-tab="#advertisment-tab">Рекламные материалы</a></li>
				</ul>
				<div class="tabs-container">
					<div class="tab" id="main-tab">
						<div class="small-title">
							<h5>Вознаграждение: 15%</h5>
						</div>
						<p class="bigger dark">Для приглашения новых пользователей в систему,  вам необходимо: <br>В данном подразделе будет отображаться краткая инструкция по приглашению рефералов в систему.</p>
						<p class="bigger dark small-margin">Реферальная ссылка</p>
						<div class="refferal-link-form form gray-fields">
							<div class="refferal-link">
								<input type="text" value="http://test.com/Y3W3N6Q2D9L7J6K9X">
							</div>
							<div class="refferal-button">
								<a href="#" class="btn btn-default medium-paddings">Копировать</a>
							</div>
						</div>
						<!--  -->
						<div class="margin-bottom-30px"></div>
						<!--  -->
						<div class="big-header">
							<h5>Статистика</h5>
						</div>
						<table class="table light">
							<tr>
								<th>Логин</th>
								<th width="150">Доход</th>
							</tr>
							<tr>
								<td>User123</td>
								<td>25.00</td>
							</tr>
							<tr>
								<td>User123</td>
								<td>15.00</td>
							</tr>
							<tr>
								<td>User123</td>
								<td>110.00</td>
							</tr>
						</table>
					</div>
					<div class="tab" id="stats-tab">
						<div class="medium-header">
							<h5>Статистика по ссылкам</h5>
						</div>
						<br>
						<table class="table no-side-paddings">
							<tr>
								<th>
									<div class="sort-by">
										<span>Название ссылки</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Переходы</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Регистраций</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Прошли опрос на 100%</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
								<th>
									<div class="sort-by">
										<span>Заработок</span>
										<i class="fa fa-sort"></i>
									</div>
								</th>
							</tr>
							<tr>
								<td>Опрос №1</td>
								<td>50</td>
								<td>38</td>
								<td>10%</td>
								<td>2</td>
							</tr>
							<tr>
								<td>Опрос №1</td>
								<td>50</td>
								<td>38</td>
								<td>10%</td>
								<td>2</td>
							</tr>
							<tr>
								<td>Опрос №1</td>
								<td>50</td>
								<td>38</td>
								<td>10%</td>
								<td>2</td>
							</tr>
						</table>
					</div>
					<div class="tab" id="advertisment-tab">
						<div class="materials-card">
							<div class="card-preview">
								<img src="" alt="">
							</div>
							<div class="card-text">
								<p class="card-name">Код для вставки на сайт</p>
								<p class="card-link">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
							</div>
						</div>
						<div class="materials-card">
							<div class="card-preview">
								<img src="" alt="">
							</div>
							<div class="card-text">
								<p class="card-name">Код для вставки на сайт</p>
								<p class="card-link">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
							</div>
						</div>
						<div class="materials-card">
							<div class="card-preview">
								<img src="" alt="">
							</div>
							<div class="card-text">
								<p class="card-name">Код для вставки на сайт</p>
								<p class="card-link">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
							</div>
						</div>
						<div class="materials-card">
							<div class="card-preview">
								<img src="" alt="">
							</div>
							<div class="card-text">
								<p class="card-name">Код для вставки на сайт</p>
								<p class="card-link">&lt;a href="http://www.domen.com/?ref=Link" target="_blank"&gt;&lt;img src= "http://www.domen.com/banner.gif"&gt;&lt;/a&gt;</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

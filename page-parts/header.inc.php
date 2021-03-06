<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $page_title ?></title>
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<div class="page">
			<div class="header">
				<div class="header-inner">
					<div class="header-logo">
						<a href="index.php" class="logo">Логотип</a>
					</div>
					<div class="header-content">
						<div class="header-content-inner">
							<div class="header-left">
								<div class="stats-list">
									<div class="item">
										<div class="stats-block">
											<i class="icon icon-dollar"></i>
											<span>10$</span>
											<a href="#" class="btn btn-default btn-small btn-gray">Пополнить</a>
										</div>
									</div>
									<div class="item">
										<div class="stats-block">
											<i class="icon icon-star"></i>
											<span>150</span>
										</div>
									</div>
								</div>
							</div>
							<div class="header-center">
								<ul class="header-nav">
									<li><a href="#">Заказать <br>исследование</a></li>
									<li><a href="#">Техническая <br>поддержка</a></li>
									<li><a href="#">Создать <br>исследование</a></li>
								</ul>
							</div>
							<div class="header-right">
								<div class="round-buttons-list">
									<a href="#"><i class="icon icon-grid"></i></a>
									<a href="#"><i class="icon icon-question"></i></a>
								</div>
								<div class="user-notifications">
									<div class="notifications-icon">
										<i class="icon icon-notifications"></i>
									</div>
									<span class="count">2</span>
									<div class="popover-block corner-right">
										<div class="item">
											<p class="item-title"><strong>Пополнение баланса</strong></p>
											<p>Ваш баланс пополнен на 100р.</p>
										</div>
										<div class="item">
											<p class="item-title"><strong>Новые ответы</strong></p>
											<p>10 новых ответов на опрос</p>
										</div>
										<div class="item">
											<div class="flex-center">
												<a href="notifications.php" class="">Показать все</a>
											</div>
										</div>
									</div>
								</div>
								<div class="user-block">
									<div class="user-avatar">
										<img src="" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
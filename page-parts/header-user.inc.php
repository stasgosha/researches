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
								<div class="financial-information-block">
									<div class="block-list">
										<div class="item">
											<div class="item-title">Ожидает <i class="fa fa-info-circle"></i></div>
											<div class="item-value">10$</div>
										</div>
										<div class="item">
											<div class="item-title">Подтверждено <i class="fa fa-info-circle"></i></div>
											<div class="item-value">25$</div>
										</div>
										<div class="item">
											<div class="item-title">Готово к выводу <i class="fa fa-info-circle"></i></div>
											<div class="item-value">150$</div>
										</div>
									</div>
									<div class="block-buttons">
										<a href="withdraw.php" class="btn btn-default btn-small btn-gray">Вывести</a>
									</div>
									<div class="block-list">
										<div class="item">
											<div class="item-title">Бонусы</div>
											<div class="item-value">
												<i class="icon icon-star"></i>
												<span>150</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="header-center">
								<ul class="header-nav">
									<li><a href="#">Профиль</a></li>
									<li><a href="#">Вопрос <br>ответ</a></li>
								</ul>
							</div>
							<div class="header-right">
								<div class="round-buttons-list">
									<a href="#"><i class="icon icon-grid"></i></a>
									<a href="#"><i class="icon icon-question"></i></a>
									<a href="#"><i class="icon icon-notifications"></i></a>
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
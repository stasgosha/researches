<?php $page_title = "Аудитория" ?>
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
				<div class="buttons-group big-margin">
					<div class="item">
						<a href="#" class="btn btn-default">Создать аудиторию</a>
					</div>
					<div class="item">
						<a href="#" class="btn btn-default">Создать опрос</a>
					</div>
				</div>
				<div class="margin-bottom-20px"></div>
				<table class="table no-side-paddings">
					<tr>
						<th>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="select_all">
								<label for="select_all"></label>
							</div>
						</th>
						<th>
							<div class="sort-by">
								<span>Название аудитории</span>
								<i class="fa fa-sort"></i>
							</div>
						</th>
						<th>
							<div class="sort-by">
								<span>Размер</span>
								<i class="fa fa-sort"></i>
							</div>
						</th>
						<th>
							<div class="sort-by">
								<span>Дата создания</span>
								<i class="fa fa-sort"></i>
							</div>
						</th>
						<th>Доступность</th>
					</tr>
					<tr>
						<td>
							<div class="actions-list">
								<div class="item">
									<div class="square-checkbox no-text">
										<input type="checkbox" id="auditory-row-1">
										<label for="auditory-row-1"></label>
									</div>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-cog"></i>
									</a>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-trash-o"></i>
									</a>
								</div>
							</div>
						</td>
						<td>Аудитория №1</td>
						<td>1000</td>
						<td>01.01.2018 10:48</td>
						<td>
							Готово <br><span class="small">Обновлено: 01.01.2018</span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="actions-list">
								<div class="item">
									<div class="square-checkbox no-text">
										<input type="checkbox" id="auditory-row-2">
										<label for="auditory-row-2"></label>
									</div>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-cog"></i>
									</a>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-trash-o"></i>
									</a>
								</div>
							</div>
						</td>
						<td>Аудитория №1</td>
						<td>1000</td>
						<td>01.01.2018 10:48</td>
						<td>
							Готово <br><span class="small">Обновлено: 01.01.2018</span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="actions-list">
								<div class="item">
									<div class="square-checkbox no-text">
										<input type="checkbox" id="auditory-row-3">
										<label for="auditory-row-3"></label>
									</div>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-cog"></i>
									</a>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-trash-o"></i>
									</a>
								</div>
							</div>
						</td>
						<td>Аудитория №1</td>
						<td>1000</td>
						<td>01.01.2018 10:48</td>
						<td>
							Готово <br><span class="small">Обновлено: 01.01.2018</span>
						</td>
					</tr>
					<tr>
						<td>
							<div class="actions-list">
								<div class="item">
									<div class="square-checkbox no-text">
										<input type="checkbox" id="auditory-row-4">
										<label for="auditory-row-4"></label>
									</div>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-cog"></i>
									</a>
								</div>
								<div class="item">
									<a href="#">
										<i class="fa fa-trash-o"></i>
									</a>
								</div>
							</div>
						</td>
						<td>Аудитория №1</td>
						<td>1000</td>
						<td>01.01.2018 10:48</td>
						<td>
							Готово <br><span class="small">Обновлено: 01.01.2018</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

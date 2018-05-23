<?php $page_title = "Расширение интересов" ?>
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
				<div style="max-width: 570px">
					<p>В данном разделе будут отображаться все уже имеющиеся интересы (темы, в которых респондент разбирается), а также респондент будет иметь возможность из общей таблицы категорий выбрать новую и пройти по ней аттестацию.</p>
				</div>
				<div class="margin-bottom-40px"></div>
				<table class="table no-side-paddings">
					<tr>
						<th>
							<div class="sort-by">
								<span>Название категории</span>
								<i class="fa fa-sort"></i>
							</div>
						</th>
						<th>
							<div class="sort-by">
								<span>Вкл</span>
								<i class="fa fa-sort"></i>
							</div>
						</th>
					</tr>
					<tr>
						<td>Авто</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="auto_checkbox">
								<label for="auto_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Авиа</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="avia_checkbox" checked>
								<label for="avia_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Транспорт</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="transport_checkbox" checked>
								<label for="transport_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Образование</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="grade_checkbox" checked>
								<label for="grade_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Здравоохранение</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="healthcare_checkbox" checked>
								<label for="healthcare_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Медицина</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="medicine_checkbox">
								<label for="medicine_checkbox"></label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Техника</td>
						<td>
							<div class="square-checkbox no-text">
								<input type="checkbox" id="tech_checkbox">
								<label for="tech_checkbox"></label>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include('page-parts/footer.inc.php'); ?>

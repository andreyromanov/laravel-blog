@extends('admin.layouts.app_admin')

@section('content')
<h1>Admin!!!</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
  Категорий <span class="badge badge-light">0</span>
</button></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
  Материалов <span class="badge badge-light">0</span>
</button></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
  Посетителей <span class="badge badge-light">0</span>
</button></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
  Сегодня <span class="badge badge-light">0</span>
</button></p>
			</div>
		</div>

			</div>
			<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-primary" href="#">Создать категорию</a><br><br>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">
						Кол-во материалов
					</p>
				</a>
			</div>

			<div class="col-sm-6">
				<a class="btn btn-primary" href="#">Создать материал</a><br><br>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">
						Категория
					</p>
				</a>
			</div>
		</div>
</div>
@endsection
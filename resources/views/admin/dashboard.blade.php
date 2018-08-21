@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
					Категорий <span class="badge badge-light">{{$count_categories}}</span>
				</button></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><button type="button" class="btn btn-primary">
					Материалов <span class="badge badge-light">{{$count_articles}}</span>
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
			<a class="btn btn-primary" href="{{route('admin.category.create')}}">Создать категорию</a><br><br>

			@foreach ($categories as $category)

			<a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
				<h4 class="list-group-item-heading">{{$category->title}}</h4>
				<p class="list-group-item-text">
					{{$category->articles()->count()}}
				</p>
			</a>

			@endforeach
			
		</div>

		<div class="col-sm-6">

			<a class="btn btn-primary" href="{{route('admin.article.create')}}">Создать материал</a><br><br>

			@foreach ($articles as $article)

			<a class="list-group-item" href="{{route('admin.article.edit', $article)}}">
				<h4 class="list-group-item-heading">{{$article->title}}</h4>
				<p class="list-group-item-text">
					{{$article->categories()->pluck('title')->implode(', ')}}
				</p>
			</a>

			@endforeach

		</div>
	</div>
</div>
@endsection
@foreach ($categories as $category)

	@if ($category->children->where('published', 1)->count())
	<li class="navbar-brand dropdown">
		<a href="{{url("/blog/category/$category->slug")}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			{{$category->title}} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<a class="navbar-brand" href="{{url("/blog/category/$category->slug")}}">
			{{$category->title}} <span class="caret"></span>
		</a>
			@include('layouts.top_menu', ['categories' => $category->children])
		</ul>
	@else
		<li class="navbar-brand">
			<a href="{{url("/blog/category/$category->slug")}}">
				{{$category->title}} 
			</a>
	@endif
	</li>
@endforeach
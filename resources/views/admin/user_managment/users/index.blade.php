@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	
	@component('admin.components.breadcrumb')
	@slot('title') Список пользователей	@endslot
	@slot('parent') Главная	@endslot
	@slot('active') Пользователи @endslot
	@endcomponent

	<hr>

	<a href="{{route('admin.user_managment.user.create')}}"><button type="button" class="btn btn-primary float-right">Создать пользователя&nbsp;&nbsp;&nbsp;<i class="fas fa-plus"></i></button></a><br><br>
	<table class="table table-striped">
		<thead>
			<th>Имя</th>
			<th>Емайл</th>
			<th class="text-right">Действие</th>
		</thead>
		<tbody>
			@forelse($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td class="text-right"> 
					<form onsubmit="if(confirm('Удалить?')) {return true} else {return false}" action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">

					{{method_field('DELETE')}}
					{{csrf_field()}}

					<a href="{{route('admin.user_managment.user.edit', $user)}}"><i class="fas fa-edit"></i> </a>

					<button type="subbmit" class="btn"> <i class="fas fa-trash"></i></button>
						
					</form>
					
					
					
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="3" class="text-center"><h2>Данных нет!</h2></td>
			</tr>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<ul class="pagination float-right">
						{{$users->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

@endsection
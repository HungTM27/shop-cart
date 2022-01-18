@extends('admin.layout-admin.Home')
@section('title','Danh Sách Sản Phẩm')
@section('content')
<div class="table-responsive">
	<table class="table" id="data-table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Tên</th>
				<th scope="col">Email</th>
				<th scope="col">Quyền</th>
				<th scope="col">Chức Năng</th>
			</tr>
		</thead>
		@foreach ($user as $p )
		<tbody>
			<tr>
				<td>{{$p->id}}</td>
				<td>{{ $p->name}}</td>
				<td>{{ $p->email }}</td>
				<td>@if ($p->role == 1)
					<p class="text-secondary">Admin</p>
					@elseif ($p->role == 2)
					<p class="text-white">user</p>
					@endif
				</td>
				<td>
					<a href="{{ route('register.edit',[$p->id]) }}" class="btn btn-sm btn-success"><i
							class="fa fa-edit"></i></a>
					<a href="{{ route('register.edit',[$p->id]) }}" class="btn btn-sm btn-danger"><i
							class="fa fa-trash"></i></a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	@endsection

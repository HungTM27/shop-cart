@extends('admin.layout-admin.Home')
@section('title','Danh Sách Sản Phẩm')
@section('content')
<div class="table-responsive">
	<table class="table" id="data-table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Tên</th>
				<th scope="col">Image</th>
				<th scope="col">Giá</th>
				<th scope="col">Số Lượng</th>
				<th scope="col">Mô Tả</th>
				<th scope="col">Danh Mục</th>
				<th scope="col">Chức Năng</th>
			</tr>
		</thead>
		@foreach ($prods as $p )
		<tbody>
			<tr>
				<td>{{ $loop->iteration + $prods->firstItem() - 1 }}</td>
				<td>{{ $p->name}}</td>
				<td>
					<img src="{{asset('uploads/product' . $p->image)}}" width="70">
				</td>
				<td>{{ $p->price }}</td>
				<td>{{ $p->quantity }}</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	@endsection
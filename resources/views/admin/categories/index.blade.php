@extends('admin.layout-admin.Home')
@section('title','Danh Mục')
@section('content')
<div class="row">

	<div class="col-md-12">
		@if(Session::has('success'))
		<p class="text-white">{{ Session::get('success') }}</p>
		@elseif (Session::has('erorrs'))
		<p class="text-white">{{ Session::get('erorrs') }}</p>
		@endif
		<div class="table-responsive">
			<table class="table" id="data-table">
				<thead>
					<tr>
						<th scope="col">#</th>
                        <th scope="col"></th>
						<th scope="col">Name</th>
						<th scope="col">Active</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($model as $c)
					<tr>

						<td>{{$loop->iteration}}</td>
                        <td><input name="select_all" value="" type="checkbox"></td>
						<td>{{$c->name}}</td>
						<td>@if ($c->active == 1)
							<p class="text-secondary">Active</p>
							@else
							<p class="text-white">Close</p>
							@endif
						</td>
						<td>
							<a href="{{ route('categories.save') }}" class="btn btn-sm btn-success"><i
									class="fa fa-plus" aria-hidden="true"></i></a>
							<a href="{{ route('categories.edit',['id' => $c->id]) }}"
								class="btn btn-sm btn-info "><i class="fa fa-edit"></i></a>
							<a href="{{ route('categories.remove',['id' => $c->id]) }}"
								class="btn btn-sm btn-danger btn-remove"><i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="d-flex justify-content-center">
			{{$model->appends(request()->query())->links() }}
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	$(document).ready(function(){
	    $('.btn-remove').on('click', function(){
		   Swal.fire({
			  title: 'Cảnh báo!',
			  text: "Bạn chắc chắn muốn xóa danh mục này?",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Đồng ý!'
		   }).then((result) => {
			  if (result.value) {
				 var url = $(this).attr('href');
				 window.location.href = url;
			  }
		   })
		   return false;
	    });
	});


var dataTable = document.getElementById('data-table');
var checkItAll = dataTable.querySelector('input[name="select_all"]');
var inputs = dataTable.querySelectorAll('tbody>tr>td>input');
checkItAll.addEventListener('change', function() {
  if (checkItAll.checked) {
    inputs.forEach(function(input) {
      input.checked = true;
    });
  }
});
</script>
@endsection

@extends('admin.layout-admin.Home')
@section('content')
<div class="container-fluid">

	<div class="row mt-3">
		<div class="col-md-3"></div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div class="card-title">Thêm Danh Mục</div>
					<hr>
					<form action="" method="post">
						@csrf
						<div class="form-group">
							<label for="input-1">Name</label>
							<input type="text" name="name" class="form-control" id="input-1"
								placeholder="Enter Your Name" value="{{old('name', $cates->name)}}">
						</div>
						<div class="form-group">
							<label for="input-1">Active</label>
							<select name="active" class="form-control">
								@foreach(config('common.ACTIVE') as $key => $value)
								<option value="{{ $key }}">{{ $value }}</option>
								@endforeach
							</select>
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-sm btn-primary">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End Row-->

	<!--start overlay-->
	<div class="overlay toggle-menu"></div>
	<!--end overlay-->

</div>
@endsection
@extends('admin.layout-admin.Home')
@section('content')
<div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-3"></div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div class="card-title">Sửa Tài Khoản</div>
					<hr>
					<form action="" method="post">
						@csrf
						<div class="form-group">
							<label for="input-1">Name</label>
							<input type="text" name="name" class="form-control" id="input-1"
								placeholder="Enter Your Name" value="{{old('name', $use->name)}}">
						</div>
						<div class="form-group">
							<label for="input-1">Email</label>
							<input type="email" name="email" class="form-control" id="input-1"
								placeholder="Enter Your Name" value="{{old('email', $use->email)}}">
						</div>
						<div class="form-group">
							<label for="input-1">Quyền</label>
							<select name="role" class="form-control">
								@foreach(config('common.USER') as $key => $value)
								<option value="{{ $key }}">{{ $value }}</option>
								@endforeach
							</select>
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-sm btn-primary">Thêm</button>
							<a href="" class="btn btn-sm btn-danger">Huỷ</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay toggle-menu"></div>
</div>
@endsection
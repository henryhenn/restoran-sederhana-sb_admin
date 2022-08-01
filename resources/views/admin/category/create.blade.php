@extends('admin.layouts.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if (session()->has('message'))
				<div class="alert alert-success">
					{{ session('message') }}
				</div>
			@endif
			<div class="card">
				<div class="card-header">Manage Food Category</div>
				<div class="card-body">
					<form action="{{ route('categories.store') }}" method="post">
						@csrf
						<div class="form-group mb-3">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
							@error('name')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

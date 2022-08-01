@extends('admin.layouts.master')

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-8">
				@if (session()->has('message'))
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
				@endif
				<div class="card">
					<div class="card-header">Add New Food</div>
					<div class="card-body">
						<form action="{{ route('foods.store') }}" method="post" enctype="multipart/form-data">
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
							<div class="form-group mb-3">
								<label for="description">Description</label>
								<textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">
                </textarea>
								@error('description')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group mb-3">
								<label for="price">Price</label>
								<input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
								@error('price')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group mb-3">
								<label for="category">Category</label>
								<select name="category_id" id="category" class="custom-select">
									<option value="" selected>Pilih Kategori</option>
									@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
								@error('category')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group mb-3">
								<label for="image">Image</label>
								<input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
								@error('image')
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
	</div>
@endsection

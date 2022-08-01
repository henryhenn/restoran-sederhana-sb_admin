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
				<div class="card-header">
					All Category
					<span class="float-right">
						<a href="{{ route('categories.create') }}" class="btn btn-outline-secondary">Add Category</a>
					</span>
				</div>
				<div class="card-body">
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@if (count($categories) > 0)
								@foreach ($categories as $key => $category)
									<tr>
										<td>{{ $key + 1 }}</td>
										<td>{{ $category->name }}</td>
										<td>
											<a href="{{ route('category.edit', $category->id) }}" class="btn btn-outline-success">Edit</a>
										</td>
										<td>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
												data-bs-target="#exampleModal{{ $category->id }}">
												Delete
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
														</div>
														<div class="modal-body">
															Apakah Anda Yakin?
														</div>
														<div class="modal-footer">
															<form action="{{ route('category.destroy', $category->id) }}" method="post">
																@method('delete')
																@csrf
																<button type="submit" class="btn btn-danger">Yakin</button>
																<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
															</form>
														</div>
													</div>
												</div>
										</td>
									</tr>
								@endforeach
							@else
								<tr>
									<td colspan="4">
										Tidak ada kategori yang dapat ditampilkan
									</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

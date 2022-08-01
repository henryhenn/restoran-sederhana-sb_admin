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
					All Food
					<span class="float-right">
						<a href="{{ route('foods.create') }}" class="btn btn-outline-secondary">Add Food</a>
					</span>
				</div>
				<div class="card-body">
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Description</th>
								<th>Price</th>
								<th>Category</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@if (count($foods) > 0)
								@foreach ($foods as $key => $food)
									<tr>
										<td>
											<img src="{{ asset('image/' . $food->image) }}" alt="" class="img-fluid">
										</td>
										<td>{{ $food->name }}</td>
										<td>{{ $food->description }}</td>
										<td>{{ $food->price }}</td>
										<td>{{ $food->category->name }}</td>
										<td>
											<a href="{{ route('food.edit', $food->id) }}" class="btn btn-outline-success">Edit</a>
										</td>
										<td>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
												data-bs-target="#exampleModal{{ $food->id }}">
												Delete
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal{{ $food->id }}" tabindex="-1"
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
															<form action="{{ route('food.destroy', $food->id) }}" method="post">
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
								Tidak ada kategori yang dapat ditampilkan
							@endif
						</tbody>
					</table>
					{{ $foods->links() }}
				</div>
			</div>
		</div>
	</div>v>
@endsection

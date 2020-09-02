@extends('backend.backendtemplate')
@section('content')

			<h2>Category Lists</h2>
			<a class="btn btn-primary" href="{{route('categories.create')}}">Add New</a>

			<div class="row">
				<div class="col-md-10">
					<table class="table table-bordered">
						<thead class="bg-dark">
							<tr>
					
								<th>CategoryId</th>
								<th>Name</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							
							@foreach($categories as $category)
								<tr>

									<td>{{$i++}}</td>
									
									<td>{{$category->name}}</td>
									{{-- <td>{{$brand->price}}MMK</td> --}}
									<td><img src="{{asset($category->photo)}}" width="100" height="100"></td>
									<td>
										<a href="" class="btn btn-primary">Detail</a>
										<a href="" class="btn btn-danger">Delete</a>
										<a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
										
									</td>

								</tr>

							@endforeach

							
						</tbody>
					</table>
				</div>
			</div>
	
@endsection
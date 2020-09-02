@extends('backend.backendtemplate')
@section('content')

			<h2>Brand Lists</h2>
			<a class="btn btn-primary" href="{{route('brands.create')}}">Add New</a>

			<div class="row">
				<div class="col-md-10">
					<table class="table table-bordered">
						<thead class="bg-dark">
							<tr>
					
								<th>BrandId</th>
								<th>Name</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							
							@foreach($brands as $brand)
								<tr>

									<td>{{$i++}}</td>
									
									<td>{{$brand->name}}</td>
									{{-- <td>{{$brand->price}}MMK</td> --}}
									<td><img src="{{asset($brand->photo)}}" width="100" height="100"></td>
									<td>
										<a href="" class="btn btn-primary">Detail</a>
										<a href="" class="btn btn-danger">Delete</a>
										<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-info">Edit</a>
										
									</td>

								</tr>

							@endforeach

							
						</tbody>
					</table>
				</div>
			</div>
	
@endsection
@extends('backend.backendtemplate')
@section('content')

			<h2>Subcategory Lists</h2>
			<a class="btn btn-primary" href="{{route('subcategories.create')}}">Add New</a>

			<div class="row">
				<div class="col-md-10">
					<table class="table table-bordered">
						<thead class="bg-dark">
							<tr>
					
								<th>SubcategoryId</th>
								<th>Name</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							
							@foreach($subcategories as $subcategory)
								<tr>

									<td>{{$i++}}</td>
									
									<td>{{$subcategory->name}}</td>
									{{-- <td>{{$brand->price}}MMK</td> --}}
									{{-- <td>{{$subcategory->path}}</td> --}}
									<td>
										<a href="" class="btn btn-primary">Detail</a>
										<a href="" class="btn btn-danger">Delete</a>
										<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-info">Edit</a>
										
									</td>

								</tr>

							@endforeach

							
						</tbody>
					</table>
				</div>
			</div>
	
@endsection
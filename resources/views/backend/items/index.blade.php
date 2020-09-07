@extends('backend.backendtemplate')
@section('content')

			<h2>Item Lists</h2>
			<a class="btn btn-primary" href="{{route('items.create')}}">Add New</a>

			<div class="row">
				<div class="col-md-10">
					<table class="table table-bordered">
						<thead class="bg-dark">
							<tr>
								<th>No</th>
								<th>CodeNo</th>
								<th>Name</th>
								<th>Price</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							@foreach($items as $item)
								<tr>

									<td>{{$i++}}</td>
									<td>{{$item->codeno}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->price}}MMK</td>
									<td>{{$item->photo}}</td>
									<td>
										<a href="" class="btn btn-primary">Detail</a>
										<a href="" class="btn btn-danger delete_btn">Delete</a>
										<a href="{{route('items.edit',$item->id)}}" class="btn btn-info">Edit</a>
										
									</td>

								</tr>

							@endforeach

							
						</tbody>
					</table>
				</div>
			</div>
	
@endsection
@section('script')
		<script type="text/javascript" src="{{asset('custom.js')}}"></script>
		@endsection

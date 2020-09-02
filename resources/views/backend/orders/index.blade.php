@extends('backend.backendtemplate')
@section('content')

			<h2>Order Lists</h2>
			{{-- <a class="btn btn-primary" href="{{route('items.create')}}">Add New</a> --}}

			<div class="row">
				<div class="col-md-10">
					<table class="table table-bordered">
						<thead class="bg-dark">
							<tr>
								<th>No</th>
								<th>Voucher No</th>
								<th>User</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							 @php $i=1; @endphp
							@foreach($orders as $order)
								<tr>

									<td>{{$i++}}</td>
									<td>{{$order->voucherno}}</td>
									<td>{{$order->user->name}}</td>
									<td>{{$order->total}}MMK</td>
									{{-- <td>{{$item->photo}}</td> --}}
									<td>
										<a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Detail</a>
										
									</td>

								</tr>

							@endforeach 

							
						</tbody>
					</table>
				</div>
			</div>
	
@endsection
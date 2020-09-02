@extends('backend.backendtemplate')
@section('content')

			<h1>Category create form</h1>

			<div class="row">
				<div class="col-md-6">
					<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="form-group row">
						<label>CategoryID</label>
						<input class="form-control" type="text" name="categoryid">
				    </div>
				    <div class="form-group row">
						<label>Name</label>
						<input calss="form-control" type="text" name="name" class="form-control">
					</div>
					<div class="form-control">
						<label>Photo</label>
					<input calss="form-control" type="file" name="photo">
					</div>
					{{-- <div class="form-group row">
					<label>Price</label>
					<input class="form-control" type="text" name="price">
					</div>
					<div class="form-group row">
					<label>Discount</label>
					<input class="form-control" type="text" name="discount" value="0">
					</div>
					<div class="form-group row">
					<label>Description</label>
					<textarea class="form-control" name="description"></textarea>
					</div>

					<div class="col-md-10">
						<select class="form-control form-control-md" id="inputBrand" name="brand">
							<optgroup label="Choose Brand">
								@foreach($brands as $brand)
								<option value="{{$brand->id}}">{{$brand->name}}</option>
								@endforeach
							</optgroup>
						</select>

							<select class="form-control form-control-md" id="inputBrand" name="subcategory">
							<optgroup label="Choose Subcategory">
								@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
								@endforeach
							</optgroup>

						</select>
					</div> --}}

					<div class="form-group row">
					
					<input type="submit" name="" value="Create" class="btn btn-primary">
					</div>
					</form>
				</div>
			</div>
	
@endsection
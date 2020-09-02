@extends('backend.backendtemplate')
@section('content')

			<h1>Item edit form</h1>

			<div class="row">
				<div class="col-md-6">
					<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
					<div class="form-group row">
						<label>Code No</label>
						<input class="form-control" type="text" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				    </div>
				    <div class="form-group row">
						<label>Name</label>
						<input calss="form-control" type="text" name="name" value="{{$item->name}}" class="form-control" >
					</div>
					<div class="form-control">
						<label>Photo</label>
					<input calss="form-control" type="file" name="photo">
					
					</div>
					<img src="{{asset($item->photo)}}" width="120" height="100">
					<input type="hidden" name="oldphoto" value="{{$item->photo}}">
					<div class="form-group row">
					<label>Price</label>
					<input class="form-control" type="text" name="price" value="{{$item->price}}">
					</div>
					<div class="form-group row">
					<label>Discount</label>
					<input class="form-control" type="text" name="discount" value="{{$item->discount}}">
					</div>
					<div class="form-group row">
					<label>Description</label>
					<textarea class="form-control" name="description">{{$item->description}}</textarea>
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
{{-- 						<span class="text-danger">{{$errors->first('brand');}}</span>
 --}}					</div>

					<div class="form-group row">
					
					<input type="submit"  value="Update" class="btn btn-primary">
					</div>
					</form>
				</div>
			</div>
	
@endsection
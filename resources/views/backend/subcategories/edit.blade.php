@extends('backend.backendtemplate')
@section('content')

			<h1>Subcategory edit form</h1>

			<div class="row">
				<div class="col-md-6">
					<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
					<div class="form-group row">
						<label>Subcategory ID</label>
						<input class="form-control" type="text" name="subcategoryid" value="{{$subcategory->subcategoryid}}" readonly="readonly">
				    </div>
				    <div class="form-group row">
						<label>Name</label>
						<input calss="form-control" type="text" name="name" value="{{$subcategory->name}}" class="form-control" >
					</div>
					

					

					 <div class="col-md-10">
						<select class="form-control form-control-md" id="inputCategory" name="category">
							<optgroup label="Choose Category">
								@foreach($subcategories as $subcategory)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</optgroup>
						</select>

							{{-- <select class="form-control form-control-md" id="inputBrand" name="subcategory">
							<optgroup label="Choose Subcategory">
								@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
								@endforeach
							</optgroup>

						</select>  --}}
{{-- 						<span class="text-danger">{{$errors->first('brand');}}</span>
 --}}					{{-- </div> --}}

					<div class="form-group row">
					
					<input type="submit"  value="Update" class="btn btn-primary">
					</div>
					</form>
				</div>
			</div>
	
@endsection
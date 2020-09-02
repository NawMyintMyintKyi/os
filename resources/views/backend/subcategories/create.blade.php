@extends('backend.backendtemplate')
@section('content')

			<h1>Subcategory create form</h1>

			<div class="row">
				<div class="col-md-6">
					<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
						
						@csrf
					<div class="form-group row">
						<label>SubcategoryID</label>
						<input class="form-control" type="text" name="subcategoryid">
				    </div>
				    <div class="form-group row">
						<label>Name</label>
						<input calss="form-control" type="text" name="name" class="form-control">
					</div>
					

					  <div class="col-md-10">
						<select class="form-control form-control-md" id="inputCategory" name="category">
							<optgroup label="Choose Category">
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</optgroup>
						</select> 
					</div> 

							{{-- <select class="form-control form-control-md" id="inputBrand" name="subcategory">
							<optgroup label="Choose Subcategory">
								@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
								@endforeach
							</optgroup>

						</select> --}}
						{{-- <span class="text-danger">{{$errors->first('brand');}}</span> --}}
 					

					<div class="form-group row">
					
					<input type="submit" name="" value="Create" class="btn btn-primary">
					</div>
					</form>
				</div>
			{{-- </div> --}}
	
@endsection
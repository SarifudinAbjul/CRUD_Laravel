@extends('layouts.app')
@section('content')
<div class="container my-4">

	<div class="row justify-content-center">
        <div class="col">
             <div class="card my-4">
	           <div class="card-header"><b>Create Post</b></div>

	           <div class="card-body">
			   <form action="{{ route('tanya.store') }}" method="post">
					@csrf
				
					<div  class="form-group">
						<label for="title" >Judul</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Post Title" value="{{ old('title') }}">
						@error('title')
						  <div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div  class="form-group">
						<label for="content" >Content</label>
						<textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="Post content" rows="6" >{{ old('content') }}</textarea>
						@error('title')
						  <div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<button class="btn btn-primary" type="submit" name="save">Send</button>
				</form>
	           </div>
	         </div>
        </div>
	</div>
</div>
@endsection
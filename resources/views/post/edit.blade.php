<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Post List') }}
</h2>
</x-slot>
<div class="container">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-dark text-white">
				Add New Posts
				<a href="{{ route('posts.index')}}" class="btn btn-danger btn-sm float-end">Back List</a>
			</div>
			<div class="card-body">
				<form action="{{ route('post.update',$post->id)}}" method="POST">
					@csrf
					<input type="hidden" name="id" value="{{ $post->id}}">
					<div class="form-group">
						<label for="titel">Tilel</label>
						<input type="text" class="form-control" id="titel" name="titel" value="{{ $post->titel}}">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" class="form-control" id="description" name="description" value="{{ $post->description}}">
					</div>
					<div class="form-group">
						<label for="length">Length</label>
						<input type="text" class="form-control" id="length" name="length" value="{{ $post->length}}">
					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-success btn-block">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</x-app-layout>
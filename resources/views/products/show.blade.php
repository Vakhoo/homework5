<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div>{{$productsshow->title}}</div>
		<div>{{$productsshow->description}}</div>
	</div>
	<form method="POST" action="{{ route('adminlongdesc') }}">
		@csrf
		<input type="hidden" name="id" value="{{$productsshow->id}}">
		<hr>
		<label>long description: </label>
		<textarea name="long_description">{{$desc->Long_desc}}</textarea>
		<button>save</button>
	</form>
	<form method="POST" action="{{ route('storecomment') }}">
		@csrf
		<input type="hidden" name="id" value="{{$productsshow->id}}">
		<hr>
		<textarea name="comment"></textarea>
		<button>comment</button>
	</form>
	@foreach ($comment as $comm)
		<div>
			{{$comm->comment}}
		</div>
	@endforeach

</body>
</html>
{{-- <!DOCTYPE html> --}}
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<form action="{{ route('admimnupdate') }}" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{$productsedit->id}}">
			<label>title:</label>		
			<input type="text" class="form-control" name="title" value="{{$productsedit->title}}">
			<label>description</label>
			<textarea class="form-control" name="description">{{$productsedit->description}}</textarea>
			<button class="btn btn-primary w-100">save</button>
		</form>
	</div>

</body>
</html>

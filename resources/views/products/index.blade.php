<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		table, tr, td, th{
			border: solid 2px black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>title</th>
			<th>description</th>
			<th>action</th>
		</tr>
		<tr>
			@foreach ($products as $product)
				<tr>
					<td>{{++$loop->index}}</td>
					<td>{{$product->title}}</td>
					<td>{{$product->description}}</td>
					<td>
						<a href="{{ route('adminshow', ["id"=>$product->id]) }}">დათვალიერება</a>
						<form method="POST" action="{{ route('admindelete') }}">
							@csrf
							<input type="hidden" name="id" value="{{$product->id}}">
							<button>წაშლა</button>
						</form>
						<a href="{{ route('adminedit', ["id"=>$product->id]) }}">ჩასწორება</a>
					</td>
				</tr>
			@endforeach
		</tr>
	</table>

</body>
</html>













{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href={{ asset('css/app.css') }}>
</head>
<body>
	<div class="container">
		<table class='table'>
			<tr>
				<td>title</td>
				<td>text</td>
				<td>short description</td>
			</tr>
			@foreach ($data as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->text }}</td>
					<td>{{ $post->short_description }}</td>

				</tr>
			@endforeach
		</table>
	</div>

</body>
</html> --}}
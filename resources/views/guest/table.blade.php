<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		table, tr, td, th{
			border: 1px solid black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>
				#
			</th>

			<th> 
				name
			</th>
			<th>
				lastname
			</th>
			<th>
				address
			</th>
			<th>
				biography
			</th>
			<th>
				birth day
			</th>
		</tr>
		@foreach ($newdata as $var)
			<tr>
				<td>{{++$loop->index}}</td>
				<td>{{$var ["name"] }}</td>
				<td>{{$var ["lastname"]}}</td>
				<td>{{$var ["address"]}}</td>
				<td>{{$var ["biography"]}}</td>
				<td>{{$var ["birthd"]}}</td>
			</tr>
		@endforeach
	</table>

</body>
</html>
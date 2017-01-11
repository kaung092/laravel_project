<html>
<head>
	<title data-type= 'dashboard' >DashBoard</title>
	Dashboard Page

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<table class="table">
	<thead>
	    <tr>
		<th>id</th>
		<th>url</th>
		<th>ip</th>
		<th>item_type</th>
		<th>item_id</th>
		<th>created_at</th>
	    </tr>
	</thead>
	<tbody id="record-list" name="record-list">
	    @foreach ($records as $rec)
	    <tr>
		<td>{{$rec->id}}</td>
		<td>{{$rec->url}}</td>
		<td>{{$rec->ip}}</td>
		<td>{{$rec->item_type}}</td>
		<td>{{$rec->item_id}}</td>
		<td>{{$rec->created_at}}</td>
		<td>

		</td>
	    </tr>
	    @endforeach
	</tbody>
	</table>	



</body>

</html>

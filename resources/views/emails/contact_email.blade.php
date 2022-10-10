<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table, th, td {
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table class="table table-bordered">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</thead>
		<tbody>
			<tr>
				<td>{{ isset($data['name']) ? $data['name'] : "" }}</td>
				<td>{{ isset($data['email']) ? $data['email'] : "" }}</td>
				<td>{{ isset($data['message']) ? $data['message'] : "" }}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
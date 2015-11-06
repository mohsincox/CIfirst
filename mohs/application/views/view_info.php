<html>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php foreach($result as $value):?>
		<tr>
			<td><?php echo $value->name?></td>
			<td><?php echo $value->email?></td>
			<td><a href="update/<?php echo $value->id;?>">Edit&nbsp;</a><a href="delete/<?php echo $value->id;?>">Delete</a></td>
		</tr>
		<?php endforeach;?>
	</table>
	<a href="con_insert">ADD</a>
</body>
</html>
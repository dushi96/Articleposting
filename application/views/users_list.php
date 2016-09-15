<!DOCTYPE html>
<html lang-'en'>
<head>
	<meta charset='UTF-8'>
	<title>User Accounts</title>
</head>
<body>
	<?php foreach($users as $user): ?>
	<table>
		<tr>
			<td>
				<?=$user['firstname']?>
			</td>
			<td>
				<?=$user['lastname']?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
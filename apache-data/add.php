<html>
<head>
	<title>Add Data</title>
</head>

<body style="background-color: #9FC5E8;">
	<h2>Add Data</h2>
	<p>
		<a href="book.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<br>
	<button onclick="window.location.href='index.html';">Return</button>
	</br>
	
</body>
</html>




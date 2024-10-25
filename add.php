ADD.HTML

<html>
<head>
	<title>Insert Data </title>
</head>
<body>
<form action="add.php" method="post" name="form1">
<table width="25%" border="0">
<tbody><tr> 
 <td>Name</td>
 <td><input type="text" name="name"></td>
</tr>
<tr> 
<td>Age</td>
 <td><input type="text" name="age"></td>
</tr>
<tr> 
 <td>Email </td>
<td><input type="text" name="email"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
</tbody></table>
</form>
</body>
</html>

ADD.PHP

<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
if(empty($name) || empty($age) || empty($email)) {
				
if(empty($name)) {
echo '<font color="red">Name field is empty.</font><br>';
}
		
if(empty($age)) {
echo '<font color="red">Age field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';
}
echo '<br><a href="javascript:self.history.back();">Go Back</a>';
} else { 
$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
echo '<font color="green">Data added successfully.</font>';
echo '<br><a href="index.php">View Result</a>';
}
}
?>

INDEX.PHP


<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Display data in table with edit button </title>
</head>

<body>
<a href="add.html">Add New Data</a><br><br>

	<table width='50%'height='15%' border='0'>

	<tr bgcolor='yellow'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>	
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td bgcolor=''>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
echo "<td bgcolor='green'><a href='edit.php?id=$res[id]'><font color='white'>Edit</a>";         
	}
	?>
	</table>
</body>
</html>


EDIT.PHP


<?php
// including the database connection file
include_once("config.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="editprocess.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
		<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>


editprocess.php
<?php
include_once("config.php");
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
if(empty($name) || empty($age) || empty($email)) {	
if(empty($name)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($age)) {
echo '<font color="red">Age field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
header("Location: index.php");
}
}
?>

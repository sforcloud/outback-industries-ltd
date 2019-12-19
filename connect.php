$name = filter_input(INPUT_POST, 'name');
$mno = filter_input(INPUT_POST, 'mno');
$location = filter_input(INPUT_POST, 'location');
if (!empty($name)){
if (!empty($mno)){
if (!empty($location)){
$host = "database-1.cazq0kugjvu9.us-east-1.rds.amazonaws.com ";
$dbusername = "admin";
$dbpassword = "";
$dbname = "demodb";
$port = "3305"
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname, $port);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO details (name, mno, location)
values ('$name','$mno','$location')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "location should not be empty";
die();
}
}
else{
echo "mobile no should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}

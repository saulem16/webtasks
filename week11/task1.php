<html>
<head>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<?php
$host = 'localhost';
$user='root';
$password = '';
$db = 'cars';
$conn = mysqli_connect($host,$user,$password,$db);
$conn_error = mysqli_connect_error();
if ($conn_error != null){
    echo "There is error:<p>  $conn_error </p>";
}
$query="SELECT * FROM `cars`;";
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($results)) {
    echo "<div class='car'><img src=".$row['url']."><div class='card'><div class='card'>
<b>".$row['maker']." ".$row['model']."</b><p>".$row['price']."</p>".$row['year']." year "."</div></div>";
}
mysqli_close($conn);
?>
</body>
</html>
<html>
<head>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<a href="task2.php?maker=query0">All</a>
<a href="task2.php?maker=query1">Toyota</a>
<a href="task2.php?maker=query2">BMW</a>
<p></p>

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
$query0="SELECT * FROM `cars`;";
$query1="SELECT * FROM `cars` WHERE `maker`='Toyota';";
$query2="SELECT * FROM `cars` WHERE `maker`='BMW';";
if($_GET['maker']=="query1"){
    $query=$query1;
}
elseif($_GET['maker']=='query2'){
    $query=$query2;
}
else{
    $query=$query0;
}
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($results)) {
    echo "<div class='car'><img src=".$row['url']."><div class='card'><div class='card'>
<b>".$row['maker']." ".$row['model']."</b><p>".$row['price']."</p>".$row['year']." year "."</div></div>";
}
mysqli_close($conn);
?>
</body>
</html>
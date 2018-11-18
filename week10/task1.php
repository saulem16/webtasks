<?php
$usernames = ["billgates","johndoe","stevejobs"];
$Name=filter_input(INPUT_POST,'Name');
$Password=filter_input(INPUT_POST,'Password');
$CPass=filter_input(INPUT_POST,'CPass');
if(in_array($Name,$usernames)){
    echo "<div class='error'>";
    echo "USERNAME" .$Name . "IS ALREADY RESERVED!!!";
    echo "</div>" ;
    echo "<br>";
}
if($Name==""){
    echo "<div class='error'>";
    echo "USERNAME SHOULDN'T BE EMPTY!!!";
    echo "</div>" ;
    echo "<br>";
}
if($Password!=$CPass){
    echo "<div class='error'>";
    echo "PASSWORD AND CONFIRM PASSWORD NOT EQUAL TO EACH OTHER";
    echo "</div>";
    echo "<br>";
}
if($Password=="" and $CPass ==""){
    print "<div class='error'>";
    print "PASSWORD AND CONFIRM PASSWORD SHOULDN'T !!!";
    print "</div>";
    print "<br>";
}
?>

<html>
<head><style>
        .error{
            border:1px solid red;
            padding:2px;
            width:300px;
            margin:3px;
        }
    </style></head>
<body>
<form action="task9_1.php" method="post">

    <label>Username:</label>
    <input type="text" name = "Name"><br>
    <label>Password:</label>
    <input type="password" name = "Password"><br>
    <label>Confirm Password:</label>
    <input type="password" name = "CPass"><br>

    <input type="submit"/>
</form>
</body>
</html>
<a href="2task.php?category=sport">Sport news</a> | <a href="2task.php?category=politics">Politic news</a><br/><br/>
<a href="2task.php?category=sport&format=json">Sport news (JSON)</a> | <a href="2task.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$category = "sport";
$lik = '#';
$category = $_GET['category'];
$format=$_GET['format'];
if($format=="json" && $category!="sport"){
    echo json_encode($news["sport"]);

}
if($format=="json" && $category!="politics"){
    echo json_encode($news["politics"]);

}
if($category == "sport"and $format!="json")
{
    $lik=$news["sport"];
}
if($category == "politics" and $format!="json")
{
    $lik=$news["politics"];
}
echo implode('<br>',$lik);
?>
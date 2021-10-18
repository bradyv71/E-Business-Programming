<?php
$server_side=array("PHP", "ASP.NET", "Ruby", "Java", "Scala", "JavaScript", "Python");
sort($server_side);
echo"Server side languages using for loop:";
for($i=0;$i<sizeof($server_side);$i++){
    echo "<br>".$server_side[$i];
}

$server_side_usage=array(
    "PHP"=> 78.9, "ASP.NET"=>8.3, "Ruby"=>5.2, "Java"=>3.6, "Scala"=>2.0, "Python"=>1.4
);

arsort($server_side_usage);
echo"<br>Associative array";
echo "<table>";

foreach($server_side_usage as $key => $value){
    echo"<tr><td>".$key."</td><td>".$value."%</td><tr>";

}
echo"</table>";

session_start();
$_SESSION["fullname"]="Brady Valentine";
$_SESSION["courseid"]="IT-2600";;
setcookie("favlanguage","Java", time()+ (86400 *30),"/");
setcookie("favoperatingsystem","linux", time()+ (86400 *30),"/");
echo'<a href="lab7favorites.php"> Lab7 Favorites</a>';
?>
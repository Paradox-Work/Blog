<?php 
require "functions.php";
require "Database.php";
echo "<link rel='stylesheet' href='style.css'>";
echo"woaw<br>";

$db= new Database();
$comments = $db->query('SELECT * FROM comments');
//dabut bloga ierakstus


echo "<ul>";
foreach ($comments as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['Content'] . "</li>";
}
dd($comments);
echo "</ul>";

<?php 
require "functions.php";
echo "<link rel='stylesheet' href='style.css'>";
echo"woaw<br>";

//dataSourceName
$dsn="mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";
//PHP data object
$pdo=new PDO($dsn);

//Sagatavot vaicajumu
$statement=$pdo->prepare("SELECT * FROM comments");
//Izpilda vaicjumu
$statement->execute();

//dabut bloga ierakstus
$comments=$statement->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($comments as $post) {
    echo " <li> ID: " . $post['ID'] . "<br> Content: " . $post['Content'] . "</li>";
}
dd($comments);
echo "</ul>";

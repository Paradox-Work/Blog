<?php
class Database {
//uzstadi metodi query
public function query(){
            //dataSourceName
        $dsn="mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";
            //PHP data object
        $pdo=new PDO($dsn);
            //Sagatavot vaicajumu
        $statement=$pdo->prepare("SELECT * FROM comments");
            //Izpilda vaicjumu
        $statement->execute();
            //
        return $comments=$statement->fetchAll(PDO::FETCH_ASSOC);
}
}
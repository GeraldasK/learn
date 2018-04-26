
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form action="" method="POST">
    Author:
    <select name="author" id="">
        <option value="1">Mark</option>
        <option value="2">Dan</option>
        <option value="3">J.K</option>
    </select><br>
    Book name:
    <input type="text" name="book_name"><br>
    Category:
    <input typr="text" name="categories"><br>
    <input type="submit" value="POST" name="post">
</form>

<?php
    if(isset($_POST['post'])):
        $parent_id = $_POST['author'];
        $post_data = array();
        $post_data['book_name'] = $_POST['book_name'];
        $post_data['categories'] = $_POST['categories'];
        storeCategories(['book_name' => $post_data['book_name'],'categories' => $post_data['categories'],'parent_id' => $parent_id]);
        echo "Postas sėkmingai įkeltas";
        unset($post_data);
    endif;    
?>

<?php
function storeCategories($post_data){
    $sql = "INSERT INTO books (book_name, categories, parent_id) VALUES (:book_name, :categories, :parent_id)";    
    $sth = getDb()->prepare($sql);
    $sth->execute([
        "book_name" => $post_data['book_name'],
        "categories" => $post_data['categories'],
        "parent_id" => $post_data['parent_id']
    ]);
    return $sth->rowCount();
}
function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "myplace";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
?>

<!--Isvedimas-->
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "myplace";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "
SELECT c.name as name, 
sc.book_name as book_name,
sc.categories as categories 
FROM author c
LEFT JOIN books sc 
ON sc.parent_id = c.id
";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($data);
echo '<pre>';
?>
</body>
</html>
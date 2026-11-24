<?php
include '../../setup/connect.php';


$post = filter_input_array(INPUT_POST);
$post['image'] = $_FILES['image']['name'] ?? null;
var_dump($post);


if($post['image']){
    $post['image'] = md5(uniqid()) . '_' . $post['image'];
    $dir = '../../uploads/';
    if (!is_dir($dir)){
        mkdir($dir, 0755, true);
    }
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . $post['image']);
}

$sql = 'INSERT INTO books (title, subtitle, description, image, slug, status) VALUES ( :title , :subtitle , :description , :image , :slug , :status)';
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':title', $post['title']);
$stmt ->bindValue(':subtitle', $post['subtitle']);
$stmt ->bindValue(':description', $post['description']);
$stmt ->bindValue(':image', $post['image']);
$stmt ->bindValue(':slug', $post['slug']);
$stmt ->bindValue(':status', $post['status']);

$stmt->execute();








?>
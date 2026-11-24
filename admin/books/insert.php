<?php
include '../../setup/connect.php';


$post = filter_input_array(INPUT_POST);
$post['image'] = $_FILES['image']['name'] ?? null;
var_dump($post);

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
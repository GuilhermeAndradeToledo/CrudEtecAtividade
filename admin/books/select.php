<?php
include '../include/header.php'
?>

<?php
$sql = "SELECT * FROM books";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<a href="<?php echo $base_url; ?>admin/books/form.php">Novo Livro</a>
<h2>Lista de Livros</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Subtitulo</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Slug</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>


    <?php
    foreach ($books as $book):
    ?>
        <tr>
            <td><?php echo $book['id']; ?></td>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['subtitle']; ?></td>
            <td><?php echo $book['description']; ?></td>
            <td>

                <?php
                if (!empty($book['image']) && file_exists('../../uploads/' . $book['image'])) { ?>
                    <img src="../../uploads/<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" width="100">
                <?php  }
                ?>
            </td>
            <td><?php echo $book['slug']; ?></td>
            <td><?php echo $book['status']; ?></td>
            <td>
                <a href="formupdate.php?id=<?php echo $book['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $book['id']; ?>">Excluir</a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>

<?php
include '../include/footer.php'
?>
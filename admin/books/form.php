<?php
    include_once '../include/header.php';
?>
    <Form action="insert.php" method="POST" enctype="multipart/form-data">
        <label> Titulo </label> <br>
        <input type="text" name="title" placeholder="Title"> <br>

        <label> Subtitulo </label> <br>
        <input type="text" name="subtitle" placeholder="Subtilte"> <br>

        <label> Descrição </label> <br>
        <textarea name="description" placeholder="Description" rows="5"></textarea>

        <label> Imagem </label> <br>
        <input type="file" name="image"> <br>

        <label> Slug </label> <br>
        <input type="text" name="slug" placeholder="Slug"> <br>

        <label> Status </label>
        <select name="status">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select> <br>
        <button type="submit">Salvar</button>
    </Form>
<?php
    include_once '../include/footer.php';
?>
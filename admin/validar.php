<?php
include '../setup/connect.php';
session_start();
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$users = [
    'admin@admin.com' => 'admin123',
];

// var_dump($post);
// isser() -> Verificar se existe

if (isset($post['email']) && isset($post['senha'])) {
    $email = $post['email'];
    $senha = $post['senha'];

    // empty() -> Verificar se a variavel esta vazia

    if (empty($email) || empty($senha)) {
        // echo "Preencha os Dados do Formulário"; 
        header('Location: index.php?vazio=true');
        die();
    } else {

        $stmt = $pdo->prepare("SELECT * from users where email = :email and pass = :pass");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $senha);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['email'] = $post['email'];
            // echo "Login realizado com sucesso!";
            header('Location: home.php');
        } else {
            unset($_SESSION['email']);
            //echo "Email ou senha incorretos!"; 
            header('location: index.php?problema=true');
        }
        // echo "Email: $email <br /> ";
        // echo "Senha: " . md5($senha) .  "<br /> ";
        //.md5 (). -> criptografar as senhas
    }
} else {
    //echo "Preencha os Dados";
    header('Location: index.php?paginaerro=true');
    die();
    // die() -> morrer ou parar ali
}




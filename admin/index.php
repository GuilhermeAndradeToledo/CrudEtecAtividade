<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berserk - Eclipse Gate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Metal+Mania&family=Quicksand:wght@300;500&display=swap');

        body {
            background: radial-gradient(circle, #2b0000 0%, #050505 100%);
            background-image: url('https://www.transparenttextures.com/patterns/dark-leather.png');
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Quicksand', sans-serif;
            color: #ccc;
        }

        .berserk-card {
            background: rgba(15, 15, 15, 0.98);
            border-radius: 0px 40px 0px 40px;
            border-left: 8px solid #4a4a4a;
            border-right: 8px solid #8b0000;
            width: 100%;
            max-width: 420px;
            padding: 40px;
            box-shadow: 0 0 40px rgba(139, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .berserk-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #4a4a4a, #8b0000);
        }

        .header-title {
            font-family: 'Cinzel', serif;
            font-weight: 700;
            color: #8b0000;
            text-align: center;
            margin-bottom: 5px;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .sub-title {
            font-size: 0.75rem;
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-label {
            font-weight: 500;
            color: #8b0000;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .form-control {
            background-color: #121212;
            border: 1px solid #333;
            border-bottom: 2px solid #4a4a4a;
            border-radius: 0;
            padding: 12px;
            color: #fff;
            transition: 0.3s;
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #8b0000;
            background-color: #1a0a0a;
            color: #fff;
        }

        .btn-berserk {
            background: linear-gradient(90deg, #333, #8b0000);
            border: none;
            color: white;
            font-family: 'Cinzel', serif;
            font-weight: bold;
            padding: 14px;
            width: 100%;
            border-radius: 2px;
            margin-top: 20px;
            transition: 0.4s;
            text-transform: uppercase;
        }

        .btn-berserk:hover {
            filter: brightness(1.2);
            letter-spacing: 1px;
            box-shadow: 0 0 20px rgba(139, 0, 0, 0.6);
            color: #fff;
        }

        .alert-sacrifice {
            background-color: #8b0000;
            color: #fff;
            border: none;
            font-family: 'Cinzel', serif;
            font-size: 0.8rem;
            text-align: center;
            border-radius: 0;
            clip-path: polygon(5% 0%, 100% 0%, 95% 100%, 0% 100%);
        }

        .brand-link {
            text-align: center;
            font-size: 0.7rem;
            margin-top: 25px;
            color: #555;
            display: block;
            text-decoration: none;
            font-family: 'Cinzel', serif;
        }

        .brand-link:hover {
            color: #8b0000;
        }

        .brand-watermark {
            position: absolute;
            bottom: -20px;
            right: -10px;
            font-size: 8rem;
            color: rgba(139, 0, 0, 0.05);
            font-family: 'Cinzel';
            pointer-events: none;
            transform: rotate(-15deg);
        }
    </style>
</head>

<body>

    <div class="berserk-card">
        <div class="brand-watermark">ᛴ</div>

        <h2 class="header-title">MIDLAND</h2>
        <p class="sub-title">— Sob a sombra do destino —</p>

        <?php if (isset($_GET['vazio'])): ?>
            <div class="alert alert-sacrifice py-2" role="alert">
                O formulário está vazio
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['paginaerro'])): ?>
            <div class="alert alert-sacrifice py-2" role="alert">
                Preencha todos os campos
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['problema'])): ?> 
            <div class="alert alert-sacrifice py-2" role="alert">
                Senha ou Email invalido. Tente novamente.
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['logout'])): ?>
            <div class="alert alert-sacrifice py-2" role="alert">
                Sair
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['paginaerrosession'])): ?>
            <div class="alert alert-sacrifice py-2" role="alert">
                Tentativa de invasão
            </div>
        <?php endif; ?>

        <form action="validar.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Identificação do Email</label>
                <input type="email" name="email" class="form-control" placeholder="guts@bandodo-falcao.com">
            </div>

            <div class="mb-4">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="••••••••">
            </div>

            <button type="submit" class="btn btn-berserk">Entrar</button>

            <a href="?" class="brand-link">ᛴ Resetar formulário</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
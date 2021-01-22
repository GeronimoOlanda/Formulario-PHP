<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <!--css -->
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">FORMULARIO</a></li>
                <li><a href="./View/listagem.php">LISTAGEM</a></li>
            </ul>
        </nav>
    </header>
        <form action="./Controllers/config.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Digite seu nome..." required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br><br>

            <textarea name="message" id="message" cols="30" rows="10" style="resize: none;"></textarea>
            <button type="submit">ENVIAR</button>
        </form>
    <footer>
        <p>Redes sociais: Facebook | Twitter | Instagram </p>
    </footer>
</body>
</html>

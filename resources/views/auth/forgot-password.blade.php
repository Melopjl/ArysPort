<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="container">
        <h1>Esqueceu a Senha?</h1>
        <form method="POST" action="{{ route('password.request') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Enviar Link de Redefinição">
        </form>
        <a href="{{ route('login') }}">Voltar para o login</a>
    </div>
</body>
</html>

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Nova Senha:</label>
    <input type="password" name="password" required>
    <label>Confirme a Senha:</label>
    <input type="password" name="password_confirmation" required>
    <button type="submit">Redefinir Senha</button>
</form>

<!-- resources/views/auth/passwords/reset.blade.php -->
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required>
    </div>
    <div>
        <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
    </div>
    <div>
        <label for="password-confirm">Confirmar contraseña</label>
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div>
        <button type="submit">Restablecer contraseña</button>
    </div>
</form>

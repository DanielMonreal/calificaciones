<!-- resources/views/auth/passwords/email.blade.php -->
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <button type="submit">Enviar enlace de restablecimiento de contraseña</button>
    </div>
</form>

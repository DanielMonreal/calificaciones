<!-- resources/views/auth/register.blade.php -->
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>
    <div>
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
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
        <button type="submit">Registrarse</button>
    </div>
</form>

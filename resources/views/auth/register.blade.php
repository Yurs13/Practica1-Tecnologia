<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - {{ config('app.name', 'CarritoCompras') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
    <div class="w-full max-w-lg bg-white dark:bg-[#161615] p-8 shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold mb-2">Crea una cuenta</h1>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Únete a nosotros para empezar a comprar.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium mb-1">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required autofocus
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('nombre') border-red-500 @enderror">
                @error('nombre')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Correo -->
            <div>
                <label for="correo" class="block text-sm font-medium mb-1">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" value="{{ old('correo') }}" required
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('correo') border-red-500 @enderror">
                @error('correo')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Teléfono y Dirección -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="telefono" class="block text-sm font-medium mb-1">Teléfono (Opcional)</label>
                    <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"
                           class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('telefono') border-red-500 @enderror">
                    @error('telefono')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="direccion" class="block text-sm font-medium mb-1">Dirección (Opcional)</label>
                    <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}"
                           class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('direccion') border-red-500 @enderror">
                    @error('direccion')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium mb-1">Contraseña</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium mb-1">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC]">
            </div>

            <div class="mt-4">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#1b1b18] dark:bg-[#eeeeec] dark:text-[#1C1C1A] hover:bg-black dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                    Registrarse
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}" class="font-medium text-[#f53003] dark:text-[#FF4433] hover:underline">
                Inicia sesión aquí
            </a>
        </p>
    </div>
</body>
</html>

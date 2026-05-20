<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ config('app.name', 'CarritoCompras') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
    <div class="w-full max-w-md bg-white dark:bg-[#161615] p-8 shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold mb-2">Bienvenido de nuevo</h1>
            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A]">Ingresa a tu cuenta para continuar.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
            @csrf

            <div>
                <label for="correo" class="block text-sm font-medium mb-1">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" value="{{ old('correo') }}" required autofocus
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('correo') border-red-500 @enderror">
                @error('correo')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium mb-1">Contraseña</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-md dark:bg-[#0a0a0a] border-[#e3e3e0] dark:border-[#3E3E3A] focus:outline-none focus:border-[#1b1b18] dark:focus:border-[#EDEDEC] @error('password') border-red-500 @enderror">
                @error('password')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#1b1b18] dark:bg-[#eeeeec] dark:text-[#1C1C1A] hover:bg-black dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                    Iniciar Sesión
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
            ¿No tienes una cuenta?
            <a href="{{ route('register') }}" class="font-medium text-[#f53003] dark:text-[#FF4433] hover:underline">
                Regístrate aquí
            </a>
        </p>
    </div>
</body>
</html>

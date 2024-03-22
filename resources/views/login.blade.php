<body class="bg-red-500">
<x-layout>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1 class="font-black text-4xl text-white text-center">Sign In</h1>
    <form class="grid place-content-center mt-6" action="/login" method="POST">
        @csrf
    <div>
        <x-input rex="email" titulo="Ingresa tu Email" tipo="text"/>
    </div>
    <div>
        <x-input rex="password" titulo="Contraseña :D" tipo="password"/>
    </div>

    <button type="submit">Log In</button>
    </form>
</x-layout>
</body>

<x-layout>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<div class="Justify-center">
    <h1 class="text-4xl font-black">Sign In</h1>
    <form action="/login" method="POST">
        @csrf
    <div>
        <x-input rex="email" titulo="Ingresa tu Email" tipo="text"/>
    </div>
    <div>
        <x-input rex="password" titulo="Contraseña :D" tipo="password"/>
    </div>

    <button type="submit">Log In</button>
    </form>
</div>
</x-layout>

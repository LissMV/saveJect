<body class="bg-red-500">
<x-layout>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1>Sign Up</h1>
    <form action="/register" method="Post">
        @csrf

    <div>
        <x-input rex="name" titulo="Nombre" tipo="text"/>
    </div>
    <div>
        <x-input rex="email" titulo="Ingresa tu Email" tipo="email"/>
    </div>
    <div>
        <x-input rex="password" titulo="Ingresa tu contraseña" tipo="password"/>
    </div>
    <div>
        <x-input rex="birthday" titulo="Birthday" tipo="date"/>
    </div>
    <div>
        <button type="submit">Create account</button>
    </div>

    </form>
</x-layout>
</body>

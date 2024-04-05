
<x-layout>
    <body class="bg-red-600">
        <style>
             #glass {
            background: linear-gradient(135deg, rgba(225, 225, 225, 0.1), rgba(225, 225, 225, 0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(225, 225, 225, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0, 37);
         }
        </style>
    </body>
<div id="glass">
    <h1 class="font-black text-4xl text-white text-center">Sign Up</h1>
    <form class="grid place-content-center mt-6" action="/register" method="Post">
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
</div>
</x-layout>

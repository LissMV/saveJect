<x-layout>
   <body>
      <style>

        body {
            background: url('https://i.pinimg.com/564x/94/57/53/94575326e5fbec9d470d1d4ff2dc3e27.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
         }

         #glassEffect {
            background: linear-gradient(135deg, rgba(225, 225, 225, 0.1), rgba(225, 225, 225, 0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(225, 225, 225, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0, 37);
         }
      </style>
   </body>
   <div id="glassEffect" class="mt-6 w-full max-w-md rounded-lg p-8">

     <h1 class="font-black text-4xl text-center">Sign In</h1>
     <form action="/login" method="POST">
        @csrf
      <div>
        <x-input rex="email" titulo="Email" tipo="text"/>
      </div>
      <div>
        <x-input rex="password" titulo="Password" tipo="password"/>
      </div>
      <div>
      <button  class="w-full bg-emerald-500 text-white font-semibold py-2 px-4 rounded-full hover:bg-emerald-600 focus:outline-none focus:bg-emerald-600" type="submit">Log In</button>
      </div>
     </form>

  </div>
 </div>
</x-layout>

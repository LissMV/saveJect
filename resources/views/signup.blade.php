<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1>Sign Up</h1>
    <form action="/register" method="Post">
        @csrf

    <div>
        <label for="">Name</label>
        <input type="text" name="name">
        @error('name')
        <span> {{ $message }} </span>
        @enderror
    </div>

    <div>
        <label for="">Email</label>
        <input type="text" name="email">
        @error('email')
        <span> {{ $message }} </span>
        @enderror
    </div>

    <div>
        <label for="">Password</label>
        <input type="password" name="password">
        @error('password')
        <span> {{ $message }} </span>
        @enderror
    </div>

    <div>
        <label for="">Birthday</label>
        <input type="date" name="birthday">
        @error('birthday')
        <span> {{ $message }} </span>
        @enderror
    </div>

    <div>
        <button type="submit">Create account</button>
    </div>

    </form>
</div>

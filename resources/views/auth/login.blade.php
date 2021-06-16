<x-layout>
    <h1 class="text-center">Login</h1>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <label for="email">Email</label>
            <input type="email" name="email" id="email">
        
        <label for="password">Password</label>
            <input type="password" name="password" id="password">
        <div>
            <button type="submit">+</button>
        </div>
    </form>
</x-layout>
<x-layout>
    
    <div class="container text-center">

        <h1 class="py">Registrati</h1>
        
        <form action="{{route('register')}}" method="POST">
            
            @csrf
            
            <label for="name">User Name</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            
            <label for="date">Birth date</label>
            <input type="date" max="2021-06-15" name="date" id="date" value="{{old('date')}}">
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            
            <label for="password-conf">Conferma Password</label>
            <input type="password" name="password_confirmation" id="password-conf">
            
            <div class="button py">
                <button type="submit">+</button>
            </div>
            
        </form>
        
    </div>
    
</x-layout>
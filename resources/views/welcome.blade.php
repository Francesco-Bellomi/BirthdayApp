@if (Auth::user())

    <?php
        $year = DB::table('users')
        ->selectRaw('substr(date,1,4) as year')
        ->pluck('year');

        $days = DB::table('users')
        ->selectRaw('substr(date,9,10) as days')
        ->pluck('days');

        $months = DB::table('users')
        ->selectRaw('substr(date,7,1) as months')
        ->pluck('months');

        for ($i = 0; $i < count($days); $i++) { 
            
        $dayLeft = $days[$i] + $months[$i] * 30 - (date('d') + date('m') * 30); 
        
        if($dayLeft < 0) { 
            $dayToNewYear = 365 - (date('d') + date('m') * 30); $dayLeft=$dayToNewYear + ($days[$i] +
            $months[$i] * 30); 
        }
        
        $age = date('Y') - $year[$i]; 
        
        $birth = "$days[$i]/$months[$i]/$year[$i]" ; } 
            
    ?>

@endif

        <x-layout>

            <section class="container text-center">
                
                <div class="item py">

                    @if (Auth::user() && $dayLeft === 0)

                        <h1>WOW Happy Birthday !!!</h1>

                        <p>You have now <span class="dati">{{ $age }}</span> years old</p>
                    
                    @elseif (Auth::user() )
                    
                        <h1>Welcome <span class="dati">{{ Auth::user()->name }}</span></h1>

                        <p>You were born on <span class="dati">{{ $birth }}</span></p>

                        <p>You have <span class="dati">{{ $age }}</span> years old</p>

                        <p>There are <span class="dati">{{ $dayLeft }}</span> days left to your birthday</p>

                    @else

                        <h1>Benvenuto!!</h1>

                        <p>Registrati subito e scopri quanto manca al tuo compleanno!</p>

                        <p> <a href="{{ route('login') }}">Login</a></p>

                        <p> <a href="{{ route('register') }}">Register</a></p>
                        
                    @endif
                        
                </div>
                
                        
            </section>





        </x-layout>

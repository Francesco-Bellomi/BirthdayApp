<div class="text-center">

    @if(Auth::user())

        <p class="text-center"> <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a>

            <form class="display-none" action="{{route('logout')}}" id="form-logout" method="POST">
                @csrf
            </form> 
            
        </p>
    
    @endif
    
    <div>
        <img src="/img/baloons.png" class="baloons-1" alt="">
    </div>

    <div>
        <img src="/img/baloons.png" class="baloons-2" alt="">
    </div>

</div>
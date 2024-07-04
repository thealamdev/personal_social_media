@auth
    @extends('layouts.app')
@endauth

@guest
    @include('auth.login')
@endguest

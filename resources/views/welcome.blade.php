@extends('layout')
@section('title','menu cafe')
@section('content')
    <div class="cover"></div>
    <nav class= "d-flex justify-content-between ps-5 pe-3">
        <div class="logo d-flex align-items-center"><h3>coffe</h3></div>
        {{-- <div class=menu>
            <a href=""><button type="button" class="btn btn-outline-success me-2">Success</button></a>
            <a href=""><button type="button" class="btn btn-outline-danger">Danger</button></a>
        </div> --}}
        @if (Route::has('login'))
        <div class="px-6 py-4 me-2">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white me-3 log ">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white reg">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </nav>
    <main>
        <div class="d-flex justify-content-center mt-3 text-white"><h2>Menu</h2></div>
        <div calss="d-flex justify-content-center" style="  display: flex;
        justify-content: center;
        margin-top:10px;
        margin-bottom:20px;
        "><img class="midel" src={{asset('image/logo.png')}} alt=""></div>
    </main>
    <section>
        <div class="poissent"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque quisquam reprehenderit laudantium explicabo praesentium repellat debitis accusantium, neque voluptas deleniti inventore doloribus. Beatae, aperiam molestiae possimus est iste consequatur!</p></div>
        <div class="plat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque quisquam reprehenderit laudantium explicabo praesentium repellat debitis accusantium, neque voluptas deleniti inventore doloribus. Beatae, aperiam molestiae possimus est iste consequatur!</div>
    </section>


@endsection

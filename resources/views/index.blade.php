@extends('layouts.base')
@extends('layouts.navbar')
@section('title')
    My Portfolio
@endsection
<link rel="icon" href="{{ url('img/favicon.svg') }}">
@section('content')
    <section id="home">
        <div class="container mx-auto">
            <div class="w-11  mt-60 p-3 ml-8 text-lg absolute flex-grow">
                <a href=""><i class="block mt-2  text-white hover:text-black fa-brands fa-github"></i></a>
                <a href=""><i class="block mt-2 text-white hover:text-cyan-500 fa-brands fa-facebook"></i></a>
                <a href=""><i class="block mt-2 text-white hover:text-instagram fa-brands fa-instagram"></i></a>
                <a href=""><i class="block mt-2 text-white hover:text-cyan-500 fa-brands fa-twitter"></i></a>
            </div>
            <div class="flex-grow lg:flex mr-5  mt-5 mx-auto  w-2/3">
                <img src="{{ asset('img/me.png') }}" alt="" class="bg-cover">
                <div class="mt-5 lg:mt-32">
                    <h3><span class="text-5xl font-bold">I'm</span><span class="text-5xl font-bold text-red-600"> Oksa
                        </span><span class="text-5xl font-bold"> Satya</span><br>
                        <span class="text-3-xl text-sm font-normal">I'm a
                            Junior Proggrammer
                            Fresh
                            Graduate
                    </h3></span>
                    <a href="{{ route('download') }}"><button
                            class="bg-gradient-red mt-2 ml-11 outline-none  text-white font-semibold text-xs lg:text-lg py-1 px-1 lg:py-2 lg:font-bold lg:px-2  rounded-full hover:bg-red-300 ">Download
                            Cv
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </section>
@endsection

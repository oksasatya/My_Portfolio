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
            <div class="flex-grow lg:flex mr-5 mx-auto w-2/3 ">
                <svg class="absolute lg:w-5/12 w-24 hidden lg:block" id="sw-js-blob-svg" viewBox="0 0 100 100"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                            <stop id="stop1" stop-color="rgba(129, 177, 250, 1)" offset="0%"></stop>
                            <stop id="stop2" stop-color="rgba(237, 174, 249, 1)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="url(#sw-gradient)"
                        d="M22.6,-35.9C28.7,-31.3,32.6,-24,35.3,-16.5C38,-9.1,39.6,-1.6,38.4,5.4C37.2,12.4,33.2,18.8,28.5,25.5C23.9,32.1,18.7,39,11.6,42.5C4.5,45.9,-4.5,45.8,-13,43.6C-21.4,41.3,-29.5,36.9,-34.1,30.3C-38.8,23.6,-40.1,14.8,-41.3,6C-42.5,-2.8,-43.6,-11.6,-41.1,-19.4C-38.5,-27.2,-32.4,-34,-24.9,-37.9C-17.5,-41.9,-8.7,-43,-0.2,-42.7C8.3,-42.3,16.5,-40.5,22.6,-35.9Z"
                        width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                        style="transition: all 0.3s ease 0s;"></path>
                </svg>
                <div class="z-50 lg:mt-32">
                    <h3><span class="text-5xl font-bold">I'm</span><span class="text-5xl font-bold text-red-600"> Oksa
                        </span><span class="text-5xl font-bold"> Satya</span><br>
                        <span class="text-base antialiased font-normal">I'm a
                            Junior Proggrammer
                            Fresh
                            Graduate
                            From Gunadarma University
                            <br>
                            I Really Hope To Be Given The Opportunity A Part Of Your Company
                        </span>
                    </h3>
                    <a href="{{ route('download') }}"><button
                            class="bg-gradient-red mt-2  outline-none  text-white font-semibold text-xs lg:text-lg py-1 px-1 lg:py-2 lg:font-bold lg:px-2  rounded-full hover:bg-red-300 ">Download
                            Cv
                        </button>
                    </a>
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('img/me.png') }}" alt="" class="bg-cover mr-2  drop-shadow-lg ">
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="justify-center text-center mt-4">
                <h1 class="text-green-600">hai</h1>
            </div>
        </div>
    </section>
@endsection

<!-- resources/views/student_employee/home.blade.php -->

@extends('student.main') <!-- Make sure to extend the main layout -->

@section('content')
<div class="relative">
    {{-- Background image --}}
    <img src="{{ asset('images/background-image.png') }}" class="h-screen object-cover w-full">

    {{-- Text on the background in the top right corner --}}
    <div class="absolute top-24 right-36 lg:p-2 md:p-2">
        <h1 class="text-[6rem] font-bold text-white drop-shadow-lg">Hello, Cyrine </h1>
        <p class="text-[3rem] font-semibold text-white">How are you today?</p>
        <p class="text-md text-white">Come have a regular check and receive your results.</p>
        {{-- Space between them --}}
        <div class="h-20"></div>
        <div>
            {{-- Button for assessment --}}
            <a href="/student/assessment" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold my-4 py-4 px-6 rounded mt-4">
                Take Assessment
            </a>
        </div>
    </div>
</div>
@endsection
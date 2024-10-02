@extends('student.main')

@section('content')
<div class="p-10">
    <h1 class="font-bold text-[2.5rem] py-3">My Profile</h1>

    <!-- Profile Picture and Name Section -->
    <div class="w-full bg-[#e3ebf2] rounded-md mb-8">
        <div class="flex justify-between"> <!-- Added justify-between for spacing -->
            <div class="p-5 flex items-center gap-5">
                <img src="{{ asset('images/me-3.jpg') }}" alt="User Profile Picture" class="w-24 h-24 object-cover rounded-full">
                <h1 class="font-black text-2xl">Kim Ji Won</h1>
            </div>
    
            {{-- Edit Button --}}
            <div class="flex items-center ml-auto p-5"> <!-- Used ml-auto and p-5 for alignment -->
                <a href="#" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Personal Information Section -->
    <div class="w-full bg-[#e3ebf2] rounded-md p-5">
        <div class="flex justify-between items-center mb-4">
            <h2 class="font-bold text-xl">Personal Information</h2>
            <a href="#" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa fa-edit"></i> Edit
            </a>
        </div>

        <!-- Grid Layout for Personal Information -->
        <div class="grid grid-cols-2 gap-x-8 gap-y-4"> <!-- Flex grid with 2 columns -->
            <!-- Last Name -->
            <div>
                <h3 class="font-semibold">Last Name</h3>
                <p class="font-bold">Kim</p>
            </div>
            <!-- First Name -->
            <div>
                <h3 class="font-semibold">First Name</h3>
                <p class="font-bold">Ji</p>
            </div>
            <!-- Middle Name -->
            <div>
                <h3 class="font-semibold">Middle Name</h3>
                <p class="font-bold">Won</p>
            </div>
            <!-- Date of Birth -->
            <div>
                <h3 class="font-semibold">Date of Birth</h3>
                <p class="font-bold">10-23-1995</p>
            </div>
            <!-- Sex -->
            <div>
                <h3 class="font-semibold">Sex</h3>
                <p class="font-bold">Female</p>
            </div>
            <!-- School -->
            <div>
                <h3 class="font-semibold">School</h3>
                <p class="font-bold">STCS</p>
            </div>
            <!-- Address -->
            <div>
                <h3 class="font-semibold">Address</h3>
                <p class="font-bold">Biliran, Naval</p>
            </div>
            <!-- Phone Number -->
            <div>
                <h3 class="font-semibold">Phone Number</h3>
                <p class="font-bold">0912-345-6789</p>
            </div>
            <!-- Email -->
            <div>
                <h3 class="font-semibold">Email</h3>
                <p class="font-bold">example@gmail.com</p>
            </div>
        </div>
    </div>

</div>
@endsection

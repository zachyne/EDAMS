@extends('student.main')

@section('content')
<div class="p-10 flex justify-center items-center bg-gray-100">
    <div class="w-full max-w-5xl bg-[#e3ebf2] rounded-lg p-8">
        <!-- Contact Us Heading -->
        <h1 class="font-bold text-4xl mb-6">Contact Us</h1>

        <div class="relative flex justify-between items-center bg-white rounded-md p-6 shadow-lg">
            <!-- Background Image -->
            <img src="{{ asset('images/contact-banner.png') }}" class="h-96 object-cover w-full rounded-md"> <!-- Changed h-screen to h-96 -->
            
            <!-- Contact Info -->
            <div class="flex-1 space-y-4 absolute top-25 left-0 p-8">
                <!-- Working Hours -->
                <div class="flex items-center space-x-3">
                    <i class="fa fa-clock text-gray-600 text-xl"></i>
                    <p>Monday - Friday from 7:30 AM - 5:00 PM</p>
                </div>

                <!-- Address -->
                <div class="flex items-center space-x-3">
                    <i class="fa fa-map-marker text-gray-600 text-xl"></i>
                    <p>2nd Floor Student Center, BIPSU Main Campus, Naval, Biliran</p>
                </div>

                <!-- Phone Number -->
                <div class="flex items-center space-x-3">
                    <i class="fa fa-phone text-gray-600 text-xl"></i>
                    <p>+63 9123456789</p>
                </div>

                <!-- Email -->
                <div class="flex items-center space-x-3">
                    <i class="fa fa-envelope text-gray-600 text-xl"></i>
                    <p>guidanceoffice@bipsu.edu.ph</p>
                </div>

                <!-- Additional Info -->
                <div class="flex items-center space-x-3">
                    <i class="fa fa-info-circle text-gray-600 text-xl"></i>
                    <p>Psychosocial Support of the BIPSU Guidance Office</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@vite('resources/css/app.css')

<header class="bg-[#e3ebf2]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-[#e3ebf2]">
        <div class="flex justify-between items-center py-4">
            <!-- Left Side: Logo and System Name -->
            <div class="flex items-center">
                <img src="{{ asset('images/main-logo.png') }}" alt="Logo" class="h-10 w-10 mr-3"> <!-- Replace with your logo path -->
                <span class="text-2xl font-bold text-gray-700">BiPSU Anxiety Management System</span> <!-- System name -->
            </div>
        </div>
    </div>
</header>

<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-blue-200 p-6 rounded-lg shadow-lg w-full sm:w-3/4 lg:w-2/3 xl:w-1/2 max-w-3xl">

        <h2 class="text-2xl font-semibold mb-4 text-center">Sign Up</h2>
        
        {{-- Full Name --}}
        <h2 class="text-lg font-bold">Full Name</h2>
        <form class="grid grid-cols-3 gap-4">
            <div>
                <input type="text" id="lastName" name="last_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700" placeholder="Last Name">
            </div>

            <div>
                <input type="text" id="firstName" name="first_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700" placeholder="First Name">
            </div>

            <div>
                <input type="text" id="middleName" name="middle_name" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700" placeholder="Middle Name">
            </div>
        
            {{-- Date of Birth --}}
            <div>
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
            </div>

            {{-- User Type Dropdown --}}
            <div>
                <label for="userType" class="block text-sm font-medium text-gray-700">Sex</label>
                <select id="userType" name="user_type" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <option value="" disabled selected>Please Select</option>
                    <option value="student">Female</option>
                    <option value="coordinator">Male</option>
                </select>
            </div>

            {{-- School Dropdown --}}
            <div>
                <label for="school" class="block text-sm font-medium text-gray-700">School</label>
                <select id="school" name="school" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <option value="" disabled selected>Select School</option>
                    <option value="sas">SAS</option>
                    <option value="sme">SME</option>
                    <option value="sted">STED</option>
                    <option value="snhs">SNHS</option>
                    <option value="scje">SCJE</option>
                    <option value="soe">SOE</option>
                    <option value="stcs">STCS</option>
                    <option value="bilcam">Biliran Campus</option>
                </select>
            </div>

            {{-- Province Dropdown --}}
            <div>
                <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                <select id="province" name="province" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <option value="" disabled selected>Province</option>
                    <option value="naval">Naval</option>
                    <option value="almeria">Almeria</option>
                    <option value="biliran">Biliran</option>
                    <option value="cabucgayan">Cabucgayan</option>
                    <option value="caibiran">Caibiran</option>
                    <option value="culaba">Culaba</option>
                    <option value="kawayan">Kawayan</option>
                    <option value="maripip">Maripipi</option>
                </select>
            </div>

            {{-- Municipality Dropdown --}}
            <div>
                <label for="municipality" class="block text-sm font-medium text-gray-700">Municipality</label>
                <select id="municipality" name="municipality" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <option value="" disabled selected>Municipality</option>
                    <option value="naval">Naval</option>
                    <option value="almeria">Almeria</option>
                    <option value="biliran">Biliran</option>
                    <option value="cabucgayan">Cabucgayan</option>
                    <option value="caibiran">Caibiran</option>
                    <option value="culaba">Culaba</option>
                    <option value="kawayan">Kawayan</option>
                    <option value="maripip">Maripipi</option>
                </select>
            </div>

            {{-- Barangay Dropdown --}}
            <div>
                <label for="barangay" class="block text-sm font-medium text-gray-700">Barangay</label>
                <select id="barangay" name="barangay" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                    <option value="" disabled selected>Barangay</option>
                    <option value="naval">PI Garcia</option>
                </select>
            </div>

            {{-- Email Input --}}
            <div class="col-span-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700" placeholder="Your Email">
            </div>

            {{-- Contact Number Input --}}
            <div class="col-span-3">
                <label for="contactNumber" class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input type="text" id="contactNumber" name="contact_number" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700" placeholder="Your Contact Number">
            </div>

            <button type="submit" class="mt-4 bg-yellow-300 font-semibold py-2 rounded-md hover:bg-yellow-500 col-span-3 transition ease-in-out">Register</button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? 
            <a href="/login" class="text-blue-600 hover:underline">Log in</a>
        </p>
    </div>
</div>

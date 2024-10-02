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
    <div class="bg-[#4152b3] p-6 rounded-lg shadow-lg w-full sm:w-3/4 lg:w-2/3 xl:w-1/2 max-w-md max-h-full">
        {{-- log in form --}}
        <h2 class="text-2xl font-bold text-white mb-4 text-center">STUDENT</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="user-id" class="block text-sm font-medium text-white">User ID</label>
                    <input type="text" id="user-id" name="user-id" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-blue-700">
                </div>
                
                {{-- Show Password Checkbox --}}
                <div class="flex items-center">
                    <input type="checkbox" id="show-password" class="mr-2" onclick="togglePasswordVisibility()">
                    <label for="show-password" class="text-sm font-medium text-white">Show Password</label>
                </div>
                
                <div>
                    <button type="submit" class="w-full font-bold bg-yellow-200 hover:bg-yellow-300 transition ease-in-out p-2 rounded-md">Log In</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('show-password');
        
        // Toggle the type of the password input
        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
    }
</script>

@extends('admin.main')

@section('content')
<div class="p-8">
    <div>
        <div class="grid grid-cols-3 gap-2">
            <div class="bg-[#e3ebf2] p-4 flex gap-5 rounded-lg">
                <img src="{{ asset('images/severe.png')}}" alt="Severe Cases" class="w-20 h-20 rounded-full">
                <div>
                    <h2 class="text-2xl font-semibold">Severe Cases</h2>
                    <p class="text-3xl font-bold">100</p>
                </div>
            </div>

            <div class="bg-[#e3ebf2] p-4 flex gap-5 rounded-lg">
                <img src="{{ asset('images/moderate.png')}}" alt="Moderate Cases" class="w-20 h-20 rounded-full">
                <div>
                    <h2 class="text-2xl font-semibold">Moderate Cases</h2>
                    <p class="text-3xl font-bold">100</p>
                </div>
            </div>

            <div class="bg-[#e3ebf2] p-4 flex gap-5 rounded-lg">
                <img src="{{ asset('images/low.png')}}" alt="Low Cases" class="w-20 h-20 rounded-full">
                <div>
                    <h2 class="text-2xl font-semibold">Low Cases</h2>
                    <p class="text-3xl font-bold">100</p>
                </div>
            </div>
        </div>

        <div class="py-10 flex gap-5 justify-between">
            <div class="flex gap-5">
                <div class="flex gap-2 items-center">
                    <div class="w-4 h-4 bg-red-500"></div>
                    <h1>Severe</h1>
                </div>
    
                <div class="flex gap-2 items-center">
                    <div class="w-4 h-4 bg-[#ffa500]"></div>
                    <h1>Moderate</h1>
                </div>
    
                <div class="flex gap-2 items-center">
                    <div class="w-4 h-4 bg-[#008000]"></div>
                    <h1>Low</h1>
                </div>
            </div>

            <div class="flex gap-5">
                <div class="relative inline-block text-left">
                    <div>
                        <!-- Button that triggers the dropdown -->
                        <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="menu-button" aria-expanded="false" aria-haspopup="true">
                            Please select
                            <!-- Dropdown icon (chevron) -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                
                    <!-- Dropdown menu (hidden by default) -->
                    <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Dropdown items -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">Students</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-2">Employees</a>
                        </div>
                    </div>
                </div>
    
                <div class="relative inline-block text-left">
                    <div class="">
                        <!-- Button that triggers the dropdown -->
                        <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="date-menu-button" aria-expanded="false" aria-haspopup="true">
                            <i class="fas fa-calendar-alt mr-2 "></i> Filter date
                            <!-- Dropdown icon (chevron) -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                
                    <!-- Dropdown menu (hidden by default) -->
                    <div id="date-dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="date-menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Dropdown items -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-1">Last hour</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-2">Last 24 hours</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-3">Last 3 days</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-4">Last 7 days</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-5">Last month</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="date-menu-item-6">Last year</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>

        
    </div>
</div>

<script>
    const button = document.getElementById('menu-button');
    const menu = document.getElementById('dropdown-menu');

    button.addEventListener('click', () => {
        // Toggle hidden class
        menu.classList.toggle('hidden');

        // Toggle aria-expanded attribute for accessibility
        const isExpanded = button.getAttribute('aria-expanded') === 'true' || false;
        button.setAttribute('aria-expanded', !isExpanded);
    });

    // Optionally: close the dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const isClickInside = button.contains(event.target) || menu.contains(event.target);

        if (!isClickInside) {
            menu.classList.add('hidden');  // Ensure menu closes if clicked outside
            button.setAttribute('aria-expanded', false);  // Reset aria-expanded
        }
    });

    const dateButton = document.getElementById('date-menu-button');
    const dateMenu = document.getElementById('date-dropdown-menu');

    dateButton.addEventListener('click', () => {
        // Toggle hidden class
        dateMenu.classList.toggle('hidden');

        // Toggle aria-expanded attribute for accessibility
        const isExpanded = dateButton.getAttribute('aria-expanded') === 'true' || false;
        dateButton.setAttribute('aria-expanded', !isExpanded);
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const isClickInside = dateButton.contains(event.target) || dateMenu.contains(event.target);
        
        if (!isClickInside) {
            dateMenu.classList.add('hidden');  // Ensure menu closes if clicked outside
            dateButton.setAttribute('aria-expanded', false);  // Reset aria-expanded
        }
    });
</script>
@endsection

<div class="w-64 bg-[#004aad] text-white min-h-screen">
    <div class="px-4 py-4">
        <h2 class="text-3xl font-semibold">Dashboard</h2>
    </div>
    <ul id="sidebar">
        <li class="px-4 py-2 flex items-center gap-2 hover:bg-[#a3a33a]">
            <i class="fa-solid fa-house"></i>
            <a href="/admin/home" data-page="admin/home" class="text-white text-xl">Home</a>
        </li>

        <!-- Dropdown for Users -->
        <li class="px-4 py-2 flex items-center gap-2 hover:bg-[#a3a33a] cursor-pointer" id="users-dropdown">
            <i class="fa-solid fa-user"></i>
            <span class="text-white text-xl">Users</span>
            <i class="fa-solid fa-chevron-down ml-auto"></i> <!-- Dropdown icon -->
        </li>
        <ul id="users-submenu" class="hidden pl-8">
            <li class="p-2 hover:bg-[#a3a33a]">
                <a href="/admin/users/students" data-page="admin/users/students" class="text-white text-lg">Students</a>
            </li>
            <li class="p-2 hover:bg-[#a3a33a]">
                <a href="/admin/users/employees" data-page="admin/users/employees" class="text-white text-lg">Employees</a>
            </li>
            <li class="p-2 hover:bg-[#a3a33a]">
                <a href="/admin/users/coordinators" data-page="admin/users/coordinators" class="text-white text-lg">Coordinators</a>
            </li>
            <li class="p-2 hover:bg-[#a3a33a]">
                <a href="/admin/users/counselors" data-page="admin/users/counselors" class="text-white text-lg">Counselors</a>
            </li>
            <li class="p-2 hover:bg-[#a3a33a]">
                <a href="/admin/users/admin" data-page="admin/users/admin" class="text-white text-lg">Admin</a>
            </li>
        </ul>

        <li class="px-4 py-2 flex items-center gap-2 hover:bg-[#a3a33a]">
            <i class="fa-solid fa-lock"></i>
            <a href="/admin/user-authentication" data-page="admin/user-authentication" class="text-white text-xl">User Authentication</a>
        </li>
        <li class="px-4 py-2 hover:bg-[#a3a33a] flex items-center gap-2">
            <i class="fa-solid fa-file"></i>
            <a href="/admin/reports" data-page="admin/reports" class="text-white text-xl">Reports</a>
        </li>  
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the current URL path (e.g., "/assessment")
        const currentPath = window.location.pathname;

        // Get all sidebar links
        const sidebarLinks = document.querySelectorAll('#sidebar a');

        sidebarLinks.forEach(link => {
            // Compare the link's href with the current path
            if (link.getAttribute('href') === currentPath) {
                // Add the active class to the parent <li> of the active link
                link.parentElement.classList.add('bg-[#a3a33a]');
            }
        });

        // Dropdown functionality for Users
        const usersDropdown = document.getElementById('users-dropdown');
        const usersSubmenu = document.getElementById('users-submenu');

        usersDropdown.addEventListener('click', () => {
            usersSubmenu.classList.toggle('hidden'); // Toggle visibility
        });

        // Optionally: Close the dropdown if clicked outside
        document.addEventListener('click', function(event) {
            if (!usersDropdown.contains(event.target) && !usersSubmenu.contains(event.target)) {
                usersSubmenu.classList.add('hidden');  // Ensure menu closes if clicked outside
            }
        });
    });
</script>

<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

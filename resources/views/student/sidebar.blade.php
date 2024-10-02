<div class="w-64 bg-[#004aad] text-white min-h-screen">
    <div class="px-4 py-4">
        <h2 class="text-3xl font-semibold">Dashboard</h2>
    </div>
    <ul id="sidebar">
        <li class="px-4 py-2 flex items-center gap-2 hover:bg-[#a3a33a]">
            <i class="fa-solid fa-house"></i>
            <a href="/student/home" data-page="student/home" class="text-white text-xl">Home</a>
        </li>

        <li class="px-4 py-2 flex items-center gap-2 hover:bg-[#a3a33a]">
            <i class="fa-solid fa-list-check"></i>
            <a href="/student/assessment" data-page="student/assessment" class="text-white text-xl">Assessment</a>
        </li>
        <li class="px-4 py-2 hover:bg-[#a3a33a] flex items-center gap-2">
            <i class="fa-solid fa-history"></i>
            <a href="/student/history" data-page="student/history" class="text-white text-xl">History</a>
        </li>

        <li class="px-4 py-2 hover:bg-[#a3a33a] flex items-center gap-2">
            <i class="fa-solid fa-user"></i>
            <a href="/student/profile" data-page="student/profile" class="text-white text-xl">Profile</a>
        </li>
        <li class="px-4 py-2 hover:bg-[#a3a33a] flex items-center gap-2">
            <i class="fa-solid fa-phone"></i>
            <a href="/student/contact" data-page="student/contact" class="text-white text-xl">Contact Us</a>
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
    });
</script>

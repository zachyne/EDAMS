{{-- dialogue box for results --}}
<div class="bg-white p-4 rounded-lg shadow-lg">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold">Results</h1>
        <button class="text-red-500" @click="showResults = false">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="mt-4">
        <p class="text-lg font-semibold">You have scored 80%</p>
        <p class="text-md">You have done well, keep it up!</p>
    </div>
</div>
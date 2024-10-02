@extends('employee.main')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-50">

    <div class="bg-white overflow-hidden rounded-lg shadow-lg p-10 max-w-4xl"> <!-- Increased padding and max-width -->
        <h1 class="text-center text-4xl font-bold mb-10">History</h1> <!-- Larger font for title -->
        <div class="bg-blue-50 p-8 rounded-lg"> <!-- Increased padding for table container -->
            <table class="table-auto w-full text-lg"> <!-- Larger font size for the table -->
                <thead>
                    <tr class="text-left text-xl"> <!-- Increased header text size -->
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Score</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-6 py-4">05/23/2024</td>
                        <td class="border px-6 py-4">60</td>
                        <td class="border px-6 py-4 text-red-500">Severe</td>
                        <td class="border px-6 py-4">...</td>
                    </tr>
                    <tr>
                        <td class="border px-6 py-4">06/07/2024</td>
                        <td class="border px-6 py-4">48</td>
                        <td class="border px-6 py-4 text-red-500">Severe</td>
                        <td class="border px-6 py-4">...</td>
                    </tr>
                    <tr>
                        <td class="border px-6 py-4">06/22/2024</td>
                        <td class="border px-6 py-4">31</td>
                        <td class="border px-6 py-4 text-yellow-500">Moderate</td>
                        <td class="border px-6 py-4">...</td>
                    </tr>
                    <tr>
                        <td class="border px-6 py-4">07/07/2024</td>
                        <td class="border px-6 py-4">16</td>
                        <td class="border px-6 py-4 text-green-500">Low</td>
                        <td class="border px-6 py-4">...</td>
                    </tr>
                    <tr>
                        <td class="border px-6 py-4">07/22/2024</td>
                        <td class="border px-6 py-4">10</td>
                        <td class="border px-6 py-4 text-green-500">Low</td>
                        <td class="border px-6 py-4">...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
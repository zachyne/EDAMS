@extends('employee.main')

@section('content')
<div x-data="{ showResults: false, total: 0, resultMessage: '', submitForm() {
    // Calculate total score
    this.total = 0;
    for (let i = 1; i <= 21; i++) {
        let radios = document.querySelector(`input[name='symptom_${i}']:checked`);
        if (radios) {
            this.total += parseInt(radios.value);
        }
    }
    
    // Display corresponding message based on total score
    if (this.total >= 0 && this.total <= 7) {
        this.resultMessage = 'Low Anxiety levels noted. You\'re in a good place but remember to maintain your self-care routines.';
    } else if (this.total >= 8 && this.total <= 15) {
        this.resultMessage = 'Moderate anxiety observed. Consider some relaxation techniques or talking it out with someone.';
    } else if (this.total >= 16 && this.total <= 25) {
        this.resultMessage = 'Moderate Anxiety. You are experiencing moderate anxiety. Consider seeking guidance.';
    } else {
        this.resultMessage = 'Severe Anxiety levels found. It\'s advisable to seek professional help or talk to someone you trust immediately.';
    }

    // Show the result dialog
    this.showResults = true;
}}" class="py-12 flex flex-col justify-center">
    <div class="flex justify-center text-center">
        <h1 class="font-bold text-[3rem] lg:p-10">Beck Anxiety Inventory (BAI)</h1>
    </div>
    
    <div class="w-full px-5 sm:px-6 lg:px-8 lg:my-5 flex justify-center">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-5 w-full"> <!-- Full width container -->
            <div class="p-6 w-full">
                <table class="w-full border-collapse border border-purple-500"> <!-- Full width table -->
                    <thead>
                        <tr class="bg-[#004aad] text-white">
                            <th class="border border-[#004aad] px-4 py-2 text-left">Anxiety Symptoms</th>
                            <th class="border border-[#004aad] px-4 py-2">Not at All (0)</th>
                            <th class="border border-[#004aad] px-4 py-2">Mildly (1)</th>
                            <th class="border border-[#004aad] px-4 py-2">Moderate (2)</th>
                            <th class="border border-[#004aad] px-4 py-2">Severe (3)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            // Define an array of symptoms
                            $symptoms = [
                                'Numbness or tingling',
                                'Feeling hot',
                                'Wobbliness in legs',
                                'Unable to relax',
                                'Fear of Worst Happening',
                                'Dizzy or lightheaded',
                                'Heart pounding / racing',
                                'Unsteady',
                                'Terrified or afraid',
                                'Nervous',
                                'Feeling of choking',
                                'Hands trembling',
                                'Shaky / Unsteady',
                                'Fear of losing control',
                                'Difficulty in breathing',
                                'Fear of dying',
                                'Scared',
                                'Indigestion',
                                'Faint / Lightheaded',
                                'Face flushed',
                                'Hot / Cold Sweats',
                            ];
                        @endphp

                        @foreach($symptoms as $index => $symptom)
                            <tr>
                                <td class="border border-[#004aad] px-4 py-2">{{ $symptom }}</td>
                                @for($i = 0; $i <= 3; $i++)
                                    <td class="border border-[#004aad] px-4 py-2 text-center">
                                        <input type="radio" name="symptom_{{ $index + 1 }}" value="{{ $i }}" class="form-radio" />
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end items-end">
                    {{-- Button to show the dialogue box --}}
                    <button @click="submitForm()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-4 py-2 px-6 rounded mt-4">View Result</button>
                </div>  
                
                <!-- Dialogue box for results -->
                <div x-show="showResults" class="fixed inset-0 flex items-center justify-center z-50" style="background-color: rgba(0, 0, 0, 0.5);">
                    <div class="bg-white p-8 rounded-lg shadow-lg w-2/3 md:w-1/2 lg:w-1/3 relative overflow-hidden"> <!-- Box size adjusted -->
                        <img src="{{ asset('images/result-banner.png') }}" class="absolute inset-0 object-cover w-full h-full opacity-50">
                        
                        <!-- Centered and styled content -->
                        <div class="relative z-10 flex flex-col items-center text-center space-y-4"> <!-- Ensure content is centered -->
                            <h1 class="text-3xl font-bold">SCORE</h1> <!-- Adjust font size for "SCORE" -->
                            
                            <!-- Display score with dynamic color -->
                            <p class="text-4xl font-bold" :class="{
                                'text-red-600': total > 25,  /* Severe */
                                'text-orange-500': total > 15 && total <= 25,  /* Moderate */
                                'text-green-600': total <= 7,  /* Low */
                                'text-yellow-500': total > 7 && total <= 15  /* Mild */
                            }">
                                <span x-text="total"></span>
                            </p>
                
                            <!-- Message text -->
                            <p class="text-lg" x-text="resultMessage"></p>
                
                            <!-- Close button -->
                            <button class="text-red-500 absolute top-4 right-4" @click="showResults = false">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection

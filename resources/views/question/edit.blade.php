<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Question') }} :: {{ $question->id }}
        </h2>
    </x-slot>
    <x-container>
        <x-post :action="route('question.update', $question)" put>
            <label for="question" class="block mb-2.5 text-sm font-medium text-heading dark:text-white">
                Your question
            </label>
            <x-textarea  name="question" :value="$question->question">

            </x-textarea>

            <x-button type="submit">
                Save
            </x-button>
        </x-post>
        <hr class="border-gray-700 border-dashed my-4">
    </x-container>


</x-app-layout>

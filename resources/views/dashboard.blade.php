<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-container>
        <x-post post :action="route('question.store')">
            <label for="question" class="block mb-2.5 text-sm font-medium text-heading dark:text-white">
                Your question
            </label>
            <x-textarea></x-textarea>

            <x-button type="submit">
                Save
            </x-button>
        </x-post>
        </div>
        </div>

    </x-container>


</x-app-layout>

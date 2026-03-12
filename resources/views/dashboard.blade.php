<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('question.store') }}" method="post" class="max-w-sm mx-auto">
                @csrf

                <label for="question" class="block mb-2.5 text-sm font-medium text-heading dark:text-white">
                    Your question
                </label>

                <div class="mb-4">
                    <textarea
                        name="question"
                        id="question"
                        rows="4"
                        class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body
                               dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"
                        placeholder="Ask me anything...">{{ old('question') }}</textarea>

                    @error('question')
                    <span class="text-red-600 dark:text-red-400 text-sm mt-1"> {{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                        class="text-white bg-brand hover:bg-brand-strong border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none
                           dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save Question
                </button>
            </form>
        </div>
    </div>
</x-app-layout>

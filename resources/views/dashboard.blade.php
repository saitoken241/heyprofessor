<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vote for a question') }}
        </h2>
    </x-slot>
    <x-container>

        <div id="accordion-collapse"
             data-accordion="collapse"
             class="p-4 md:p-0.5 bg-gray-200 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden shadow-sm">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                        class="uppercase font-bold mb-1 flex items-center justify-between w-full p-5
                   text-gray-700 dark:text-gray-200
                   bg-white dark:bg-gray-700
                   hover:bg-gray-100 dark:hover:bg-gray-800
                   border-b border-gray-200 dark:border-gray-700
                   gap-3"
                        data-accordion-target="#accordion-collapse-body-1"
                        aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">

                    <span>Questions</span>

                    <svg data-accordion-icon
                         class="w-5 h-5 rotate-180 shrink-0 text-gray-500 dark:text-gray-400"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m5 15 7-7 7 7"/>
                    </svg>

                </button>
            </h2>

            <div id="accordion-collapse-body-1"
                 class="hidden border-t border-gray-200 dark:border-gray-700"
                 aria-labelledby="accordion-collapse-heading-1">

                <div class="p-4 md:p-5 bg-white dark:bg-gray-700">

                    <div class="text-gray-700 dark:text-gray-300 space-y-3">

                        @foreach($questions as $item)
                            <x-question :question="$item"></x-question>
                        @endforeach

                        {{ $questions->links() }}
                    </div>

                </div>
            </div>
        </div>


    </x-container>


</x-app-layout>

@props([

    'question'

])

<div class="rounded dark:bg-gray-800/50 shadow shadow-blue-500/50 p-4 dark:text-gray-400 flex
items-center justify-between">
    <span>{{ $question->question  }}</span>
    <div class="flex gap-3 mt-2 ml-6 shrink-0">
        <div class="p-2 bg-green-100 rounded-lg hover:bg-green-200 cursor-pointer w-12 flex justify-center">


            <x-post :action="route('question.like', $question)"><button class="flex items-center space-x-1 text-green-500">
               <x-icons.thumbs-up class="w-4 h-4 text-green-600"/>
           <span> {{ $question->votes_sum_like ?: 0 }} </span>
            </button>
            </x-post>
        </div>

        <div class="p-2 bg-red-100 rounded-lg hover:bg-red-200 cursor-pointer w-12 flex justify-center">
            <x-post :action="route('question.unlike', $question)"><button class="flex items-center space-x-1 text-red-500">

                <x-icons.thumbs-down class="w-4 h-4 text-red-600"/>
                <span> {{ $question->votes_sum_unlike ?: 0 }} </span>
            </button>
            </x-post>
        </div>
    </div>

</div>


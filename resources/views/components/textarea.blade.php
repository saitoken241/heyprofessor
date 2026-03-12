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

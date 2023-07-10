<div class="container mx-auto mt-8">
    <div class="mt-10">
        <h2 class="text-center font-bold mb-4">Comments</h2>

        <div class="flex flex-col items-center">
            <input
                type="text"
                placeholder="Name"
                class="px-4 py-2 w-3/4 md:w-1/4 mb-4 border border-gray-300"
            />
            <input
                type="text"
                placeholder="Comment"
                class="px-4 py-2 w-3/4 md:w-1/4 mb-4 border border-gray-300"
            />
            <button
                type="button"
                class="px-4 py-2 bg-gray-800 text-white rounded-full hover:bg-gray-700"
            >
                Add Comment
            </button>
        </div>

        <div class="mt-8">
            @foreach($comments as $comment)
            <div class="flex mb-4 items-start">
                <div class="h-8 w-8 bg-gray-300 rounded-full"></div>
                <div class="ml-4">
                    <p class="font-semibold">{{ $comment->author }}</p>
                    <p class="text-gray-500">{{ $comment->content }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

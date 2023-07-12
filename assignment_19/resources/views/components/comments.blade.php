<div class="container mx-auto mt-8">
    <div class="mt-10">
        <h2 class="font-bold mb-4">Comments</h2>

        {{-- <div class="flex flex-col ">
            will implement later
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
        </div> --}}

        <div class="mt-8">
            @foreach($post->comment as $comment)
                <div class="flex mb-4 items-start">
                    <div class="h-8 w-8 rounded-full"> <img src="{{$comment->image}}" alt="not found"></div>
                    <div class="ml-4">
                        <p class="font-semibold capitalize">{{$comment->author}}</p>
                        <p class="text-gray-500 capitalize">{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

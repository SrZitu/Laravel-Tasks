
<div class="container mx-auto p-20">


        <div class="w-4/5 bg-white overflow-hidden  my-10" id="blog_details">
            <img class="w-full  object-cover" src="{{ $post->image }}" alt="Blog Post Image">
            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $post->content }}</p>
            </div>
        </div>


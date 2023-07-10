<div class="container mx-auto">
    <h2 class="text-center font-bold my-12 text-purple-800 text-2xl ">Latest Blogs</h2>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">

        @foreach ($posts as $item)
      <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-md">

        <img class="w-full h-48 object-cover" src="{{ asset($item->image) }}" alt="Blog Post Image">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800">{{ $item->title }}</h3>
          <p class="mt-2 text-gray-600">{{ $item->content }}</p>
          <a href="#" class="mt-4 inline-block px-4 py-2 text-sm font-medium leading-none bg-purple-700  text-white rounded-full hover:bg-gray-700">Read More</a>
        </div>


      </div>
      @endforeach

      <!-- Repeat the above card div for each blog post -->

    </div>
  </div>

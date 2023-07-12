
<div class="container mx-auto p-10">


        <div class=" bg-white overflow-hidden  my-10" id="blog_details">
            {{-- <img class="w-full h-100 object-cover" src="{{ $post->image }}" alt="Blog Post Image">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $post->content }}</p>
            </div> --}}
        </div>



</div>

 <script>

    const url = window.location.href;
    const id = url.substring(url.lastIndexOf('/') + 1);

   // Call the function with the extracted ID
   blogDetails(id); // Replace '2' with the desired blog ID

    async function blogDetails(id) {
        let url = `/blog/${id}`;
        console.log(url);

        try {
            document.getElementById('loading-div').classList.remove('hidden');
            document.getElementById('content-div').classList.add('hidden');

            let response = await axios.get(url);
            console.log(response);

            document.getElementById('loading-div').classList.add('hidden');
            document.getElementById('content-div').classList.remove('hidden');

            let item = response.data; // Remove JSON.parse
            console.log(item);
            document.getElementById('blog_details').innerHTML = `

                    <img class="w-full h-200 object-cover " src="${item['image']}" alt="Blog Post Image">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">${item['title']}</h3>
                        <p class="mt-2 text-gray-600">${item['content']}</p>
                    </div>

            `;
        } catch (error) {
            alert(error);
        }
    }
</script>


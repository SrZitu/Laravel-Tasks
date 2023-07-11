<div class="container mx-auto  p-10">
    <div id="singleblog">

        <div class=" bg-white overflow-hidden  my-10" id="blog_details">
            <img class="w-full h-100 object-cover" src="{{ $post->image }}" alt="Blog Post Image">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $post->content }}</p>
            </div>
        </div>

    </div>

</div>

{{-- <script>
    blogDetails();
   async function blogDetails() {
    let url = "/blog/{id}"; // Replace {id} with the specific blog post ID
    try {
        document.getElementById('loading-div').classList.remove('hidden');
        document.getElementById('content-div').classList.add('hidden');

        let response = await axios.get(url);
        console.log(response);

        document.getElementById('loading-div').classList.add('hidden');
        document.getElementById('content-div').classList.remove('hidden');

        let item = response.data;
        console.log(item);
        document.getElementById('singleblog').innerHTML = `
            <div class="bg-white overflow-hidden my-10">
                <img class="w-full h-100 object-cover" src="${item['image']}" alt="Blog Post Image">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">${item['title']}</h3>
                    <p class="mt-2 text-gray-600">${item['content']}</p>
                </div>
            </div>
        `;
    } catch (error) {
        alert(error);
    }
}

</script> --}}

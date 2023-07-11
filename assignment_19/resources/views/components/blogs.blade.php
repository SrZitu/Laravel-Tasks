<div class="container mx-auto">
    <h2 class="text-center font-bold my-12 text-purple-800 text-2xl ">Latest Blogs</h2>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 " id="blogid">



    </div>
</div>
<script>
    postData();
    async function postData() {
        let url = "/blog";
        try {
            document.getElementById('loading-div').classList.remove('hidden');
            document.getElementById('content-div').classList.add('hidden');

            let response = await axios.get(url);
            console.log(response);

            document.getElementById('loading-div').classList.add('hidden');
            document.getElementById('content-div').classList.remove('hidden');

            response.data.forEach((item) => {
                let title = item['title'].substr(0, 80) + (item['title'].length > 200 ? '...' : '');
                let content = item['content'].substr(0, 119) + (item['content'].length > 200 ? '...' : '');
                document.getElementById('blogid').innerHTML += `
                    <div class="max-w-md bg-white rounded-lg overflow-hidden shadow-md card transition duration-500 transform hover:scale-105">
                        <img class="w-full h-56 w-full object-cover object-center" src="${item['image']}" alt="Blog Post Image">
                        <div class="p-6">
                            <a href="/blog/${item['id']}"><h3 class="text-xl font-semibold text-gray-800">${title}</h3> </a>
                            <p class="mt-2 text-gray-600">${content}</p>
                            <a href="/blog/${item['id']}" class="mt-4 inline-block px-4 py-2 text-sm font-medium leading-none bg-purple-700 text-white rounded-full hover:bg-gray-700">Read More</a>
                        </div>
                    </div>
                `;
            });
        } catch (error) {
            alert(error);
        }
    }
</script>

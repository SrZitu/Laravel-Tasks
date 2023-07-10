@extends('app')
@section('content')
    @include('components.hero')
    @include('components.blogs')

@endsection

{{-- @section('scripts')
<script>
    // AJAX request example with Axios
    document.querySelector('button').addEventListener('click', function() {
        const nameInput = document.querySelector('input[placeholder="Name"]');
        const commentInput = document.querySelector('input[placeholder="Comment"]');

        axios.post('/comments', {
                name: nameInput.value,
                comment: commentInput.value
            })
            .then(function(response) {
                // Handle success response
                console.log(response.data);
            })
            .catch(function(error) {
                // Handle error response
                console.error(error.response.data);
            });
    });
</script>
@endsection --}}

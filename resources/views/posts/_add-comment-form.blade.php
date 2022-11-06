@auth
<x-panel class="">

    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/45?u={{ auth()->id() }}" alt="" style="width: 45; height: 45;" class="rounded-full">

            <textarea name="body" class="ml-5 grow p-2 focus:outline-none focus:ring  border border-gray-200 rounded-xl" style=" resize:none" id="" cols="47" rows="3" placeholder="Leave a comment..." required></textarea>

        </header>

        @error('body')
        <p class="text-sx text-red-500 ml-10 mt-2">{{ $message }}</p>
        @enderror

        <div class="flex justify-end mt-2">
            <x-submit-button>Submit</x-submit-button>
        </div>
    </form>
</x-panel>

@else

<p class="font-semibold">
    <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login" class="text-blue-500  hover:underline">Log in</a>
    to leave a comment
</p>

@endauth

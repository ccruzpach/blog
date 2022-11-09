@props(['heading'])
<section class="px-8 max-w-4xl mx-auto">

    <h1 class="text-xl font-bold mb-8 mt-10 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : ''}}">Dashboard</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>
            </ul>
        </aside>
        
        <x-panel class="max-w-sm mx-auto">
            {{ $slot }}
        </x-panel>
    </div>

    
</section>
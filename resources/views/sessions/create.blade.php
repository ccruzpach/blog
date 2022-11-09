<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" autocomplete="username"></x-form.input>
                    <x-form.input name="password" autocomplete="new-password" type="password"></x-form>
                    <x-form.password-toggle></x-form.password-toggle>

                    <x-form.button>Log in</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

<script src="password-toggle.js"></script>
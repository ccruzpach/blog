@props(['name', 'type' => 'text'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input class="grow p-2 focus:outline-none focus:ring  border border-gray-200 rounded-xl w-full w-full" type={{ $type }} name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" required>

    <x-form.error name="{{ $name }}" />

</x-form.field>

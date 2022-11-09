@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input class="grow p-2 focus:outline-none focus:ring  border border-gray-200 rounded-l w-full w-full" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" {{ $attributes }} required>

    <x-form.error name="{{ $name }}" />

</x-form.field>

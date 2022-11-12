@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <input class="focus:outline-none focus:ring  border border-gray-200 p-2 rounded-l w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes(['value' => old($name)]) }}
        >

    <x-form.error name="{{ $name }}" />

</x-form.field>

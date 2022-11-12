@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <textarea class="p-2 focus:outline-none focus:ring  border border-gray-200 rounded-xl w-full"
        style="resize:none"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes }}
        >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
    
</x-form.field>

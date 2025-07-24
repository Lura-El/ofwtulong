@props([
    'label',
    'name',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if($required) <span class="text-red-500">*</span> @endif
    </label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        class="mt-1 block w-full text-sm font-medium text-gray-800 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600"
    >
</div>

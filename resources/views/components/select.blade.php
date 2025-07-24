@props([
    'label',
    'name',
    'required' => false,
    'options' => [],
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if($required) <span class="text-red-500">*</span> @endif
    </label>

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        @if($required) required @endif
        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-600 focus:border-blue-600 text-sm font-medium text-gray-700"
    >
        <option value="" class="text-gray-500">-- Select --</option>
        @foreach ($options as $key => $value)
            <option value="{{ $key }}" class="text-sm font-medium text-gray-700">
                {{ $value }}
            </option>
        @endforeach
    </select>
</div>

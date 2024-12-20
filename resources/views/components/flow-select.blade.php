

@props(['id', 'name', 'selectedValue' => '', 'options' => [], 'select'])

<select id="{{ $id }}" name="{{ $name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="" disabled {{ $selectedValue === '' ? 'selected' : '' }}>{{ $select }}</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $value === $selectedValue ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>

@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 float-start dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>

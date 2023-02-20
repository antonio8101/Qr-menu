@props(['value'])

<label {{ $attributes->merge(['class' => 'label-component block font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>

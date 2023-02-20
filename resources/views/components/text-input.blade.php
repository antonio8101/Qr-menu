@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input-text-component focus:ring-orange-500 rounded-md shadow-sm']) !!}>

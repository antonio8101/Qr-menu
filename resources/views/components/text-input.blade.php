@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-orange-500 focus:border-orange-900 focus:ring-orange-500 rounded-md shadow-sm']) !!}>

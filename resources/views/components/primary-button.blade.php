<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button-component inline-flex items-center px-4 py-2 font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

<button {{ $attributes->merge(['class' => 'inline-flex justify-center py-2 px-4 border border-skin-light rounded-md shadow-sm bg-skin-button text-sm text-skin-base hover:bg-skin-button-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body  focus:ring-green-500']) }}>
    {{ $slot }}
</button>

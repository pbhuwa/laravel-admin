<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-block rounded !bg-primary-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:!bg-primary-accent-300 focus:!bg-primary-accent-300 active:!bg-primary-600']) }}>
    <i class="fa-solid fa-floppy-disk"></i> &nbsp;
    {{ $slot }}
</button>

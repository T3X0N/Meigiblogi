<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base leading-6 font-normal text-white transition-colors duration-150 hover:border-[#0b5ed7] hover:bg-[#0b5ed7] active:border-[#0a58ca] active:bg-[#0a58ca] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#0d6efd]/50 disabled:pointer-events-none disabled:opacity-65']) }}>
    {{ $slot }}
</button>

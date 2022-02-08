<div x-data="{ 
        open: @entangle($attributes->wire('model'))
    }" 
    @close-modal.window="open = false" @keydown.escape.window="open = false" class="modal">
    <div @click="open = true">
        {{ $trigger }}
    </div>

    <div x-show="open" class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40">
        <div class="fixed inset-0 transform">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div 
        @click.away="open = false"  
        class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto maax-w-7xl">
            {{ $slot }}
        </div>
    </div>
</div>
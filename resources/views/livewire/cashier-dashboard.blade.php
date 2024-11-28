<div class="bg-gray-100">
    <x-layouts.header />

    <div class="flex h-screen">
       <livewire:categories />

        <!-- Main Content for Products -->
        <div class="w-3/4 p-4 overflow-y-auto">
            <livewire:products />
        </div>

        <div>
            <livewire:product-info-card />
        </div>
    </div>
</div>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Product dan Variant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6 sm:px-6 lg:px-8">
            @forelse ($products as $product)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="mt-2">Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="mt-1">Deskripsi: {{ $product->description ?: '-' }}</p>

                        <div class="mt-4">
                            <h4 class="font-semibold">Daftar Variant</h4>
                            <ul class="mt-2 list-disc pl-5">
                                @forelse ($product->variants as $variant)
                                    <li>
                                        {{ $variant->name }} (Tambahan Harga: Rp {{ number_format($variant->additional_price, 0, ',', '.') }})
                                    </li>
                                @empty
                                    <li>Tidak ada variant.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Data product belum tersedia.
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>

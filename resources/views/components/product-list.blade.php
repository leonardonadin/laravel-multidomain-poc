<div>
    @foreach ($products as $product)
        <div class="max-w-md mx-auto mb-3 bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="p-8">
                    <div class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">
                        {{ $product->name }}
                    </div>
                    <div class="uppercase tracking-wide text-md text-indigo-500 font-semibold">{{ $product->promo_price }}</div>
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $product->price }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

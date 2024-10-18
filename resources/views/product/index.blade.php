<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="mx-auto max-w-2xl px-4 py-12 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8">
                
                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                        @foreach ($products as $item)
                            <a href="{{ route('product.show', $item->id )}}" class="group">
                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-0{{ $item->id }}.jpg" 
                                    alt="{{ $item->description }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <h3 class="mt-4 text-sm text-white">{{ $item->name }}</h3>
                                <p class="mt-1 text-lg font-medium text-gray-100">${{ $item->price }}</p>
                            </a>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

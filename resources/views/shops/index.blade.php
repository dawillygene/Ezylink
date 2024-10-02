@extends('main.main')
@section('content')
    <div class="p-6 space-y-6">

        <div class="flex w-full items-center justify-between print:hidden">
            <h4 class="text-lg font-semibold text-default-900">Shop List</h4>

            <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
                <li class="text-sm">
                    <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary"
                        href="javascript:void(0)">
                        GreenCart
                        <i class="h-4 w-4" data-lucide="chevron-right"></i>
                    </a>
                </li>

                <li class="text-sm">
                    <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary"
                        href="javascript:void(0)">
                        Shop
                        <i class="h-4 w-4" data-lucide="chevron-right"></i>
                    </a>
                </li>

                <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
                    Shop List
                </li>
            </ol>
        </div>



        <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">

            @foreach ($shops as $shop)
                <div class="relative rounded-lg border border-default-200 overflow-hidden">
                    <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                        <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                            <img src="assets/1-1bb67308.png" class="max-w-full h-full rounded-full">
                        </div>

                        <div>
                            <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">{{ $shop->company_name }}
                            </h4>
                            <h4 class="text-base font-medium text-default-600">{{ $shop->first_name }} {{ $shop->last_name }}</h4>
                        </div>
                    </div>

                    <div class="flex justify-around border-b border-dashed border-default-200">
                        <div class="text-center px-6 py-4">
                            <h4 class="text-lg font-medium text-primary mb-2.5">34</h4>
                            <h5 class="text-sm text-default-800">Total Product</h5>
                        </div>
                        <div class="border-s border-default-200"></div>
                        <div class="text-center px-6 py-4">
                            <h4 class="text-lg font-medium text-primary mb-2.5">425</h4>
                            <h5 class="text-sm text-default-800">Total Sales</h5>
                        </div>
                    </div>

                    <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                        <div>
                            <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                            <p class="text-sm text-default-700 line-clamp-1">{{ $shop->city }}, Townline,
                                {{ $shop->country }}</p>
                        </div>

                        <div>
                            <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                            <p class="text-sm text-default-700 line-clamp-1">{{ $shop->email }}</p>
                        </div>

                        <div>
                            <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                            <p class="text-sm text-default-700 line-clamp-1">{{ $shop->contact_number }}</p>
                        </div>
                    </div>

                    <a href="{{ route('ShopDetails.show', $shop->id) }}"
                        class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                        View Details
                    </a>
                </div>
            @endforeach

        </div>
    @endsection

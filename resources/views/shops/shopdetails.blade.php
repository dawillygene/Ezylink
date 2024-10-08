@extends('main.main')
@section('content')

    <div class="p-6 space-y-6">

        <div class="flex w-full items-center justify-between print:hidden">
          <h4 class="text-lg font-semibold text-default-900">Shop Details</h4>
        
          <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
            <li class="text-sm">
              <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
                GreenCart
                <i class="h-4 w-4" data-lucide="chevron-right"></i>
              </a>
            </li>
        
            <li class="text-sm">
              <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
                Shop
                <i class="h-4 w-4" data-lucide="chevron-right"></i>
              </a>
            </li>
             
            <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
              Shop Details
            </li>
          </ol>
        </div>
        <div class="grid 2xl:grid-cols-3 gap-6 relative">
          <div class="2xl:sticky top-20 2xl:col-span-1">
            <div class="space-y-6">
              <div class="px-2 md:pt-2 pt-0 rounded-lg border border-default-200 mb-6">
                <img src="assets/banner-2-6706dc01.png" class="h-40 w-full md:flex hidden rounded-lg">
  
                <div class="p-5">
                  <div class="-mt-16 relative max-md:mt-0">
                    <div class="h-20 w-20 rounded-full bg-default-200 p-1 mb-2 max-md:hidden">
                      <img src="assets/1-1bb67308.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="flex justify-between gap-6">
                      <div class="">
                        <h6 class="text-lg font-semibold text-default-950 mb-0.5">{{ $shopDetail->company_name }}</h6>
                        <p class="text-sm text-default-600">Since 2013</p>
                      </div>
                      <div class="flex items-center gap-2">
                        <a type="button" href="{{ route('ShopDetails.edit',$shopDetail->id) }}" class="py-2 px-4 inline-flex items-center justify-center text-xs font-medium rounded bg-default-200 transition-all duration-300 hover:bg-default-300 text-default-900"><i class="ti ti-edit-circle text-sm/none me-1"></i> Edit</a>
                          <button type="button" class="py-2 px-4 inline-flex items-center justify-center text-xs font-medium rounded bg-red-500 text-white transition-all duration-300 hover:bg-red-600"><i class="ti ti-trash text-sm/none me-1"></i> Delete</button>
                      </div>
                    </div>
  
                  </div>
                </div>
              </div>
  
              <div class="rounded-lg border border-default-200 mb-6">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                  <h4 class="grow text-lg font-medium text-default-900">Seller Personal Detail</h4>
                </div>
  
                <div class="p-5 border-t border-dashed border-default-200">
                  <p class="text-default-600 mb-3"><strong>Owner Name: :</strong> <span class="ms-2">{{ $shopDetail->first_name }} {{ $shopDetail->last_name }}</span></p>
  
                  <p class="text-default-600 mb-3"><strong>Company Type: :</strong> <span class="ms-2">LLP</span></p>
  
                  <p class="text-default-600 mb-3"><strong>Email :</strong><span class="ms-2">{{ $shopDetail->email }}</span></p>
  
                  <p class="text-default-600 mb-3"><strong>Contact No :</strong> <span class="ms-2 ">{{ $shopDetail->contact_number }}</span></p>
  
                  <p class="text-default-600 mb-3"><strong>Fax :</strong> <span class="ms-2 ">{{ $shopDetail->fax_number}}</span></p>
  
                  <p class="text-default-600"><strong>Location :</strong> <span class="ms-2">{{ $shopDetail->country}},{{ $shopDetail->city}}</span></p>
                </div>
              </div>
  
              <div class="rounded-lg border border-default-200 mb-6">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                  <h4 class="grow text-lg font-medium text-default-900">Customer Reviews</h4>
                </div>
  
                <div class="p-5 border-t border-dashed border-default-200">
                  <div class="mb-6">
                    <div class="flex items-center gap-2">
                      <h5 class="text-sm">5</h5>
                      <div class="flex bg-default-100 rounded-lg w-full h-2 overflow-hidden">
                        <div class="w-full bg-yellow-400 rounded-lg"></div>
                      </div>
                    </div>
  
                    <div class="flex items-center gap-2">
                      <h5 class="text-sm">4</h5>
                      <div class="flex bg-default-100 rounded-lg w-full h-2 overflow-hidden">
                        <div class="w-4/5 bg-yellow-400 rounded-lg"></div>
                      </div>
                    </div>
  
  
                    <div class="flex items-center gap-2">
                      <h5 class="text-sm">3</h5>
                      <div class="flex bg-default-100 rounded-lg w-full h-2 overflow-hidden">
                        <div class="w-3/5 bg-yellow-400 rounded-lg"></div>
                      </div>
                    </div>
  
                    <div class="flex items-center gap-2">
                      <h5 class="text-sm">2</h5>
                      <div class="flex bg-default-100 rounded-lg w-full h-2 overflow-hidden">
                        <div class="w-2/5 bg-yellow-400 rounded-lg"></div>
                      </div>
                    </div>
  
                    <div class="flex items-center gap-2">
                      <h5 class="text-sm">1</h5>
                      <div class="flex bg-default-100 rounded-lg w-full h-2 overflow-hidden">
                        <div class="w-1/5 bg-yellow-400 rounded-lg"></div>
                      </div>
                    </div>
                  </div>
  
                  <div class="flex justify-around mb-6">
                    <div class="text-center">
                      <h2 class="text-2xl font-medium text-default-900 mb-1">4.5 <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i></h2>
                      <p class="block text-xs text-default-600">452 Reviews</p>
                    </div>
  
                    <div class="text-center">
                      <h2 class="text-2xl font-medium text-default-900 mb-1">91%</h2>
                      <p class="block text-xs text-default-600">Recommended</p>
                    </div>
                  </div>
  
                  <div class="mb-4">
                    <div class="flex gap-3 items-center mb-4">
                      <img src="assets/1-f1564e7c.png" class="w-11 h-11 rounded-full">
                      <div class="flex-grow">
                        <h4 class="text-sm font-medium text-default-700 mb-1">Kianna Stanton <span class="text-default-600">🇺🇸US</span></h4>
                        <h4 class="text-xs text-green-400">Verified Buyer</h4>
                      </div>
                      <div>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                      </div>
                    </div>
  
                    <h5 class="text-sm font-medium text-default-900 mb-2">SO DELICIOUS 🍯💯</h5>
                    <p class="text-sm text-default-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
  
                  <div class="mb-4">
                    <div class="flex gap-3 items-center mb-4">
                      <img src="assets/2-cb0540ba.png" class="w-11 h-11 rounded-full">
                      <div class="flex-grow">
                        <h4 class="text-sm font-medium text-default-700 mb-1">Ryan Rhiel Madsen <span class="text-default-600">🇺🇸US</span></h4>
                        <h4 class="text-xs text-green-400">Verified Buyer</h4>
                      </div>
                      <div>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                        <i class="ti ti-star-filled inline-flex align-middle text-lg text-yellow-400"></i>
                      </div>
                    </div>
  
                    <h5 class="text-sm font-medium text-default-900 mb-2">SO DELICIOUS 🍯💯</h5>
                    <p class="text-sm text-default-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
  
                </div>
              </div>
  
              <div class="rounded-lg border border-default-200">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                  <h4 class="grow text-lg font-medium text-default-900">Customer Support</h4>
                </div>
  
                <div class="p-5 border-t border-dashed border-default-200">
                  <textarea class="form-input bg-transparent rounded w-full border border-default-200 mb-4 focus:border-primary focus:ring-0" placeholder="Message" rows="4"></textarea>
  
                  <div class="text-end">
                    <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">Send Message <i class="ti ti-send"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="2xl:col-span-2">
            <div class="2xl:sticky top-20 space-y-6">
              <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                  <h4 class="text-xl font-medium text-default-900">Cost & Usage by instance type</h4>
  
                  <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                                          "toggleTag": "<button type=\"button\"></button>",
                                          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                          "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                          "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                          "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                          }' class="hidden">
                      <option>Today</option>
                      <option>Yesterday</option>
                      <option>Last 7 Days</option>
                      <option>Last 30 Days</option>
                      <option>This Month</option>
                      <option>Last Month</option>
                    </select>
  
                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                      <i class="ti ti-chevron-down shrink text-base/none"></i>
                    </div>
                  </div><!-- End Select -->
                </div>
                <div class="p-5 border-t border-dashed border-default-200">
                  <div id="customer_impression_charts" class="apex-charts"></div>
                </div>
              </div>
  
              <div class="grid grid-cols-1">
                <div class="rounded-lg border border-default-200 overflow-hidden">
                  <div class="px-6 py-4 flex items-center justify-between gap-400">
                    <h4 class="text-xl font-medium text-default-900">Product</h4>
  
                    <div class="flex flex-wrap items-center gap-4">
                      <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                                              "toggleTag": "<button type=\"button\"></button>",
                                              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                              "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                              "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                              }' class="hidden">
                          <option>Popular</option>
                          <option>High to Low</option>
                          <option>Low to High</option>
                        </select>
  
                        <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                          <i class="ti ti-chevron-down shrink text-base/none"></i>
                        </div>
                      </div><!-- End Select -->
  
                      <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                                              "toggleTag": "<button type=\"button\"></button>",
                                              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                              "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                              "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                              }' class="hidden">
                          <option>All</option>
                          <option>Newest</option>
                          <option>Best Seller</option>
                          <option>Oldest</option>
                        </select>
  
                        <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                          <i class="ti ti-chevron-down shrink text-base/none"></i>
                        </div>
                      </div><!-- End Select -->
                    </div>
                  </div>
  
                  <div class="overflow-x-auto border-t border-dashed border-default-200">
                    <div class="min-w-full inline-block align-middle">
                      <div class="rounded-lg divide-y divide-default-200">
                        <div class="overflow-hidden">
                          <table class="min-w-full divide-y divide-default-200">
                            <thead class="bg-default-100/75">
                              <tr>
                                <th class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Products</th>
                                <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Category</th>
                                <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Price</th>
                                <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Product ID</th>
                                <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Score Status</th>
                                <th scope="col" class="px-6 py-3 text-center text-sm capitalize font-semibold text-default-900">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/1-2ca96552.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">Banana</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Fruit</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$14.99</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS20342</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Average</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/2-423cfe2a.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">Sahale Snacks</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Nuts</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$22.86</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS20314</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Good</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/3-eb4bb056.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">Grapes</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Fruit</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$18.42</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS20104</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Average</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/4-84c13641.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">BanaBee Chips</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Banana Chips</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$16.41</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS20450</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Average</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/5-6588f4cc.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">ProtinX</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Protin Powder</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$56.89</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS20450</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Average</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/6-fc45c68a.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">Honey Spiced</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Nuts & Berries</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$99.12</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS12781</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Good</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-3">
                                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center gap-3">
                                    <img src="assets/7-e9f364dd.png" class="w-10 h-10 rounded-full">
                                    <h5 class="text-base font-medium text-default-700">Avocado</h5>
                                  </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Fruit</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$42.18</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">#ADS74526</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Average</td>
                                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                                  <div class="flex items-center justify-center gap-2">
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-eye text-lg"></i>
                                    </button>
                                    <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-edit text-lg"></i>
                                    </button>
                                    <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                      <i class="ti ti-trash text-lg"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    
@endsection

<x-app>
    <div class="p-6 space-y-6">

        <div class="flex w-full items-center justify-between print:hidden">
          <h4 class="text-lg font-semibold text-default-900">Customer Details</h4>
        
          <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
            <li class="text-sm">
              <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
                GreenCart
                <i class="h-4 w-4" data-lucide="chevron-right"></i>
              </a>
            </li>
        
            <li class="text-sm">
              <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
                Customers
                <i class="h-4 w-4" data-lucide="chevron-right"></i>
              </a>
            </li>
             
            <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
              Customer Details
            </li>
          </ol>
        </div>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
          <div class="lg:col-span-1">
            <div class="p-6 rounded-lg border border-default-200">
              <img src="assets/8-b8444411.png" alt="" class="w-24 mx-auto rounded-full p-1 border-2 border-dashed border-default-300 bg-default-100">
              <h4 class="mb-1 mt-3 text-lg text-default-900 text-center">{{ $customer->first_name }} {{ $customer->last_name }}</h4>
              <p class="text-default-600 text-center mb-4">Customer</p>
  
              <div class="flex items-center justify-center gap-2 mb-3">
                <button type="button" class="py-1.5 px-4 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 text-default-900 rounded"><i class="ti ti-edit-circle"></i> Edit</button>
                <button type="button" class="py-1.5 px-4 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-500 hover:bg-red-600 border-red-500 hover:border-red-600 text-white rounded"><i class="ti ti-trash"></i> Delete</button>
              </div>
  
              <div class="text-start mt-6">
                <h4 class="text-base font-semibold text-default-900 uppercase mb-2.5">About Me :</h4>
                <p class="text-default-600 mb-6">
                 {{ $customer->description }}
                </p>
                <p class="text-default-600 mb-3"><b class="text-default-700">Full Name :</b> <span class="ms-2">{{ $customer->first_name }} {{ $customer->last_name }}</span></p>
  
                <p class="text-default-600 mb-3"><b class="text-default-700">Mobile :</b><span class="ms-2">{{ $customer->description }}</span></p>
  
                <p class="text-default-600 mb-3"><b class="text-default-700">Email :</b> <span class="ms-2 "> {{ $customer->email }}</span></p>
  
                <p class="text-default-600 mb-1.5"><b class="text-default-700">Location :</b> <span class="ms-2">{{ $customer->state }},{{ $customer->country }}</span></p>
              </div>
            </div>
          </div>
  
          <div class="lg:col-span-2">
            <div class="border rounded-lg border-default-200">
              <div class="px-6 py-4">
                <div class="flex flex-wrap justify-between items-center gap-6">
                  <h4 class="text-xl font-medium text-default-900">Customer Order history</h4>
  
                  <div class="flex items-center">
                    <span class="text-base text-default-950 me-3">Sort By :</span>
  
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                      <button type="button" class="hs-dropdown-toggle flex items-center gap-2 font-medium text-default-950 text-sm py-2.5 px-4 xl:px-5 rounded-lg border border-default-200 transition-all">
                        All <i class="ti ti-chevron-down text-base"></i>
                      </button>
  
                      <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white dark:bg-default-50 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5">
                        <ul class="flex flex-col gap-1">
                          <li><a class="flex items-center gap-3 font-normal py-2 px-3 transition-all text-default-700 bg-default-400/20 rounded" href="javascript:void(0)">All</a></li>
                          <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Refund</a></li>
                          <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Paid</a></li>
                          <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/20 rounded" href="javascript:void(0)">Cancel</a></li>
                        </ul><!-- end dropdown items -->
                      </div><!-- end dropdown menu -->
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                  <div class="rounded-lg divide-y divide-default-200">
                    <div class="overflow-hidden">
                      <table class="min-w-full divide-y divide-default-200">
                        <thead class="bg-default-100">
                          <tr class="text-start">
                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Date</th>
                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Order ID</th>
                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800 min-w">Menu</th>
                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800">Amount</th>
                            <th class="px-6 py-3 text-start text-sm whitespace-nowrap font-medium text-default-800 min-w-[10rem]">Status</th>
                          </tr><!-- end table-head-row -->
                        </thead><!-- end t-head -->
                        <tbody class="divide-y divide-default-200">
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">01/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4357</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/1-2ca96552.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Banana</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(54)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$45.24</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">Refund</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">01/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4358</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/2-423cfe2a.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Sahale Snacks</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(23)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$50.34</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/20 text-green-500">Paid</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">04/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4360</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/3-eb4bb056.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Grapes</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(12)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$34.21</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">Cancel</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">04/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4359</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/4-84c13641.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Banana Chips</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(25)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$25.00</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/20 text-green-500">Paid</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">07/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4361</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/5-6588f4cc.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Protinex Powder</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(25)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$49.99</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">Refund</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">10/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4362</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/6-fc45c68a.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Nuts & Berries</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(46)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$24.19</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">Refund</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">12/Sep/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4363</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/7-e9f364dd.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Avocado, Butter Fruit</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(25)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$15.43</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/20 text-green-500">Paid</span>
                            </td>
                          </tr><!-- end table-row -->
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">31/Aug/22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">#4356</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                              <div class="flex items-center gap-4">
                                <div class="shrink">
                                  <div class="h-11 w-11">
                                    <img src="assets/8-f4839df5.png" class="max-w-full h-full">
                                  </div>
                                </div>
                                <div class="grow">
                                  <p class="text-sm text-default-800 mb-1">Chicken Meat</p>
                                  <div class="flex items-center gap-2">
                                    <div class="flex gap-1.5">
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
                                      <button><i class="ti ti-star-filled text-lg text-default-200"></i></button>
                                    </div>
                                    <h6 class="text-xs text-default-500 mt-1">(42)</h6>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-700">$28.99</td>
                            <td class="px-6 py-4">
                              <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/20 text-green-500">Paid</span>
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

    </x-app>
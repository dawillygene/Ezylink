<x-app>
    <div class="p-6 space-y-6">

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="flex w-full items-center justify-between print:hidden">
                <h4 class="text-lg font-semibold text-default-900">Add Customers</h4>
        
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
                        Add Customers
                    </li>
                </ol>
            </div>
        
            <div class="border border-default-200 rounded-lg">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                    <h4 class="grow text-lg font-medium text-default-900">Add Customers</h4>
                </div>
        
                <div class="p-5 border-t border-dashed border-default-200">
                    <div class="grid lg:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">First Name</label>
                            <input id="firstName" name="first_name"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Enter Your First Name">
                        </div>
        
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last Name</label>
                            <input id="lastName" name="last_name"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Enter Your Last Name">
                        </div>
        
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="user_name">User Name</label>
                            <input id="user_name" name="username"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="Enter Your User Name">
                        </div>
        
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="emailAddress">Email</label>
                            <input id="emailAddress" name="email"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="email" placeholder="demoexample@mail.com">
                        </div>
        
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="phone_number">Phone Number</label>
                            <input id="phone_number" name="phone_number"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="tel" placeholder="+1-123-XXX-4567">
                        </div>
        
                        <div class="space-y-1">
                            <label for="country" class="text-sm mb-1 text-default-900">Country/Region</label>
                            <div class="relative">
                                <select id="country" name="country"
                                    class="block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                    <option></option>
                                    <option value="United States">United States</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="China">China</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Bharat">Bharat</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="France">France</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Albania">Albania</option>
                                </select>
                                <div class="absolute -inset-y-0 end-3 flex items-center">
                                    <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                </div>
                            </div>
                        </div><!-- col end -->
        
                        <div class="space-y-1">
                            <label for="state" class="text-sm mb-1 text-default-900">State</label>
                            <div class="relative">
                                <select id="state" name="state"
                                    class="block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                                    <option></option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                </select>
                                <div class="absolute -inset-y-0 end-3 flex items-center">
                                    <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                </div>
                            </div>
                        </div><!-- col end -->
        
                        <div>
                            <label class="block text-sm font-medium text-default-900 mb-2" for="zip_code">ZIP code</label>
                            <input id="zip_code" name="zip_code"
                                class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                type="text" placeholder="35010">
                        </div>
        
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-medium text-default-900 mb-2" for="description">Description</label>
                            <textarea id="description" name="description"
                                class="block w-full bg-transparent rounded-lg py-2.5 px-4 border border-default-200 focus:ring-transparent focus:border-default-200"
                                rows="5" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="submit" class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                            <i class="ti ti-device-floppy text-lg"></i>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app>

<div id="application-sidebar"
    class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-64 -translate-x-full transform overflow-y-auto border-e border-default-200 bg-white transition-all duration-300 hs-overlay-open:translate-x-0 dark:bg-default-50 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden">
    <div class="sticky top-0 flex h-18 items-center justify-start px-6">
        <a href="admin-dashboard.html">
            <img src={{ asset('assets/img/logo-dark-1caee452.png') }} alt="logo" class="flex h-10 dark:hidden" />
            <img src="assets/logo-50f51c55.png" alt="logo" class="hidden h-10 dark:flex" />
        </a>
    </div>

    <div class="hs-accordion-group h-[calc(100%-72px)] p-4" data-simplebar>
        <ul class="admin-menu flex w-full flex-col gap-1.5">
            <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
                    href="#">
                    <i class="ti ti-smart-home text-xl"></i>
                    Dashboard
                    <span
                        class="ms-auto inline-block rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">9+</span>
                </a>
            </li>

            {{-- <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
                    href="#">
                    <i class="ti ti-brand-hipchat text-xl"></i>
                    Chat
                </a>
            </li> --}}

            {{-- <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
                    href="#">
                    <i class="ti ti-calendar text-xl"></i>
                    Calender
                </a>
            </li> --}}

            <li class="px-6 py-2 text-sm font-medium text-default-600">Manage</li>

            <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
                    href="#">
                    <i class="ti ti-wallet text-xl"></i>
                    Users
                    <span
                        class="ms-auto inline-block rounded-full bg-red-500/10 px-2.5 py-0.5 text-xs font-medium text-red-500">4+</span>
                </a>
            </li>

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-ticket text-xl"></i>
                    Coupons
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuCoupons"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="#"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Coupons List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Coupon
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Coupon
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-list-check text-xl"></i>
                    Order
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuOrder"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="admin-order-list.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Orders List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-order-details.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Order Details
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-users text-xl"></i>
                    Customers
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuCustomer"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="{{ route('customers.index') }}"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Customers List
                            </a>
                        </li>
                        {{-- <li class="menu-item">
                            <a href=""
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Customer Details
                            </a>
                        </li> --}}
                        <li class="menu-item">
                            <a href="{{ route('customers.create') }}"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Customer
                            </a>
                        </li>
                        {{-- <li class="menu-item">
                            <a href="admin-customer-edit.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Customer
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-building-store text-xl"></i>
                    Shops
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuShops"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="/ShopDetails"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Shops List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-shops-detail.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Shop Details
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-shops-add.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Shop
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-shops-edit.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Shop
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-cheese text-xl"></i>
                    Product
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuProduct"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="admin-product-list.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Products List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-product-add.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Product
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-product-edit.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Product
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-shopping-bag text-xl"></i>
                    Sellers
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuSellers"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="admin-sellers-list.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Sellers List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-sellers-detail.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Seller Details
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-sellers-add.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Seller
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-sellers-edit.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Seller
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-file-invoice text-xl"></i>
                    Invoice
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuInvoice"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="admin-invoice-list.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Invoices List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-invoice-detail.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Invoice Details
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-invoice-add.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Invoice
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100">
                    <i class="ti ti-license text-xl"></i>
                    Blog
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuBlog"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 flex flex-col gap-2">
                        <li class="menu-item">
                            <a href="admin-blog-list.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Blogs List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-blog-detail.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Blog Details
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-blog-add.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Add Blog
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="admin-blog-edit.html"
                                class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Edit Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="px-6 py-2 text-sm font-medium text-default-600">Pages</li>

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-notebook text-xl"></i>
                    Extra Pages
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuPages"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-starter.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Starter
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-gallery.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Gallery
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-pricing.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Pricing
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-timeline.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Timeline
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-maintenance.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Maintenance
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="pages-coming-soon.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Coming Soon
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-login-2 text-xl"></i>
                    Authentication
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="auth-login.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Login
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="auth-register.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Register
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="auth-logout.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Logout
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="auth-recoverpw.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Password Forgot
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="auth-reset-password.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Password Reset
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="px-6 py-2 text-sm font-medium text-default-600">Components</li> --}}

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle fill-hover flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-briefcase text-xl"></i>
                    Base UI
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuBaseUI"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-accordion.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Accordion
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-alert.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Alert
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-avatars.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Avatars
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-buttons.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Buttons
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-badges.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Badges
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-breadcrumbs.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Breadcrumbs
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-cards.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Cards
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-collapse.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Collapse
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-dropdowns.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Dropdowns
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-progress.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Progress
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-spinners.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Spinners
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-list-group.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                List Group
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-ratio.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Ratio
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-tabs.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Tabs
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-modals.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Modals
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-offcanvas.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Offcanvas
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-popovers.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Popovers
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-tooltips.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Tooltips
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-typography.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Typography
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-layout-2 text-xl"></i>
                    Advance UI
                    <span
                        class="ms-auto inline-block rounded-full bg-cyan-500/10 px-2.5 py-0.5 text-xs font-medium text-cyan-500">Hot</span>
                </a>

                <div id="menuAdvanceUI"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-advance-swiper.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Swiper
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-advance-sweetalert.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Sweet Alert
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-advance-rating.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Ratings
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-advance-tour.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Tour
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-advance-lightbox.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                GlightBox
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-news text-xl"></i>
                    Form
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuForm"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-elements.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Basic Elements
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-select.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Select
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-range.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Range
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-editor.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Editor
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-upload.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Upload
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-picker.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Picker
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-validation.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Validation
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-form-layout.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Layout
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-table text-xl"></i>
                    Table
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuTable"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-table-basic.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Basic Table
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-table-datatable.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Data Table
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="menu-item hs-accordion">
                <a href="javascript:void(0)"
                    class="hs-accordion-toggle flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-icons text-xl"></i>
                    Icon
                    <i class="ti ti-chevron-right ms-auto text-sm transition-all hs-accordion-active:rotate-90"></i>
                </a>

                <div id="menuIcon"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                    <ul class="mt-2 space-y-2">
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-icons-lucide.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Lucide
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="flex items-center gap-x-3.5 rounded-full px-5 py-2 text-sm font-medium text-default-700 hover:bg-default-100"
                                href="ui-icons-tabler.html">
                                <i class="ti ti-circle-filled scale-[.25] text-lg"></i>
                                Tabler
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="menu-item">
                <a href="ui-maps-vector.html"
                    class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 hover:bg-default-100">
                    <i class="ti ti-map text-xl"></i>
                    Vector Maps
                </a>
            </li> --}}

            {{-- <li class="menu-item">
                <a class="flex items-center gap-x-3.5 rounded-full px-5 py-3 text-sm font-medium text-default-700 transition-all hover:bg-default-100 hs-accordion-active:bg-default-100"
                    href="ui-chart-apex.html">
                    <i class="ti ti-chart-histogram text-xl"></i>
                    Apex Charts
                </a>
            </li> --}}
        </ul>
    </div>
</div>
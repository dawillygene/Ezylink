@extends('main.main')

@section('content')

    <div class="p-6 space-y-6">

        <div class="flex w-full items-center justify-between print:hidden">
            <h4 class="text-lg font-semibold text-default-900">Add Shop</h4>

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
                        Shops
                        <i class="h-4 w-4" data-lucide="chevron-right"></i>
                    </a>
                </li>

                <li aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
                    Add Shop
                </li>
            </ol>
        </div>

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">

            <div class="px-6 py-4">
                <nav class="flex flex-wrap items-center gap-4" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full active"
                        data-hs-tab="#tabBusinessDetail" aria-controls="tabBusinessDetail" role="tab">
                        <i class="ti ti-heart-handshake text-lg me-1"></i>
                        Personal Detail
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full"
                        data-hs-tab="#tabPersonalDetail" aria-controls="tabPersonalDetail" role="tab">
                        <i class="ti ti-user text-lg me-1"></i>
                        Business Detail
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full"
                        data-hs-tab="#tabBankDetail" aria-controls="tabBankDetail" role="tab">
                        <i class="ti ti-building-bank text-lg me-1"></i>
                        Bank Detail
                    </button>
                </nav>
            </div>


            <div class="p-5 border-t border-dashed border-default-200">

                <form id="addShopForm" action="{{ route('ShopDetails.store') }}" method="POST">
                    @csrf
                    {{-- enctype="multipart/form-data" --}}
                    <div id="tabBusinessDetail" role="tabpanel" class="">
 

                        <h4 class="text-lg font-medium text-default-900 mb-6">Step 1:</h4>

                        <div class="grid lg:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">First
                                    Name</label>
                                <input id="firstName" name="first_name"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your First Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last
                                    Name</label>
                                <input id="lastName" name="last_name"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your Last Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="contactNumber">Contact
                                    Number</label>
                                <input id="contactNumber" name="contact_number"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your Contact Number">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="phoneNumber">Phone
                                    Number</label>
                                <input id="phoneNumber" name="phone_number"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your Phone Number">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2"
                                    for="emailAddress">Email</label>
                                <input id="emailAddress" name="email"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Email">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="birthofDate">Birth of
                                    Date</label>
                                <input id="birthofDate" name="birth_of_date"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="date" placeholder="Enter Birth of Date">
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-3 gap-6 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="city">City</label>
                                <input id="city" name="city"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your City">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2"
                                    for="country">Country</label>
                                <input id="country" name="country"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter Your Country">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="zipCode">ZIP
                                    code</label>
                                <input id="zipCode" name="zip_code"
                                    class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                    type="text" placeholder="Enter ZIP code">
                            </div>

                            <div class="lg:col-span-3">
                                <label class="block text-sm font-medium text-default-900 mb-2"
                                    for="description">Description</label>
                                <textarea id="description" name="description"
                                    class="block w-full bg-transparent rounded-lg py-2.5 px-4 border border-default-200 focus:ring-transparent focus:border-default-200"
                                    rows="5" placeholder="Enter Description"></textarea>
                            </div>
                        </div>

                        {{-- <div class="flex justify-end gap-4">
                            <button type="reset"
                                class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                                <i class="ti ti-arrow-back-up text-lg"></i>
                                Undo
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                                <i class="ti ti-device-floppy text-lg"></i>
                                Save
                            </button>
                        </div> --}}

                    </div>







                    <div id="tabPersonalDetail" class="" role="tabpanel">
                        <h4 class="text-lg font-medium text-default-900 mb-6">Step 2:</h4>
                            <div class="grid lg:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="companyName">Company
                                        Name</label>
                                    <input id="companyName" name="company_name"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Company Name" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="companyType">Company
                                        Type</label>
                                    <input id="companyType" name="company_type"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Company Type" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2" for="panCardNumber">PAN
                                        Card Number</label>
                                    <input id="panCardNumber" name="pan_card_number"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter PAN Card Number" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2" for="faxNumber">Fax
                                        Number</label>
                                    <input id="faxNumber" name="fax_number"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Fax Number">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="website">Website</label>
                                    <input id="website" name="website"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter website.com">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="email">Email</label>
                                    <input id="email" name="email"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="email" placeholder="Enter Email" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="companyNumber">Number</label>
                                    <input id="companyNumber" name="number"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Your Number">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="companyLogo">Company
                                        Logo</label>
                                    <input type="file" name="company_logo" id="file-input"
                                        class="block w-full rounded-md text-default-800 text-sm focus:ring-transparent border border-default-200 dark:bg-default-50 file:border-0 file:bg-default-100 file:me-4 file:py-2.5 file:px-4"
                                        placeholder="Upload Your Company Logo">
                                </div>
                            </div>

                            {{-- <div class="flex justify-end gap-4">
                            <button type="reset"
                                class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                                <i class="ti ti-arrow-back-up text-lg"></i> Undo
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                                <i class="ti ti-device-floppy text-lg"></i> Save
                            </button>
                        </div> --}}
                    </div>


                    <div id="tabBankDetail" role="tabpanel" class="">
                        <h4 class="text-lg font-medium text-default-900 mb-6">Step 3:</h4>
                            <div class="grid lg:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2" for="bankName">Bank
                                        Name</label>
                                    <input id="bankName" name="bank_name" value="{{ old('bank_name') }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Your Bank Name" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="bankBranch">Branch</label>
                                    <input id="bankBranch" name="branch" value="{{ old('branch') }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Your Branch" required>
                                </div>

                                <div class="lg:col-span-2">
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="accountHolderName">Account Holder Name</label>
                                    <input id="accountHolderName" name="account_holder_name"
                                        value="{{ old('account_holder_name') }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Your Account Holder Name" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2"
                                        for="accountNumber">Account
                                        Number</label>
                                    <input id="accountNumber" name="account_number" value="{{ old('account_number') }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter Your Account Number" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-default-900 mb-2" for="IFSCCode">IFSC
                                        Code</label>
                                    <input id="IFSCCode" name="ifsc_code" value="{{ old('ifsc_code') }}"
                                        class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"
                                        type="text" placeholder="Enter IFSC Code">
                                </div>
                            </div>

                            <div class="flex justify-end gap-4">
                                <button type="reset"
                                    class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                                    <i class="ti ti-arrow-back-up text-lg"></i> Undo
                                </button>
                                <button type="submit"
                                    class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                                    <i class="ti ti-device-floppy text-lg"></i> Save
                                </button>
                            </div>

                    </div>

                    <input type="submit" name="" id="">
                </form>

            </div>
        </div>
    @endsection

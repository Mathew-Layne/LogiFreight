<div>

    <body class="bg-white">
        <!-- url('/img/hero-pattern.svg') -->
        <div class="flex min-h-screen bg-white">

            <div class="w-1/2 bg-cover md:block hidden"
                style="background-image:  url('https://source.unsplash.com/1200x1200/?online shopping')">
            </div>
            <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
                <img src="log_in.webp" alt="hey">
            </div> -->


            <div class="md:w-1/2 max-w-xl mx-auto my-5 px-4 py-5 shadow-none">

                <div class="text-left p-0 font-sans">

                    <h1 class=" text-gray-800 text-3xl font-medium">Register</h1>
                    <h3 class="p-1 text-gray-700">Free forever. No payment needed.</h3>
                </div>
                <form wire:submit.prevent='register()' class="p-0">
                    <div class="mt-5 w-full flex space-x-3">
                        <div class="w-1/2">
                            <label for="first_name" class="sc-bqyKva ePvcBv">First Name</label>
                            <input type="text" wire:model='first_name'
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter First Name">
                                <div>@error('first_name')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>

                        <div class="w-1/2 ">
                            <label for="email" class="sc-bqyKva ePvcBv">Last Name</label>
                            <input type="text" wire:model='last_name'
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter Last Name">
                                <div>@error('last_name')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="email" class="sc-bqyKva ePvcBv">Email</label>
                        <input type="text" wire:model='email'
                            class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                            placeholder="Enter Email Address">
                            <div>@error('email')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                            </div>
                    </div>

                    <div class="mt-5 w-full flex space-x-3">
                        <div class="w-1/2">
                            <label for="password" class="sc-bqyKva ePvcBv">Password</label>
                            <input type="password" wire:model='password'
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter Password">
                                <div>@error('password')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    
                        <div class="w-1/2 ">
                            <label for="password" class="sc-bqyKva ePvcBv">Confirm Password</label>
                            <input type="password" wire:model='passwordConfirmation'
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Re-Enter Password">
                                <div>@error('password')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    </div>

                    <div class="mt-5 w-full flex space-x-3">
                        <div class="w-1/2">
                            <label for="email" class="sc-bqyKva ePvcBv">Contact Number</label>
                            <input type="tel" wire:model='phone'
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter Phone Number">
                                <div>@error('phone')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    
                        <div class="w-1/2 ">
                            <label for="trn" class="sc-bqyKva ePvcBv">TRN</label>
                            <input type="text" wire:model='trn' inputmode="numeric"
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter TRN">
                                <div>@error('trn')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="email" class="sc-bqyKva ePvcBv">Street Address</label>
                        <input type="text" wire:model="address"
                            class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent  "
                            placeholder="Enter Street Address">
                            <div>@error('address')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                            </div>
                    </div>

                    <div class="mt-5 w-full flex space-x-3">
                        <div class="w-1/2">
                            <label for="email" class="sc-bqyKva ePvcBv">City</label>
                            <input type="text" wire:model="city"
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter City">
                                <div>@error('city')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    
                        <div class="w-1/2 ">
                            <label for="parish" class="sc-bqyKva ePvcBv">Parish</label>
                            <input type="text" wire:model="parish"
                                class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent "
                                placeholder="Enter Parish">
                                <div>@error('parish')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror
                                </div>
                        </div>
                    </div>

                    {{-- <div class="mt-6 block p-5 text-sm md:font-sans text-xs text-gray-800">
                        <input type="checkbox" class="inline-block border-0  ">
                        <span display="inline" class="">By creating an account you are agreeing to our
                            <a class="" href="/s/terms" target="_blank" data-test="Link">
                                <span class="underline ">Terms and Conditions</span> </a> and
                            <a class="" href="/s/privacy" target="_blank" data-test="Link">
                                <span class="underline">Privacy Policy</span> </a>
                        </span>
                    </div> --}}

                    <div class="mt-10">
                        <input type="submit" value="Register Now"
                            class="py-3 bg-blue-500 text-white w-full rounded hover:bg-blue-600">
                    </div>
                </form>
                <a class="" href="/login" data-test="Link"><span
                        class="block  p-5 text-center text-gray-800 text-xs ">Already have an account?</span></a>
            </div>


        </div>
    </body>
   
</div>
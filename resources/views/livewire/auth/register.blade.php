<div>
    <div class="min-h-screen flex justify-center items-center bg-gray-200">

        @if($registered)
        <div class="absolute right-4 top-4 bg-white rounded-md">
            <div class="m-auto">
                <div class="shadow-md p-4 flex flex-row rounded-lg">
                    <div class="bg-green-500 inline-block rounded-lg p-1 mr-1"></div>
                    <b class="p-1">Registered</b>
                    <p class="p-1">User has been added!</p>
                    <a wire:click="$set('registered', false)" class="h-5 w-5 text-gray-500 inline-block p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endif

        <form wire:submit.prevent='register()' class="bg-white rounded-md py-12 px-8">
            <div class="flex justify-center text-3xl font-bold mb-4">
                <h1>Register</h1>
            </div>
            <div>
                <label for="name">First Name</label>
                <div class="mb-2">
                    <input wire:model='first_name' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="name" id="name">
                    <div>@error('first_name')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>

            </div>

            <div>
                <label for="name">Last Name</label>
                <div class="mb-2">
                    <input wire:model='last_name' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="name" id="name">
                    <div>@error('Last_name')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>

            </div>

            <div>
                <label for="email">TRN</label>
                <div class="mb-2">
                    <input wire:model='trn' class="@error('trn') border-red-500 @enderror border-black border-2 rounded-md w-full py-1 px-4" type="text" name="trn" id="trn">
                    <div>@error('trn')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>
            </div>

            <div>
                <label for="email"> Email Address</label>
                <div class="mb-2">
                    <input wire:model='email' class="@error('email') border-red-500 @enderror border-black border-2 rounded-md w-full py-1 px-4" type="email" name="email" id="email">
                    <div>@error('email')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>
            </div>


            <div>
                <label for="email"> Street Address</label>
                <div class="mb-2">
                    <input wire:model='address' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="address" id="address">
                    <div>@error('address')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>
            </div>

            <div>
                <label for="city">City</label>
                <div class="mb-2">
                    <input wire:model='city' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="city" id="city">
                    <div>@error('city')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>
            </div>

             <div>
                 <label for="email">Parish</label>
                 <div class="mb-2">
                     <input wire:model='parish' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="parish" id="parish">
                     <div>@error('parish')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                 </div>
             </div>

             <div>
                 <label for="email">Phone</label>
                 <div class="mb-2">
                     <input wire:model='phone' class="border-black border-2 rounded-md w-full py-1 px-4" type="text" name="phone" id="phone">
                     <div>@error('phone')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                 </div>
             </div>

            <div>
                <label for="password">Enter Password</label>
                <div class="mb-2">
                    <input wire:model.lazy='password' class="border-black border-2 rounded-md w-full py-1 px-4" type="password" name="password" id="password">
                    <div>@error('password')<span class="text-xs text-red-600 -mb-2">{{ $message }}</span>@enderror</div>
                </div>
            </div>
            <div>
                <label for="">Re-Enter Password</label>
                <input wire:model='passwordConfirmation' class="border-black border-2 rounded-md w-full py-1 px-4 mb-4" type="password">
            </div>

            <button class="text-white bg-indigo-600 rounded-md w-full py-2">Register</button>
        </form>
    </div>
</div>

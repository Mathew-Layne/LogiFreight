<div>
     @if($addAlert)
    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Quick Alert</h2>

        <form wire:submit.prevent="updateAlert()" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="shipper">Shipper</label>
                    <input wire:model="shipper" id="shipper" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('shipper')<span style="color:red">{{ $message }}</span>@enderror
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="trackinNo">Tracking Number</label>
                    <input wire:model="trackingNo" id="trackingNo" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('trackingNo')<span style="color:red">{{ $message }}</span>@enderror

                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="description">Description</label>
                    <input wire:model="description" id="description" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('description')<span style="color:red">{{ $message }}</span>@enderror

                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="value">Value (USD)</label>
                    <input wire:model="value" id="value" type="text" inputmode="numeric" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('value')<span style="color:red">{{ $message }}</span>@enderror

                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="weight">Weight(lbs)</label>
                    <input wire:model="weight" id="weight" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('weight')<span style="color:red">{{ $message }}</span>@enderror

                </div>

            </div>

            <div>
                <label class="block text-sm font-medium text-white">
                    Image
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center text-indigo-600">
                        <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span class="">Upload an Invoice</span>
                                <input wire:model="image" id="image" name="image" type="file" class="sr-only">
                            </label>
                            
                        </div>
                         @error('image')<span style="color:red">{{ $message }}</span>@enderror

                        <p class="text-xs text-indigo-600">

                            PNG, JPG, GIF up to 10MB
                        </p>
                    </div>
                </div>
            </div>
            <div></div>
           @if ($image)
           Photo Preview:
           <img src="{{ $image->temporaryUrl() }}" width="350px">
           @endif
           </div>
            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>
    @endif



</div>

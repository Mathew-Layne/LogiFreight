<div>
    @if($addAlert)
    <div class="z-10 w-full h-full absolute top-0 left-0 bg-black bg-opacity-75">
    
    <section class="z-20 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-20">
        <div class="text-center flex justify-between">
            <h2 class="text-lg pb-5 font-semibold text-gray-700 capitalize dark:text-white">Quick Alert</h2>
            <i wire:click="$set('addAlert', false)" class="fas fa-times text-2xl cursor-pointer"></i>
        </div>
        

        <form wire:submit.prevent="updateAlert()" enctype="multipart/form-data">
            <div class="w-full mb-3">
                <div class="flex gap-6 mb-3">
                    <div class="w-3/6">
                        <label class="text-gray-700 dark:text-gray-200" for="shipper">Shipper</label>
                        <input wire:model="shipper" id="shipper" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @error('shipper')<span style="color:red">{{ $message }}</span>@enderror
                    </div>

                    <div class="w-3/6">
                        <label class="text-gray-700 dark:text-gray-200" for="trackinNo">Tracking Number</label>
                        <input wire:model="trackingNo" id="trackingNo" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @error('trackingNo')<span style="color:red">{{ $message }}</span>@enderror

                    </div>
                </div>

                <div class="flex gap-6 mb-3">
                    <div class="w-3/6">
                        <label class="text-gray-700 dark:text-gray-200" for="value">Value (USD)</label>
                        <input wire:model="value" id="value" type="text" inputmode="numeric"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @error('value')<span style="color:red">{{ $message }}</span>@enderror

                    </div>

                    <div class="w-3/6">
                        <label class="text-gray-700 dark:text-gray-200" for="weight">Weight(lbs)</label>
                        <input wire:model="weight" id="weight" type="text"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        @error('weight')<span style="color:red">{{ $message }}</span>@enderror

                    </div>
                </div>

                <div class="w-full">
                    <label class="text-gray-700 dark:text-gray-200" for="description">Description</label>
                    <input wire:model="description" id="description" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @error('description')<span style="color:red">{{ $message }}</span>@enderror

                </div>

            </div>

            <div>
                <label class="block text-sm font-medium text-white">
                    Image
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center text-indigo-600">
                        <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                            aria-hidden="true">
                            <path
                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="image"
                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
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
            <div class="mt-5 w-4/12 text-center mx-auto">
                @if ($image)
                Photo Preview:
                <img src="{{ $image->temporaryUrl() }}" width="350px">
                @endif
            </div>

            <x-table.button color="gray" class="px-10 py-2 my-5">Add</x-table.button>
        </form>
    </section>
    </div>
    @endif

    <div>
        <!-- Client Table -->
        <div class="mt-4 mx-4">
            <div class="md:col-span-2 xl:col-span-3 mb-3">
                <h3 class="text-2xl font-semibold">Pre-Alerts</h3>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
    
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">First Name</th>
                                <th class="px-4 py-3">Last Name</th>
                                <th class="px-4 py-3">Tracking Number</th>
                                <th class="px-4 py-3">Weight</th>
                                <th class="px-4 py-3">Invoice</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse($alerts as $alert)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">{{ $alert->user->first_nm }}</td>
                                <td class="px-4 py-3 text-sm">{{ $alert->user->last_nm}}</td>
                                <td class="px-4 py-3 text-sm">{{ $alert->tracking_no }}</td>
                                <td class="px-4 py-3 text-sm">{{ $alert->weight }}</td>
                                <td class="px-4 py-3 text-sm"><a target="_blank" href="{{ url($alert->invoice) }}"><i
                                            class="fas fa-file-invoice"></i> Invoice</a></td>
                                <td class="px-4 py-3 text-sm">{{ $alert->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center py-3" colspan="6">No Records</td>
                            </tr>
                            @endforelse
    
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                    <div class="">
                        {{ $alerts->links() }}
                    </div>
                </div>
                <x-table.button wire:click="$toggle('addAlert')" color='blue'>Add Alert</x-table.button>
            </div>
        </div>
      
    </div>
    
    

</div>
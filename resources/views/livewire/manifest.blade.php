<div>
    @if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=>show = false, 3000)" x-show="show" class="w-full text-white bg-emerald-500">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                </svg>

                <p class="mx-3">{{ session('message')}}</p>
            </div>
            <button class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
    @endif

    @if($manifestUpdate)

    <section class="absolute left-0 top-0 flex justify-center h-screen items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Update Manifest
                        </h6>
                        <i wire:click="$set('manifestUpdate', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                    <form wire:submit.prevent="manifestUpdated()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Manifest Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Status
                                        </label>
                                        <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="manifestStatus">
                                            <option value="">Select</option>
                                            <option value="At Warehouse">At Warehouse</option>
                                            <option value="In Transit to Jamaica">In Transit to Jamaica</option>
                                            <option value="Arrived in Jamaica">Arrived in Jamaica</option>
                                            <option value="Ready for Pickup">Ready for Pickup</option>
                                        </select>
                                        @error('manifestStatus')<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Update Manifest</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($viewManifest)
    <section class="absolute left-0 top-0 flex justify-center items-center h-screen z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-8/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700  dark:text-gray-400 dark:bg-gray-800">

                <div class="mt-4 mx-4">
                    <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">

                        <div class="text-center flex justify-between">
                            <h3 class="text-2xl font-semibold">Manifest</h3>
                            <i wire:click="$set('viewManifest', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="w-full h-96 overflow-hidden overflow-y-scroll rounded-lg shadow-xs">


                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Customer Name</th>
                                        <th class="px-4 py-3">Mailbox</th>
                                        <th class="px-4 py-3">Weight</th>
                                        <th class="px-4 py-3">Cost</th>
                                        <th class="px-4 py-3">Tracking Number</th>
                                        <th class="px-4 py-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 ">
                                    {{-- {{ dd($package['0']['mailbox']) }} --}}
                                    @forelse($singleManifest as $packages)
                                    <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm">{{ $packages['user']['first_nm'] }} {{ $packages['user']['last_nm'] }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $packages['mailbox'] }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $packages['weight'] }}</td>
                                        <td class="px-4 py-3 text-sm">${{ $packages['estimated_cost'] }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $packages['shippers_tracking_no'] }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $packages['status'] }}</td>
                                        @empty
                                    <tr>
                                        <td class="text-center py-3" colspan="8">No Records</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                            <!-- Pagination -->
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Client Table -->
            </div>
        </div>


    </section>

    @endif
    @if($addManifest)
    <section class="absolute left-0 top-0 flex justify-center items-center h-screen z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Create Manifest
                        </h6>
                        <i wire:click="$set('addManifest', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="createManifest()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Manifest Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Start Date
                                        </label>
                                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="startDate" min="{{ date('Y-m-d') }}">

                                        @error('startDate')<span class="text-xs text-red-600">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            End Date
                                        </label>
                                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="endDate" min="{{ date('Y-m-d') }}"">

                                            @error('endDate')<span class=" text-xs text-red-600">{{$message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            AWB
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="awb" placeholder="Enter Airway Bill">

                                        @error('awb')<span class="text-xs text-red-600">{{$message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Date Received
                                        </label>
                                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="dateReceived">
                                        @error('dateRecieved')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Create Manifest</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endif
    <!-- Client Table -->
    <div class="mt-4 mx-4">
        <div class="md:col-span-2 xl:col-span-3 mb-3">
            <h3 class="text-2xl font-semibold">Manifest</h3>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <x-table.button wire:click="$toggle('addManifest')" color="blue" class="py-2 px-4 mb-4">Add Manifest</x-table.button>

            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Manifest No</th>
                            <th class="px-4 py-3">Start Date</th>
                            <th class="px-4 py-3">End Date</th>
                            <th class="px-4 py-3">No of Items</th>
                            <th class="px-4 py-3">Created At</th>
                            <th class="px-4 py-3">Actions</th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        {{-- {{ dd($packages) }} --}}
                        @forelse($manifest as $manifests)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{ $manifests->id }}</td>
                            <td class="px-4 py-3 text-sm">{{ $manifests->start_date }}</td>
                            <td class="px-4 py-3 text-sm">{{ $manifests->end_date }}</td>
                            <td class="px-4 py-3 text-sm">{{ $manifests->no_of_items }}</td>
                            <td class="px-4 py-3 text-sm">{{ $manifests->created_at }}</td>
                            <td class="px-4 py-3 text-sm">
                                <x-table.button wire:click="viewManifest({{ $manifests->id }})" color="blue" class="py-2 px-4">View</x-table.button>
                                <x-table.button wire:click="updateManifest({{ $manifests->id }})" color="blue" class="py-2 px-4">Update</x-table.button>
                            </td>
                            @empty
                        <tr>
                            <td class="text-center py-3" colspan="8">No Records</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <!-- Pagination -->
                <div class="">
                    {{ $manifest->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ./Client Table -->

</div>

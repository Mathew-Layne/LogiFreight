<div>
    @if($addPackage)
    <section class="absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add Package
                        </h6>
                        <i wire:click="$set('addPackage', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="createPackage()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Package Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Member Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="memberName" placeholder="Enter Member Name">
                                        @error('memberName')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Mailbox
                                        </label>
                                        <div class="flex">
                                            <input disabled type="text" class="w-full border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150" wire:model="mailBox">
                                            @error('mailBox')<span class="text-xs text-red-600">{{
                                                $message }}</span>@enderror
                                            <x-table.button wire:click="createMailbox()" type="button" color="gray" class="py-2 px-1 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Generate
                                            </x-table.button>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Weight
                                        </label>
                                        <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="weight" placeholder="Enter Weight">
                                        @error('weight')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Cost
                                        </label>
                                        <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="value" placeholder="Enter Cost">
                                        @error('value')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Merchant
                                        </label>
                                        <select wire:model="merchant" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Merchant...</option>
                                            <option value="Amazon">Amazon</option>
                                            <option value="Ebay">Ebay</option>
                                            <option value="Fashion Nova">Fashion Nova</option>
                                            <option value="NewEgg">NewEgg</option>
                                            <option value="Shein">Shein</option>
                                            <option value="Bath and Body Works">Bath and Body Works</option>
                                            <option value="Forever 21">Forever 21</option>
                                            <option value="Old Navy">Old Navy</option>
                                            <option value="Old Navy">AliExpress</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('merchant')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>



                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Shipper
                                        </label>
                                        <select wire:model="shipper" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Shipper...</option>
                                            <option value="Amazon Logistics">Amazon Logistics</option>
                                            <option value="USPS">USPS</option>
                                            <option value="US Post">US Post</option>
                                            <option value="DHL">DHL</option>
                                            <option value="FedEx">FEDEx</option>
                                            <option value="LaserShip">LaserShip</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        @error('shipper')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Tracking Number
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="trackingNo" placeholder="Enter Shippers Tracking Number">

                                        @error('trackingNo')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror

                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Internal Tracking
                                        </label>
                                        <div class="flex">
                                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="internalTracking">
                                            <x-table.button wire:click="createInternalTracking()" type="button" color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Generate</x-table.button>
                                        </div>
                                        @error('internalTracking')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Status
                                        </label>
                                        <select wire:model="status" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Status...</option>
                                            <option value="At warehouse">At warehouse</option>
                                            <option value="In Transit">In Transit to Jamaica</option>
                                            <option value="Arrived In Jamaica">Arrived In Jamaica</option>

                                            <option value="Ready for Pick-up">Ready for Pick-up</option>
                                            <option value="Delivered">Delivered</option>
                                        </select>
                                        @error('status')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Add Package</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endif

    @if($editPackage)
    <section class="absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Edit Package
                        </h6>
                        <i wire:click="$set('editPackage', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="updatePackage()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Package Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Member Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="memberName" placeholder="Enter Member Name">
                                        @error('memberName')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Mailbox
                                        </label>
                                        <div class="flex">
                                            <input disabled type="text" class="w-full border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150" wire:model="mailBox">
                                            @error('mailBox')<span class="text-xs text-red-600">{{
                                                $message }}</span>@enderror
                                            <x-table.button wire:click="createMailbox()" type="button" color="gray" class="py-2 px-1 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Generate
                                            </x-table.button>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Weight LBS
                                        </label>
                                        <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="weight" placeholder="Enter Weight">
                                        @error('weight')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Cost (USD)
                                        </label>
                                        <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="value" placeholder="Enter Cost">
                                        @error('value')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>


                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Merchant
                                        </label>
                                        <select wire:model="merchant" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Merchant...</option>
                                            <option value="Amazon">Amazon</option>
                                            <option value="Ebay">Ebay</option>
                                            <option value="Fashion Nova">Fashion Nova</option>
                                            <option value="NewEgg">NewEgg</option>
                                            <option value="Shein">Shein</option>
                                            <option value="Bath and Body Works">Bath and Body Works</option>
                                            <option value="Forever 21">Forever 21</option>
                                            <option value="Old Navy">Old Navy</option>
                                            <option value="Old Navy">AliExpress</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('merchant')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>



                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Shipper
                                        </label>
                                        <select wire:model="shipper" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Shipper...</option>
                                            <option value="Amazon Logistics">Amazon Logistics</option>
                                            <option value="USPS">USPS</option>
                                            <option value="US Post">US Post</option>
                                            <option value="DHL">DHL</option>
                                            <option value="FedEx">FEDEx</option>
                                            <option value="LaserShip">LaserShip</option>
                                            <option value="Other">Other</option>
                                        </select>

                                        @error('shipper')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Tracking Number
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="trackingNo" placeholder="Enter Shippers Tracking Number">

                                        @error('trackingNo')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror

                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Internal Tracking
                                        </label>
                                        <div class="flex">
                                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="internalTracking">
                                            <x-table.button wire:click="createInternalTracking()" type="button" color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Generate</x-table.button>
                                        </div>
                                        @error('internalTracking')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Status
                                        </label>
                                        <select wire:model="status" name="status" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Status...</option>
                                            <option value="At warehouse">At warehouse</option>
                                            <option value="In Transit">In Transit to Jamaica</option>
                                            <option value="Arrived In Jamaica">Arrived In Jamaica</option>

                                            <option value="Ready for Pick-up">Ready for Pick-up</option>
                                            <option value="Delivered">Delivered</option>

                                        </select>
                                        @error('status')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Add Package</x-table.button>
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
            <h3 class="text-2xl font-semibold">Packages</h3>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <x-table.button wire:click="$toggle('addPackage')" color="blue" class="py-2 px-4 mb-4">Add Package</x-table.button>

            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">First Name</th>
                            <th class="px-4 py-3">Last Name</th>
                            <th class="px-4 py-3">Mailbox</th>
                            <th class="px-4 py-3">Shipper</th>
                            <th class="px-4 py-3">Tracking Number</th>
                            <th class="px-4 py-3">Weight</th>
                            <th class="px-4 py-3">Value</th>
                            <th class="px-4 py-3">Actions</th>


                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        {{-- {{ dd($packages) }} --}}
                        @forelse($packages as $item)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">{{$item->user->first_nm }}</td>
                            <td class="px-4 py-3 text-sm">{{ $item->user->last_nm }}</td>
                            <td class="px-4 py-3 text-sm">{{ $item->mailbox }}</td>
                            <td class="px-4 py-3 text-sm">{{ $item->shipper }}</td>
                            <td class="px-4 py-3 text-sm">{{ $item->shippers_tracking_no }} </td>
                            <td class="px-4 py-3 text-sm">{{ $item->weight }}</td>
                            <td class="px-4 py-3 text-sm">{{ $item->estimated_cost }}</td>
                            <td class="px-4 py-3 text-sm">
                                <x-table.button wire:click="viewPackage({{ $item->id }})" color="blue" class="py-2 px-4">View</x-table.button>
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

                </div>
            </div>
        </div>
    </div>
    <!-- ./Client Table -->

</div>

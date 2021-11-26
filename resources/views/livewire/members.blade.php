<div>
    @if($addMember)
    <section class="absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add Member
                        </h6>
                        <i wire:click="$set('addMember', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="createMember()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Member Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            First Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="first_name" placeholder="Enter First Name">
                                        @error('first_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Last Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="last_name" placeholder="Enter Last Name">
                                        @error('last_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Email Address
                                        </label>
                                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="email" placeholder="Enter Email Address">
                                        @error('email')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            TRN
                                        </label>
                                        <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="trn" placeholder="Enter TRN">
                                        @error('trn')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Mailbox
                                        </label>
                                        <input disabled type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="mailbox" placeholder="Enter Mailbox">
                                        @error('mailbox')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>



                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Phone Number
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="phone" placeholder="Enter Phone Number">
                                        @error('phone')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Street Address
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="address" placeholder="Enter Street Address">
                                        @error('address')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            City
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="city" placeholder="Enter City">
                                        @error('city')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Parish
                                        </label>
                                        <select wire:model="parish" name="parish" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a Parish...</option>
                                            <option value="St Ann">St Ann</option>
                                            <option value="St Elizabeth">St Elizabeth</option>
                                            <option value="Clarendon">Clarendon</option>
                                            <option value="St Catherine">St Catherine</option>
                                            <option value="Trelawny">Trelawny</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Portland">Portland</option>
                                            <option value="Westmoreland">Westmoreland</option>
                                            <option value="St Thomas">St Thomas</option>
                                            <option value="St Mary">St Mary</option>
                                            <option value="St James">St James</option>
                                            <option value="Hanover">Hanover</option>
                                            <option value="St Andrew">St Andrew</option>
                                            <option value="Kingston">Kingston</option>
                                        </select>
                                        @error('parish')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="ml-3 mt-3 ">
                                    <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Add Member</x-table.button>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endif

    @if($editMember)
     <section class="absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
         <div class="w-full lg:w-6/12 px-4 mt-6">
             <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                 <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                     <div class="text-center flex justify-between">
                         <h6 class="text-blueGray-700 text-xl font-bold">
                             Edit Member
                         </h6>
                         <i wire:click="$set('editMember', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                     </div>
                 </div>
                 <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                     <form wire:submit.prevent="updateMember()">
                         <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                             Member Details
                         </h6>

                         <div class="flex flex-wrap">

                             <div class="flex flex-wrap">
                                 <div class="w-full lg:w-12/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             First Name
                                         </label>
                                         <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="first_name" placeholder="Enter First Name">
                                         @error('first_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>

                                 <div class="w-full lg:w-12/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Last Name
                                         </label>
                                         <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="last_name" placeholder="Enter Last Name">
                                         @error('last_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>

                                 <div class="w-full lg:w-6/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Email Address
                                         </label>
                                         <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="email" placeholder="Enter Email Address">
                                         @error('email')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>

                                  <div class="w-full lg:w-6/12 px-4">
                                      <div class="relative w-full mb-3">
                                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                              TRN
                                          </label>
                                          <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="trn" placeholder="Enter TRN">
                                          @error('trn')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                      </div>
                                  </div>

                                   <div class="w-full lg:w-6/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                               Mailbox
                                           </label>
                                           <input disabled type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="mailbox" placeholder="Enter TRN">
                                           @error('mailbox')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                       </div>
                                   </div>



                                 <div class="w-full lg:w-6/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Phone Number
                                         </label>
                                         <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="phone" placeholder="Enter Phone Number">
                                         @error('phone')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>

                                 <div class="w-full lg:w-12/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Street Address
                                         </label>
                                         <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="address" placeholder="Enter Street Address">
                                         @error('address')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="w-full lg:w-6/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             City
                                         </label>
                                         <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" wire:model="city" placeholder="Enter City">
                                         @error('city')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="w-full lg:w-6/12 px-4">
                                     <div class="relative w-full mb-3">
                                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Parish
                                         </label>
                                         <select wire:model="parish" name="parish" id="" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="">Choose a Parish...</option>
                                             <option value="St Ann">St Ann</option>
                                             <option value="St Elizabeth">St Elizabeth</option>
                                             <option value="Clarendon">Clarendon</option>
                                             <option value="St Catherine">St Catherine</option>
                                             <option value="Trelawny">Trelawny</option>
                                             <option value="Manchester">Manchester</option>
                                             <option value="Portland">Portland</option>
                                             <option value="Westmoreland">Westmoreland</option>
                                             <option value="St Thomas">St Thomas</option>
                                             <option value="St Mary">St Mary</option>
                                             <option value="St James">St James</option>
                                             <option value="Hanover">Hanover</option>
                                             <option value="St Andrew">St Andrew</option>
                                             <option value="Kingston">Kingston</option>
                                         </select>
                                         @error('parish')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="ml-3 mt-3 ">
                                     <x-table.button color="gray" class="py-2 px-4 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-400">Update Member</x-table.button>
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
             <h3 class="text-2xl font-semibold">Members</h3>
         </div>
         <div class="w-full overflow-hidden rounded-lg shadow-xs">
<x-table.button wire:click="$toggle('addMember')" color="blue" class="py-2 px-4 mb-4">Add Member</x-table.button>

             <div class="w-full overflow-x-auto">
                 <table class="w-full">
                     <thead>
                         <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                             <th class="px-4 py-3">First Name</th>
                             <th class="px-4 py-3">Last Name</th>
                             <th class="px-4 py-3">Mailbox</th>
                             <th class="px-4 py-3">Address</th>
                             <th class="px-4 py-3">Email</th>
                             <th class="px-4 py-3">Phone</th>
                             <th class="px-4 py-3">Actions</th>

                         </tr>
                     </thead>
                     <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                         @forelse($members as $member)
                         <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                             <td class="px-4 py-3 text-sm">{{ $member->first_nm }}</td>
                             <td class="px-4 py-3 text-sm">{{ $member->last_nm}}</td>
                             <td class="px-4 py-3 text-sm">{{ $member->mailbox }}</td>
                             <td class="px-4 py-3 text-sm">{{ $member->address. " ".$member->city." ",$member->parish  }}</td>
                             <td class="px-4 py-3 text-sm">{{ $member->email }}</td>
                             <td class="px-4 py-3 text-sm">{{ $member->phone }}</td>
                             <td class="px-4 py-3 text-sm">
                                 <x-table.button wire:click="viewMember({{ $member->id }})" color="blue" class="py-2 px-4">View</x-table.button>
                             </td>

                             @empty
                         <tr>
                             <td class="text-center py-3" colspan="7">No Records</td>
                         </tr>
                         @endforelse

                     </tbody>
                 </table>
             </div>
             <div class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                 <!-- Pagination -->
                 <div class="">
                     {{ $members->links() }}
                 </div>
             </div>
         </div>
     </div>
     <!-- ./Client Table -->

</div>

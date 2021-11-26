<div>
     <!-- Client Table -->
     <div class="mt-4 mx-4">
         <div class="md:col-span-2 xl:col-span-3 mb-3">
             <h3 class="text-2xl font-semibold">Members</h3>
         </div>
         <div class="w-full overflow-hidden rounded-lg shadow-xs">

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

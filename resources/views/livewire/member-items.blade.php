<div>
    <div>
        <!-- Client Table -->
        <div class="mt-4 mx-4">
            <div class="md:col-span-2 xl:col-span-3 mb-3">
                <h3 class="text-2xl font-semibold">Track Packages</h3>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
    
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Tracking #</th>
                                <th class="px-4 py-3">Sender</th>
                                <th class="px-4 py-3">Weight (lb)</th>
                                <th class="px-4 py-3">Date Arrived</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Code</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            {{-- @forelse($alerts as $alert) --}}
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                            </tr>
                            {{-- @empty --}}
                            <tr>
                                <td class="text-center py-3" colspan="6">No Records</td>
                            </tr>
                            {{-- @endforelse --}}
    
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-4 py-3 text-xs font-semibold text-gray-100 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <!-- Pagination -->
                    <div class="">
                        {{-- {{ $alerts->links() }} --}}
                    </div>
                </div>
                {{-- <x-table.button wire:click="$toggle('addAlert')" color='blue'>Add Alert</x-table.button> --}}
            </div>
        </div>
    
    </div>

</div>

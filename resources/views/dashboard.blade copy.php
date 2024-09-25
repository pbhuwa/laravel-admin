<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <div class="w-full flex justify-end px-2 py-2">
                            <button type="button">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" /></svg>
                            </button>
                        </div>
                        <table class="w-full bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-4 px-4 text-start border-b border-gray-200 dark:border-gray-700 uppercase text-xs font-bold">Name</th>
                                    <th class="py-4 px-4 text-start border-b border-gray-200 dark:border-gray-700 uppercase text-xs font-bold">Email</th>
                                    <th class="py-4 px-4 text-start border-b border-gray-200 dark:border-gray-700 uppercase text-xs font-bold">Role</th>
                                    <th class="py-4 px-4 text-start border-b border-gray-200 dark:border-gray-700 uppercase text-xs font-bold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">John Doe</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">john@example.com</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">Admin</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">
                                        <button class="text-indigo-500 hover:text-indigo-600 font-semibold">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600 font-semibold ml-3">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">Jane Smith</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">jane@example.com</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">Editor</td>
                                    <td class="py-4 px-4 border-b border-gray-200 dark:border-gray-700 text-xs">
                                        <button class="text-indigo-500 hover:text-indigo-600 font-semibold">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600 font-semibold ml-3">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

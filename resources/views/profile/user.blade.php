<x-app-layout>
    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 bg-gray-50" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-2">
            <li>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                        strokeWidth={2} d="m9 18l6-6l-6-6"></path>
                </svg>
            </li>
            <li>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">System</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                        strokeWidth={2} d="m9 18l6-6l-6-6"></path>
                </svg>
            </li>
            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">User</a>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                        strokeWidth={2} d="m9 18l6-6l-6-6"></path>
                </svg>
            </li>
            <li aria-current="page" class="text-sm font-medium text-gray-500">Bhuwan</li>
        </ol>
    </nav>
    <div class="p-3">
        <div
            class="shadow-1 flex overflow-x-auto overflow-y-hidden border-b border-gray-200 whitespace-nowrap dark:border-gray-700">
            <button
                class="inline-flex profile-info items-center h-10 px-2 py-2 -mb-px text-center text-green-600 bg-transparent border-b-2 border-green-500 sm:px-4 -px-1 dark:border-green-400 dark:text-green-300 whitespace-nowrap focus:outline-none"
                data-tab_type="profile">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>&nbsp;
                <span class="mx-1 text-sm sm:text-base">User Profile</span>
            </button>

            <button
                class="inline-flex profile-info items-center h-10 px-2 py-2 -mb-px text-center text-slate-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-slate whitespace-nowrap cursor-base focus:outline-none hover:border-slate-400"
                data-tab_type="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-face-id w-4 h-4">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                    <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                    <path d="M9 10l.01 0" />
                    <path d="M15 10l.01 0" />
                    <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                </svg>&nbsp;
                <span class="mx-1 text-sm sm:text-base">
                    Avatar
                </span>
            </button>

            <button
                class="inline-flex profile-info items-center h-10 px-2 py-2 -mb-px text-center text-slate-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 dark:text-slate whitespace-nowrap cursor-base focus:outline-none hover:border-slate-400"
                data-tab_type="security">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock w-4 h-4">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                </svg>
                <span class="mx-1 text-sm sm:text-base">
                    Change Password
                </span>
            </button>
        </div>
        <div class="flex justify-between mb-6 user-info">
            <p>Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead</p>
        </div>
    </div>

    @push('custom-scripts')
        <script type="module">
            $(function() {
                console.log('hello from user');

                $('.profile-info').on('click', function() {
                    $('.user-info').html($(this).data('tab_type'));
                    console.log('btn clicked', $(this).data('tab_type'));
                });
            });
        </script>
    @endpush
</x-app-layout>

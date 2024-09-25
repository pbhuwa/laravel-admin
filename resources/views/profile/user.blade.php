<x-app-layout>
    <nav class="flex px-5 py-3 text-gray-700 bg-gray-50" aria-label="Breadcrumb">
        <ol class="inline-flex items-center uppercase space-x-2">
            <li>
                <a href="#" class="text-xs font-small text-gray-600 hover:text-blue-800">
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
                <a href="#" class="text-xs font-small text-gray-600 hover:text-blue-800">System</a>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                        strokeWidth={2} d="m9 18l6-6l-6-6"></path>
                </svg>
            </li>
            <a href="#" class="text-xs font-small text-gray-600 hover:text-blue-800">User</a>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                        strokeWidth={2} d="m9 18l6-6l-6-6"></path>
                </svg>
            </li>
            <li aria-current="page" class="text-xs font-small text-blue-600">Bhuwan</li>
        </ol>
    </nav>
    <div class="mt-0 mr-4 mb-4 ml-4">
        <div
            class="block w-full rounded-sm bg-gray-100 text-center text-surface shadow-sm dark:bg-surface-dark dark:text-white border border-neutral-200">
            <div class="border-b border-neutral-200 px-3 dark:border-gray-200">
                <!--Tabs navigation-->
                <ul class="-mb-2 flex list-none flex-row flex-wrap border-b-0 ps-0" role="tablist" data-twe-nav-ref>
                    <li role="presentation">
                        <a href="#user-profile-tab"
                            class="my-2 block px-2 pb-2.5 pt-3 text-xs font-medium leading-tight text-gray-500 hover:isolate hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#user-profile-tab" data-twe-nav-active
                            role="tab" aria-controls="user-profile-tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                            <span>User Profile</span>
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#tabs-profile"
                            class="my-2 block px-2 pb-2.5 pt-3 text-xs font-medium leading-tight text-gray-500 hover:isolate hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#tabs-profile" role="tab"
                            aria-controls="tabs-profile" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-face-id w-4 h-4 mx-1 sm:w-6 sm:h-6">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                <path d="M9 10l.01 0" />
                                <path d="M15 10l.01 0" />
                                <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                            </svg>
                            <span>Avatar</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tabs-messages"
                            class="my-2 block px-2 pb-2.5 pt-3 text-xs font-medium leading-tight text-gray-500 hover:isolate hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#tabs-messages" role="tab"
                            aria-controls="tabs-messages" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-lock w-4 h-4 sm:w-6 sm:h-6">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                            <span>Change Password</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="p-6 bg-white dark:bg-surface-dark">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="user-profile-tab" role="tabpanel" aria-labelledby="user-profile-tab-tab" data-twe-tab-active>
                    <div class="relative mb-3" data-twe-input-wrapper-init>
                        <input type="text"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput1" placeholder="Example label" />
                        <label for="exampleFormControlInput1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Example
                            label
                        </label>
                    </div>
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    Tab 2 content
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    Tab 3 content
                </div>
            </div>
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

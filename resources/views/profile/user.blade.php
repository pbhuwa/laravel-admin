<x-app-layout>
    <x-breadcrumb>
        <li><a href="{{ route('dashboard.index') }}"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
        <li><a href="#"><i class="fa-regular fa-rectangle-list"></i> Users</a></li>
        <li><a href="#"><i class="fa-solid fa-user-pen"></i> {{ auth()->user()?->name }}</a></li>
    </x-breadcrumb>

    <div class="mt-0 mr-4 mb-4 ml-4">
        <div
            class="block w-full rounded-sm bg-gray-100 text-center text-surface shadow-sm dark:bg-surface-dark dark:text-white border border-neutral-200">
            <div class="px-2 nav nav-tabs border border-b-neutral-200">
                <!--Tabs navigation-->
                <ul class="flex list-none flex-row flex-wrap ps-0 mt-2" role="tablist" data-twe-nav-ref>
                    <li role="presentation">
                        <a href="#user-profile-tab"
                            class="block px-2 py-1 text-xs font-small leading-tight text-gray-500 hover:isolate hover:text-primary-500 hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-b-0 data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:-mb-1 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#user-profile-tab" data-twe-nav-active
                            role="tab" aria-controls="user-profile-tab" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 sm:h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                            <span>User Profile</span>
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#tabs-profile"
                            class="block px-2 py-1 text-xs font-small leading-tight text-gray-500 hover:isolate hover:text-primary-500 hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-b-0 data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:-mb-1 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#tabs-profile" role="tab"
                            aria-controls="tabs-profile" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-face-id w-4 h-4 mr-1 sm:h-6">
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
                            class="block px-2 py-1 text-xs font-small leading-tight text-gray-500 hover:isolate hover:text-primary-500 hover:border-neutral-400 hover:bg-neutral-100 focus:outline-none data-[twe-nav-active]:bg-white data-[twe-nav-active]:border-black data-[twe-nav-active]:border-l data-[twe-nav-active]:border-r data-[twe-nav-active]:border-t data-[twe-nav-active]:border-b-0 data-[twe-nav-active]:border-neutral-200 data-[twe-nav-active]:-mb-1 data-[twe-nav-active]:rounded-tl data-[twe-nav-active]:rounded-tr data-[twe-nav-active]:text-black dark:text-gray-400 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:bg-surface-dark dark:data-[twe-nav-active]:border-black flex items-center justify-center"
                            data-twe-toggle="pill" data-twe-target="#tabs-messages" role="tab"
                            aria-controls="tabs-messages" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"
                                class="w-4 h-4 mr-1 sm:h-6">
                                <path fill="currentColor"
                                    d="M17.615 17.615q.625 0 1.063-.437t.437-1.063t-.437-1.062t-1.063-.438t-1.062.438t-.438 1.062t.438 1.063t1.062.437m0 3q.75 0 1.4-.35t1.075-.975q-.575-.35-1.2-.512t-1.275-.163t-1.275.163t-1.2.512q.425.625 1.075.975t1.4.35M9 9h6V7q0-1.25-.875-2.125T12 4t-2.125.875T9 7zM6.615 21q-.666 0-1.14-.475Q5 20.051 5 19.385v-8.77q0-.666.475-1.14Q5.949 9 6.615 9H8V7q0-1.671 1.164-2.836T12 3t2.836 1.164T16 7v2h1.385q.666 0 1.14.475q.475.474.475 1.14v.285q0 .341-.27.562t-.624.184q-.117-.006-.248-.009q-.13-.002-.262-.002q-2.483 0-4.232 1.749t-1.749 4.231q0 .628.124 1.245t.38 1.19q.143.329-.028.64t-.518.31zm11 .615q-1.67 0-2.835-1.164t-1.165-2.836t1.165-2.835t2.835-1.165t2.836 1.165t1.164 2.835t-1.164 2.836q-1.164 1.164-2.836 1.164" />
                            </svg>
                            <span>Change Password</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="p-4 bg-white dark:bg-surface-dark">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="user-profile-tab" role="tabpanel" aria-labelledby="user-profile-tab-tab" data-twe-tab-active>
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- Name -->
                                <x-label-text-input id="name" name="name" placeholder="Name"
                                    value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                                    {{ __('Name') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <x-label-text-input id="username" name="username" placeholder="Username"
                                    value="{{ old('username', $user->username) }}" required autofocus
                                    autocomplete="username">
                                    {{ __('Username') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- Email Address -->
                                <x-label-text-input id="email" name="email" placeholder="Email"
                                    value="{{ old('email', $user->email) }}" required autofocus autocomplete="email">
                                    {{ __('Email') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- Address -->
                                <x-label-text-input id="address" name="address" placeholder="Address"
                                    value="{{ old('address', $user->address) }}" required autofocus
                                    autocomplete="address">
                                    {{ __('Address') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    <img src="https://tecdn.b-cdn.net/img/new/avatars/1.webp" class="w-32 rounded-full shadow-lg"
                        alt="Avatar" />
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                    id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-1 gap-4">
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- Current Password -->
                                <x-label-text-input id="current_password" name="current_password"
                                    placeholder="Current Password" :value="old('current_password')" required autofocus
                                    autocomplete="current_password">
                                    {{ __('Current Password') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- New Password -->
                                <x-label-text-input id="new_password" type="password" name="new_password"
                                    :value="old('new_password')" required autofocus autocomplete="new_password">
                                    {{ __('New Password') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                            </div>
                            <div class="relative mb-6" data-twe-input-wrapper-init>
                                <!-- Confirm New Password -->
                                <x-label-text-input id="confirm_password" type="password" name="confirm_password"
                                    :value="old('confirm_password')" required autofocus autocomplete="username">
                                    {{ __('Confirm Password') }}
                                </x-label-text-input>
                                <x-input-error :messages="$errors->get('confirm_password')" class="mt-2" />
                            </div>
                        </div>
                        <hr>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
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

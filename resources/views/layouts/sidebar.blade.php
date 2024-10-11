<style>
    .sidebar-menu.collapsed {
        width: 4rem;
        /* Only show the icons */
    }

    .sidebar-menu.collapsed .sidebar-text {
        display: none;
        /* Hide the text */
    }

    /* On hover, expand the parent list */
    .sidebar-menu.collapsed ul li.group:hover .sidebar-text {
        display: inline-block;
    }

    .sidebar-menu.collapsed ul li.group ul {
        display: none;
    }

    .sidebar-menu.collapsed ul li.group:hover ul {
        display: block;
    }

    .main.collapsed {
        margin-left: 4rem;
        /* Adjust content width for collapsed state */
        width: calc(100% - 4rem);
    }
</style>

<div id="sidebar" class="fixed left-0 top-50 w-48 h-full bg-slate-800 p-4 sidebar-menu transition-transform">
    <ul>
        <li class="mb-1 group {{ active_menu(['dashboard']) }} ">
            <a href="{{ route('dashboard.index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-solid fa-gauge mr-3 text-lg"></i>
                <span class="text-xs">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-instance-line mr-3 text-lg"></i>
                <span class="text-xs">Orders</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-xs flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Active
                        order</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-xs flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Completed
                        order</a>
                </li>
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-xs flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Canceled
                        order</a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-flashlight-line mr-3 text-lg"></i>
                <span class="text-xs">Services</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="#"
                        class="text-gray-300 text-xs flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Manage
                        services</a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group {{ active_menu(['settings']) }}">
            <a href="{{ route('settings.index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-solid fa-gear  mr-3 text-lg"></i>
                <span class="text-xs">Settings</span>
            </a>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#sidebarToggle').click(function() {
                $('#sidebar').toggleClass('collapsed');
                $('main').toggleClass('collapsed');
            });
        });
    </script>
@endpush

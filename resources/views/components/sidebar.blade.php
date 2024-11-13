{{-- resources/views/components/sidebar.blade.php --}}
<div x-data="{ isOpen: false }" class="flex h-screen ">
    {{-- Backdrop untuk mobile --}}
    <div x-show="isOpen" 
         @click="isOpen = false"
         class="fixed inset-0 z-20 transition-opacity bg-gray-500 bg-opacity-75 lg:hidden"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    {{-- Sidebar --}}
    <div :class="{ '-translate-x-full': !isOpen }"
         class="fixed inset-y-0 left-0 z-30 w-64 transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0 shadow-lg">
        
        {{-- Logo Section --}}
        <div class="flex items-center justify-center h-20 bg-gradient-to-r from-blue-600 to-blue-700">
            <div class="flex items-center space-x-3">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <span class="text-xl font-bold text-white">SuperStock</span>
            </div>
        </div>

        {{-- User Profile Section --}}
        <div class="flex items-center p-4 border-b border-gray-200">
            <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'Admin' }}&background=0D8ABC&color=fff" alt="Profile">
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name ?? 'Administrator' }}</p>
                <p class="text-xs text-gray-500">{{ Auth::user()->email ?? 'admin@superstock.com' }}</p>
            </div>
        </div>

        {{-- Navigation Menu --}}
        <nav class="px-3 py-4 space-y-2">
            {{-- Dashboard --}}
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 transition-colors group-hover:text-blue-700 {{ request()->routeIs('dashboard') ? 'text-blue-700' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>

            {{-- Inventory Dropdown --}}
            <div x-data="{ isOpen: {{ request()->routeIs('dashboard.*') ? 'true' : 'false' }} }" class="relative">
                <button @click="isOpen = !isOpen" 
                        class="flex items-center justify-between w-full px-4 py-3 text-gray-700 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('inventory.*') ? 'bg-blue-50 text-blue-700' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-gray-400 transition-colors group-hover:text-blue-700 {{ request()->routeIs('inventory.*') ? 'text-blue-700' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                        <span class="font-medium">Inventori</span>
                    </div>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': isOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="isOpen" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     class="px-4 py-2 mt-1 space-y-2">
                    <a href="{{ route('dashboard') }}" 
                       class="block px-4 py-2 text-sm text-gray-600 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('inventory.products') ? 'bg-blue-50 text-blue-700' : '' }}">
                        Daftar Produk
                    </a>
                    <a href="{{ route('dashboard') }}" 
                       class="block px-4 py-2 text-sm text-gray-600 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('inventory.categories') ? 'bg-blue-50 text-blue-700' : '' }}">
                        Kategori
                    </a>
                    <a href="{{ route('dashboard') }}" 
                       class="block px-4 py-2 text-sm text-gray-600 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('inventory.low-stock') ? 'bg-blue-50 text-blue-700' : '' }}">
                        Stok Menipis
                    </a>
                </div>
            </div>

            {{-- Transactions --}}
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('transactions') ? 'bg-blue-50 text-blue-700' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 transition-colors group-hover:text-blue-700 {{ request()->routeIs('transactions') ? 'text-blue-700' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="font-medium">Transaksi</span>
            </a>

            {{-- Reports --}}
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('reports') ? 'bg-blue-50 text-blue-700' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 transition-colors group-hover:text-blue-700 {{ request()->routeIs('reports') ? 'text-blue-700' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span class="font-medium">Laporan</span>
            </a>

            {{-- Settings --}}
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 transition-colors rounded-lg hover:bg-blue-50 hover:text-blue-700 group {{ request()->routeIs('settings') ? 'bg-blue-50 text-blue-700' : '' }}">
                <svg class="w-5 h-5 mr-3 text-gray-400 transition-colors group-hover:text-blue-700 {{ request()->routeIs('settings') ? 'text-blue-700' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="font-medium">Pengaturan</span>
            </a>
        </nav>

        {{-- Footer/Logout --}}
        <div class="absolute bottom-0 w-full p-4 border-t border-gray-200">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-red-600 transition-colors rounded-lg hover:bg-red-50 group">
                    <svg class="w-5 h-5 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="font-medium">Keluar</span>
                </button>
            </form>
        </div>
    </div>

    {{-- Toggle Button untuk Mobile --}}
    <button @click="isOpen = !isOpen" class="fixed p-2 bg-white rounded-lg shadow-lg lg:hidden left-4 top-4">
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    {{-- Main Content Area --}}
    <div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen w-full p-0 lg:p-0">
        <div class="h-screen w-full overflow-y-auto">
            {{ $slot }}
        </div>
    </div>

</div>
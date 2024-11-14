<x-app-layout>
    {{-- Main Content Area --}}
    <div class="min-h-screen p-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                <div class="mb-6 lg:mb-0">
                    <h1 class="text-3xl font-bold bg-clip-text ">
                        Welcome back, Admin
                    </h1>
                    <p class="mt-2 text-gray-600">Here's what's happening with your store today.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text" 
                               class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200 bg-white text-sm" 
                               placeholder="Search products...">
                        <span class="absolute left-3 top-2.5 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </span>
                    </div>
                    <!-- Export Button -->
                    <div class="relative inline-block text-left">
                        <button type="button" 
                                class="inline-flex items-center px-4 py-2.5 border border-gray-200 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-sm">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Export Data
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <!-- Export Dropdown Menu -->
                        <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100">
                            <div class="py-1">
                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    Export as PDF
                                </a>
                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                    </svg>
                                    Export as Excel
                                </a>
                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2"/>
                                    </svg>
                                    Export as CSV
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Add New Product Button -->
                    <button class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 shadow-sm hover:shadow-md">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Add New Product
                    </button>
                </div>
            </div>
            <!-- Quick Date Filter -->
            <div class="mt-6 flex flex-wrap gap-3">
                <button class="px-4 py-2 rounded-lg bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                    Today
                </button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 text-sm font-medium hover:bg-gray-50 border border-gray-200 transition-colors duration-200">
                    Yesterday
                </button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 text-sm font-medium hover:bg-gray-50 border border-gray-200 transition-colors duration-200">
                    Last 7 days
                </button>
                <button class="px-4 py-2 rounded-lg bg-white text-gray-600 text-sm font-medium hover:bg-gray-50 border border-gray-200 transition-colors duration-200">
                    Last 30 days
                </button>
                <div class="relative">
                    <input type="date" class="px-4 py-2 rounded-lg bg-white text-gray-600 text-sm font-medium border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                </div>
            </div>
        </div>
    

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Total Produk -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-gray-600">Total Produk</h2>
                        <p class="text-2xl font-bold text-gray-900">2,548</p>
                    </div>
                </div>
            </div>

            <!-- Stok Menipis -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-gray-600">Stok Menipis</h2>
                        <p class="text-2xl font-bold text-gray-900">15</p>
                    </div>
                </div>
            </div>

            <!-- Total Penjualan -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-gray-600">Total Penjualan</h2>
                        <p class="text-2xl font-bold text-gray-900">Rp 45.6M</p>
                    </div>
                </div>
            </div>

            <!-- Profit -->
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="font-semibold text-gray-600">Profit</h2>
                        <p class="text-2xl font-bold text-gray-900">Rp 12.3M</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Grafik Penjualan -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-900">Grafik Penjualan Mingguan</h3>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100">Minggu Ini</button>
                        <button class="px-3 py-1 text-sm bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100">Bulan Ini</button>
                    </div>
                </div>
                <div class="h-72 bg-gray-50 rounded-xl">
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        Area Grafik Penjualan
                    </div>
                </div>
            </div>

            <!-- Top Products -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-900">Produk Terlaris</h3>
                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lihat Semua</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-100">
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Produk</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Terjual</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Revenue</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Trend</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center mr-3">
                                            <span class="text-blue-600 font-medium">BP</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Beras Premium</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">234 unit</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Rp 5.2M</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600">↑ 12%</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-lg bg-yellow-100 flex items-center justify-center mr-3">
                                            <span class="text-yellow-600 font-medium">MG</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Minyak Goreng</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">198 unit</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Rp 3.8M</td>
                                <td class="px-6 py-4">
                                    <span class="text-green-600">↑ 8%</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-lg bg-pink-100 flex items-center justify-center mr-3">
                                            <span class="text-pink-600 font-medium">GP</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Gula Pasir</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">156 unit</td>
                                <td class="px-6 py-4 font-medium text-gray-900">Rp 2.1M</td>
                                <td class="px-6 py-4">
                                    <span class="text-red-600">↓ 3%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold text-gray-900">Aktivitas Terbaru</h3>
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lihat Semua Aktivitas</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-100">
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Waktu</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Aktivitas</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 text-sm text-gray-500">2 menit yang lalu</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-900">Penambahan stok Beras Premium</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img class="h-8 w-8 rounded-full" src="path/to/image.jpg" alt="User Image">
                                    <span class="ml-3 text-gray-900">John Doe</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-green-600">Selesai</td>
                            <td class="px-6 py-4 text-sm">
                                <button class="text-blue-600 hover:text-blue-800">Lihat</button>
                            </td>
                        </tr>
                        <!-- Additional rows for activities -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

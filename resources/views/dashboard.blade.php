<x-app-layout>
    {{-- Main Content Area --}}
    <div class="bg-gray-50 min-h-screen p-8 overflow-y-auto max-h-screen">
        <div class="bg-gray-50 min-h-screen p-6 lg:p-8 overflow-y-auto">
            <!-- Welcome Section with Search -->
            <div class="mb-8">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Welcome back, Admin</h1>
                        <p class="mt-2 text-gray-600">Here's what's happening with your store today.</p>
                    </div>
                    <div class="mt-4 lg:mt-0 flex flex-col sm:flex-row gap-3">
                        <div class="relative">
                            <input type="text" class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:border-indigo-600 focus:ring focus:ring-indigo-100 transition-colors duration-150 bg-white text-sm" placeholder="Search products...">
                            <span class="absolute left-3 top-2.5 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </span>
                        </div>
                        <button class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-150">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Add New Product
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Products Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 bg-blue-50 rounded-xl">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Total Products</h3>
                            <div class="flex items-baseline mt-1">
                                <span class="text-2xl font-semibold text-gray-900">2,345</span>
                                <span class="ml-2 text-sm text-green-600 font-medium">+12.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Monthly target</span>
                            <span class="font-medium text-gray-900">2,500</span>
                        </div>
                        <div class="mt-2 h-2 bg-gray-100 rounded-full">
                            <div class="h-2 bg-blue-600 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
        
                <!-- Low Stock Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 bg-red-50 rounded-xl">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Low Stock Items</h3>
                            <div class="flex items-baseline mt-1">
                                <span class="text-2xl font-semibold text-gray-900">42</span>
                                <span class="ml-2 text-sm text-red-600 font-medium">Action Needed</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-sm font-medium text-red-600 hover:text-red-700">View inventory report →</a>
                    </div>
                </div>
        
                <!-- Revenue Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 bg-green-50 rounded-xl">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Monthly Revenue</h3>
                            <div class="flex items-baseline mt-1">
                                <span class="text-2xl font-semibold text-gray-900">Rp 45.6M</span>
                                <span class="ml-2 text-sm text-green-600 font-medium">+8.2%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex space-x-2">
                            <div class="flex-1">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">This Month</span>
                                    <span class="font-medium text-gray-900">45.6M</span>
                                </div>
                                <div class="mt-1 h-1.5 bg-gray-100 rounded-full">
                                    <div class="h-1.5 bg-green-500 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-500">Last Month</span>
                                    <span class="font-medium text-gray-900">42.1M</span>
                                </div>
                                <div class="mt-1 h-1.5 bg-gray-100 rounded-full">
                                    <div class="h-1.5 bg-gray-300 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Orders Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 bg-purple-50 rounded-xl">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium text-gray-500">Total Orders</h3>
                            <div class="flex items-baseline mt-1">
                                <span class="text-2xl font-semibold text-gray-900">384</span>
                                <span class="ml-2 text-sm text-green-600 font-medium">+4.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="bg-purple-50 rounded-lg p-2 text-center">
                                <div class="text-sm font-medium text-purple-600">245</div>
                                <div class="text-xs text-gray-500">Completed</div>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2 text-center">
                                <div class="text-sm font-medium text-gray-600">139</div>
                                <div class="text-xs text-gray-500">Pending</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Activity & Inventory Section -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <!-- Recent Activity -->
                <div class="xl:col-span-2 bg-white rounded-2xl shadow-sm">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-900">Recent Activities</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Activity Item -->
                            <div class="flex items-start">
                                <span class="flex-shrink-0 w-9 h-9 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </span>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">New stock added</h4>
                                    <div class="mt-1 text-sm text-gray-500">
                                        Added 300 units of "Indomie Goreng" to inventory
                                    </div>
                                    <div class="mt-2 text-xs text-gray-400">2 hours ago • By John Doe</div>
                                </div>
                                <button class="flex-shrink-0 ml-4 text-gray-400 hover:text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                    </svg>
                                </button>
                            </div>
        
                            <!-- More Activity Items -->
                            <div class="flex items-start">
                                <span class="flex-shrink-0 w-9 h-9 rounded-full bg-green-50 text-green-600 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </span>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Order completed</h4>
                                    <div class="mt-1 text-sm text-gray-500">
                                        Order #12345 has been completed and shipped
                                    </div>
                                    <div class="mt-2 text-xs text-gray-400">4 hours ago • By System</div>
                                </div>
                                <button class="flex-shrink-0 ml-4 text-gray-400 hover:text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0
    </div>
</x-app-layout>
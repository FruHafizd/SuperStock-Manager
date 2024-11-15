<x-app-layout>
    <div class="min-h-screen bg-gray-50/50">
        <div class="container mx-auto px-4 py-8">
            <!-- Header Section with refined spacing and shadows -->
            <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <h1 class="text-3xl font-semibold text-gray-900">Daftar Produk</h1>
                <button
                    class="bg-indigo-600 text-white px-6 py-2.5 rounded-lg hover:bg-indigo-700 transition-colors duration-200 flex items-center gap-2 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="font-medium">Tambah Produk</span>
                </button>
            </div>

            <!-- Filters & Search with improved styling -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Search Input -->
                    <div class="flex-1">
                        <div class="relative">
                            <input type="text" 
                                placeholder="Cari produk berdasarkan nama atau SKU..." 
                                class="w-full pl-11 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-600 text-sm transition-colors duration-200">
                            <svg class="absolute left-4 top-3.5 h-5 w-5 text-gray-400" 
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
            
                    <!-- Filters -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="relative min-w-[180px]">
                            <select class="w-full appearance-none border border-gray-200 rounded-lg pl-4 pr-10 py-3 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-600 text-sm bg-white cursor-pointer hover:border-gray-300 transition-colors duration-200">
                                <option>Semua Kategori</option>
                                <option>Makanan</option>
                                <option>Minuman</option>
                                <option>Peralatan Rumah</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Table with enhanced visual hierarchy -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Produk</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    SKU</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Kategori</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Stok</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Harga Per Unit</th>
                                <th
                                    class="px-6 py-4 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <!-- Product Row 1 -->
                            <tr class="hover:bg-gray-50/50 transition-colors duration-150">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="/api/placeholder/48/48" alt=""
                                            class="h-12 w-12 rounded-lg object-cover shadow-sm">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">Indomie Goreng</div>
                                            <div class="text-sm text-gray-500">Mie Instan</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">IDM-001</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Makanan</td>
                                <td class="px-6 py-4 text-sm text-gray-600">1,240</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Rp 2,500</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-3">
                                        <button
                                            class="text-indigo-600 hover:text-indigo-800 transition-colors duration-150">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 transition-colors duration-150">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination with refined styling -->
                <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Menampilkan 1 - 10 dari 234 produk
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 disabled:opacity-50 transition-colors duration-150 text-sm font-medium">
                            Sebelumnya
                        </button>
                        <button
                            class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 transition-colors duration-150 text-sm font-medium">
                            Selanjutnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

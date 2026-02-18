<x-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-center">All Products</h1>
    </x-slot>

    <div class="mt-6 p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
        <a href="{{ route('admin.products.create') }}" 
           class="inline-block px-4 py-2 bg-black text-white rounded-2xl shadow-md hover:bg-gray-800 hover:shadow-lg transition-all duration-300">
            Add New Product
        </a>

        <table class="w-full mt-4 text-left border-collapse">
            <thead class="border-b-2 border-black">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Owner</th>
                    <th class="px-4 py-2">Produced</th>
                    <th class="px-4 py-2">Expires</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="border-b hover:bg-gray-100 transition-all duration-200">
                    <td class="px-4 py-2">{{ $product->id }}</td>
                    <td class="px-4 py-2">{{ $product->Pname }}</td>
                    <td class="px-4 py-2">{{ $product->user->name ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $product->produseDate }}</td>
                    <td class="px-4 py-2">{{ $product->expirDate }}</td>
                    <td class="px-4 py-2 flex space-x-2">

                        <!-- Edit Button -->
                        <a href="{{ route('admin.products.edit', $product->id) }}" 
                           class="inline-block px-4 py-2 bg-black text-white rounded-2xl shadow-md hover:bg-blue-800 hover:shadow-lg hover:shadow-blue-500 transition-all duration-300">
                            Edit
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-block px-4 py-2 bg-black text-white rounded-2xl shadow-md hover:bg-red-800 hover:shadow-lg hover:shadow-red-500 transition-all duration-300">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>

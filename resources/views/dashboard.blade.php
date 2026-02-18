<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-center">Your Products</h1>
    </x-slot>

    <div class="mt-6">

        <table class="w-full bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
            <thead class="border-b-2 border-black">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Produced</th>
                    <th class="px-4 py-2">Expires</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(auth()->user()->products as $product)
                <tr class="border-b hover:bg-gray-100 transition-all duration-200">
                    <td class="px-4 py-2">{{ $product->id }}</td>
                    <td class="px-4 py-2">{{ $product->Pname }}</td>
                    <td class="px-4 py-2">{{ $product->produseDate }}</td>
                    <td class="px-4 py-2">{{ $product->expirDate }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('products.edit', $product->id) }}" 
                           class="text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>

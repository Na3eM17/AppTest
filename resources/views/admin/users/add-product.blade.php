<x-layout>
    <h1 class="text-3xl font-bold mb-6 text-center">Add Product for {{ $user->name }}</h1>

    <div class="max-w-xl mx-auto space-y-6">

        <!-- Select Existing Product -->
        @if($products->count() > 0)
        <div class="p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
            <h2 class="text-xl font-semibold mb-4">Select Existing Product</h2>
            <form action="{{ route('admin.users.storeProduct', $user->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1 font-semibold">Choose Product</label>
                    <select name="product_id" class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-black">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->Pname }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                        class="w-full px-4 py-2 bg-black text-white rounded-2xl shadow-md hover:bg-gray-800 hover:shadow-lg transition-all duration-300">
                    Add Product
                </button>
            </form>
        </div>
        @endif

        <!-- Create New Product -->
        <div class="p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
            <h2 class="text-xl font-semibold mb-4">Or Create New Product</h2>
            <form action="{{ route('admin.users.storeProduct', $user->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1 font-semibold">Product Name</label>
                    <input type="text" name="Pname" value="{{ old('Pname') }}"
                           class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-black"
                           placeholder="Enter product name" required>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Produced Date</label>
                    <input type="date" name="produseDate" value="{{ old('produseDate') }}"
                           class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-black"
                           required>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Expiry Date</label>
                    <input type="date" name="expirDate" value="{{ old('expirDate') }}"
                           class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-black"
                           required>
                </div>

                <button type="submit"
                        class="w-full px-4 py-2 bg-black text-white rounded-2xl shadow-md hover:bg-gray-800 hover:shadow-lg transition-all duration-300">
                    Add Product
                </button>
            </form>
        </div>

    </div>
</x-layout>

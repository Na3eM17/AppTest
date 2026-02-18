<x-layout>
    <h1 class="text-3xl font-bold text-center mb-6">User: {{ $user->name }}</h1>

    <div class="max-w-4xl mx-auto space-y-6">

        <!-- User Info Card -->
        <div class="p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
            <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Role:</strong> {{ $user->is_admin ? 'Admin' : 'User' }}</p>
        </div>

        <!-- Products Section -->
        <div class="p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300">
            <h2 class="text-2xl font-semibold mb-4">Products</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($user->products as $product)
                    <div class="p-4 bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300">
                        <h3 class="font-bold text-lg mb-2">{{ $product->Pname }}</h3>
                        <p class="text-sm"><strong>Produced:</strong> {{ $product->produseDate }}</p>
                        <p class="text-sm"><strong>Expires:</strong> {{ $product->expirDate }}</p>
                    </div>
                @empty
                    <p class="text-center text-gray-500">This user has no products.</p>
                @endforelse
            </div>
        </div>

         <!-- Add Product Button -->
        <div class="text-center">
            @if($user->products->count() < 3)
                <a href="{{ route('admin.users.addProduct', $user->id) }}"
                   class="inline-block px-6 py-3 bg-black text-white rounded-2xl shadow-md hover:bg-gray-800 hover:shadow-lg transition-all duration-300">
                    Add Product
                </a>
            @else
                <button
                   class="inline-block px-6 py-3 bg-gray-400 text-white rounded-2xl shadow-md cursor-not-allowed"
                   disabled
                   title="User already has 3 products">
                    Add Product
                </button>
            @endif
        </div>

    </div>
</x-layout>

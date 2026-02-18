<x-layout>
    
        <h1 class="text-3xl font-bold text-center">Add Product</h1>
    

    <form action="{{ route('admin.products.store') }}" method="POST" class="mt-6 p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 max-w-lg mx-auto">
        @csrf
        <label class="block mb-2">Product Name</label>
        <input type="text" name="Pname" class="w-full mb-4 p-2 border rounded" required>

        <label class="block mb-2">Produced Date</label>
        <input type="date" name="produseDate" class="w-full mb-4 p-2 border rounded" required>

        <label class="block mb-2">Expiration Date</label>
        <input type="date" name="expirDate" class="w-full mb-4 p-2 border rounded" required>

        <label class="block mb-2">Owner</label>
        <select name="user_id" class="w-full mb-4 p-2 border rounded" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-200 hover:text-black transition-all">Save</button>
    </form>
</x-layout>

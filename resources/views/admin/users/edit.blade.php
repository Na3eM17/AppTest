<x-layout>

        <h1 class="text-3xl font-bold text-center">Edit User</h1>
    

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="mt-6 p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 max-w-lg mx-auto">
        @csrf
        @method('PUT')
        <label class="block mb-2">Name</label>
        <input type="text" name="name" value="{{ $user->name }}" class="w-full mb-4 p-2 border rounded" required>
        <label class="block mb-2">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="w-full mb-4 p-2 border rounded" required>
        <label class="block mb-2">Password (leave empty to keep)</label>
        <input type="password" name="password" class="w-full mb-4 p-2 border rounded">
        <label class="inline-flex items-center mb-4">
            <input type="checkbox" name="is_admin" class="mr-2" {{ $user->is_admin ? 'checked' : '' }}>
            Admin
        </label>
        <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-200 hover:text-black transition-all">Update</button>
    </form>
</x-layout>

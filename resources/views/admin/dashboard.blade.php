<x-layout>

<div class=" bg-gray-100 p-10">

    <h1 class="text-3xl font-bold mb-10">
        Admin Dashboard
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

        <!-- Users Card -->
        <a href="{{ route('admin.users.index') }}"
           class="block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300">

            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-semibold text-gray-600">
                        Total Users
                    </h2>
                    <p class="text-4xl font-bold mt-4 text-black">
                        {{ $usersCount }}
                    </p>
                </div>

                <div class="text-6xl text-gray-300">
                    👤
                </div>
            </div>

        </a>

        <!-- Products Card -->
        <a href="{{ route('admin.products.index') }}"
           class="block bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition duration-300">

            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-semibold text-gray-600">
                        Total Products
                    </h2>
                    <p class="text-4xl font-bold mt-4 text-black">
                        {{ $productsCount }}
                    </p>
                </div>

                <div class="text-6xl text-gray-300">
                    📦
                </div>
            </div>

        </a>

    </div>

</div>

    <!-- Users With Products -->
    <div class="w-full bg-white p-8 rounded-2xl shadow-xl ">

            <h2 class="text-2xl font-semibold mb-6">
                Users & Their Products
            </h2>

            @foreach($users as $user)

                <div class="mb-6 border-b pb-4 flex justify-between items-center">

                    <div>
                        <h3 class="text-lg font-bold">
                        {{$user->id}} {{ $user->name }}
                            <span class="text-sm text-gray-500">
                                ({{ $user->products->count() }} products)
                            </span>
                        </h3>

                        @if($user->products->count() > 0)
                            <ul class="mt-2 ml-6 list-disc text-gray-700">
                                @foreach($user->products as $product)
                                    <li>{{ $product->Pname }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-400 mt-2 ml-4">
                                No products
                            </p>
                        @endif
                    </div>

                    <div class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-200 hover:text-black transition-all">
                        <a href="{{route("ShowData",$user->id)}}">Show data</a>
                    </div>
                </div>
                
            @endforeach
        

    </div>

</div>

</x-layout>

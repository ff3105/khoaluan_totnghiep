@extends('index')

@section('body')
    <div class="h-screen flex-1 flex flex-col bg-gray-800 py-4 lg:py-8 px-4 lg:px-6 xl:px-8 overflow-hidden">
        <!-- topbar -->
        <div class="max-w-screen-2xl w-full mx-auto flex justify-between">
            <div>
                <h1 class="text-2xl mb-1 font-bold text-blue-100">Products overview</h1>
                <p class="text-lg text-blue-200 hidden lg:block">{{ $products->count() }} items</p>
            </div>
            <div class="flex space-x-4 flex-1 justify-between md:justify-end">
                <div class="relative md:max-w-xs w-full">
                    <svg class="w-5 h-5 absolute top-3 left-3 text-blue-100 opacity-70" fill="currentColor"
                         viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <input type="text"
                           class="bg-gray-600 rounded-lg w-full h-10 pr-4 pl-9 placeholder-blue-200 placeholder-opacity-70 text-blue-100 text-sm font-semibold  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60"
                           placeholder="Enter your search term...">
                </div>
                <div class="flex space-x-4">
                    <button type="button"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" />
                        </svg>
                    </button>
                    <button type="button"
                            class="bg-gray-600 rounded-lg h-10 px-3 hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!--/ topbar -->

        <!-- main content -->
        <div class="bg-gray-700 overflow-hidden overflow-y-scroll rounded-lg mt-8">
            <table class="min-w-full text-left">
                <thead>
                <tr>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">ID</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Product</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Price</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Brand</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Category</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Rating</th>
                    <th class="bg-gray-600 py-2 px-3 sticky top-0">Created</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-600 text-blue-100 text-opacity-80 whitespace-nowrap">
                @foreach($products as $product)
                    <tr>
                        <td class="py-3 px-3">#{{ $product->id }}</td>
                        <td class="py-3 px-3">{{ $product->name }}</td>
                        <td class="py-3 px-3">{{ $product->price }}</td>
                        <td class="py-3 px-3">{{ $product->brand->name }}</td>
                        <td class="py-3 px-3">{{ $product->category->name }}</td>
                        <td class="py-3 px-3 flex flex-row">
                            <svg class="w-6 h-6 mr-1.5 text-yellow-400" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.194 2.102a.9.9 0 0 1 1.614 0l1.521 3.082l3.401.494a.9.9 0 0 1 .5 1.535l-2.462 2.4l.581 3.387a.9.9 0 0 1-1.306.948L8.001 12.35l-3.042 1.6a.9.9 0 0 1-1.306-.95l.58-3.387l-2.46-2.399a.9.9 0 0 1 .499-1.535l3.4-.494l1.522-3.082z" fill="currentColor"></path>
                            </svg>
                            {{ $product->calculationRating() }}
                            ({{ $product->ratings->count() }} reviews)
                        </td>
                        <td class="py-3 px-3">{{ $product->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!--/ main content -->
    </div>
@endsection
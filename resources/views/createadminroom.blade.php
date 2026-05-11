<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Room') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="" method="POST">
                    @csrf

                    {{-- Title --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Title</label>
                        <input type="text" name="title"
                               class="w-full border-gray-300 rounded mt-1"
                               placeholder="Enter title" required>
                    </div>

                    {{-- Bed --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Bed</label>
                        <input type="number" name="bed"
                               class="w-full border-gray-300 rounded mt-1"
                               placeholder="Ex:1" required>
                    </div>

                    {{-- Bath --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Bath</label>
                        <input type="number" name="bath"
                               class="w-full border-gray-300 rounded mt-1"
                               placeholder="Ex:1" required>
                    </div>

                    {{-- Price --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Price</label>
                        <input type="text" name="price"
                               class="w-full border-gray-300 rounded mt-1"
                               placeholder="Enter price" required>
                    </div>

                    {{-- Floor --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Floor</label>
                        <input type="text" name="floor"
                               class="w-full border-gray-300 rounded mt-1"
                               placeholder="Example: 5th Floor" required>
                    </div>

                    {{-- Description --}}
                    <div class="mb-4">
                        <label class="block text-gray-700">Description</label>
                        <textarea name="description" rows="4"
                                  class="w-full border-gray-300 rounded mt-1"
                                  placeholder="Write description..."></textarea>
                    </div>

                    {{-- Submit --}}
                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-dark px-6 py-2 rounded">
                            Save Property
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
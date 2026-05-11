{{-- resources/views/videos/create.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Video') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('videosstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Name --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Name</label>
                        <input type="text" name="name"
                               class="w-full border p-3 rounded"
                               placeholder="Enter video name"
                               required>
                    </div>

                    {{-- Title --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Title</label>
                        <input type="text" name="title"
                               class="w-full border p-3 rounded"
                               placeholder="Enter title"
                               required>
                    </div>

                    {{-- Category --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Category</label>
                        <select name="catagory_id"
                                class="w-full border p-3 rounded"
                                required>
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Iframe --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Iframe</label>
                        <textarea name="iframe"
                                  class="w-full border p-3 rounded"
                                  rows="3"
                                  placeholder="Paste video iframe here"
                                  required></textarea>
                    </div>

                    {{-- Image --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Image</label>
                        <input type="file" name="image"
                               class="w-full border p-3 rounded"
                               accept="image/*">
                    </div>

                    {{-- Description --}}
                    <div class="mb-4">
                        <label class="block font-semibold mb-2">Description</label>
                        <textarea name="description"
                                  class="w-full border p-3 rounded"
                                  rows="4"
                                  placeholder="Enter description"></textarea>
                    </div>

                    {{-- Submit --}}
                    <div class="mt-6">
                        <button type="submit" style="background-color: black"
                                class="bg-black hover:bg-gray-800 text-white px-6 py-3 rounded">
                            Save Video
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
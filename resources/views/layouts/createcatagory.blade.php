<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

 <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-6">
                    Create Category
                </h2>

                <form action="{{ route('createcatagory') }}" method="POST">

                    @csrf

                    {{-- Name --}}
                    <div class="mb-4">
                        <label class="block mb-2 font-semibold">
                            Name
                        </label>

                        <input type="text"
                               name="name"
                               placeholder="Enter name"
                               class="w-full border rounded-lg p-3"
                               required>
                    </div>

                    {{-- Title --}}
                    <div class="mb-4">
                        <label class="block mb-2 font-semibold">
                            Title
                        </label>

                        <input type="text"
                               name="title"
                               placeholder="Enter title"
                               class="w-full border rounded-lg p-3"
                               required>
                    </div>

                    {{-- Count --}}
                    <div class="mb-4">
                        <label class="block mb-2 font-semibold">
                            Count
                        </label>

                        <input type="number"
                               name="count"
                               placeholder="Enter count"
                               class="w-full border rounded-lg p-3"
                               required>
                    </div>

                    {{-- Submit --}}
                    <div class="mt-6">
                        <button type="submit" style="background-color: rgb(71, 58, 240)"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                            Save Category
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>


 

</x-app-layout>
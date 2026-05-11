<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Admin') }}
        </h2>
    </x-slot>

  <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow-sm sm:rounded-lg p-6">

            {{-- TOP RIGHT BUTTON --}}
            <div class="flex justify-end mb-4">
                <a href="{{ route('createcatagory') }}" style="background-color: black"
                   class=" hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                    + Create Category
                </a>
            </div>

            <table id="categoryTable" class="display table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Category Title</th>
                        <th>Category Count</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $category->name }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->count }}</td>

                        <td>{{ $category->created_at->format('d M Y') }}</td>

                        <td>
                             <form action="{{ route('catagorydestroy', $category->id) }}"
                                method="POST"
                                class="inline-block">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="text-red-500"
                                        onclick="return confirm('Delete this category?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

{{-- DataTables --}}
<link rel="stylesheet"
      href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#categoryTable').DataTable();
    });
</script>

</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Room') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                {{-- TOP RIGHT BUTTON --}}
                <div class="flex justify-end mb-4">
                    <a href="{{ route('createadminroom') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-dark px-4 py-2 rounded shadow">
                        + Create
                    </a>
                </div>

                <table id="propertyTable" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Bed</th>
                            <th>Bath</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Floor</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                          @foreach($room as $rooms)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rooms->title }}</td>
                            <td>{{ $rooms->bed }}</td>
                            <td>{{ $rooms->bath }}</td>
                            <td>{{ $rooms->price }}</td>
                            <td>{{ $rooms->description }}</td>
                            <td>{{ $rooms->floor }}</td>
                            <td>
                                <a href="#" class="text-blue-500">Edit</a> |
                                <a href="#" class="text-red-500">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{-- DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#propertyTable').DataTable();
        });
    </script>

</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Videos') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                {{-- TOP RIGHT BUTTON --}}
                <div class="flex justify-end mb-4">
                    <a href="{{ route('createvideo') }}"
                       style="background-color: black"
                       class="text-white px-4 py-2 rounded shadow">
                        + Create Video
                    </a>
                </div>

                <table id="videoTable"
                       class="display table table-bordered"
                       style="width:100%">

                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Iframe</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($videos as $video)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            {{-- Image --}}
                            <td>
                                <img src="{{ asset($video->image) }}"
                                     width="80"
                                     height="60"
                                     style="object-fit:cover; border-radius:5px;">
                            </td>

                            {{-- Name --}}
                            <td>{{ $video->name }}</td>

                            {{-- Title --}}
                            <td>{{ $video->title }}</td>

                            {{-- Category --}}
                            <td>
                                {{ $video->category->name ?? 'No Category' }}
                            </td>

                            {{-- Iframe --}}
                            <td>
                                <textarea class="border p-2 w-full"
                                          rows="2"
                                          readonly>{{ $video->iframe }}</textarea>
                            </td>

                            {{-- Description --}}
                            <td>
                                {{ Str::limit($video->description, 50) }}
                            </td>

                            {{-- Date --}}
                            <td>
                                {{ $video->created_at->format('d M Y') }}
                            </td>

                            {{-- Action --}}
                            <td>

                                {{-- Edit --}}
                                {{-- <a href="#"
                                   class="text-blue-500">
                                    Edit
                                </a> --}}

                                 

                                 
                                <form action="{{ route('deletevideo', $video->id) }}"
                                    method="POST"
                                    class="inline-block">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" style="color: rgb(255, 14, 14);  "
                                            class="text-red-500"
                                            onclick="return confirm('Delete this video?')">
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
            $('#videoTable').DataTable();
        });
    </script>

</x-app-layout>
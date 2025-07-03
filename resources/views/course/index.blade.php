<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">All Course</h1>

                <a href="{{route('course.create')}}" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Add New</a>
            </div>
            {{-- {{ $companies }} --}}

            <div>
                <table class="w-full text-center">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-1">SN</th>
                            <th class="border p-1">Course Name</th>
                            <th class="border p-1">Price</th>
                            <th class="border p-1">Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($courses as $i=>$course)
                            <tr>
                                <td class="border p-1">{{ ++$i }}</td>
                                <td class="border p-1">{{ $course->name }}</td>
                                <td class="border p-1">{{ $course->price }}</td>
                                <td class="border p-1">
                                    <img src="{{ asset($course->image) }}" class="h-[100px]" alt="">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <img src="{{asset('images/library.avif')}}" alt=""> --}}
        </div>
    </section>
</x-layout>

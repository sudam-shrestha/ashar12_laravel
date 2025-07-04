<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">Admissions</h1>

                <a href="{{ route('course.index') }}" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Go Back</a>
            </div>
            {{-- {{ $companies }} --}}

            <div>
                <table class="w-full text-center">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-1">SN</th>
                            <th class="border p-1">Name</th>
                            <th class="border p-1">Phone</th>
                            <th class="border p-1">Email</th>
                            <th class="border p-1">Course Name</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($course->admissions as $i => $admission)
                            <tr>
                                <td class="border p-1">{{ ++$i }}</td>
                                <td class="border p-1">{{ $admission->name }}</td>
                                <td class="border p-1">{{ $admission->phone }}</td>
                                <td class="border p-1">{{ $admission->email }}</td>
                                <td class="border p-1">{{ $admission->course->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <img src="{{asset('images/library.avif')}}" alt=""> --}}
        </div>
    </section>
</x-layout>

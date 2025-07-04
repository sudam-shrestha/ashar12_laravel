<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">Admission Create</h1>

                <a href="{{ route('admission.index') }}" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Go back</a>
            </div>


            <div>
                <form action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="name">Enter Your Name</label>
                            <input type="text" name="name" id="name" class="w-full border py-1 px-2"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="phone">Enter Your Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="w-full border py-1 px-2"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Enter Your Email</label>
                            <input type="email" name="email" id="email" class="w-full border py-1 px-2"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="course">Select Course</label>
                            <select name="course" id="course" class="w-full border py-1 px-2">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course') == $course->id ? 'selected' : '' }}>{{ $course->name }}
                                        (Rs.{{ $course->price }})
                                    </option>
                                @endforeach
                            </select>
                            @error('course')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <button type="submit" class="bg-[green] text-white px-3 py-1 rounded-2xl">Save
                                Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>

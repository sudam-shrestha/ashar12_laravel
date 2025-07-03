<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">Course Create</h1>

                <a href="{{ route('course.index') }}" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Go back</a>
            </div>


            <div>
                <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="name">Enter Course Name</label>
                            <input type="text" name="name" id="name" class="w-full border py-1 px-2" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="price">Enter Course Price</label>
                            <input type="number" name="price" id="price" class="w-full border py-1 px-2" value="{{ old('price') }}">
                            @error('price')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="summernote">Enter Course Description</label>
                            <textarea name="description" id="summernote" class=" w-full border py-1 px-2">
                                {{ old('description') }}
                            </textarea>
                            @error('description')
                                <div class="text-[red]">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" id="image" class="w-full border py-1 px-2">
                            @error('image')
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

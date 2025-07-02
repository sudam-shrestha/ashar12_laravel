<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">Company Edit</h1>

                <a href="/companies" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Go back</a>
            </div>

            <div>
                <form action="/company/update/{{ $company->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="name">Enter Company Name</label>
                            <input type="text" name="name" id="name" value="{{ $company->name }}"
                                class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="email">Enter Company Email</label>
                            <input type="email" name="email" id="email" value="{{ $company->email }}"
                                class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="phone">Enter Company Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ $company->phone }}"
                                class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="address">Enter Company Address</label>
                            <input type="text" name="address" id="address" value="{{ $company->address }}"
                                class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="logo">Upload Logo</label>
                            <input type="file" name="logo" id="logo" class="w-full border py-1 px-2">
                            <img class="h-[200px]" src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
                        </div>

                        <div class="col-span-2">
                            <button type="submit" class="cursor-pointer bg-[green] text-white px-3 py-1 rounded-2xl">Update
                                Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>

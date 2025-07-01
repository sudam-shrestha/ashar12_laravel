<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-2xl font-semibold">Company Create</h1>

                <a href="/companies" class="bg-[blue] text-white px-3 py-1 rounded-2xl">Go back</a>
            </div>


            <div>
                <form action="/company/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <label for="name">Enter Company Name</label>
                            <input type="text" name="name" id="name" class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="email">Enter Company Email</label>
                            <input type="email" name="email" id="email" class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="phone">Enter Company Phone</label>
                            <input type="text" name="phone" id="phone" class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="address">Enter Company Address</label>
                            <input type="text" name="address" id="address" class="w-full border py-1 px-2">
                        </div>

                        <div>
                            <label for="logo">Upload Logo</label>
                            <input type="file" name="logo" id="logo" class="w-full border py-1 px-2">
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

<x-layout>
    <section class="py-10 px-5 md:px-10 lg:px-20 bg-white">
        <div class="max-w-5xl mx-auto space-y-6">
            <!-- Heading and Back Button -->
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-gray-800">Add Company </h1>
                <a href="/companies" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-medium transition-all">Go Back</a>
            </div>

            <!-- Form Card -->
            <form action="/company/store" method="POST" enctype="multipart/form-data" class="bg-gray-50 p-6 rounded-xl shadow-md">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Enter Company Name</label>
                        <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Enter Company Email</label>
                        <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Enter Company Phone</label>
                        <input type="text" name="phone" id="phone" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Enter Company Address</label>
                        <input type="text" name="address" id="address" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Upload Logo</label>
                        <input type="file" name="logo" id="logo" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full font-medium transition-all">
                        Save Record
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>

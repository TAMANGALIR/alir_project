<x-layout>
    <section class="py-10 px-5 md:px-10 lg:px-20 bg-white">
        <div class="max-w-6xl mx-auto space-y-6">

            <!-- Header Row -->
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-gray-800">Companies Data</h1>

                <a href="/company/create"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-full text-sm font-medium transition-all">
                    + Add Company
                </a>
            </div>

            <!-- ✅ Removed the raw JSON dump -->
            <!-- Add company list or message here -->
            <div>
                <table class="w-full text-center">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-1">SN</th>
                            <th class="border p-1">Company Name</th>
                            <th class="border p-1">Email</th>
                            <th class="border p-1">Phone</th>
                            <th class="border p-1">Address</th>
                              <th class="border p-1">logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company )
                        <tr>
                            <td class="border p-1">{{ $company->id }}</td>
                            <td class="border p-1">{{ $company->name }}</td>
                            <td class="border p-1">{{ $company->email }}</td>
                            <td class="border p-1">{{ $company->phone }}</td>
                            <td class="border p-1">{{ $company->address }}</td>
                            <td class="border p-1">
                                <img src="{{asset($company->logo)}}" class="h-[100px]" alt="">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>

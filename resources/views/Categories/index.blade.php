<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6 flex justify-end">
                                    <a href="{{ route('Categories.create') }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Add Category
                                    </a>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-2"> ID</th>
                                            <th class="px-4 py-2">Project Title</th>
                                            <th class="px-4 py-2">Description</th>
                                            <th class="px-4 py-2">Project Address</th>
                                            <th class="px-4 py-2">Client name</th>
                                            <th class="px-4 py-2">Client Number</th>
                                            <th class="px-4 py-2">Status</th>
                                            <th class="px-4 py-2">Actions</th>

                                        </tr>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td class="border px-4 py-2">{{ $category->id }}</td>
                                                <td class="border px-4 py-2">{{ $category->Project_Title }}</td>
                                                <td class="border px-4 py-2">{{ $category->Description}}</td>
                                                <td class="border px-4 py-2">{{ $category->Project_Address}}</td>
                                                <td class="border px-4 py-2">{{ $category->Client_Name}}</td>
                                                <td class="border px-4 py-2">{{ $category->Client_Address}}</td>
                                                <td class="border px-4 py-2">{{ $category->status}}</td>


                                                <td class="border px-4 py-2">
                                                    <a href="{{ route('Categories.show', $category->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</a>
                                                    <a href="{{ route('Categories.edit', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                                    <form action="{{ route('Categories.destroy', $category->id) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                onclick = "return confirm('Are you sure you want to delete this Category?')"
                                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$categories->links()}}
                                </div>
                            </div>
                        </div>
                    </div>


                </x-app-layout>


{{--               --}}{{-- <table class="min-w-full divide-y divide-gray-200">--}}
{{--                    <thead class="bg-gray-50">--}}
{{--                        <tr>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Project Title--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Description--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Project Address--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Client Name--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Client Number--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Actions--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                        @foreach ($categories as $category)--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <div class="text-sm text-gray-900">{{ $category->Project_Title }}</div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <div class="text-sm text-gray-900">{{ $category->Description }}</div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <div class="text-sm text-gray-900">{{ $category->Project_Address }}</div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <div class="text-sm text-gray-900">{{ $category->Client_Name }}</div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                    <div class="text-sm text-gray-900">{{ $category->Client_Number }}</div>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">--}}
{{--                                    <a href="{{ route('Categories.show', $category->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>--}}
{{--                                    <a href="{{ route('Categories.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
{{--                                    <form action="{{ route('Categories.destroy', $category->id) }}" method="POST" class="inline">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                @endforeach--}}
{{--                </tbody>--}}
{{--                </table> --}}

{{--               --}}{{-- <div class="py-12">--}}
{{--                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">--}}
{{--                            <h3 class="text-lg font-semibold mb-4">Projects Overview</h3>--}}
{{--                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">--}}
{{--                                <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Project A</h4>--}}
{{--                                    <p>Status: <span class="font-semibold text-green-500">In Progress</span></p>--}}
{{--                                    <p>Client: <span class="font-semibold">John Doe</span></p>--}}
{{--                                    <p>Contact: <span class="font-semibold">john.doe@example.com</span></p>--}}
{{--                                    <p>Employees: <span class="font-semibold">10</span></p>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Milestones</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Foundation Completed</li>--}}
{{--                                        <li class="mb-2">Frame Structure Erected</li>--}}
{{--                                        <li class="mb-2">Roof Installed</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Tasks</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Procure Building Materials</li>--}}
{{--                                        <li class="mb-2">Hire Subcontractors</li>--}}
{{--                                        <li class="mb-2">Schedule Inspections</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Deadlines</h4>--}}
{{--                                    <p>Completion: <span class="font-semibold">2024-12-31</span></p>--}}
{{--                                    <p>Next Inspection: <span class="font-semibold">2024-07-15</span></p>--}}
{{--                                </div>--}}

{{--                                <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Project B</h4>--}}
{{--                                    <p>Status: <span class="font-semibold text-yellow-500">Pending</span></p>--}}
{{--                                    <p>Client: <span class="font-semibold">Jane Smith</span></p>--}}
{{--                                    <p>Contact: <span class="font-semibold">jane.smith@example.com</span></p>--}}
{{--                                    <p>Employees: <span class="font-semibold">5</span></p>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Milestones</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Site Survey Completed</li>--}}
{{--                                        <li class="mb-2">Permits Obtained</li>--}}
{{--                                        <li class="mb-2">Groundbreaking Ceremony</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Tasks</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Design Approval</li>--}}
{{--                                        <li class="mb-2">Material Selection</li>--}}
{{--                                        <li class="mb-2">Contractor Hiring</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Deadlines</h4>--}}
{{--                                    <p>Completion: <span class="font-semibold">2025-02-28</span></p>--}}
{{--                                    <p>Design Approval: <span class="font-semibold">2024-09-30</span></p>--}}
{{--                                </div>--}}

{{--                                <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Project C</h4>--}}
{{--                                    <p>Status: <span class="font-semibold text-red-500">Delayed</span></p>--}}
{{--                                    <p>Client: <span class="font-semibold">Michael Johnson</span></p>--}}
{{--                                    <p>Contact: <span class="font-semibold">michael.johnson@example.com</span></p>--}}
{{--                                    <p>Employees: <span class="font-semibold">8</span></p>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Milestones</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Planning Phase Completed</li>--}}
{{--                                        <li class="mb-2">Design Finalization</li>--}}
{{--                                        <li class="mb-2">Construction Commenced</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Tasks</h4>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-2">Secure Funding</li>--}}
{{--                                        <li class="mb-2">Obtain Permits</li>--}}
{{--                                        <li class="mb-2">Clearing and Grading</li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="my-4">--}}
{{--                                    <h4 class="text-md font-semibold mb-2">Deadlines</h4>--}}
{{--                                    <p>Completion: <span class="font-semibold">2025-04-30</span></p>--}}
{{--                                    <p>Permits: <span class="font-semibold">2024-10-31</span></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div> --}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

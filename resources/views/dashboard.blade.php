<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Sidebar -->
            <div class="w-1/4 bg-blue-950 p-6 rounded-lg">
                <h3 class="text-lg text-white font-semibold mb-4">My Account</h3>
                <ul>
                    <li class="mb-2"><a href="{{ route('account.info') }}" class="text-white hover:text-blue-200">Account Info</a></li>
                    <li class="mb-2"><a href="{{ route('projects') }}" class="text-white hover:text-blue-200">Projects</a></li>
                    <li class="mb-2"><a href="{{ route('quotations.proposals') }}" class="text-white hover:text-blue-200">Quotations and Proposals</a></li>

                    <li class="mb-2"><a href="{{ route('contact.info') }}" class="text-white hover:text-blue-200">Contact Information</a></li>
                    <li class="mb-2"><a href="#" class="text-white hover:text-blue-200">Preferences</a></li>
                    <li class="mb-2"><a href="#" class="text-white hover:text-blue-200">Documents</a></li>
                    <li class="mb-2"><a href="#" class="text-white hover:text-blue-200">Summary</a></li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="w-3/4 bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Projects Overview</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h4 class="text-md font-semibold mb-2">Project A</h4>
                        <p>Status: <span class="font-semibold text-green-500">In Progress</span></p>
                        <p>Client: <span class="font-semibold">John Doe</span></p>
                        <p>Contact: <span class="font-semibold">john.doe@example.com</span></p>
                        <p>Employees: <span class="font-semibold">10</span></p>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Milestones</h4>
                        <ul>
                            <li class="mb-2">Foundation Completed</li>
                            <li class="mb-2">Frame Structure Erected</li>
                            <li class="mb-2">Roof Installed</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Tasks</h4>
                        <ul>
                            <li class="mb-2">Procure Building Materials</li>
                            <li class="mb-2">Hire Subcontractors</li>
                            <li class="mb-2">Schedule Inspections</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Deadlines</h4>
                        <p>Completion: <span class="font-semibold">2024-12-31</span></p>
                        <p>Next Inspection: <span class="font-semibold">2024-07-15</span></p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h4 class="text-md font-semibold mb-2">Project B</h4>
                        <p>Status: <span class="font-semibold text-yellow-500">Pending</span></p>
                        <p>Client: <span class="font-semibold">Jane Smith</span></p>
                        <p>Contact: <span class="font-semibold">jane.smith@example.com</span></p>
                        <p>Employees: <span class="font-semibold">5</span></p>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Milestones</h4>
                        <ul>
                            <li class="mb-2">Site Survey Completed</li>
                            <li class="mb-2">Permits Obtained</li>
                            <li class="mb-2">Groundbreaking Ceremony</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Tasks</h4>
                        <ul>
                            <li class="mb-2">Design Approval</li>
                            <li class="mb-2">Material Selection</li>
                            <li class="mb-2">Contractor Hiring</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Deadlines</h4>
                        <p>Completion: <span class="font-semibold">2025-02-28</span></p>
                        <p>Design Approval: <span class="font-semibold">2024-09-30</span></p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h4 class="text-md font-semibold mb-2">Project C</h4>
                        <p>Status: <span class="font-semibold text-red-500">Delayed</span></p>
                        <p>Client: <span class="font-semibold">Michael Johnson</span></p>
                        <p>Contact: <span class="font-semibold">michael.johnson@example.com</span></p>
                        <p>Employees: <span class="font-semibold">8</span></p>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Milestones</h4>
                        <ul>
                            <li class="mb-2">Planning Phase Completed</li>
                            <li class="mb-2">Design Finalization</li>
                            <li class="mb-2">Construction Commenced</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Tasks</h4>
                        <ul>
                            <li class="mb-2">Secure Funding</li>
                            <li class="mb-2">Obtain Permits</li>
                            <li class="mb-2">Clearing and Grading</li>
                        </ul>
                        <hr class="my-4">
                        <h4 class="text-md font-semibold mb-2">Deadlines</h4>
                        <p>Completion: <span class="font-semibold">2025-04-30</span></p>
                        <p>Permits: <span class="font-semibold">2024-10-31</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


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

            <!-- Projects Section -->
            <div class="w-3/4 p-6 ml-4">
                <h3 class="text-xl font-bold mb-6 text-blue-950">Your Projects</h3>
                <div class="grid grid-cols-3 gap-6">
                    <!-- Project 1 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Project A</h4>
                        <p class="text-black font-bold">Status: <span class="text-green-500">Active</span></p>
                        <p class="text-black">Address: 1234 Main St, City A</p>
                        <p class="text-black">Description: A commercial building project focusing on sustainability and energy efficiency.</p>
                    </div>

                    <!-- Project 2 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Project B</h4>
                        <p class="text-black font-bold">Status: <span class="text-yellow-500">In Progress</span></p>
                        <p class="text-black">Address: 5678 Elm St, City B</p>
                        <p class="text-black">Description: A residential development with a focus on modern architecture and smart home integration.</p>
                    </div>

                    <!-- Project 3 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Project C</h4>
                        <p class="text-black font-bold">Status: <span class="text-red-500">Pending</span></p>
                        <p class="text-black">Address: 9101 Oak St, City C</p>
                        <p class="text-black">Description: A public park renovation aimed at enhancing community spaces and green areas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




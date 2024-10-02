<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('Quotations and Proposals') }}
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








    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-6">Available Project Proposals</h3>

                <!-- Total Proposals -->
                <p class="text-2xl font-bold mb-4">20 Proposals Available</p>

                <!-- Project Proposals Grid -->
                <div class="grid grid-cols-3 gap-6">
                    <!-- Example Proposal 1 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Proposal A</h4>
                        <p class="text-gray-600">Amount: $150,000</p>
                        <p class="text-gray-600">Project: Residential Housing Development</p>
                        <p class="text-gray-600">Status: Pending Approval</p>
                    </div>

                    <!-- Example Proposal 2 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Proposal B</h4>
                        <p class="text-gray-600">Amount: $250,000</p>
                        <p class="text-gray-600">Project: Commercial Office Complex</p>
                        <p class="text-gray-600">Status: Approved</p>
                    </div>

                    <!-- Example Proposal 3 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md border border-gray-300">
                        <h4 class="text-lg font-semibold">Proposal C</h4>
                        <p class="text-gray-600">Amount: $500,000</p>
                        <p class="text-gray-600">Project: City Park Renovation</p>
                        <p class="text-gray-600">Status: Under Review</p>
                    </div>
                </div>

                <!-- Placeholder for pagination or further proposals -->
                <p class="mt-6 text-sm text-gray-500">Showing 3 of 20 proposals.</p>
            </div>
        </div>
    </div>
</x-app-layout>


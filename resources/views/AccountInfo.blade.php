<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('Account Info') }}
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

            <!-- Account Information Section with Light Gray Box -->
            <div class="w-3/4 bg-gray-200 p-6 rounded-lg ml-4 shadow-md border border-gray-300">
                <div class="flex items-center mb-6">
                    <!-- Profile Picture -->
                    <div class="w-24 h-24 rounded-full bg-blue-950 flex items-center justify-center">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-full w-full h-full object-cover">
                    </div>
                    <div class="ml-6">
                        <h3 class="text-2xl font-semibold">John Doe</h3>
                        <p class="text-gray-600">johndoe@example.com</p>
                        <p class="text-gray-600">Contact: +1 234 567 890</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="text-xl font-semibold">Ongoing Projects</h4>
                    <ul class="list-disc list-inside">
                        <li class="text-gray-700">Project A - APIIT City Campus</li>
                        <li class="text-gray-700">Project B - APIIT Law School</li>
                        <li class="text-gray-700">Project C - APIIT Business School</li>
                    </ul>
                </div>

                <div class="mb-6">
                    <h4 class="text-xl font-semibold">Additional Information</h4>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



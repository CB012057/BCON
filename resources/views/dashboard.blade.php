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
            <div class="w-3/4 bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Welcome, {{ Auth::user()->name }}!</h3>
                <p class="text-lg text-gray-600 mb-4">You now have access to all your project information.</p>
                <p class="text-md text-gray-500">Use the navigation menu on the left to view and manage your projects, quotations, and account details.</p>
                <img src="{{ asset('Images/Homeblade13.jpg') }}" alt="Welcome Image" class="mt-6 mx-auto rounded-lg shadow-lg" style="max-width: 300px;">
            </div>
        </div>
    </div>
</x-app-layout>



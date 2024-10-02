<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('Contact Information') }}
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

            <!-- Main content - Contact Information Box -->
            <div class="w-3/4 bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Contact Information</h3>

                <!-- Contact Information Box with Styling -->
                <div class="bg-gray-100 p-6 rounded-lg" style="border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <h4 class="text-md font-semibold mb-4" style="background-color: #2c3e50; color: white; padding: 10px; border-radius: 6px;">Hotlines</h4>
                    <p style="margin-bottom: 10px;"><strong>Company Hotline:</strong> <span style="color: #2980b9;">+1-800-123-4567</span></p>
                    <p style="margin-bottom: 20px;"><strong>Support Hotline:</strong> <span style="color: #2980b9;">+1-800-987-6543</span></p>

                    <h4 class="text-md font-semibold mb-4" style="background-color: #2c3e50; color: white; padding: 10px; border-radius: 6px;">Lead Architect</h4>
                    <p style="margin-bottom: 10px;"><strong>Name:</strong> <span style="color: #27ae60;">John Doe</span></p>
                    <p style="margin-bottom: 10px;"><strong>Email:</strong> <span style="color: #2980b9;">john.doe@architecturefirm.com</span></p>
                    <p style="margin-bottom: 20px;"><strong>Phone:</strong> <span style="color: #2980b9;">+1-555-123-4567</span></p>

                    <h4 class="text-md font-semibold mb-4" style="background-color: #2c3e50; color: white; padding: 10px; border-radius: 6px;">Contractors</h4>
                    <p style="margin-bottom: 10px;"><strong>Company:</strong> <span style="color: #27ae60;">BuildRight Contractors</span></p>
                    <p style="margin-bottom: 10px;"><strong>Contact Person:</strong> <span style="color: #27ae60;">Jane Smith</span></p>
                    <p style="margin-bottom: 10px;"><strong>Email:</strong> <span style="color: #2980b9;">jane.smith@buildright.com</span></p>
                    <p style="margin-bottom: 20px;"><strong>Phone:</strong> <span style="color: #2980b9;">+1-555-765-4321</span></p>

                    <h4 class="text-md font-semibold mb-4" style="background-color: #2c3e50; color: white; padding: 10px; border-radius: 6px;">Supervisors</h4>
                    <p style="margin-bottom: 10px;"><strong>Name:</strong> <span style="color: #27ae60;">Michael Johnson</span></p>
                    <p style="margin-bottom: 10px;"><strong>Email:</strong> <span style="color: #2980b9;">michael.johnson@supervision.com</span></p>
                    <p style="margin-bottom: 20px;"><strong>Phone:</strong> <span style="color: #2980b9;">+1-555-987-6543</span></p>

                    <h4 class="text-md font-semibold mb-4" style="background-color: #2c3e50; color: white; padding: 10px; border-radius: 6px;">Other Key Contacts</h4>
                    <p style="margin-bottom: 10px;"><strong>Interior Designer:</strong> <span style="color: #27ae60;">Emily Williams</span></p>
                    <p style="margin-bottom: 10px;"><strong>Email:</strong> <span style="color: #2980b9;">emily.williams@interiordesigners.com</span></p>
                    <p style="margin-bottom: 10px;"><strong>Phone:</strong> <span style="color: #2980b9;">+1-555-321-7654</span></p>
                    <p style="margin-bottom: 10px;"><strong>Project Manager:</strong> <span style="color: #27ae60;">David Brown</span></p>
                    <p><strong>Email:</strong> <span style="color: #2980b9;">david.brown@pmfirm.com</span></p>
                    <p style="margin-bottom: 20px;"><strong>Phone:</strong> <span style="color: #2980b9;">+1-555-654-3210</span></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



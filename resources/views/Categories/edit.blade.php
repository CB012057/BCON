<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project Details ') }} {{ $category->Project_Title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mt-4">
                    <form action="{{ route('Categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="Project_Title" class="block text-sm font-medium text-gray-700">Project Name</label>
                            <div class="mt-1">
                                <input type="text" name="Project_Title" id="Project_Title" value="{{ $category->Project_Title }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea name="description" id="description" rows="4" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>{{ $category->Description }}</textarea>
                            </div>
                        </div>
                        <div>
                            <label for="Project_Address" class="block text-sm font-medium text-gray-700">Project Address</label>
                            <div class="mt-1">
                                <input type="text" name="Project_Address" id="Project_Address" value="{{ $category->Project_Address }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>
                        <div>
                            <label for="Client_Name" class="block text-sm font-medium text-gray-700">Client Name</label>
                            <div class="mt-1">
                                <input type="text" name="Client_Name" id="Client_Name" value="{{ $category->Client_Name }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>

                        <div>
                            <label for="Client_Number" class="block text-sm font-medium text-gray-700"> Client Number</label>
                            <div class="mt-1">
                                <input type="text" name="Client_Number" id="Client_Number" value="{{ $category->Client_Number }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                            </div>
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select name="status" id="status" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                                    <option value="pending" {{ $category->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ $category->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="in progress" {{ $category->status === 'in progress' ? 'selected' : '' }}>In Progress</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

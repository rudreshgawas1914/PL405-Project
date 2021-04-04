<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Train Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Admin!<br>
                    You are : {{Auth::admin()->name}} <br>
                    Your email : {{Auth::admin()->email}} <br>
                    ---------
                    U can now add, delete and update the details.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

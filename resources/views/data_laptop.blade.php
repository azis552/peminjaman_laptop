<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('data_santri') }}" :active="request()->routeIs('data_santri')">
                    {{ __('Data Santri') }}
                </x-jet-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('data_laptop') }}" :active="request()->routeIs('data_laptop')">
                    {{ __('Data Laptop') }}
                </x-jet-nav-link>
            </div>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="table_laptop" class="table yajra-datatable table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>ID Laptop</th>
                        <th>Loker</th>
                        <th>MAC</th>
                        <th>Keterangan</th>
                       
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Belum Kembali') }}
        </h2>
      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table id="table_peminjaman_blm" class="table table-striped yajra-datatable">
                    <thead>
                        <tr>
                            
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Kelas</th>
                            <th>Mac</th>
                            <th>Guru</th>
                            <th>Mapel</th>
                            {{-- Modal Laptop --}}
        
                        </tr>
                        
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</x-app-layout>

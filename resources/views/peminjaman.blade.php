<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masuk/Keluar') }}
        </h2>
      
    </x-slot>
    <form id="peminjaman-form" method="post">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_laptop" placeholder="SILAHKAN SCAN BARCODE !" autofocus>
                        <label for="floatingInput">BARCODE</label>
                    </div>
                    <div id="foto"></div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <div id="btn"></div>
                </div>
          
            </div>
        </div>
    </div>
</x-app-layout>
</form>
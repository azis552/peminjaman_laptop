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
                <form method="post" id="updateSantri" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="modal-body">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                          <strong>Success!</strong>Article was added successfully.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <input type="hidden" class="form-control" name="id" id="id" value="{{ $students->id}}">
                      <div class="form-group">
                          <label for="title">Nik</label>
                          <input type="text" class="form-control" name="nik" id="nik" value="{{ $students->Nik}}">
                      </div>
                      <div class="form-group">
                          <label for="description">Nama</label>
                          <input type="text" class="form-control" name="nama" id="nama" value="{{ $students->Nama}}">                       
                      </div>
                      <div class="form-group">
                        <label for="description">Kelas</label>
                        <select class="form-select" id="inputGroupSelect01" name="kelas" id="kelas">
                          <option selected>Pilih Kelas</option>
                          <option value="10 TKJ A" {{ $students->kelas == '10 TKJ A' ? 'selected' : '' }}>10 TKJ A</option>
                          <option value="10 TKJ B" {{ $students->kelas == '10 TKJ B' ? 'selected' : '' }}>10 TKJ B</option>
                          <option value="10 TKJ C" {{ $students->kelas == '10 TKJ C' ? 'selected' : '' }}>10 TKJ C</option>
                          <option value="10 TKJ D" {{ $students->kelas == '10 TKJ D' ? 'selected' : '' }}>10 TKJ D</option>
                          <option value="10 MM A" {{ $students->kelas == '10 MM A' ? 'selected' : '' }}>10 MM A</option>
                          <option value="10 MM B" {{ $students->kelas == '10 MM B' ? 'selected' : '' }}>10 MM B</option>
                          <option value="10 MM C" {{ $students->kelas == '10 MM C' ? 'selected' : '' }}>10 MM C</option>
                          <option value="10 TEI" {{ $students->kelas == '10 TEI' ? 'selected' : '' }}>10 TEI </option>
                          <option value="10 TP" {{ $students->kelas == '10 TP' ? 'selected' : '' }}>10 TP </option>
                          <option value="11 TKJ A" {{ $students->kelas == '11 TKJ A' ? 'selected' : '' }}>11 TKJ A</option>
                          <option value="11 TKJ B" {{ $students->kelas == '11 TKJ B' ? 'selected' : '' }}>11 TKJ B</option>
                          <option value="11 TKJ C" {{ $students->kelas == '11 TKJ C' ? 'selected' : '' }}>11 TKJ C</option>
                          <option value="11 MM A" {{ $students->kelas == '11 MM A' ? 'selected' : '' }}>11 MM A</option>
                          <option value="11 MM B" {{ $students->kelas == '11 MM B' ? 'selected' : '' }}>11 MM B</option>
                          <option value="11 MM C" {{ $students->kelas == '11 MM C' ? 'selected' : '' }}>11 MM C</option>
                          <option value="12 TKJ A" {{ $students->kelas == '12 TKJ A' ? 'selected' : '' }}>12 TKJ A</option>
                          <option value="12 TKJ B" {{ $students->kelas == '12 TKJ B' ? 'selected' : '' }}>12 TKJ B</option>
                          <option value="12 MM A" {{ $students->kelas == '12 MM A' ? 'selected' : '' }}>12 MM A</option>
                          <option value="12 MM B" {{ $students->kelas == '12 MM B' ? 'selected' : '' }}>12 MM B</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="description">Loker</label>
                        <select class="form-select" id="inputGroupSelect01" name="loker" id="loker">
                          <option selected>Pilih Loker</option>
                          <option value="1" {{ $laptops->loker == '1' ? 'selected' : '' }}>1</option>
                          <option value="2" {{ $laptops->loker == '2' ? 'selected' : '' }}>2</option>
                          <option value="3" {{ $laptops->loker == '3' ? 'selected' : '' }}>3</option>
                          <option value="4" {{ $laptops->loker == '4' ? 'selected' : '' }}>4</option>
                          <option value="5" {{ $laptops->loker == '5' ? 'selected' : '' }}>5</option>
                          <option value="6" {{ $laptops->loker == '6' ? 'selected' : '' }}>6</option>
                          <option value="7" {{ $laptops->loker == '7' ? 'selected' : '' }}>7</option>
                         
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="description">ID Laptop</label>
                        <input type="text" class="form-control" name="id_laptop" id="id_laptop" value="{{ $laptops->id_laptop}}">                       
                    </div>
                    <div class="form-group">
                        <label for="description">MAC</label>
                        <input type="text" class="form-control" name="mac_laptop" id="mac_laptop" value="{{ $laptops->MAC}}">                       
                    </div>
                    <div class="form-group">
                        <label for="description">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan" id="keterangan" >{{ $laptops->keterangan}}</textarea>                      
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="updateSantriBtn">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

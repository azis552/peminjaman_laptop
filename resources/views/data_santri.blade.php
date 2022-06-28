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
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <button type="button" data-id="'.$row->id.'" data-toggle="modal" data-target="#TambahSantri" class="btn btn-warning btn-sm" id="getEditId">Tambah</button>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <a href="javascript:void(0);" id="cetak_barcode" onClick="coba('{{ route('students.cetak_barcode') }}')"   class="barcode btn btn-success btn-sm">Barcode</a> 
            </div>
        </div>
       
    </x-slot>
    <form name="tb_santri" method="POST" id="tb_santri">
      @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table id="table_santri" class="table table-striped yajra-datatable">
                <thead>
                    <tr>
                        <th><input class="form-check-input" type="checkbox" name="select-all" id="select-all" /></th>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                       
                        <th>Kelas</th>
                        <th>KD</th>
                        <!-- <th>Foto</th> -->
                        <th>Action</th>
                        {{-- Modal Laptop --}}
    
                    </tr>
                    
                </thead>
                <tbody>
                </tbody>
                </table>
            </div>
        </div>
      </form>
    </div>
    <div class="modal "  id="TambahSantri">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Santri</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              
                        
              <form method="post" id="tambahSantri" enctype="multipart/form-data">
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
                  <div class="form-group">
                      <label for="title">Nik</label>
                      <input type="text" class="form-control" name="nik" id="nik">
                  </div>
                  <div class="form-group">
                      <label for="description">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama">                       
                  </div>
                  <div class="form-group">
                    <label for="description">Kelas</label>
                    <select class="form-select" id="inputGroupSelect01" name="kelas" id="kelas">
                      <option selected>Pilih Kelas</option>
                      <option value="10 TKJ A">10 TKJ A</option>
                      <option value="10 TKJ B">10 TKJ B</option>
                      <option value="10 TKJ C">10 TKJ C</option>
                      <option value="10 TKJ D">10 TKJ D</option>
                      <option value="10 MM A">10 MM A</option>
                      <option value="10 MM B">10 MM B</option>
                      <option value="10 MM C">10 MM C</option>
                      <option value="10 TEI">10 TEI </option>
                      <option value="10 TP">10 TP </option>
                      <option value="11 TKJ A">11 TKJ A</option>
                      <option value="11 TKJ B">11 TKJ B</option>
                      <option value="11 TKJ C">11 TKJ C</option>
                      <option value="11 MM A">11 MM A</option>
                      <option value="11 MM B">11 MM B</option>
                      <option value="11 MM C">11 MM C</option>
                      <option value="12 TKJ A">12 TKJ A</option>
                      <option value="12 TKJ B">12 TKJ B</option>
                      <option value="12 MM A">12 MM A</option>
                      <option value="12 MM B">12 MM B</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label class="form-label" for="customFile">Foto</label>
                    <div class="custom-file">
                    <input type="file" class="form-control" id="foto" name="foto"/>
                    </div>
                  </div>
                  <div class="form-group">
                        <label for="description">Loker</label>
                        <select class="form-select" id="inputGroupSelect01" name="loker" id="loker">
                          <option selected>Pilih Loker</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                         
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="description">ID Laptop</label>
                    <input type="text" class="form-control" name="id_laptop" id="id_laptopnya">                       
                </div>
                <div class="form-group">
                    <label for="description">Spesifikasi</label>                
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="INTEL" name="processor" id="processor1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              INTEL
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="AMD" name="processor" id="processor2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              AMD
                            </label>
                          </div>
                         
                     
                          <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="tipe_pro" name="tipe_pro" placeholder="ryzen 3">
                            <label for="floatingInput">Tipe</label>
                          </div>
                    </div>
                    <div class="col">
                        <div class="col">
                            
                              <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="ram" name="ram" placeholder="8 ">
                                <label for="floatingInput">RAM</label>
                              </div>
                              <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="grafik" name="grafik" placeholder="ryzen 3">
                                <label for="floatingInput">Grafik</label>
                              </div>
                        </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="description">MAC</label>
                    <input type="text" class="form-control" name="mac_laptop" id="mac_laptop" >                       
                </div>
                <div class="form-group">
                    <label for="description">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" id="keterangan"> </textarea>                      
                </div>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="submit" class="btn btn-success" id="submitSantri">Tambah</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  
 
  
  
</x-app-layout>

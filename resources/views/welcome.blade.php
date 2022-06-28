<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          
          /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
                    {{-- <div class="">
                        <div class="">
                            <div class="flex items-center">
                                <div class="">
                                    <div class="bg-white  shadow-xl rounded-lg">
                                       
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
                                            <div id="nama"></div>
                                            <div id="foto"></div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div id="btn"></div>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        
                       

                        
                 
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                      <p>E- PEMINJAMAN 0.1</p>
                    </div>
                </div>
            </div>
            
        </div> --}}



        <h1 style="text-align: center">APLIKASI PEMINJAMAN LAPTOP</h1>
        <h2 style="text-align: center;font-weight: bold;">Silahkan SCAN Barcode</h2>
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
            <div id="nama"></div>
            <div id="foto"></div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <div id="btn"></div>
        </div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">></script>
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> 
<script>
    $(document).ready(function(){
        get_data_peminjaman();
        function get_data_peminjaman(){
        var table = $('#table_peminjaman').DataTable({
           
            ajax: "{{ route('peminjaman.list') }}",
            columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'Nama', name: 'Nama'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'kelas', name: 'kelas'},
                    {data: 'MAC', name: 'MAC'},
                    {data: 'Guru', name: 'Guru'},
                    {data: 'Mapel', name: 'Mapel'},
                   
                ]
            });
        }
    });
    </script>
    {{-- JQUERY PEMINJAMAN --}}
<script>
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      $("#id_laptop").on("change", function(){
        $kd = $(this).val();
        $.ajax({
            url: 'laptops/pinjam/'+$kd,
            type: 'get',
            dataType: 'json',
            success: function(response){
                // alert($("#kunci").val());
                
                if(response.success != false && $("#kunci").val() != "1"){
                    if(response.foto == ""){
                        foto = "anonime.jpg";
                        var input_foto = '<h2 class="center data_trans">'+response.Nama+' Kode Laptop : '+response.id_laptop+'</h2><img class="center_img data_trans" src="foto_santri/'+foto+'" height="150px" width="150px"> <br class="data_trans"><input type="text" id="guru" class="form-control data_trans" placeholder="masukkan guru"><input type="hidden" id="kunci" value="1" class="form-control data_trans" placeholder="masukkan guru"><br class="data_trans"><input type="text" id="mapel" placeholder="masukkan mapel" class="form-control data_trans">';
                        }else{
                        var input_foto = '<h2 class="center data_trans">'+response.Nama+' Kode Laptop : '+response.id_laptop+'</h2><img class="center_img data_trans" src="foto_santri/'+response.foto+'" height="150px" width="150px"> <br class="data_trans"><input type="text" id="guru" class="form-control data_trans" placeholder="masukkan guru"><input type="hidden" id="kunci" value="1" class="form-control data_trans" placeholder="masukkan guru"><br class="data_trans"><input type="text" id="mapel" placeholder="masukkan mapel" class="form-control data_trans">';
                        }
                            if(response.status == 1){
                                var btn = '<a href="javascript:void(0);" id="laptop-keluar" onClick="keluarFunc('+response.id+')" data-toggle="tooltip"  class="keluar btn btn-warning data_trans">Keluar</a>  <a href="javascript:void(0);" id="cancel" onClick="cancelPin()" data-toggle="tooltip"  class="cancel btn btn-danger data_trans">Reset</a>';
                            }else{
                                var btn = '<a href="javascript:void(0);" id="laptop-masuk" onClick="masukFunc('+response.id+')" data-toggle="tooltip"  class="masuk btn btn-warning data_trans">Masuk</a>   <a href="javascript:void(0);" id="cancel" onClick="cancelPin()" data-toggle="tooltip"  class="cancel btn btn-danger data_trans">Reset</a>';
                            }
                           
                            $("#foto").append(input_foto);
                            $("#btn").append(btn);
                }else if($("#kunci").val() == "1"){
                    swal("Ganda", "Scan 1 Kali", "error");
                
                }else{
                   
                    swal("Nothing", "Data tidak ada", "error");
                 
                }
                            
                            
                            }
                            
                        
                    
            });
       
      });
   
</script>
<script>
function keluarFunc(id){
    swal({
     title: "Jaga Laptop Baik-Baik",
     text: "Gunakan Sesuai Dengan Kebutuhan",
     dangerMode: true,
   }).then(function(isConfirm) {
     if (isConfirm) {
       $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
         var id_laptop = $("#id_laptop").val();
         var guru = $("#guru").val();
         var mapel = $("#mapel").val();
       $.ajax({
                   type:"POST",
                   url: "{{ route('laptops.keluar-lap') }}",
                   data: { id: id, "id_laptop" : id_laptop ,"guru" : guru,"mapel":mapel},
                   dataType: 'json',
                   success: function (results) {
                  
                   
                 
                   }
               });
               $(".data_trans").remove();
                   $("#id_laptop").val(null);
                   location.reload();
     } else {
       swal("Cancelled", "Your imaginary file is safe :)", "error");
     }
   })






   };
   function cancelPin(){
                    $(".data_trans").remove();
                   $("#id_laptop").val(null);
   };


   function masukFunc(id){
    swal({
     title: "Cek Kelengkapan Laptop",
     text: "Terima Kasih",
     dangerMode: true,
   }).then(function(isConfirm) {
     if (isConfirm) {
       $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
         var id_laptop = $("#id_laptop").val();
         var guru = $("#guru").val();
         var mapel = $("#mapel").val();
       $.ajax({
                   type:"POST",
                   url: "{{ route('laptops.masuk-lap') }}",
                   data: { id: id, "id_laptop" : id_laptop ,"guru" : guru,"mapel":mapel},
                   dataType: 'json',
                   success: function (results) {

                   if (results.success === true) {

                       swal("Terima Kasih !", "Laptop sudah kembali", "success");
                   
                       
                   } else {
                       swal("Error!","error", "error");
                   }
                   $(".data_trans").remove();
                   $("#id_laptop").val(null);
                   location.reload();
                   }
               });
       
     } else {
       swal("Cancelled", "Your imaginary file is safe :)", "error");
     }
   })






   };

</script>

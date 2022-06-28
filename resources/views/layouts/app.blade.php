<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            .center {
            text-align: center;
           
            }
            .center_img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">></script>
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> 
{{-- JS DATE PEMINJAMAN --}}
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
    <script>
    $(document).ready(function(){
        get_data_peminjaman_blm();
        function get_data_peminjaman_blm(){
        var table = $('#table_peminjaman_blm').DataTable({
           
            ajax: "{{ route('peminjaman.blm') }}",
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
{{-- js data laptop --}}
<script>
$(document).ready(function(){
    get_data_laptop();
    function get_data_laptop(){
    var table = $('#table_laptop').DataTable({
       
        ajax: "{{ route('laptops.list') }}",
        columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nama', name: 'nama'},
                {data: 'id_laptop', name: 'id_laptop'},
                {data: 'loker', name: 'loker'},
                {data: 'MAC', name: 'MAC'},
                {data: 'keterangan', name: 'keterangan'},
                
            ]
        });
    }
});
</script>
{{-- js data santri --}}
<script>
$(document).ready( function () {
    $('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
    }); 
    get_data_santri();
    function get_data_santri(){
    var table = $('#table_santri').DataTable({
       
        ajax: "{{ route('students.list') }}",
        columns: [
               {
                    data: 'ceklist', 
                    name: 'ceklist' ,
                    "orderable": "false",
  
                },
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'Nik', name: 'Nik'},
                {data: 'Nama', name: 'Nama'},
                {data: 'kelas', name: 'kelas'},
                {data: 'id_laptop', name: 'id_laptop'},
                // {
                //     data: 'foto', 
                //     name: 'foto', 
                //     orderable: true, 
                //     searchable: true
                // },
              
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true
                },
            ]
        });
    }
    $('#tambahSantri').on('submit', function(event){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            var formData = new FormData(this);
            
       $.ajax({
 
            type:'POST',

            url: "{{route('students.store')}}",

            data:formData,

            cache:false,

            contentType: false,

            processData: false,

            success: function (results) {

            if (results.success === true) {
                
                swal("Berhasil !", results.message, "success");
                $('#TambahSantri').modal('hide');
                $('#tambahSantri').trigger('reset');
                
            } else {
                swal("Error!", results.message, "error");
            }
            var table = $('#table_santri').DataTable(); 
            table.ajax.reload( null, false );
            }

        });

       
    });
    $('#updateSantri').on('submit', function(event){
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            var formData = new FormData(this);
            
       $.ajax({
 
            type:'POST',

            url: "{{route('students.update')}}",

            data:formData,

            cache:false,

            contentType: false,

            processData: false,

            success: function (results) {

            if (results.success === true) {

                swal("Berhasil !", results.message, "success");
                window.location = '{{ route('data_santri')}}';
                
            } else {
                swal("Error!", results.message, "error");
            }
            var table = $('#table_santri').DataTable(); 
            table.ajax.reload( null, false );
            }

        });
    });
    
    

    
} );
</script>
<script> 
function coba(url){
    if($('input:checked').length > 1){
       $('#tb_santri')
            .attr('target','_blank')
            .attr('action',url)
            .submit();

    }else{
        alert("pilih data minimal 1");
        return;
    }
}
function deleteFunc(id){
     swal({
      title: "Are you sure?",
      text: "Delete this data ",
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
                    type:"POST",
                    url: "{{ route('students.delete') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (results) {

                    if (results.success === true) {

                        swal("Berhasil !", results.message, "success");
                    
                        
                    } else {
                        swal("Error!", results.message, "error");
                    }
                    var table = $('#table_santri').DataTable(); 
                    table.ajax.reload( null, false );
                    }
                });
        
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
    })






    }

</script>
{{-- JQUERY PEMINJAMAN --}}
<script>
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      $("#id_laptop").on("input", function(){
        $kd = $(this).val();
        $.ajax({
            url: 'laptops/pinjam/'+$kd,
            type: 'get',
            dataType: 'json',
            success: function(response){
                // alert($("#kunci").val());
                if(response.success != false and $("#kunci").val() != 1){
                    var input_foto = '<h2 class="center data_trans">'+response.Nama+' Kode Laptop : '+response.id_laptop+'</h2><img class="center_img data_trans" src="foto_santri/'+response.foto+'" height="150px" width="150px"> <br class="data_trans"><input type="text" id="guru" class="form-control data_trans" placeholder="masukkan guru"><input type="hidden" id="kunci" value="1" class="form-control data_trans" placeholder="masukkan guru"><br class="data_trans"><input type="text" id="mapel" placeholder="masukkan mapel" class="form-control data_trans">'
                            if(response.status == 1){
                                var btn = '<a href="javascript:void(0);" id="laptop-keluar" onClick="keluarFunc('+response.id+')" data-toggle="tooltip"  class="keluar btn btn-warning data_trans">Keluar</a>  <a href="javascript:void(0);" id="cancel" onClick="cancelPin()" data-toggle="tooltip"  class="cancel btn btn-danger data_trans">Reset</a>'
                            }else{
                                var btn = '<a href="javascript:void(0);" id="laptop-masuk" onClick="masukFunc('+response.id+')" data-toggle="tooltip"  class="masuk btn btn-warning data_trans">Masuk</a>   <a href="javascript:void(0);" id="cancel" onClick="cancelPin()" data-toggle="tooltip"  class="cancel btn btn-danger data_trans">Reset</a>'
                            }
                           
                            $("#foto").append(input_foto);
                            $("#btn").append(btn);
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

                   if (results.success === true) {

                       swal("Berhasil !", "Cepat Kembalikan Jika Sudah Selesai !", "success");
                   
                       
                   } else {
                       swal("Error!","error", "error");
                   }
                   $(".data_trans").remove();
                   $("#id_laptop").val(null);
                   }
               });
       
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
                   }
               });
       
     } else {
       swal("Cancelled", "Your imaginary file is safe :)", "error");
     }
   })






   };

</script>

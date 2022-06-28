<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Laptop;
use DataTables;
use Illuminate\Support\Facades\DB;
use Alert;
use PDF;

class StudentController extends Controller
{
    public function getStudents(Request $request)
    {
       
        if ($request->ajax()) {
            $data = DB::table('students')->get();
            return Datatables::of($data)
                ->addIndexColumn()
               
                ->addColumn('action', function($row){
                    return '<a class="btn btn-warning btn-sm" href="/students/'. $row->id_laptop .'/edit" role="button">Edit</a>
                    <a href="javascript:void(0);" id="delete-santri" onClick="deleteFunc('."'$row->id_laptop'".')" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger btn-sm">Delete</a>
                    ';
                })
                // ->addColumn('foto', function ($product_brand) { 
                //     $url=asset("foto_santri/$product_brand->foto"); 
                //     return '<img src='.$url.' border="0" width="60" class="img-rounded" align="center" />'; 
                //  })
                 ->addColumn('ceklist', function ($row) { 
             
                    return '<input class="form-check-input" type="checkbox" name="id_laptop[]" id="inlineCheckbox1" value='.$row->id.'>'; 
                 })
                 
                ->rawColumns(['action','ceklist'])
                ->make(true);
        }
        
    }
    public function cetak_barcode(Request $request)
    {
        $data_kd_laptop = array();
        foreach ($request->id_laptop as $id){
            $kd_laptop = Student::find($id);
            $data_kd_laptop[] = $kd_laptop;
            
        }
       
        $pdf =PDF::loadView('data_barcode',compact('data_kd_laptop'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream('barcode.pdf');

    }
    public function store(Request $request){
     

        //upload image
        $image = $request->file('foto');
        $new_name = $request->nik.".".$image->getClientOriginalExtension();
        $image->storeAs('foto_santri', $new_name);
         $data_laptop = DB::table('laptops')->insert([
            'loker' => $request->loker,
            'id_laptop' => $request->id_laptop,
            'keterangan' => $request->keterangan,
            'spesifikasi' => $request->processor." ".$request->tipe_pro." ".$request->ram." ".$request->grafik ,
            'MAC' => $request->mac_laptop,
           
        ]);
        $data_santri = DB::table('students')->insert([
            'nik'     => $request->nik,
            'nama'     => $request->nama,
            'kelas'   => $request->kelas,
            'foto'   => $new_name,
            'id_laptop' =>$request->id_laptop,
            'status' => 1,
        ]);
        return response()->json(
        [
            'success' => true,
            'message' => 'Data inserted successfully'
        ]
    );
    
    }
    public function edit($id)
    {
        $students = DB::table('students')->where('id_laptop', $id)->first();
        $laptops = DB::table('laptops')->where('id_laptop', $id)->first();
        return view('data_santri_edit', compact('students','laptops'));
    }
    public function update(Request $request)
    {
    
        DB::table('students')->where('id_laptop', $request->id_laptop)->update([
            'nik'     => $request->nik,
            'nama'     => $request->nama,
            'kelas'   => $request->kelas,
            'id_laptop' =>$request->id_laptop,
            'status' => 1,
        ]);
        DB::table('laptops')->where('id_laptop', $request->id_laptop)->update([
            'loker' => $request->loker,
            'id_laptop' => $request->id_laptop,
            'keterangan' => $request->keterangan,
            
        ]);
    
    
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]);
        }
    public function destroy(Request $request)
    {
       
        $students = DB::table('students')->where('id_laptop', $request->id)->delete();
        $laptops = DB::table('laptops')->where('id_laptop', $request->id)->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data deleted successfully'
            ]);
        }
    
    
}

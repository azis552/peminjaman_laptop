<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Laptop;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use DataTables;
class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLaptops(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::join('laptops','laptops.id_laptop', '=','students.id_laptop')
                    ->get(['students.nama','laptops.loker','laptops.id_laptop','laptops.keterangan','laptops.MAC']);
          
            return Datatables::of($data)
                ->addIndexColumn()
               
               
                ->make(true);
        }
    }
    public function getLaptopspinjam($id){
        $students = DB::table('students')->where('id_laptop', $id)->first();
         if($students == null){
            return response()->json(
                [
                    'success' => false,
                    
                ]);
            }else{
                return response()->json($students);
            }
    }
    public function keluarFunc(Request $request)
    {
      
       $update = DB::table('students')->where('id', $request->id)->update([
            'status' => 2,
        ]);
        $data_santri = DB::table('peminjaman')->insert([
            'id_laptop'     => $request->id_laptop,
            'tanggal'     => now(),
            'guru' =>$request->guru,
            'mapel' =>$request->mapel,
            'status' => 1,
        ]);
       
        return response()->json(
            [
                'success' => true,
                
            ]);
        }
    public function masukFunc(Request $request)
        {
          
           $update = DB::table('students')->where('id', $request->id)->update([
                'status' => 1,
            ]);
            $data_santri = DB::table('peminjaman')->insert([
                'id_laptop'     => $request->id_laptop,
                'tanggal'     => now(),
                'guru' =>$request->guru,
                'mapel' =>$request->mapel,
                'status' => 2,
            ]);
            return response()->json(
                [
                    'success' => true,
                    
                ]);
            }
        
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

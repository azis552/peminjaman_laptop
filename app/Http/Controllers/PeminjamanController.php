<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Laptop;
use App\Models\Peminjaman;
use DataTables;
use Illuminate\Support\Facades\DB;
class PeminjamanController extends Controller
{
    public function getpeminjaman(Request $request)
            {
                if ($request->ajax()) {
                    // $data = Student::join('laptops','laptops.id_laptop', '=','students.id_laptop')
                    // ->get(['students.nama','laptops.loker','laptops.id_laptop','laptops.keterangan','laptops.MAC']);
                    $data = DB::table('peminjaman')
                            ->join('students', 'students.id_laptop', '=', 'peminjaman.id_laptop')
                            ->join('laptops', 'laptops.id_laptop', '=', 'students.id_laptop')
                            ->get();
                  
                    return Datatables::of($data)->addIndexColumn()->make(true);
                        
                }
            }
            public function getpeminjaman_blm(Request $request)
            {
                if ($request->ajax()) {
                    // $data = Student::join('laptops','laptops.id_laptop', '=','students.id_laptop')
                    // ->get(['students.nama','laptops.loker','laptops.id_laptop','laptops.keterangan','laptops.MAC']);
                    $data = DB::table('peminjaman')
                    ->join('students', 'students.id_laptop', '=', 'peminjaman.id_laptop')
                    ->join('laptops', 'laptops.id_laptop', '=', 'students.id_laptop')
                    ->where('students.status', '2')
                    ->get();
                            
                            
                  
                    return Datatables::of($data)->addIndexColumn()->make(true);
                        
                }
            }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

<?php

namespace App\Http\Controllers\admin\master;

use App\Models\Tahun;
use CreateTahunTable;
use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\Master\TahunDataTable;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TahunDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.tahun.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DataHelper $dataHelper)
    {
        $dropdownTahun  = $dataHelper->yearDropdownData();
        return view('pages.admin.master.tahun.add-edit', [
        'dropdownTahun'     => $dropdownTahun
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'tahun' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Tahun::create($request->all());
            
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tahun.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id, DataHelper $dataHelper)
    {
        $dropdownTahun  = $dataHelper->yearDropdownData();
        $data = Tahun::findOrFail($id);
        return view('pages.admin.master.tahun.add-edit', [
            'data' => $data,
            'dropdownTahun' => $dropdownTahun
        ]);
        
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'tahun' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Tahun::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tahun.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Tahun::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
        
    }
//     public function completedUpdate(Request $request, Tahun $media)
//     {
//         // Set ALL records to a status of 0
//         Tahun::table('media')->where('status',1)->update(['status' => 0]);
    
//         // Set the passed record to a status of what ever is passed in the Request
//         $media->status = $request->changeStatus;
//         $media->save();
//         return redirect()->back()->with('message', 'Status changed!');
//     }
}
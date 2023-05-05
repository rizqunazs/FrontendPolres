<?php

namespace App\Http\Controllers\Admin;

use App\Models\Info; 
use App\DataTables\Admin\InfoDataTable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InfoDataTable $InfoDataTable)
    {
        return $InfoDataTable->render('pages.admin.info.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.info.add-edit');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([

            'judul' => 'required',
            'info' => 'required',
            'gambar' => 'required'

        ]);

        $input = $request->all();

        if ($image=$request->file('gambar')) {
            $destinationPath ='image/';
            $profileImage = date('YmdHis'). "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar']="$profileImage"; 
            # code...
        }

        Info::create($input);

        return redirect()->route('admin.info.index')
        ->with('success','Sukses Menambahkan Info.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.info.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Info::findOrFail($id);
        return view('pages.admin.info.add-edit', ['data' => $data]);
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
        try {
            $request->validate([
                'judul' => 'required',
                'info' => 'required',
                'gambar' => 'required'
            ]);

            $data = $request->all();

            if ($image=$request->file('gambar')) {
                $destinationPath ='image/';
                $profileImage = date('YmdHis'). "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $data['gambar']="$profileImage"; 
                # code...
            }
            else{
                unset($data['gambar']);
            }


        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Info::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.info.index'))->withToastSuccess('Data tersimpan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete(); 
    }
}

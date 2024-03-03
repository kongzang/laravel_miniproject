<?php

namespace App\Http\Controllers\Api;

use App\Models\Province;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Province::all();
        return response()->json( [
            'data' => $data,
        ]);
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
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        try{
            Province::create([
                "name" => $request['name'],
                "region_id" => $request['region_id'],
            ]);

            return response()->json([
                "status" => "200",
                "message" => "บันทึกข้อมูลสำเร็จ"
            ]);


        }catch(\Exception $e) {
            return response()->json([
                "status" => "500",
                "message" => $e,
            ]);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Province::find($id);
        //dd($data);
        return response()->json( [
            "data1" => $data,
        ]);
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
        try{
            Province::where('id',$id)
            ->update([
            'name' => $request['name'],
            'region_id' => $request['region_id'],
        ]);
        return response()->json([
            "status" => "200",
            "message" => "แก้ไขข้อมูลสำเร็จ"
        ]);
    }catch(\Exception $e) {
        return response()->json([
            "status" => "500",
            "message" => $e,
        ]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd("kum meow tum pruch");
        try{
            Province::where('id',$id)
            ->delete();

            return response()->json([
                "status" => "200",
                "message" => "ลบข้อมูลสำเร็จ"
            ]);

        }catch(\Exception $e)  {
            return response()->json([
                "status" => "500",
                "message" => $e,
            ]);
        };
    }
}

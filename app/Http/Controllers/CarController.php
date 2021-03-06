<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Producer;
use Illuminate\Support\Facades\File;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('Create',['producers'=> Producer::get()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name='';
        
        $validated = $request->validate([
            'make' => 'required',
            'name' => 'required',
            'image' => 'required',
           
        ],[
                'make.required' => 'Chưa nhập mô tả',
                'name.required' => 'Chưa nhập mô tả',
                'image.required' => 'Chưa nhập mô tả',
                
        ]);
        if($request -> hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
            ]);
            $file = $request->file('image');
            $name = 'image/'.time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('image');
            $file -> move($destinationPath, $name);
        }
        
        $car = new Car();
        $car -> make=$request->make;
        $car->name = $request -> name;
        $car->pro_id = $request->pro_id;
        $car -> image = $name;
        $car -> save();
        
        return redirect()-> route('cars.index')->with('success', 'Bạn đã Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('show',['a'=>$car]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
                // dd($car);
        return view('editCard',compact('car'),['producers'=> Producer::get()]);
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
        $name='';
        $validated = $request->validate([
            'make' => 'required',
            'name' => 'required',
            'image' => 'required',
           
        ],[
                'make.required' => 'Chưa nhập mô tả',
                'name.required' => 'Chưa nhập mô tả',
                'image.required' => 'Chưa nhập mô tả',
                
        ]);
        if($request -> hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048'
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
            ]);
            $file = $request->file('image');
            $name = 'image/'.time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('image');
            $file -> move($destinationPath, $name);
        }
   
        $car = Car::find($id);
        $car -> make=$request->make;
        $car->name = $request -> name;
        $car->pro_id = $request -> pro_id;
        $car -> image = $name;
        $car -> save();
        
        return redirect()-> route('cars.index')->with('success', 'Bạn đã cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $imgLink = public_path('\\').$car->image;
      
        if(File::exists($imgLink)) {
           
            File::delete($imgLink);
        }
        //  dd($imgLink);
        $car -> delete();
        return redirect()-> route('cars.index')->with('success', 'Bạn đã xóa thành công!');
    }
}
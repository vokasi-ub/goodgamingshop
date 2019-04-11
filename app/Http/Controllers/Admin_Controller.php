<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin_model;
use App\Adminmodel_brand;
use App\kategori_model;
class Admin_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = Admin_model::with(['kategori','brand'])->when($request->keyword,function($query)use($request)
            {
                $query->where('nama_produk','like',"%{$request->keyword}%");
            })->get();
        return view('Dashboard/kontenadmin',compact('produk'));
        /*
        return view ('Dashboard/kontenadmin');
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand=Adminmodel_brand::all();
        $kategori=kategori_model::all();

        return view('Dashboard.kontentambah', compact('brand','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //     DB::table('produk')->insert([
    //     'id_brand' => $request->id_brand,
    //     'id_kategori' => $request->id_kategori,
    //     'nama_produk' => $request->nama_produk,
    //     'deskripsi' => $request->deskripsi,
    //     'harga' => $request->harga,
    //     'gambar' => $request->gambar

    // ]);
    //     return redirect('admin');
    $gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
    $request->gambar->move(public_path('image'),$gambarName);

        $produk = new Admin_model([
            'id_merek' => $request->get('id_merek'),
            'id_kategori' => $request->get('id_kategori'),
            'nama_produk' => $request->get('nama_produk'),
            'deskripsi' => $request->get('deskripsi'),
            'harga' => $request->get('harga'),
            'gambar' => $gambarName 
            ]);

        $produk->save();
        return redirect('http://127.0.0.1:8000/konten');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return"show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = Admin_model::where('id_produk',$id)->get();
        $brand=Adminmodel_brand::all();
        $kategori=kategori_model::all();
        return view('Dashboard.kontenedit',compact('produks','brand','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

  //$gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
    
        if(!empty($request->gambar)){
        
        $image = $request->file('gambar');
            $gambarName = $image->getClientOriginalName();
            $image->move(public_path('image'),$gambarName);

         Admin_model::where('id_produk',$request->id_produk)->update([
        
        'id_merek' => $request->id_merek,
        'id_kategori' => $request->id_kategori,
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'gambar'=>$gambarName

        ]);
       
        } else {
         
        Admin_model::where('id_produk',$request->id_produk)->update([
        
        'id_merek' => $request->id_merek,
        'id_kategori' => $request->id_kategori,
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga   

       ]);
     }

     return redirect('/admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('produk')->where('id_produk',$id)->delete();
       return redirect('/admin');
    }
}

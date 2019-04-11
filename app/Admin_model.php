<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori_model;
use App\Adminmodel_brand;

class Admin_model extends Model
{
    protected $table = "produk";
    public $timestamp = false;
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_merek',
        'id_kategori',
        'nama_produk',
        'deskripsi',
        'harga',
        'gambar'
      ];
 	protected $guarded=[];
 
    public function kategori()
    {
    	return $this->belongsTo(kategori_model::class,'id_kategori');
    }
    public function brand()
    {
    	return $this->belongsTo(Adminmodel_brand::class,'id_merek');
    }
}

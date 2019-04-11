<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin_model;
class kategori_model extends Model
{
    
    protected $table = "kategori";
    public $timestamp = false;
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama_kategori'
      ];
   	protected $guarded=[];
    public function Admin_model()
	{
		return $this->hasMany(Admin_model::class);
	}
}

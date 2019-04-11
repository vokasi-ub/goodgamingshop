<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin_model;
class Adminmodel_brand extends Model
{
    protected $table = "merek";
    public $timestamp = false;
    protected $primaryKey = 'id_merek';
    protected $fillable = [
        'nama_merek'
      ];
    	protected $guarded=[];
    public function Admin_model()
	{
		return $this->hasMany(Admin_model::class);
	}
}

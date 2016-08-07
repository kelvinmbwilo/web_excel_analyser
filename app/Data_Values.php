<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_Values extends Model
{
	protected $table = 'data_values';

	protected $fillable = ['metadata_id', 'category_id', 'period', 'location','value'];

	public function categories(){
		return $this->HasMany('Categories');
	}

	public function district(){
		return $this->belongsTo('District');
	}



}
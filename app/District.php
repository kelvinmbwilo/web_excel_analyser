<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	protected $table = 'districts';

	protected $guarded = ['id'];

	public function data_values(){
		return $this->HasMany('Data_Values');
	}

	public function region(){
		return $this->belongsTo('Region');
	}
}
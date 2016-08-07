<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $table = 'categories';

	protected $primaryKey = 'id';

	//protected $fillable = ['id', 'name'];

	protected $guarded = ['id'];

	public function metadata(){
		return $this->belongsTo('Metadata');
	}

	public function data_values(){
		return $this->HasMany('Data_Values');
	}
}
<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
	protected $table = 'metadata';

	protected $guarded = ['id'];

	/*public function categories(){
		return $this->HasMany('Categories');
	}*/

	public function metadata_category(){
		return $this->HasMany('Metadata_Category');
	}

}
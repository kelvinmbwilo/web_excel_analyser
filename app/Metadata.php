<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
	protected $table = 'metadata';

	protected $primaryKey = 'id';

	protected $fillable = ['id', 'name'];

	protected $hidden = ['id'];

	/*public function categories(){
		return $this->HasMany('Categories');
	}*/

	public function metadata_category(){
		return $this->HasMany('Metadata_Category');
	}

}
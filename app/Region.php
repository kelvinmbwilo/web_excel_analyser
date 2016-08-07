<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	protected $table = 'region';

	protected $primaryKey = 'id';

	protected $fillable = ['id', 'name'];

	protected $hidden = ['id'];

	public function district(){
		return $this->HasMany('District');
	}
}
<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata_Category extends Model
{
	protected $table = 'metadata_category';

	protected $fillable = ['metadata_id', 'category_id'];

	public function categories(){
		return $this->belongsTo('Categories');
	}
	
}
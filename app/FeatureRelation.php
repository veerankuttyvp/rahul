<?php namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App
 */
class FeatureRelation extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table;
	protected $primaryKey = 'feature_relation_id';

	/**
	 *
	 */
	public function __construct()
	{
		$this->table ='feature_relation';
		}

	
}
	
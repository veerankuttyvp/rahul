<?php namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App
 */
class FsVersion extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table;
	protected $primaryKey = 'fs_version_id';

	/**
	 *
	 */
	public function __construct()
	{
		$this->table ='fs_versions';
	}

	
}
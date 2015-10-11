<?php namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Permission
 * @package App
 */
class Fs extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table;

	protected $primaryKey = 'fs_id';
	/**
	 *
	 */
	public function __construct()
	{
		$this->table = 'fs';
	}

	
	public function fs_versions()
	{
		return $this->hasMany('App\FsVersion', 'fs_id', 'fs_id');
	}

	
}

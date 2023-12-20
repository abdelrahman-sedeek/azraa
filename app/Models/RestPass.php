<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RestPass
 * 
 * @property int $id
 * @property int $id_user
 * @property int $code
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RestPass extends Model
{
	protected $table = 'rest_passes';

	protected $casts = [
		'id_user' => 'int',
		'code' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_user',
		'code',
		'status'
	];
}

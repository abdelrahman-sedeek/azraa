<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppTheme
 * 
 * @property int $id
 * @property int $user_id
 * @property int $theme
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class AppTheme extends Model
{
	protected $table = 'app_themes';

	protected $casts = [
		'user_id' => 'int',
		'theme' => 'int'
	];

	protected $fillable = [
		'user_id',
		'theme'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

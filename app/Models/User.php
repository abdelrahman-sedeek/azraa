<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string|null $profile
 * @property string $mobile
 * @property string $email
 * @property string $location
 * @property float $balance
 * @property float $longitude
 * @property float $latitude
 * @property string $password
 * @property string $type
 * @property string|null $code
 * @property string|null $access_token
 * @property int $status
 * @property string $remove
 * @property string $role
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AppTheme[] $app_themes
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'balance' => 'float',
		'longitude' => 'float',
		'latitude' => 'float',
		'status' => 'int'
	];

	protected $hidden = [
		'password',
		'access_token',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'profile',
		'mobile',
		'email',
		'location',
		'balance',
		'longitude',
		'latitude',
		'password',
		'type',
		'code',
		'access_token',
		'status',
		'remove',
		'role',
		'remember_token'
	];

	public function app_themes()
	{
		return $this->hasMany(AppTheme::class);
	}
}

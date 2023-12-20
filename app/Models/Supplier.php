<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * 
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $mobile
 * @property float $balance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Supplier extends Model
{
	protected $table = 'suppliers';

	protected $casts = [
		'balance' => 'float'
	];

	protected $fillable = [
		'name',
		'image',
		'mobile',
		'balance'
	];
}

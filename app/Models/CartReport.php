<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CartReport
 * 
 * @property int $id
 * @property int $user_id
 * @property int $product_count
 * @property Carbon|null $last_update
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CartReport extends Model
{
	protected $table = 'cart_reports';

	protected $casts = [
		'user_id' => 'int',
		'product_count' => 'int',
		'last_update' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'product_count',
		'last_update'
	];
}

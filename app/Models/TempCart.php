<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TempCart
 * 
 * @property int $id
 * @property int $variant_id
 * @property int $product_id
 * @property int $user_id
 * @property float $quantity
 * @property string $unit
 * @property float $price
 * @property float $discounted_price
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TempCart extends Model
{
	protected $table = 'temp_carts';

	protected $casts = [
		'variant_id' => 'int',
		'product_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'float',
		'price' => 'float',
		'discounted_price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'variant_id',
		'product_id',
		'user_id',
		'quantity',
		'unit',
		'price',
		'discounted_price',
		'status'
	];
}

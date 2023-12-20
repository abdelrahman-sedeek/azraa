<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $id
 * @property int $order_id
 * @property int $user_id
 * @property int $product_id
 * @property int $variant_id
 * @property float $price
 * @property float $seller_price
 * @property float $total_seller_price
 * @property float $discounted_price
 * @property float $total_discounted_price
 * @property int $quantity
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_items';

	protected $casts = [
		'order_id' => 'int',
		'user_id' => 'int',
		'product_id' => 'int',
		'variant_id' => 'int',
		'price' => 'float',
		'seller_price' => 'float',
		'total_seller_price' => 'float',
		'discounted_price' => 'float',
		'total_discounted_price' => 'float',
		'quantity' => 'int'
	];

	protected $fillable = [
		'order_id',
		'user_id',
		'product_id',
		'variant_id',
		'price',
		'seller_price',
		'total_seller_price',
		'discounted_price',
		'total_discounted_price',
		'quantity',
		'status'
	];
}

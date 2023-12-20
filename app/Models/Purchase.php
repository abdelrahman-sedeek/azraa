<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 * 
 * @property int $id
 * @property int $variant_id
 * @property int $product_id
 * @property int $supplier_id
 * @property int $purchases_list_id
 * @property float $quantity
 * @property string $unit
 * @property float $price
 * @property float $seller_price
 * @property float $total_discounted_price
 * @property float $total_seller_price
 * @property float $discounted_price
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Purchase extends Model
{
	protected $table = 'purchases';

	protected $casts = [
		'variant_id' => 'int',
		'product_id' => 'int',
		'supplier_id' => 'int',
		'purchases_list_id' => 'int',
		'quantity' => 'float',
		'price' => 'float',
		'seller_price' => 'float',
		'total_discounted_price' => 'float',
		'total_seller_price' => 'float',
		'discounted_price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'variant_id',
		'product_id',
		'supplier_id',
		'purchases_list_id',
		'quantity',
		'unit',
		'price',
		'seller_price',
		'total_discounted_price',
		'total_seller_price',
		'discounted_price',
		'status'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BestSellerReport
 * 
 * @property int $id
 * @property int|null $product_id
 * @property int|null $quantity
 * @property int|null $product_count
 * @property int|null $orders_count
 * @property float|null $total_discounted_price
 * @property float|null $total_wallet_used
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class BestSellerReport extends Model
{
	protected $table = 'best_seller_reports';

	protected $casts = [
		'product_id' => 'int',
		'quantity' => 'int',
		'product_count' => 'int',
		'orders_count' => 'int',
		'total_discounted_price' => 'float',
		'total_wallet_used' => 'float'
	];

	protected $fillable = [
		'product_id',
		'quantity',
		'product_count',
		'orders_count',
		'total_discounted_price',
		'total_wallet_used'
	];
}

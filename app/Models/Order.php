<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_id
 * @property int $status
 * @property float $wallet_used
 * @property float $total_price
 * @property float $total_seller_price
 * @property float $total_discounted_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $uniqueCode
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'wallet_used' => 'float',
		'total_price' => 'float',
		'total_seller_price' => 'float',
		'total_discounted_price' => 'float'
	];

	protected $fillable = [
		'user_id',
		'status',
		'wallet_used',
		'total_price',
		'total_seller_price',
		'total_discounted_price',
		'uniqueCode'
	];
}

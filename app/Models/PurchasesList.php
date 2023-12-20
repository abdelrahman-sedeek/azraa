<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchasesList
 * 
 * @property int $id
 * @property int $supplier_id
 * @property int $status
 * @property float $total_price
 * @property float $total_seller_price
 * @property float $total_discounted_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PurchasesList extends Model
{
	protected $table = 'purchases_lists';

	protected $casts = [
		'supplier_id' => 'int',
		'status' => 'int',
		'total_price' => 'float',
		'total_seller_price' => 'float',
		'total_discounted_price' => 'float'
	];

	protected $fillable = [
		'supplier_id',
		'status',
		'total_price',
		'total_seller_price',
		'total_discounted_price'
	];
}

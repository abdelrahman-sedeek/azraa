<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductBranch
 * 
 * @property int $id
 * @property int $product_id
 * @property float $measurement
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $offer
 * @property string $unit
 * @property float $price
 * @property float $discounted_price
 * @property float $seller_price
 *
 * @package App\Models
 */
class ProductBranch extends Model
{
	protected $table = 'product_branches';

	protected $casts = [
		'product_id' => 'int',
		'measurement' => 'float',
		'offer' => 'int',
		'price' => 'float',
		'discounted_price' => 'float',
		'seller_price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'measurement',
		'offer',
		'unit',
		'price',
		'discounted_price',
		'seller_price'
	];
}

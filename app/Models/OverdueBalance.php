<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OverdueBalance
 * 
 * @property int $id
 * @property int $user_id
 * @property int $order_id
 * @property float $price
 * @property int $type
 * @property string $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class OverdueBalance extends Model
{
	protected $table = 'overdue_balances';

	protected $casts = [
		'user_id' => 'int',
		'order_id' => 'int',
		'price' => 'float',
		'type' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'order_id',
		'price',
		'type',
		'description',
		'status'
	];
}

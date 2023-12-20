<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepresentativeOperation
 * 
 * @property int $id
 * @property int $representative_id
 * @property int $order_id
 * @property int $type
 * @property float $price
 * @property int $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Representative $representative
 *
 * @package App\Models
 */
class RepresentativeOperation extends Model
{
	protected $table = 'representative_operations';

	protected $casts = [
		'representative_id' => 'int',
		'order_id' => 'int',
		'type' => 'int',
		'price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'representative_id',
		'order_id',
		'type',
		'price',
		'status',
		'description'
	];

	public function representative()
	{
		return $this->belongsTo(Representative::class);
	}
}

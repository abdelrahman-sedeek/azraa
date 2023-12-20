<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SuppliersOperation
 * 
 * @property int $id
 * @property int $supplier_id
 * @property int $purchase_id
 * @property int $type
 * @property float $price
 * @property int $status
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class SuppliersOperation extends Model
{
	protected $table = 'suppliers_operations';

	protected $casts = [
		'supplier_id' => 'int',
		'purchase_id' => 'int',
		'type' => 'int',
		'price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'supplier_id',
		'purchase_id',
		'type',
		'price',
		'status',
		'description'
	];
}

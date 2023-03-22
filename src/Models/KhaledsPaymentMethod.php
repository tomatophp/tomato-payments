<?php

namespace TomatoPHP\TomatoPayments\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $method
 * @property string $name
 * @property string $description
 * @property string $color
 * @property string $icon
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 */
class KhaledsPaymentMethod extends Model
{
    /**
     * @var array
     */
    protected $casts = ['is_active' => 'boolean'];
    protected $fillable = ['method', 'name', 'description', 'color', 'icon', 'is_active', 'created_at', 'updated_at'];

    public function payments()
    {
        return $this->hasMany(KhaledsPayment::class,'payment_method','method');
    }
}

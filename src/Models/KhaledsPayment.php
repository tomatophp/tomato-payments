<?php

namespace TomatoPHP\TomatoPayments\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Kirschbaum\PowerJoins\PowerJoins;
use Modules\Accounts\Entities\Account;

/**
 * @property integer $id
 * @property integer $model_id
 * @property string $model_table
 * @property integer $order_id
 * @property string $order_table
 * @property string $payment_method
 * @property string $payment_status
 * @property string $transaction_code
 * @property float $amount
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 */
class KhaledsPayment extends Model
{
    use PowerJoins;
    /**
     * @var array
     */
    protected $fillable = ['model_id', 'model_table', 'order_id', 'order_table', 'payment_method', 'payment_status', 'transaction_code', 'amount', 'notes', 'created_at', 'updated_at'];

    public function user(){
        //featch from config
        return $this->belongsTo(User::class ,'model_id');
    }

    public function order(){
        //featch from config
        return $this->belongsTo(Account::class ,'order_id');
    }

    public function logs(){

        return $this->hasMany(KhaledsPaymentLog::class,'transaction_code','transaction_code');

    }
}

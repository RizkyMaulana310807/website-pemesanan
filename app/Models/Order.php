<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'invoice_id',
        'pickup_date',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
    ];

    public function getRouteKeyName()
    {
        return 'invoice_id'; // Gunakan invoice_id untuk route binding
    }


    /**
     * Relasi many-to-many dengan model Product.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('quantity', 'price_at_purchase')
            ->withTimestamps();
    }
}

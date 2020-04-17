<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    public $table = 'reviews';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'rating',
        'created_at',
        'updated_at',
        'deleted_at',
        'review_author',
        'review_content',
        'service_reviewed_id',
        'product_reviewed_id',
    ];

    public function service_reviewed()
    {
        return $this->belongsTo(Service::class, 'service_reviewed_id');
    }

    public function product_reviewed()
    {
        return $this->belongsTo(Product::class, 'product_reviewed_id');
    }
}

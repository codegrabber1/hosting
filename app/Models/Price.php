<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'tariffname','slug','disc_space','panel',
        'support','php_versions','backup','val','messages',
        'price','dom_subdom','ftp','db','emails','php_memory',
        'is_published'
    ];

    /**
     * Getting actions for tariff plans.
     * @return BelongsTo
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);

    }
}

<?php

namespace App\Observers;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TariffPriceObserver
{
    /**
     * Handle the price "created" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function created(Price $price)
    {
        //
    }

    /**
     * Listening events while creating a new tariff plan.
     * @param Price $price
     */
    public function creating(Price $price)
    {
        //
        $this->setSlug($price);
    }

    /**
     * Handle the price "updated" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function updated(Price $price)
    {
        //
    }

    public function updating(Price $price)
    {
        $this->setPublishedAt($price);

        $this->setSlug($price);
    }

    /**
     * Handle the price "deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function deleted(Price $price)
    {
        //
    }

    /**
     * Handle the price "restored" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function restored(Price $price)
    {
        //
    }

    /**
     * Handle the price "force deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function forceDeleted(Price $price)
    {
        //
    }

    /**
     * Setting the date of publishing.
     * @param Price $price
     */
    protected function setPublishedAt(Price $price)
    {
        if(empty($price->published_at) && $price->is_published)
        {
            $price->published_at = Carbon::now();

        }
    }

    /**
     * Setting slug from the name of tariff plan.
     * @param Price $price
     */
    private function setSlug(Price $price)
    {
        if(empty($price->slug))
        {
            $price->slug = Str::slug($price->tariffname);
        }
    }
}

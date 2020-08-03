<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Profile extends Model implements HasMedia
{
    use InteractsWithMedia;


    /**
     * Register the media collections.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->singleFile()
            ->registerMediaConversions(function () {
                $this->addMediaConversion('tiny')
                    ->fit(Manipulations::FIT_CROP, 75, 75)
                    ->performOnCollections('avatar')
                    ->nonQueued();

                $this->addMediaConversion('small')
                    ->fit(Manipulations::FIT_CROP, 150, 150)
                    ->performOnCollections('avatar')
                    ->nonQueued();

                $this->addMediaConversion('medium')
                    ->fit(Manipulations::FIT_CROP, 300, 300)
                    ->performOnCollections('avatar')
                    ->nonQueued();

                $this->addMediaConversion('large')
                    ->fit(Manipulations::FIT_CROP, 600, 600)
                    ->performOnCollections('avatar')
                    ->nonQueued();
            });
    }
}

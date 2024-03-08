<?php

namespace App\Models;

use Carbon\Carbon;
use DrewRoberts\Blog\Traits\HasPageViews;
use DrewRoberts\Blog\Traits\Publishable;
use DrewRoberts\Media\Traits\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Mail\Markdown;
use Illuminate\Support\HtmlString;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class Meme extends BaseModel
{
    use SoftDeletes;
    use HasCreator;
    use HasUpdater;
    use HasPackageFactory;
    use Publishable;
    use HasMedia;
    use HasPageViews;

    protected $casts = [
        'image_id' => 'integer',
        'ogimage_id' => 'integer',
        'author_id' => 'integer',
        'creator_id' => 'integer',
        'updater_id' => 'integer',
        'published_at' => 'datetime',
    ];

    protected $fillable = [
        'slug',
        'title',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            // Can specify a different author for a post than Auth user
            $post->author_id = $post->author_id ?: auth()->user()->id;
        });
    }

    /**
     * @return HtmlString
     */
    public function getHtmlContentAttribute(): HtmlString
    {
        return Markdown::parse($this->content ?? '');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function memeType()
    {
        return $this->belongsTo(MemeType::class);
    }

    /**
     * Get a string path for the meme
     *
     * @return string
     */
    public function getPathAttribute(): string
    {
        return "/memes/{$this->memeType->slug}/{$this->slug}";
    }



    public function author()
    {
        return $this->belongsTo(app('user'), 'author_id');
    }
}

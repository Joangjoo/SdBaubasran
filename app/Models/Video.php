<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'url_youtube',
        'video_id',
    ];

    protected function urlYoutube(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                $videoId = null;
                $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

                if (preg_match($pattern, $value, $matches)) {
                    $videoId = $matches[1];
                }

                return [
                    'url_youtube' => $value,
                    'video_id' => $videoId,
                ];
            }
        );
    }

    protected function embedUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->video_id ? "https://www.youtube.com/embed/{$this->video_id}" : null
        );
    }
}

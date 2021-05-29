<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle', 'content','cover', 'uri', 'author'];

    public function getCreatedAtAttribute($date){
        return date('d/m/Y H:i', strtotime($date) );
    }

    public function verifyPostsExist($title)
    {
        if ($post = self::where('title', $title)->first()) {
            return $post->id;
        }

        return 0;
    }

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('title', 'LIKE', "%{$filter}%");
            }
        })
            ->paginate();

        return $results;
    }

    public function gettitleAttribute($value)
    {
        return ucfirst($value);
    }
}

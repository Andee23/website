<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//PHP docs
/**
 * @property string $title
 * @property string $content
 * @property string $description
 * @property string $is_published
 */

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'description',
      'is_published',
    ];
}
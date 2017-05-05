<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $published_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 */
class Article extends Model
{
    //
    protected $fillable = ['title','content','published_at'];
}

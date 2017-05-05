<?php


namespace App\Models;


/**
 * App\Models\Articles
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $published_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Articles whereUpdatedAt($value)
 */
class Articles extends \Eloquent
{

    protected $table = 'articles';

}
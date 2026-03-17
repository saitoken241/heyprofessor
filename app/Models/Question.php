<?php

namespace App\Models;

use Database\Factories\QuestionFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    /**
     * @use HasFactory<QuestionFactory>
     */
    use HasFactory;

    /** @return HasMany<Vote, $this> */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }
    /**
         @return Attribute<int, never>
        public function likes(): Attribute
        {
            return Attribute::make(
                get: fn () => $this->votes()->sum('like')
            );
        }

         @return Attribute<int, never>
        public function unlikes(): Attribute
        {
            return Attribute::make(
                get: fn () => $this->votes()->sum('unlike')
            );
        } */
}

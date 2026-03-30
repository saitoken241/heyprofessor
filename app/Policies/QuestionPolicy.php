<?php

namespace App\Policies;

use App\Models\{Question, User};
use Illuminate\View\View;

class QuestionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function publish(User $user, Question $question): bool
    {

        return $question->createdBy()->is($user);

    }

    public function update(User $user, Question $question): bool
    {
        return $question->draft;
    }

    public function destroy(User $user, Question $question): bool
    {

        return $question->createdBy()->is($user);

    }

}

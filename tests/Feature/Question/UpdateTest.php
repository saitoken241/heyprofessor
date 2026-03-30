<?php

use App\Models\{Question, User};

use function Pest\Laravel\{actingAs, put};

it('should be able top update a question', function () {
    $user     = User::factory()->create();
    $question = Question::factory()->for($user, 'createdBy')->create(['draft' => true]);

    actingAs($user);

    put(route('question.update', $question), [
        'question' => 'updated question',
    ])
        ->assertRedirect();

    $question->refresh();
    expect($question)->question->toBe('updated question');
});

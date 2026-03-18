<?php

use function Pest\Laravel\{actingAs, put};

it('it should be able to publish a question', function () {
    $user     = \App\Models\User::factory()->create();
    $question = \App\Models\Question::factory()->create();
    actingAs($user);
    put(route('question.publish', $question))->assertRedirect();
    $question->refresh();

    expect($question)->draft->toBeFalse();
});

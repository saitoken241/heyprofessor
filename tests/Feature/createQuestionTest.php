<?php
use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseCount, post};

it('should be able to create a new question bigger then 255 char', function () {
    $user = User::factory()->create();
    actingAs($user);

    $request = post(route('question.store'), [
        'question' => str_repeat('*', 260) . '?',

    ]);
    $request->assertRedirect(route('dashboard'));
    assertDatabaseCount('questions', 1);
    \Pest\Laravel\assertDatabaseHas('questions', ['question' => str_repeat('*', 260) . '?']);
});

it('should have at least 10 char', function () {
    $user = User::factory()->create();
    actingAs($user);

    $request = post(route('question.store'), [
        'question' => str_repeat('*', 8) . '?',

    ]);

    $request -> assertSessionHasErrors(['question' => __('validation.min.string', ['min' => 10, 'attribute' => 'question'])]);
    assertDatabaseCount('questions', 0);
});

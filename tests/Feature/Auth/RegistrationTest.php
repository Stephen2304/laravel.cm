<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Livewire\Volt\Volt;

test('registration screen can be rendered', function (): void {
    $response = $this->get('/register');

    $response
        ->assertOk()
        ->assertSeeVolt('pages.auth.register');
});

test('new users can register', function (): void {
    $component = Volt::test('pages.auth.register')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('password', 'password');

    $component->call('register');

    // Assert that the user is not authenticated
    $this->assertGuest();

    // Assert that a flash message is set
    $this->assertSessionHas('status', __('pages/auth.register.email_verification_status'));

    $this->assertAuthenticated();
});

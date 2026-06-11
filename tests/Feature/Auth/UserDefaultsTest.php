<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserDefaultsTest extends TestCase
{
    use RefreshDatabase;

    public function test_registered_users_have_default_role_and_active_status(): void
    {
        $this->post('/register', [
            'name' => 'Activity Three User',
            'email' => 'activity3@example.test',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $user = User::where('email', 'activity3@example.test')->firstOrFail();

        $this->assertSame('user', $user->role);
        $this->assertTrue($user->is_active);
        $this->assertIsBool($user->is_active);
    }
}

<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_user_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                        ->get('/user/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/user/store', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'user_level_id' => '0',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])
        ->assertRedirect();

    }

    public function test_user_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                        ->get('/user');

        $response->assertStatus(200);
    }

    public function test_show_user_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $user_email = $user->email;

        $response = $this->actingAs($user)
                         ->get('/user/'.$user_email.'/');

        $response->assertStatus(200);

    }

    public function test_update_doctor(){

        $user = User::factory()->create();

        $user_email = $user->email;

        $response = $this->actingAs($user)
                            ->from('/user/'.$user_email)
                            ->post('/user/'.$user_email.'/update', [
                                'name' => 'Some Name',
                            ])
                            ->assertRedirect('/user/'.$user_email);

    }

}

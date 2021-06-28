<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Customer;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DoctorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_doctor_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/doctor/register');

        $response->assertStatus(200);

    }

    public function test_doctor_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $doctor = Doctor::factory()->count(10)->create();

        $response = $this->actingAs($user)
                         ->get('/doctor');

        $response->assertStatus(200);

    }

    public function test_show_doctor_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $doctor = Doctor::factory()->create();

        $doctor_email = $doctor->email;

        $response = $this->actingAs($user)
                         ->get('/doctor/'.$doctor_email.'/');

        $response->assertStatus(200);

    }

    public function test_new_doctors_can_register()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/doctor/store', [
            'type' => 'Cyber Practice',
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone_no' => '0123456789',
            'password' => 'password',
            'password_confirmation' => 'password',
        ])
        ->assertRedirect();

    }

    public function test_update_doctor(){

        $user = User::factory()->create();

        $doctor = Doctor::factory()->create();

        $doctor_email = $doctor->email;

        $response = $this->actingAs($user)
                            ->from('/doctor/'.$doctor_email)
                            ->post('/doctor/'.$doctor_email.'/update', [
                                'type' => 'Cyber Practice',
                                'name' => 'Some Name',
                                'phone_no' => '0111234555',
                            ])
                            ->assertRedirect('/doctor/'.$doctor_email);

    }

    public function test_delete_doctor(){

        $user = User::factory()->create();

        $doctor = Doctor::factory()->create();

        $doctor_email = $doctor->email;

        $response = $this->actingAs($user)
                        ->post('/doctor/'.$doctor_email.'/delete')
                        ->assertRedirect();

    }

}

<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Doctor;
use App\Models\TimeSlot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TimeslotTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_timeslot_screen_can_be_rendered()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/timeslot');

        $response->assertStatus(200);
    }

    public function test_monday_screen_can_be_rendered()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/timeslot/Monday');

        $response->assertStatus(200);
    }

    public function test_nine_screen_can_be_rendered()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/timeslot/Monday/9:00');

        $response->assertStatus(200);
    }

    public function test_update_nine(){

        $user = User::factory()->create();

        $doctor_id = Doctor::all()->random()->id;

        $response = $this->actingAs($user)
                            ->from('/timeslot/Monday/9:00')
                            ->post('/timeslot/Monday/9:00/update', [
                                'doctor_id' => $doctor_id,
                                'day' => 'Monday',
                                'time' => '9:00:00',
                            ]);

        $response->assertRedirect('/timeslot/Monday/9:00');

    }

    public function test_delete_nine(){

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $timeslot = TimeSlot::factory()->create([
            'day' => 'Monday',
            'time' => '09:00:00',
        ]);

        $doctor_id = $timeslot->doctor_id;

        $doctor = Doctor::where('id', $doctor_id)->first();

        $doctor_email = $doctor->email;

        $day = $timeslot->day;

        $time = $timeslot->time;

        $response = $this->actingAs($user)
                        ->from('/timeslot/Monday/9:00')
                        ->post('/timeslot/Monday/9:00/'.$doctor_email.'/delete');

        $response->assertRedirect('/timeslot/Monday/9:00');

    }


}

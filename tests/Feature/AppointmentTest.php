<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Customer;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_today_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/today');

        $response->assertStatus(200);

    }

    public function test_upcoming_screen_can_be_rendered()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/upcoming');

        $response->assertStatus(200);

    }

    public function test_history_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/history');

        $response->assertStatus(200);

    }

    public function test_show_appointment_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $appointment = Appointment::where('id', $appointment_id)->first();

        $title = $appointment->title;

        $response = $this->actingAs($user)
                         ->get('/appointment/'.$appointment_id.'/'.$title);

        $response->assertStatus(200);

    }

    public function test_edit_appointment_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                         ->get('/appointment/'.$appointment_id.'/'.$title.'/edit');

        $response->assertStatus(200);

    }

    public function test_update_appointment(){

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                            ->from('/appointment/'.$appointment_id.'/'.$title.'/edit')
                            ->post('/appointment/'.$appointment_id.'/update', [
                                'type' => 'Cyber Practice',
                                'category' => 'Consultation',
                                'title' => 'fghj',
                                'description' => 'ytuii',
                            ])
                            ->assertRedirect('/appointment/'.$appointment_id.'/'.$title.'/edit');

    }

    public function test_update_outcome_appointment(){

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                            ->from('/appointment/'.$appointment_id.'/'.$title.'/edit')
                            ->post('/appointment/'.$appointment_id.'/update-outcome', [
                                'outcome' => 'Cyber Practice Cyber Practice Cyber Practice Cyber Practice Cyber Practice',
                            ])
                            ->assertRedirect('/appointment/'.$appointment_id.'/'.$title.'/edit');

        
        
    }

    public function test_reschedule_book_date_screen_can_be_rendered()
    {

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                         ->get('appointment/'.$appointment_id.'/'.$title.'/reschedule/date');

        $response->assertStatus(200);

    }

    public function test_reschedule_book_time_screen_can_be_rendered()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                         ->get('appointment/'.$appointment_id.'/'.$title.'/reschedule/date/time?type=Cyber+Practice&category=Consultation&title=sdfg&description=dfgdfgs&date=2021-05-28');

        $response->assertStatus(200);

    }

    public function test_reschedule_appointment(){

        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $title = $appointment_factory->title;

        $response = $this->actingAs($user)
                            ->post('/appointment/'.$appointment_id.'/reschedule', [
                                'type' => 'Cyber Practice',
                                'category' => 'Consultation',
                                'title' => $title,
                                'description' => 'dfgdfgs',
                                'date' => '2021-05-24',
                                'time' => '09:00:00',
                            ])
                            ->assertRedirect('/appointment/'.$appointment_id.'/'.$title.'/edit');

    }

    public function test_delete_appointment(){

        $user = User::factory()->create();

        $customer = Customer::factory()->create();

        $customer_id = $customer->id;

        $appointment_factory = Appointment::factory()->create([
            'user_id' => $customer_id,
        ]);

        $appointment_id = $appointment_factory->id;

        $response = $this->actingAs($user)
                        ->post('/appointment/'.$appointment_id.'/delete')
                        ->assertRedirect('/today');

    }
}

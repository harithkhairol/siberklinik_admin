<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TimeSlot;

class InsertSlot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        TimeSlot::insert([ 

            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '9:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '10:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '11:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '12:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '13:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '14:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '15:00:00'],
            ['doctor_id' => '0', 'day' => 'Monday', 'time' => '16:00:00']
            
        ]);

        TimeSlot::insert([ 

            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '9:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '10:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '11:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '12:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '13:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '14:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '15:00:00'],
            ['doctor_id' => '0', 'day' => 'Tuesday', 'time' => '16:00:00']
            
        ]);

        TimeSlot::insert([ 

            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '9:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '10:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '11:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '12:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '13:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '14:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '15:00:00'],
            ['doctor_id' => '0', 'day' => 'Wednesday', 'time' => '16:00:00']
            
        ]);

        TimeSlot::insert([ 

            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '9:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '10:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '11:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '12:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '13:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '14:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '15:00:00'],
            ['doctor_id' => '0', 'day' => 'Thursday', 'time' => '16:00:00']
            
        ]);

        TimeSlot::insert([ 

            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '9:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '10:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '11:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '12:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '13:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '14:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '15:00:00'],
            ['doctor_id' => '0', 'day' => 'Friday', 'time' => '16:00:00']
            
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

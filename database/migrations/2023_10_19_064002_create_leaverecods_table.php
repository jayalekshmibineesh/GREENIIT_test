<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaverecods', function (Blueprint $table) {
        $table->bigincrements('leave_request_id');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->tinyinteger('leave_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaverecods');
    }
};

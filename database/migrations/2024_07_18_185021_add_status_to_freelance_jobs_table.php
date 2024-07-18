<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToFreelanceJobsTable extends Migration
{
    public function up()
    {
        Schema::table('freelance_jobs', function (Blueprint $table) {
            $table->string('status')->default('pending'); // Add status column with a default value
        });
    }

    public function down()
    {
        Schema::table('freelance_jobs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}

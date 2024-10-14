<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // Check if columns already exist before adding them
            if (!Schema::hasColumn('students', 'address')) {
                $table->string('address')->nullable(false);
            }

            if (!Schema::hasColumn('students', 'contact')) {
                $table->string('contact')->nullable(false);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            // Drop the columns if the migration is rolled back
            if (Schema::hasColumn('students', 'address')) {
                $table->dropColumn('address');
            }

            if (Schema::hasColumn('students', 'contact')) {
                $table->dropColumn('contact');
            }
        });
    }
}



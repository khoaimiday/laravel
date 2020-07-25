<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->default('Male');
            $table->string('phone',15)->nullable();
            $table->string('address')->nullable();
            $table->string('image')->default('avatar-df.png');
            $table->tinyInteger('mark')->default(0);
            $table->tinyInteger('role')->default(0);            //0: User ; 21: Admin; 22: Super Admin
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['surname', 'dob', 'gender', 'phone', 'address', 'image', 'mark', 'role']);
            $table->dropSoftDeletes();	
        });
    }
}

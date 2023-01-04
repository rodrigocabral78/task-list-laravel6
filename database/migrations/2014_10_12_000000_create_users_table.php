<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid', 36)->unique();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_active')->default(0);
            $table->bigInteger('created_by')->nullable()->index();
            $table->bigInteger('updated_by')->nullable()->index();
            $table->timestamps();
            $table->softDeletes()->index();
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users', function (Blueprint $table) {
            $table->dropIndex(['created_at','updated_at']);
        });
    }
}

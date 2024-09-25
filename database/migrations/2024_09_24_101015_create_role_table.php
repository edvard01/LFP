<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("role_id");
            $table->timestamps();
        });

        $adminRole = new Role;
        $adminRole->role_id = 1;
        $adminRole->name = "admin";
        $adminRole->save();

        $userRole = new Role;
        $userRole->role_id = 2;
        $userRole->name = "user";
        $userRole->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('package_type_id')->constrained('package_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mailbox');
            $table->decimal('weight', 8,2);
            $table->string('merchant');
            $table->string('shipper');
            $table->string('shipper_address')->nullable();
            $table->decimal('estimated_cost');
            $table->string('shippers_tracking_no')->nullable();
            $table->string('internal_tracking_no')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('packages');
    }
}

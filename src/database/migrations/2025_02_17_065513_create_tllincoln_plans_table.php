<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tllincoln_plans', function (Blueprint $table) {
            $table->id();
            $table->string('tllincoln_hotel_id');
            $table->integer('tllincoln_plan_room_code');
            $table->tinyInteger('tllincoln_plan_room_status');
            $table->integer('tllincoln_plan_id');
            $table->string('tllincoln_plan_name');
            $table->string('tllincoln_plan_description', 2000)->nullable();
            $table->integer('tllincoln_plan_sell_time_from')->nullable();
            $table->integer('tllincoln_plan_sell_time_to')->nullable();
            $table->integer('tllincoln_plan_start_upload')->nullable();
            $table->integer('tllincoln_plan_end_upload')->nullable();
            $table->integer('tllincoln_plan_course_meal_breakfast')->nullable();
            $table->integer('tllincoln_plan_course_meal_dinner')->nullable();
            $table->integer('tllincoln_plan_course_meal_lunch')->nullable();
            $table->integer('tllincoln_plan_accept_before_days')->nullable();
            $table->integer('tllincoln_plan_accept_before_time')->nullable();
            $table->integer('tllincoln_plan_checkin_time_from')->nullable();
            $table->integer('tllincoln_plan_checkin_time_to')->nullable();
            $table->integer('tllincoln_plan_checkout_time')->nullable();
            $table->integer('tllincoln_plan_tax_type')->nullable();
            $table->string('tllincoln_plan_image1_url')->nullable();
            $table->string('tllincoln_plan_image1_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image1_updated_at')->nullable();
            $table->string('tllincoln_plan_image2_url')->nullable();
            $table->string('tllincoln_plan_image2_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image2_updated_at')->nullable();
            $table->string('tllincoln_plan_image3_url')->nullable();
            $table->string('tllincoln_plan_image3_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image3_updated_at')->nullable();
            $table->string('tllincoln_plan_limited_quantity')->nullable();
            $table->string('tllincoln_plan_cancellation_policy', 2000)->nullable();
            $table->integer('tllincoln_plan_min_person')->nullable();
            $table->integer('tllincoln_plan_max_person')->nullable();
            $table->integer('tllincoln_plan_fee_child_high_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_high_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_high_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_high_unit_option')->nullable();
            $table->integer('tllincoln_plan_fee_child_low_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_low_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_low_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_low_unit_option')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_sleep_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_sleep_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_sleep_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_sleep_option')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_meal_option')->nullable();
            $table->integer('tllincoln_plan_fee_child_sleep_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_sleep_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_sleep_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_sleep_option')->nullable();
            $table->integer('tllincoln_plan_fee_child_none_accept')->nullable();
            $table->integer('tllincoln_plan_fee_child_none_count')->nullable();
            $table->integer('tllincoln_plan_fee_child_none_value')->nullable();
            $table->integer('tllincoln_plan_fee_child_none_option')->nullable();
            $table->string('tllincoln_plan_night_stay_from')->nullable();
            $table->string('tllincoln_plan_night_stay_to')->nullable();
            $table->string('tllincoln_plan_update_type')->nullable();
            $table->bigInteger('tllincoln_plan_updated_at')->nullable();
            $table->string('tllincoln_plan_use_type')->nullable();
            $table->string('tllincoln_plan_cancel_id')->nullable();
            $table->string('tllincoln_plan_image1_add_url')->nullable();
            $table->string('tllincoln_plan_image1_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image1_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image2_add_url')->nullable();
            $table->string('tllincoln_plan_image2_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image2_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image3_add_url')->nullable();
            $table->string('tllincoln_plan_image3_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image3_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image4_add_url')->nullable();
            $table->string('tllincoln_plan_image4_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image4_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image5_add_url')->nullable();
            $table->string('tllincoln_plan_image5_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image5_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image6_add_url')->nullable();
            $table->string('tllincoln_plan_image6_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image6_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image7_add_url')->nullable();
            $table->string('tllincoln_plan_image7_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image7_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image8_add_url')->nullable();
            $table->string('tllincoln_plan_image8_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image8_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image9_add_url')->nullable();
            $table->string('tllincoln_plan_image9_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image9_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image10_add_url')->nullable();
            $table->string('tllincoln_plan_image10_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image10_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image11_add_url')->nullable();
            $table->string('tllincoln_plan_image11_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image11_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image12_add_url')->nullable();
            $table->string('tllincoln_plan_image12_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image12_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image13_add_url')->nullable();
            $table->string('tllincoln_plan_image13_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image13_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image14_add_url')->nullable();
            $table->string('tllincoln_plan_image14_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image14_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image15_add_url')->nullable();
            $table->string('tllincoln_plan_image15_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image15_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image16_add_url')->nullable();
            $table->string('tllincoln_plan_image16_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image16_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image17_add_url')->nullable();
            $table->string('tllincoln_plan_image17_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image17_add_updated_at')->nullable();
            $table->string('tllincoln_plan_image18_add_url')->nullable();
            $table->string('tllincoln_plan_image18_add_caption')->nullable();
            $table->bigInteger('tllincoln_plan_image18_add_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tllincoln_plans');
    }
};

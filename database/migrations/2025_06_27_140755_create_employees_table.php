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
        Schema::create('employees', function (Blueprint $table) {

            $table->integer('MST_SQ')->primary();
            $table->string('EMP_EMPNO', 20)->nullable();
            $table->smallInteger('TITLE_CODEID')->nullable();
            $table->string('EMP_SURNAME', 50)->nullable();
            $table->string('EMP_INITIALS', 6)->nullable();
            $table->string('EMP_FIRSTNAME', 50)->nullable();
            $table->string('EMP_ID', 16)->nullable();
            $table->smallInteger('GC_CODEID')->nullable();
            $table->smallInteger('EMP_CONTRACTOR')->nullable();
            $table->smallInteger('ERS_CODEID')->nullable();
            $table->smallInteger('OC_CODEID')->nullable();
            $table->smallInteger('DPT_CODEID');
            $table->smallInteger('GNG_CODEID')->nullable();
            $table->smallInteger('CC_CODEID')->nullable();
            $table->dateTime('EMP_ENGAGE')->nullable();
            $table->dateTime('EMP_DISCHARGE')->nullable();
            $table->smallInteger('DR_CODEID')->nullable();
            $table->smallInteger('PCAT_CODEID');
            $table->smallInteger('PRUL_CODEID')->nullable();
            $table->smallInteger('CYC_CODEID')->nullable();
            $table->smallInteger('EMP_CYCLEADY')->nullable();
            $table->smallInteger('ENV_CODEID')->nullable();
            $table->decimal('EMP_PAYRATE', 10, 2)->nullable();
            $table->smallInteger('RM_CODEID')->nullable();
            $table->smallInteger('EMP_INHERITTRG')->nullable();
            $table->smallInteger('ERCAT_CODEID')->nullable();
            $table->smallInteger('EMP_CALLOUT')->nullable();
            $table->dateTime('EMP_BIRTHDATE')->nullable();
            $table->string('EMP_TERMMSG', 30)->nullable();
            $table->smallInteger('VPT_CODEID')->nullable();
            $table->smallInteger('WL_CODEID')->nullable();
            $table->smallInteger('HRD_CODEID')->nullable();
            $table->string('EMP_UNIVERSALID', 100)->nullable();
            $table->smallInteger('EMP_ISGUARD')->nullable();
            $table->smallInteger('EMP_ISDRIVER')->nullable();
            $table->integer('Manager')->nullable();
            $table->string('EMP_PASSPORT', 16)->nullable();
            $table->smallInteger('LCAT_CODEID')->nullable();
            $table->smallInteger('LCAT2_CODEID')->nullable();
            $table->smallInteger('ACL_CODEID')->nullable();
            $table->smallInteger('EMP_TEMPACL')->nullable();
            $table->dateTime('EMP_TACLEXP')->nullable();
            $table->smallInteger('EMP_ACCLCNT')->nullable();
            $table->smallInteger('EMP_CONABS')->nullable();
            $table->smallInteger('HOLCAT_CODEID')->nullable();
            $table->smallInteger('EMP_ISSCHEDULED')->nullable();
            $table->smallInteger('HODG_CODEID')->nullable();
            $table->smallInteger('EMP_ISEMERGENCY')->nullable();
            $table->integer('EMP_HOST')->nullable();
            $table->smallInteger('EMP_ISHOST')->nullable();

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_id')->unique();
            $table->string('project_name');
            $table->string('project_type'); // type of system to be there like solar-powered, spring/gdravity-fed or borehole with handpump
            $table->string('project_type_WorS'); // to check wether the project is water supply or sanitation, the sanitation projects are only in schools and health centers
            $table->string('project_type_PorH'); // to show wether the project is public tape or house hold connected
            $table->string('project_type_WinSorWinHCF');// the show weather the project is located in community, WASH in School or WASH in heath care
            $table->string('project_status'); // to show weather the project is ongoing, completed, failed or handed over.
            $table->string('project_progressed'); // to show how much progressed out of 100%.
            $table->integer('number_planned_visits'); // we added extra, to show the planed site visits for the project.
            $table->integer('number_documented_visits'); // we added extra, to show how many site visits have been documented so far.


            //project dates
            $table->date('planned_start_date');
            $table->date('planned_completion_date'); 
 
            $table->date('actual_start_date');
            $table->date('actual_completion_date');
             
            //contacts
            $table->string('relevant_NTA'); // each name have phone and email too
            $table->string('MRRD_site_engineer');
            $table->string('CDC_representative');
            $table->string('ORD_site_engineer');

           //project location
            $table->string('zone'); // we added extra, to show the relevant zone of the project location
            $table->string('province');
            $table->string('district');
            $table->string('village');

            // project location by coordinates
            $table->string('latitude');
            $table->string('longitude');
            
            $table->integer('benefeciaries'); // number of benefeciaries(for communities number of HHs & for schools number of students and number of users for health car systems)
            
            $table->string('water_quality_tested'); // to check weather it is tested or not.
            $table->string('IP_MRRD')->nullable(); // to show the implementing partner like MRRD, PRRD, or NGO.
            $table->string('IP_PRRD')->nullable(); // to show the implementing partner like MRRD, PRRD, or NGO.
            $table->string('IP_NGO')->nullable(); // to show the implementing partner like MRRD, PRRD, or NGO.

            $table->string('OM')->default('committee established'); // to report if any committee for operation and maintainance has been established.
            $table->string('OM_trained')->default('committee recieved training');
            $table->text('remarks')->nullable(); // to report any critical point if available during site visit.

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
        Schema::dropIfExists('projects');
    }
}

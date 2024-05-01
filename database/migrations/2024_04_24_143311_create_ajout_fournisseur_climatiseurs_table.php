<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Climatiseur;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('climatiseurs', function (Blueprint $table) {

            //création de l'attribut siret (ajout dans la table climatiseurs)
            $table->char('siret',14);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('climatiseurs', function (Blueprint $table) {
            $table->dropColumn('siret');

            
        });
    }
};

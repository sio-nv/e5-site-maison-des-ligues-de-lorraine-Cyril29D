<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Evenement;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        //gagnant groupe 1
                //update Etudiant set gagnant_groupe=true where id_etudiant=121
                //on met la valeur de l'attribut "gagnant_groupe" à "true" pour l'étudiant
                //dont l'identifiant est "121"
               // Etudiant::where("id_etudiant","=",121)->update(["gagnant_groupe" => true]);

                Evenement::where("id_evenement", "=", 1)->update(["url_image" => "eve1.jpg"]);
                Evenement::where("id_evenement", "=", 2)->update(["url_image" => "eve2.png"]);
                Evenement::where("id_evenement", "=", 3)->update(["url_image" => "eve3.jpg"]);
                Evenement::where("id_evenement", "=", 4)->update(["url_image" => "eve4.jpg"]);
                Evenement::where("id_evenement", "=", 5)->update(["url_image" => "eve5.jpg"]);
                Evenement::where("id_evenement", "=", 6)->update(["url_image" => "eve6.jpg"]);
                Evenement::where("id_evenement", "=", 7)->update(["url_image" => "eve7.jpg"]);
                Evenement::where("id_evenement", "=", 8)->update(["url_image" => "eve8.jpg"]);
                Evenement::where("id_evenement", "=", 9)->update(["url_image" => "eve9.jpg"]);
                Evenement::where("id_evenement", "=", 10)->update(["url_image" => "eve10.jpg"]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Evenement::where("id_evenement", "=", 1)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 2)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 3)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 4)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 5)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 6)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 7)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 8)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 9)->update(["url_image" => NULL]);
        Evenement::where("id_evenement", "=", 10)->update(["url_image" => NULL]);
    }
};

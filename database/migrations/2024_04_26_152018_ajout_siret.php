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
        
            Climatiseur::where("id", "=", 1)->update(["siret" => "11227435344355"]);
            Climatiseur::where("id", "=", 2)->update(["siret" => "11227435344355"]);
            Climatiseur::where("id", "=", 3)->update(["siret" => "11227435344355"]);
            Climatiseur::where("id", "=", 4)->update(["siret" => "11227435344355"]);
            Climatiseur::where("id", "=", 5)->update(["siret" => "11339481784751"]);
            Climatiseur::where("id", "=", 6)->update(["siret" => "11339481784751"]);
            Climatiseur::where("id", "=", 7)->update(["siret" => "11339481784751"]);
            Climatiseur::where("id", "=", 8)->update(["siret" => "11339481784751"]);
            Climatiseur::where("id", "=", 9)->update(["siret" => "24113495658294"]);
            Climatiseur::where("id", "=", 10)->update(["siret" => "24113495658294"]);
            Climatiseur::where("id", "=", 11)->update(["siret" => "24113495658294"]);
            Climatiseur::where("id", "=", 12)->update(["siret" => "24113495658294"]);


            $table->foreign('siret')->references('siret')->on('societes');
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
        Climatiseur::where("id", "=", 1)->update(["siret" => "11227435344355"]);
        Climatiseur::where("id", "=", 2)->update(["siret" => "11227435344355"]);
        Climatiseur::where("id", "=", 3)->update(["siret" => "11227435344355"]);
        Climatiseur::where("id", "=", 4)->update(["siret" => "11227435344355"]);
        Climatiseur::where("id", "=", 5)->update(["siret" => "11339481784751"]);
        Climatiseur::where("id", "=", 6)->update(["siret" => "11339481784751"]);
        Climatiseur::where("id", "=", 7)->update(["siret" => "11339481784751"]);
        Climatiseur::where("id", "=", 8)->update(["siret" => "11339481784751"]);
        Climatiseur::where("id", "=", 9)->update(["siret" => "24113495658294"]);
        Climatiseur::where("id", "=", 10)->update(["siret" => "24113495658294"]);
        Climatiseur::where("id", "=", 11)->update(["siret" => "24113495658294"]);
        Climatiseur::where("id", "=", 12)->update(["siret" => "24113495658294"]);
    });
}
};

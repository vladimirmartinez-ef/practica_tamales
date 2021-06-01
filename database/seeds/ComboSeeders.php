<?php

use Illuminate\Database\Seeder;
use App\Combo;

class ComboSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $combo = new Combo();
        $combo->nombre = "Fiesta frijoles";
        $combo->descripcion = "Consiste en 3 ticucos y 3 tamales pisques con crema y un vaso de cafe";
        $combo->precio = 5.20;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Tamal clasico ";
        $combo->descripcion = "Consiste en 3 tamales de pollo, 2 tamales de carne con curtido y salsa y un vaso de horchata";
        $combo->precio = 6.99;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Verde dinamico";
        $combo->descripcion = "Consiste en 2 tamales de elote, 2 tamales pisques y 2 ticucos con crema y un vaso de chocolate";
        $combo->precio = 3.50;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Tamales mixtos";
        $combo->descripcion = "Consiste en 2 tamales de pollo, 2 tamales de carne y 2 tamales de elote con una horchata";
        $combo->precio = 5.99;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Ticucos";
        $combo->descripcion = "6 ticucos con crema y un cafe";
        $combo->precio = 3.99;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Mega Pollo";
        $combo->descripcion = "Consiste en 4 tamales grandes de pechuga de pollo, 6 panes, salsa picante y vaso de cafe";
        $combo->precio = 5.99;
        $combo->save();

        $combo = new Combo();
        $combo->nombre = "Dulce tamal";
        $combo->descripcion = "Consiste en 3 tamalitos de elote, con crema y vaso de cafe";
        $combo->precio = 2.60;
        $combo->save();

        $combo = new Combo();
        $combo->nombre = "Pollo en tamales";
        $combo->descripcion = "Consiste en 3 tamales de pollo, 4 panes, salsa picante y vaso de chocolate";
        $combo->precio = 3.99;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Mega Pisque";
        $combo->descripcion = "Consiste en 6 tamales pisque, salsa picante y vaso de chocolate";
        $combo->precio = 5.99;
        $combo->save();


        $combo = new Combo();
        $combo->nombre = "Titulo dulce";
        $combo->descripcion = "Consiste en 6 tamalitos de elote con crema y vaso de chocolate";
        $combo->precio = 6.50;
        $combo->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            //1
            [
                'name' => "Robe à fines brides à lacets",
                'price' => 1500,
                'old_price' => 2000,
                'stock' => 70,
                'description' => "Les meilleurs Robe à fines mariées à lacets",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //2
            [
                'name' => "Homme Pantalon de costume à carreaux en jacquard à poche (sans ceinture)",
                'price' => 1064,
                'old_price' => 1250,
                'stock' => 70,
                'description' => "Le meilleur Pantalon pour Homme de costume",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //3

            [
                'name' => "Bébé à imprimé ours à bordure contrastante Polo & Short",
                'price' => 304,
                'old_price' => 512,
                'stock' => 70,
                'description' => "Les meilleurs Bébé à imprimé ours à bordure contrastante Polo & Short",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //4

            [
                'name' => "Petite fille Robe à applique fleurie à col claudine à volants",
                'price' => 392,
                'old_price' => 450,
                'stock' => 60,
                'description' => "Les meilleurs Robe pour Petite fille à applique fleurie à col claudine à volants",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //5

            [
                'name' => "Veste courte à liseré contrastant",
                'price' => 150,
                'old_price' => 200,
                'stock' => 170,
                'description' => "Les meilleurs Veste courte à liseré contrastant",
                'status' => false,
                'user'=>1,
                'category' => 1
            ],

            //6

            [
                'name' => "Veste à franges ouvert en suédine",
                'price' => 1700,
                'old_price' => 2100,
                'stock' => 200,
                'description' => "Les meilleurs Veste à franges ouvert en suédine",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //7

            [
                'name' => "shorts",
                'price' => 500,
                'old_price' => 700,
                'stock' => 370,
                'description' => "Les meilleurs shorts",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //8

            [
                'name' => "Frenchy Veste à cordon zippé",
                'price' => 798,
                'old_price' => 900,
                'stock' => 70,
                'description' => "Les meilleurs Frenchy Veste à cordon zippé",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //9

            [
                'name' => "T-shirt à franges asymétrique",
                'price' => 798,
                'old_price' => 900,
                'stock' => 70,
                'description' => "Le meilleur T-shirt à franges asymétrique",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //10
            [
                'name' => "Homme Chemise lettre & à imprimé palmier",
                'price' => 528,
                'old_price' => 600,
                'stock' => 170,
                'description' => "Le meilleur Chemise Homme lettre & à imprimé palmier",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //11
            [
                'name' => "Homme Polo à lettres",
                'price' => 719,
                'old_price' => 800,
                'stock' => 170,
                'description' => "Le meilleur Homme Polo à lettres",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //12
            [
                'name' => "Tenue famille Noire (maman et fille)",
                'price' => 1300,
                'old_price' => 1800,
                'stock' => 170,
                'description' => "Le meilleur Tenue famille Noire (maman et fille)",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //13
            [
                'name' => "T-shirt Famille (manan Papa Fille)",
                'price' => 1300,
                'old_price' => 1800,
                'stock' => 170,
                'description' => "Le meilleur T-shirt Famille (manan Papa Fille)",
                'status' => true,
                'user'=>1,
                'category' => 1
            ],

            //14
            [
                'name' => "1 pièce Sac d'entraînement à lettres à double poignée",
                'price' => 570,
                'old_price' => 980,
                'stock' => 240,
                'description' => "Le meilleur pièce Sac d'entraînement",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],

           //15
            [
                'name' => "Veste courte à motif étoile bicolore zippé",
                'price' => 1800,
                'old_price' => 1300,
                'stock' => 240,
                'description' => "Les meilleurs sport with shopMery",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],
           //16
            [
                'name' => "Équipement de gymnastique à domicile Bluefin Fitness",
                'price' => 2300,
                'old_price' => 3000,
                'stock' => 240,
                'description' => "Le meilleur Équipement de gymnastique à domicile Bluefin Fitness ",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],
           //17
            [
                'name' => "Ceinture Fanny Pack: Coureur Marathon Jogging Ceinture Sport Entraînement Exercice Fitness Support Téléphone Ceinture pour Hommes Femmes Jogger Ceinture Mince",
                'price' => 206,
                'old_price' => 300,
                'stock' => 200,
                'description' => "Ceinture Fanny Pack: Coureur Marathon Jogging Ceinture Sport Entraînement Exercice Fitness Support Téléphone Ceinture pour Hommes Femmes Jogger Ceinture Mince",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],

           //18
            [
                'name' => "Tapis de course ",
                'price' => 3296,
                'old_price' => 4500,
                'stock' => 200,
                'description' => "Meilleur Tapis de course pour votre santé ",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],

           //19
            [
                'name' => "Evercute Racerback Soutiens-gorge de sport rembourrés Y Racer Back Cropped Bras pour Yoga Workout Fitness Low Impact ",
                'price' => 403,
                'old_price' => 500,
                'stock' => 200,
                'description' => "Meilleur Soutiens-gorge pour un sport agréable",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],
           //20
            [
                'name' => "Sunny Health & Fitness Mini Stepper Stair Stepper Équipement d'exercice avec bandes de résistance ",
                'price' => 726,
                'old_price' => 850,
                'stock' => 200,
                'description' => "bonne sant2 c'est-a-dire bonne otile de sport avec Sunny Health & Fitness Mini Stepper Stair Stepper Équipement d'exercice avec bandes de résistance",
                'status' => true,
                'user'=>1,
                'category' => 5
            ],

            //21
            [
                'name' => "cover table",
                'price' => 134,
                'old_price' => 160,
                'stock' => 200,
                'description' => "cover table ",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //22
            [
                'name' => "MAISON ARTS Chaise de jardin",
                'price' => 1034,
                'old_price' => 1600,
                'stock' => 200,
                'description' => "MAISON ARTS Chaise de jardin rembourrée Zero Gravity Chaise longue anti-gravité inclinable réglable avec oreiller et porte-gobelet Chaise de camping d'extérieur pour piscine, arrière-cour, plage, support 136 kg, gris",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //23
            [
                'name' => "Zippity Outdoor Products ZP19001 Clôture en vinyle No Dig Madison, Blanc, 30 x 56,5 (1 boîte, 2 panneaux), 1 x paquet de 2",
                'price' => 100,
                'old_price' => 150,
                'stock' => 200,
                'description' => "Zippity Outdoor Products ZP19001 Clôture en vinyle No Dig Madison, Blanc, 30 x 56,5 (1 boîte, 2 panneaux), 1 x paquet de 2",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //24
            [
                'name' => "Ensemble d'outils de jardin 83 pièces",
                'price' => 279,
                'old_price' => 350,
                'stock' => 200,
                'description' => "Ensemble d'outils de jardin 83 pièces, ensemble d'outils succulents inclus, outils de jardinage en aluminium robustes pour le jardinage, poignée ergonomique antidérapante, sac fourre-tout de rangement durable, outils cadeaux pour hommes et femmes",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //25
            [
                'name' => " Chemin de table fleur rose 72 pouces",
                'price' => 100,
                'old_price' => 150,
                'stock' => 200,
                'description' => "Chemin de table à fleurs roses 72 pouces, décor de chemin de table printemps été pour salle à manger, cuisine, maison, ferme, décorations de chemin de table rustiques pour mariage, fête de vacances, idées de cadeaux de pendaison de crémaillère",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //26
            [
                'name' => "18 lb galets blancs taille 1/2 ",
                'price' => 100,
                'old_price' => 150,
                'stock' => 200,
                'description' => "
                Anothera Sac en vrac de 18 lb galets blancs taille 1/2 gravier d aquarium extérieur jardin pavage plante pierres décoratives",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],
            //27
            [
                'name' => "Lampes Solaires Suspendues",
                'price' => 279,
                'old_price' => 320,
                'stock' => 200,
                'description' => "Lampes Solaires Suspendues, Tomshine Lanterne Solaire LED Lampes de Jardin Marocaines Lampe en Métal Imperméable pour Extérieur, Patio, Porche Décoration Suspendue",
                'status' => true,
                'user'=>1,
                'category' => 3
            ],



            //28
            [
                'name' => "nettoyage en profondeur , hydratant charbon Masque de protection Masque de protection",
                'price' => 67,
                'old_price' => 100,
                'stock' => 200,
                'description' => "nettoyage en profondeur , hydratant charbon Masque de protection Masque de protection",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],


            //29
            [
                'name' => "50 pièces /set portable jetable Savon minimaliste Savon Drap de lit parfumé petit pour domicile et voyage",
                'price' => 63,
                'old_price' => 97,
                'stock' => 200,
                'description' => "50 pièces/set portable jetable Savon minimaliste Savon Drap de lit parfumé petit pour domicile et voyage",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],

            //30
            [
                'name' => "longue tenue hydratant (sans transfert) mat Brillant à lèvres - Coupe",
                'price' => 544,
                'old_price' => 700,
                'stock' => 200,
                'description' => "longue tenue hydratant (sans transfert) mat Brillant à lèvres - Coupe",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],

            //34
            [
                'name' => "24 pièces Set de pinceaux à maquillage & 4 pièces Bouffée de maquillage",
                'price' => 317,
                'old_price' => 500,
                'stock' => 200,
                'description' => "24 pièces Set de pinceaux à maquillage & 4 pièces Bouffée de maquillage",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],

            //31
            [
                'name' => "4 pièces Coloration capillaire Brosse & Bol & jetable Gant Ensemble",
                'price' => 106,
                'old_price' => 190,
                'stock' => 200,
                'description' => "4 pièces Coloration capillaire Brosse & Bol & jetable Gant Ensemble",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],

            //32
            [
                'name' => "4 pièces Coloration capillaire Brosse & Bol & jetable Gant Ensemble",
                'price' => 66,
                'old_price' => 90,
                'stock' => 200,
                'description' => "4 pièces Coloration capillaire Brosse & Bol & jetable Gant Ensemble",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],


            //33
            [
                'name' => "Palette de fard à paupières (sans transfert) éclaircissant pigmenté",
                'price' => 1036,
                'old_price' => 1700,
                'stock' => 200,
                'description' => "Palette de fard à paupières (sans transfert) éclaircissant pigmenté",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],

            //34
            [
                'name' => "10 pièces Set de pinceaux à maquillage",
                'price' => 1036,
                'old_price' => 1700,
                'stock' => 200,
                'description' => "10 pièces Set de pinceaux à maquillage",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],
            //35
            [
                'name' => "24 pièces Faux ongles long amande à rayures & 1 feuille ruban adhésif & 1 pièce lime à ongles",
                'price' => 54,
                'old_price' => 69,
                'stock' => 200,
                'description' => "24 pièces Faux ongles long amande à rayures & 1 feuille ruban adhésif & 1 pièce lime à ongles",
                'status' => true,
                'user'=>1,
                'category' => 4
            ],


            //36
            [
                'name' => "1 pièce Jouet teaser pour chat ressort design à détail d'abeille aléatoire pour chat pour jouer",
                'price' => 54,
                'old_price' => 69,
                'stock' => 200,
                'description' => "1 pièce Jouet teaser pour chat ressort design à détail d'abeille aléatoire pour chat pour jouer",
                'status' => true,
                'user'=>1,
                'category' => 6
            ],

            //37
            [
                'name' => "1 pièce Jouet bulle pop chat pour chat pour",
                'price' => 98,
                'old_price' => 107,
                'stock' => 200,
                'description' => "1 pièce Jouet bulle pop chat pour chat pour",
                'status' => true,
                'user'=>1,
                'category' => 6
            ],

            //38
            [
                'name' => "1 pièce Jouet teaser pour chat dessin animé design main aléatoire",
                'price' => 36,
                'old_price' => 45,
                'stock' => 200,
                'description' => "1 pièce Jouet teaser pour chat dessin animé design main aléatoire",
                'status' => true,
                'user'=>1,
                'category' => 6
            ],

            //39
            [
                'name' => "1 pièce Jouet teaser pour chat design cactus pour chat pour jouer",
                'price' => 100,
                'old_price' => 120,
                'stock' => 200,
                'description' => "1 pièce Jouet teaser pour chat design cactus pour chat pour jouer",
                'status' => true,
                'user'=>1,
                'category' => 6
            ],


            //40
            [
                'name' => "1 pièce créatif multifonctionnel Bijou design livre Boîte de rangement de bijoux pour domicile",
                'price' => 883,
                'old_price' => 1000,
                'stock' => 200,
                'description' => "1 pièce créatif multifonctionnel Bijou design livre Boîte de rangement de bijoux pour domicile",
                'status' => true,
                'user'=>1,
                'category' => 7
            ],

            //41
            [
                'name' => "1 pièce transparent décoratif simple à usages multiples bureau Serre-livres pour Livre stockage",
                'price' => 599,
                'old_price' => 700,
                'stock' => 200,
                'description' => "1 pièce transparent décoratif simple à usages multiples bureau Serre-livres pour Livre stockage",
                'status' => true,
                'user'=>1,
                'category' => 7
            ],



           //42
            [
                'name' => "1 pièce Montre intelligente surveillance de la fréquence cardiaque carré & 1 pièce Bracelet de montre",
                'price' => 691,
                'old_price' => 800,
                'stock' => 240,
                'description' => "La meilleur pièce Montre intelligente ",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],

           //43
            [
                'name' => "clavier et souris sans fil",
                'price' => 521,
                'old_price' => 700,
                'stock' => 240,
                'description' => "clavier et souris sans fil pour Windows, sans fil 2,4 GHz, souris compacte, 8 touches multimédia et raccourcis, pour PC, ordinateur portable - Noir ",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],


           //44
            [
                'name' => "Balance Electronique Page Profi Noir 15 Kg / 1 g",
                'price' => 691,
                'old_price' => 800,
                'stock' => 240,
                'description' => "Balance Electronique Page Profi Noir 15 Kg / 1 g",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],

           //45
            [
                'name' => " iPhone Charger",
                'price' => 126,
                'old_price' => 230,
                'stock' => 240,
                'description' => "Lot de 3 chargeurs iPhone 1,8 m [certifié Apple MFi] Long cordon de charge Apple, câble Lightning vers USB d'origine 1,8 m, câble de charge iPhone 1,8 m pour iPhone 13/12/11/Pro/11/XS/MAX/XR/8/7/6/ 5/SE, iPad",
                'status' => true,
                'user'=>1,
                'category' => 2
            ],
                






            




        ]);
    }
}

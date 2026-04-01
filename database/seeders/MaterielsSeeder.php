<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterielsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiels = [
            [
                "name" => "Argent 925",
                "description" => "Métal le plus utilisé pour les chaînes et bijoux amazighs, apprécié pour sa durabilité et sa couleur brillante."
            ],
            [
                "name" => "Filigrane en Argent",
                "description" => "Fils d’argent torsadés permettant de créer des chaînes délicates et des motifs complexes."
            ],
            [
                "name" => "Bronze Amazigh",
                "description" => "Alliage traditionnel utilisé pour les chaînes anciennes et les ornements tribaux."
            ],
            [
                "name" => "Perles Tazerzit",
                "description" => "Perles berbères traditionnelles en métal décoré, souvent utilisées dans les colliers et chaînes."
            ],
            [
                "name" => "Corail Rouge",
                "description" => "Matériau précieux intégré dans les chaînes et amulettes pour ses valeurs symboliques."
            ],
            [
                "name" => "Email Coloré",
                "description" => "Émail artisanal appliqué sur le métal pour créer des motifs décoratifs colorés."
            ],
            [
                "name" => "Coquillages Naturels",
                "description" => "Utilisés dans les chaînes traditionnelles du Sud marocain comme symbole de fertilité et de protection."
            ],
            [
                "name" => "Cuir Tressé",
                "description" => "Matériau souvent combiné à des pièces métalliques dans les chaînes rurales."
            ],
            [
                "name" => "Ambre Berbère (Résine)",
                "description" => "Résine artisanale imitant l’ambre, utilisée dans les colliers amazighs légers et colorés."
            ],
            [
                "name" => "Or 18 Carats",
                "description" => "Moins courant que l’argent, mais utilisé dans certaines chaînes citadines plus luxueuses."
            ],
            [
                "name" => "Perles de Verre de Fès",
                "description" => "Perles artisanales colorées fabriquées dans les souks, idéales pour enrichir des chaînes décoratives."
            ],
            [
                "name" => "Fer Forgé Fin",
                "description" => "Employé dans certains bijoux ruraux pour créer des chaînes robustes et décoratives."
            ],
            [
                "name" => "Cuivre Rouge",
                "description" => "Métal traditionnel utilisé pour des chaînes simples ou pour la base de pièces émaillées."
            ],
            [
                "name" => "Nacre Naturelle",
                "description" => "Décoration naturelle ajoutée aux chaînes pour apporter brillance et motifs irisés."
            ],
            [
                "name" => "Pierres Semi-Précieuses",
                "description" => "Agate, onyx, turquoise et autres pierres souvent intégrées aux chaînes et talismans amazighs."
            ]
        ];

        foreach($materiels as $materiel){
            DB::table("materiels")->insert($materiel);
        }
    }
}

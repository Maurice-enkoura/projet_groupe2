<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Plat;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        /* =======================
         * UTILISATEURS
         * ======================= */

        $admin = User::create([
            'name' => 'Admin Restaurant',
            'email' => 'admin@restaurant.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'telephone' => '77 123 45 67',
            'adresse' => 'Dakar Plateau'
        ]);

        $client = User::create([
            'name' => 'Moussa Ndiaye',
            'email' => 'client@test.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'telephone' => '78 456 78 90',
            'adresse' => 'Parcelles Assainies'
        ]);

        /* =======================
         * MENUS
         * ======================= */

        $menuJour = Menu::create([
            'nom' => 'Menu du Jour',
            'description' => 'Plat sénégalais + Boisson',
            'prix' => 6500,
            'image' => 'images/menus/menu-jour.jpg',
            'est_disponible' => true
        ]);

        $menuVeg = Menu::create([
            'nom' => 'Menu Végétarien',
            'description' => 'Cuisine saine 100% végétale',
            'prix' => 5500,
            'image' => 'images/menus/menu-vegetarien.jpg',
            'est_disponible' => true
        ]);

        $menuPremium = Menu::create([
            'nom' => 'Menu Premium',
            'description' => 'Entrée + Plat + Dessert gastronomique',
            'prix' => 8500,
            'image' => 'images/menus/menu-premium.jpg',
            'est_disponible' => true
        ]);

        /* =======================
         * PLATS
         * ======================= */

        $plats = [
            // MENU DU JOUR
            [
                'nom' => 'Poulet Braisé',
                'description' => 'Poulet braisé au feu de bois, marinade maison',
                'prix' => 3500,
                'menu_id' => $menuJour->id,
                'stock' => 40,
                'categorie' => 'principal',
                'image' => 'images/plats/poulet-braise.jpg'
            ],
            [
                'nom' => 'Salade César',
                'description' => 'Salade fraîche, poulet grillé, sauce césar',
                'prix' => 1800,
                'menu_id' => $menuJour->id,
                'stock' => 25,
                'categorie' => 'entree',
                'image' => 'images/plats/salade-cesar.jpg'
            ],

            // MENU VÉGÉTARIEN
            [
                'nom' => 'Riz aux Légumes',
                'description' => 'Riz parfumé, légumes sautés bio',
                'prix' => 2800,
                'menu_id' => $menuVeg->id,
                'stock' => 30,
                'categorie' => 'principal',
                'image' => 'images/plats/riz-legumes.jpg'
            ],
            [
                'nom' => 'Soupe de Légumes',
                'description' => 'Soupe chaude, carottes, pommes de terre, poireaux',
                'prix' => 1500,
                'menu_id' => $menuVeg->id,
                'stock' => 20,
                'categorie' => 'entree',
                'image' => 'images/plats/soupe-legumes.jpg'
            ],

            // MENU PREMIUM
            [
                'nom' => 'Filet de Bœuf Grillé',
                'description' => 'Filet tendre, sauce au poivre',
                'prix' => 4200,
                'menu_id' => $menuPremium->id,
                'stock' => 15,
                'categorie' => 'principal',
                'image' => 'images/plats/filet-boeuf.jpg'
            ],
            [
                'nom' => 'Gâteau au Chocolat',
                'description' => 'Dessert fondant au chocolat noir',
                'prix' => 1800,
                'menu_id' => $menuPremium->id,
                'stock' => 20,
                'categorie' => 'dessert',
                'image' => 'images/plats/gateau-chocolat.jpg'
            ],
        ];

        foreach ($plats as $platData) {
            $platData['est_disponible'] = true;
            Plat::create($platData);
        }

        /* =======================
         * COMMANDES (RÉALISTES)
         * ======================= */

        $plats = Plat::all();

        foreach ($plats as $plat) {
            $quantite = rand(1, 3);

            Commande::create([
                'user_id' => $client->id,
                'plat_id' => $plat->id,
                'quantite' => $quantite,
                'prix_unitaire' => $plat->prix,
                'total' => $plat->prix * $quantite,
                'statut' => 'en_attente',
                'notes' => 'Commande passée via le site',
                'date_commande' => now()
            ]);
        }
    }
}

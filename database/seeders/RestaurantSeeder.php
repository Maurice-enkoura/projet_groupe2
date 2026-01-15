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
            'telephone' => '0123456789',
            'adresse' => 'Dakar Plateau'
        ]);

        $client = User::create([
            'name' => 'Client Test',
            'email' => 'client@test.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'telephone' => '0987654321',
            'adresse' => 'Parcelles Assainies'
        ]);

        /* =======================
         * MENUS
         * ======================= */

        $menuJour = Menu::create([
            'nom' => 'Menu du Jour',
            'description' => 'Plat + Boisson',
            'prix' => 6500,
            'est_disponible' => true
        ]);

        $menuVeg = Menu::create([
            'nom' => 'Menu Végétarien',
            'description' => '100% légumes frais',
            'prix' => 5500,
            'est_disponible' => true
        ]);

        $menuPremium = Menu::create([
            'nom' => 'Menu Premium',
            'description' => 'Entrée + Plat + Dessert',
            'prix' => 8500,
            'est_disponible' => true
        ]);

        /* =======================
         * PLATS
         * ======================= */

        $plats = [
            // Menu du Jour
            ['nom' => 'Poulet Braisé', 'description' => 'Poulet braisé à la sénégalaise', 'prix' => 3500, 'menu_id' => $menuJour->id, 'stock' => 30, 'categorie' => 'principal'],
            ['nom' => 'Salade César', 'description' => 'Salade fraîche avec poulet grillé', 'prix' => 1800, 'menu_id' => $menuJour->id, 'stock' => 20, 'categorie' => 'entree'],

            // Menu Végétarien
            ['nom' => 'Riz aux légumes', 'description' => 'Riz parfumé aux légumes sautés', 'prix' => 2800, 'menu_id' => $menuVeg->id, 'stock' => 25, 'categorie' => 'principal'],
            ['nom' => 'Soupe de légumes', 'description' => 'Soupe chaude 100% naturelle', 'prix' => 1500, 'menu_id' => $menuVeg->id, 'stock' => 15, 'categorie' => 'entree'],

            // Menu Premium
            ['nom' => 'Filet de bœuf grillé', 'description' => 'Filet de bœuf tendre et juteux', 'prix' => 4200, 'menu_id' => $menuPremium->id, 'stock' => 15, 'categorie' => 'principal'],
            ['nom' => 'Gâteau au chocolat', 'description' => 'Dessert maison au chocolat', 'prix' => 1800, 'menu_id' => $menuPremium->id, 'stock' => 20, 'categorie' => 'dessert'],
        ];

        foreach ($plats as &$platData) {
            $platData['est_disponible'] = true;
            $platData['created_at'] = now();
            $platData['updated_at'] = now();
            Plat::create($platData);
        }

        /* =======================
         * COMMANDES – TEST
         * ======================= */

        $allPlats = Plat::all();

        // On crée quelques commandes pour le client
        foreach ($allPlats as $plat) {
            Commande::create([
                'user_id' => $client->id,
                'plat_id' => $plat->id,
                'quantite' => rand(1, 3),
                'prix_unitaire' => $plat->prix,
                'total' => $plat->prix * rand(1, 3),
                'statut' => 'en_attente',
                'notes' => 'Commande de test',
                'date_commande' => now()
            ]);
        }

        // Et quelques commandes pour l'admin (si tu veux tester dashboard admin)
        foreach ($allPlats as $plat) {
            Commande::create([
                'user_id' => $admin->id,
                'plat_id' => $plat->id,
                'quantite' => rand(1, 2),
                'prix_unitaire' => $plat->prix,
                'total' => $plat->prix * rand(1, 2),
                'statut' => 'confirmee',
                'notes' => 'Commande de test admin',
                'date_commande' => now()
            ]);
        }
    }
}

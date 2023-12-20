<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(BestSellerReportsTableSeeder::class);
        $this->call(AppSettingsTableSeeder::class);
        $this->call(AppThemesTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CartReportsTableSeeder::class);
        $this->call(CartReturnsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EarnsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(OverdueBalancesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductBranchesTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(PurchasesListsTableSeeder::class);
        $this->call(RepresentativesTableSeeder::class);
        $this->call(RepresentativeOperationsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(SuppliersOperationsTableSeeder::class);
        $this->call(TempCartsTableSeeder::class);
        $this->call(UserActivityReportsTableSeeder::class);
    }
}

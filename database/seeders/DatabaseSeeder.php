<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            PermissionTableSeeder::class,
            PermissionRoleSeeder::class,
            StoreTableSeeder::class,
            SeoTableSeeder::class,
            AreasTableSeeder::class,
            UsersTableSeeder::class,
            CompanyTableSeeder::class,
            GenresTableSeeder::class,
            StickingpointCatsTableSeeder::class,
            StickingPointsTableSeeder::class
        ]);
        $this->call(AreaCompanyTableSeeder::class);
        $this->call(CompanyGenreTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(StickingPointsTableSeeder::class);
        $this->call(CompanyPrefTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PrefdatasTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(AreasTableSeeder::class);
    }
}

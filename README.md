- Creare la tabella php artisan make:migration create_comics_table
- lanciamo imigration php artisan migrate
- creaimo lo seeder php artisan make:seeder ComicsTableSeed
er
- ora creiamo il model php artisan  make:model Comic
- importo comics sul seeder
- testiamo lo seeder php artisan db:seed --class=ComicsTableSeeder

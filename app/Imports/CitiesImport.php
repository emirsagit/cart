<?php

namespace App\Imports;

use App\Models\City;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class CitiesImport implements ToCollection, WithProgressBar
{
    use Importable;

    public function collection(Collection $rows)
    {
        //destroy districts and neighborhoods record. city table has relation with address records. Becouse of that we cannot delete city table. 
        $this->truncate();

        $rows->groupBy([0, 1, 3])->splice(1)->map(function ($item, $city) {
            $city = City::firstOrCreate([
                'name' => trim($city)
            ]);

            $item->map(function ($item, $district) use ($city) {
                $district = $city->districts()->create([
                    'name' => trim($district)
                ]);
                $item->map(function ($item, $neighborhood) use ($district) {
                    $item->map(function ($array) use ($district, $neighborhood) {
                        $district->neighborhoods()->create([
                            'name' => trim($neighborhood),
                            'postal_code' => $array[4]
                        ]);
                    });
                });
            });
        });
    }

    protected function truncate()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('neighborhoods')->truncate();
        DB::table('districts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Format;


class FormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formats = [
          'CD',
          'DIGITALE',
          'STREAMING',
          'VINILE'
        ];

        foreach ($formats as $format) {
          $new_format = new Format();
          $new_format->format = $format;
          $new_format->save();
        }
    }
}

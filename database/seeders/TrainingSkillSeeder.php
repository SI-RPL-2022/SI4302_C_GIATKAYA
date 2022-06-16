<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $training = [
            [
                'name_training' => 'HR Recruitment - Batch 12',
                'metode_training' => 'Video Materi',
                'jenis_training' => 'Personal Skill',
                'detail_pelatihan' => 'Lorem ipsum',
                'trainer' => 'Akusara Production Event',
                'is_admin' => '1',
            ],
            [
                'name_training' => 'HR Recruitment - Batch 13',
                'metode_training' => 'Artikel Modul',
                'jenis_training' => 'Personal Skill',
                'detail_pelatihan' => 'Lorem ipsum',
                'trainer' => 'Akusara Production Event',
                'is_admin' => '1',
            ],
            [
                'name_training' => 'HR Recruitment - Batch 14',
                'metode_training' => 'Artikel Modul',
                'jenis_training' => 'Personal Skill',
                'detail_pelatihan' => 'Lorem ipsum',
                'trainer' => 'Sara Production Event',
                'is_admin' => '1',
            ],
        ];

        foreach ($training as $key => $value){
            Training::create($value);
        }
    }
}

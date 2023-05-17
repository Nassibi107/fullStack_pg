<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\stagiaire;

class stagiaireTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stagiaire::create([
            'nom' => 'Allaoui',
            'prenom' => 'Sarah',
            'email' => 'allaoui@gmail.com',
            'photo' => 'images\img1.jpg',
            'cv' => 'docs\cv1.pdf',
            'ville' => 'Casa',
            'datenaissance' => '2000-12-22',
            'filiere' => 'Fullstack'
        ]);
        Stagiaire::create([
            'nom' => 'Dahmani',
            'prenom' => 'Ahmed',
            'email' => 'dahmani@gmail.com',
            'photo' => 'images\img2.jpg',
            'cv' => 'docs\cv2.pdf',
            'ville' => 'Khouribga',
            'datenaissance' => '1999-12-22',
            'filiere' => 'Fullstack'
        ]);
        Stagiaire::create([
            'nom' => 'Fahmaoui',
            'prenom' => 'Rachid',
            'email' => 'fahmaoui@gmail.com',
            'photo' => 'images\img3.jpg',
            'cv' => 'docs\cv3.pdf',
            'ville' => 'Khouribga',
            'datenaissance' => '2000-12-22',
            'filiere' => 'Fullstack'
        ]);
        Stagiaire::create([
            'nom' => 'Dani',
            'prenom' => 'Kamal',
            'email' => 'dani@gmail.com',
            'photo' => 'images\img4.jpg',
            'cv' => 'docs\cv4.pdf',
            'ville' => 'Casa',
            'datenaissance' => '2000-12-22',
            'filiere' => 'Mobile'
        ]);
    }
}

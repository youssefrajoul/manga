<?php

namespace App\Models;

use PDO; // sans cela, PDO serait interprété comme \App\Models\PDO
use \Illuminate\Support\Facades\DB;

class MangaList
{

    public static function getMangaList()
    {
        
        $pdo = DB::getPdo();
        $series = $pdo->query("select id, titre, auteur, nombre_volumes, date_premiere_parution, couverture, serie_finie
                                    from series")->fetchAll();
        return $series;
    }

    public static function getId(){
        $ids = DB::select("select id from todos");
        return $ids;
    }

    public static function getDescription($id){
        $description = DB::select("select description from todos where id = ?", [$id]);
        return $description[0]->description;
    }

    public static function addTask($task, $description){
        DB::insert("INSERT INTO todos (name, description) VALUES (?, ?)",[$task, $description]);
    }
}
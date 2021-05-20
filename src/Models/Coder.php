<?php

namespace App\Models;

use App\Database;

class Coder
{
    private ?int $id;
    private string $nombre;
    private ?string $fecha;
    private string $tema;
    private $database;
    private $table = "coders";

    public function __construct(string $nombre = '',string $tema = '', int $id = null, string $fecha = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->tema = $tema;

        if(!$this->database) {
            $this->database = new Database();
        }
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->nombre;
    }

    public function getDate()
    {
        return $this->fecha;
    }

    public function getTema()
    {
        return $this->tema;
    }
    public function rename($nombre, $tema)
    {
        $this->nombre=$nombre;
        $this->tema=$tema;
    }
    public function save(): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`nombre`, `tema`) VALUES ('$this->nombre', '$this->tema');");
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $codersArray = $query->fetchAll();
        $coderList = [];
        foreach ($codersArray as $coder) {
            $coderItem = new Coder($coder["nombre"], $coder["tema"], $coder["id"], $coder["fecha"]);
            array_push($coderList, $coderItem);
        }

        return $coderList;
    }

    public function deleteById($id)
    {
        $query = $this->database->mysql->query("DELETE FROM `coders` WHERE `coders`.`id` = {$id}");
    }

    public function delete()
    {
        $query = $this->database->mysql->query("DELETE FROM `coders` WHERE `coders`.`id` = {$this->id}");
    }

    public static function findById($id): Coder
    {
        $database = new Database();
        $query = $database->mysql->query("SELECT * FROM `coders` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Coder($result[0]["nombre"], $result[0]["tema"], $result[0]["id"], $result[0]["fecha"]);
    }

    public function UpdateById($data, $id)
    {
        $this->database->mysql->query("UPDATE `coders` SET `nombre`, `tema` =  '{$data["nombre"]}, {$data["tema"]}' WHERE `id` = {$id}");
    }

    public function Update()
    {
        $this->database->mysql->query("UPDATE `coders` SET `nombre`='{$this->nombre}', `tema`='{$this->tema}' WHERE `coders`.`id` = '{$this->id}'");
    }
}

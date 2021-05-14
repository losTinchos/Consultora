<?php

namespace App\Models;

use App\Database;

class Coders
{
    private ?int $id;
    private string $nombre;
    private ?string $fecha;
    private string $tema;
    private $database;
    private $table = "coders";

    public function __construct(string $nombre = '', int $id = null, string $fecha = null, string $tema = '')
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
}


?>




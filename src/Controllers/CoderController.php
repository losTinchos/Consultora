<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Coder;
use phpDocumentor\Reflection\Location;


class CoderController
{

    public function __construct()
    {


        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $coder = new Coder();
        $coderList = $coder->all();

        require_once("./src/Views/listaCoders.php");

        }
       

        // new View("consultoria", [
        //     "coders" => $coderList,
        // ]);
    

    public function create(): void
    {
        echo 'Aqui tendremos el Formulario para crear';
        // new View("CreateStudent");
    }

    public function store(array $request): void
    {

        $newStudent = new Coder ($request["nombre"]);
        $newStudent->save();

        $this->index();
    }

    public function delete($id)
    {
        $studentHelper = new Coder();
        $student = $coderHelper->findById($id);
        $student->delete();

        $this->index();
    }

    public function edit($id)
    {
        //Find Student By Id
        $studentHelper = new coder();
        $student = $studentHelper->findById($id);
        //Execute view with student atributes
        new View("Editcoder", ["coder" => $coder]);
    }

    public function update(array $request, $id)
    {
        // Update Student By ID
        $coderHelper = new coder();
        $coder = $coderHelper->findById($id);
        $coder->rename($request["nombre"]);
        $coder->update();
        // Return to Viwe List
        $this->index();
    }
}
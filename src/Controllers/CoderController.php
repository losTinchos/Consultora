<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Coder;
require_once("./src/Logger/Logger.php");

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

    public function create(): void
    {
        require_once("./src/Views/CreateCoder.php");
    }

    public function store(array $request): void
    {
        $newCoder = new Coder ($request["nombre"], $request["tema"]);
        $newCoder->save();

        $this->index();
    }

    public function delete($id)
    {
        $coderHelper = new Coder();
        $coder = $coderHelper->findById($id);
        $coder->delete();

        $this->index();
    }

    public function edit($id)
    {
        $coderToEdit = Coder::findById($id);
        new View("EditCoder", ["coder" => $coderToEdit]);
    }

    public function update(array $request, $id)
    {
        $coderEnviar = new Coder($id);
        $coderToUpdate = $coderEnviar->findById($id);
        $coderToUpdate->rename($request["nombre"], $request["tema"]);
        $coderToUpdate->update($id);

        $this->index();
    }
    public function reset()
    {
        require_once("./src/Views/ListaCoders.php");
    }
}

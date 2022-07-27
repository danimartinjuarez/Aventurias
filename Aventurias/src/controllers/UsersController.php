<?php
    namespace App\Controllers;

    use App\Core\View;
    use App\Models\Users;

    class UsersController {
        public function __construct() {
            if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {
                $this-> delete($_GET["id"]);
                return;
            }

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
                $this-> update($_POST, $_GET["id"]);
                return;
            }

            $this->index();
        }

        public function index() {
            $user = new Users();
            $users = $user->all();
            new View("userList", ["user" => $users]);
        }

        public function delete ($id) {
            $userHelper = new Users();
            $user = $userHelper->findById($id);
            $user->destroy();

            $this->index();
        }

        public function create() {
            new View ("createUser");
        }

        public function store (array $request) {
            $newUser = new Users(null, $request["name"], $request ["phone"], $request["email"], $request ["people"], $request["adventure"], $request ["info"]);
            $newUser->save();
            $this->index();
        }

        public function edit ($id) {
            $userHelper = new Users();
            $user = $userHelper->findById($id);
            new View("editUser", ["user"=>$user]);    
            
            
        }

        public function update (array $request, $id) {
            $userHelper = new Users();
            $user = $userHelper->findById($id);
            $user->rename($request["name"], $request["phone"], $request["email"], $request["people"], $request["adventure"], $request["info"]);
            $user->update();

            $this->index();
        }
               
    }
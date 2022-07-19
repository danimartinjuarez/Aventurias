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
            $newUser = new Users(null, $request["name"], $request ["phone"]);
            $newUser->save();
            $this->index();
        }
               
    }
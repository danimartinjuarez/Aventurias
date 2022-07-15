<?php
    namespace App\Models;
    use App\Database;
    class Users {
        private ?int $id;
        private string $name;
        private string $phone;
        private string $email;
        private ?int $people;
        private string $adventure;
        private string $info;
        private ?string $date_time;

        private $database;
        private $table = "adventures";

        public function __construct(int $id = null, string $name ='', string $phone = '', string $email= '', int $people= null, string $adventure='', string $info='', string $date_time = null){
            $this->id = $id;
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->people = $people;
            $this->adventure = $adventure;
            $this->info = $info;
            $this->date_time = $date_time;

            if (!$this->database) {
                $this->database = new Database();
            }
        }

        public function all(){
            $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
            $userArray = $query->fetchAll();

            $userList = [];

            foreach ($userArray as $user){
                $userItem = new Users($user["id"], $user["name"], $user["phone"], $user["email"], $user["people"], $user["adventure"], $user["info"], $user["date_time"]);
                array_push($userList, $userItem);
            }
            return $userList;
            
        }
        public function getID(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPeople(){
            return $this->people;
        }
        public function getAdventures(){
            return $this->adventures;
        }
        public function getInfo(){
            return $this->info;
        }
        public function getDate_time(){
            return $this->date_time;
        }

        public function findById($id) {
            $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id`={$id}");
            $result = $query->fetchAll();
            return new Users($result[0]["id"], $result[0]["name"], $result[0]["phone"], $result[0]["email"], $result[0]["people"], $result[0]["adventure"], $result[0]["info"], $result[0]["date_time"]);
        }

        public function destroy() {
            $query = $this->database->mysql->query("DELETE FROM `{$this->table}`WHERE `{$this->table}`.`id` ={$this->id}");
        }
    }
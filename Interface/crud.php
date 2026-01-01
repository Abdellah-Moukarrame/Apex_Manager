<?php

interface Crud{
    public function create();
    public function update($id_equipe);
    public function delete($id_equipe);
    public function getAll();
    public function getById($id_equipe);
}
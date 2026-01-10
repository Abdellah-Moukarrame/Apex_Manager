<?php

interface Crud{
    public function create();
    public function update($id);
    public function delete($id);
    public function getAll();
    public function getById($id);
}
<?php

interface Crud {


    public function creat();

    public function readOne(int $id);

    public function readAll(string $tableName);

    public function update();

    public function delete(int $id);
}
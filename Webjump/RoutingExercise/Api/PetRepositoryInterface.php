<?php


namespace Webjump\RoutingExercise\Api;


interface PetRepositoryInterface
{
    public function getById();

    public function getList();

    public function save($pet);

}

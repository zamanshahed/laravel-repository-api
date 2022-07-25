<?php

namespace App\Repositories;

interface TestInterface
{
    public function AllDataList();

    public function GetDetails($id);

    public function StoreData(array $data);

    public function UpdateData(array $data, $targetID);

    public function DeleteData($targetID);
}

<?php

namespace App\Repositories;

class InterfaceTwo implements TestInterface
{
    public function AllDataList()
    {
        return 123;
    }

    public function GetDetails($id)
    {
        return 123;
    }

    public function StoreData(array $data)
    {
        return 123;
    }

    public function UpdateData(array $data, $targetID)
    {
        return 123;
    }

    public function DeleteData($targetID)
    {
        return 123;
    }
}

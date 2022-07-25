<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Repositories\InterfaceTwo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $test;
    public function __construct(InterfaceTwo $testInterface)
    {
        $this->test = $testInterface;
    }

    public function index()
    {
        $allContacts = $this->test->AllDataList();
        // $allContacts = ContactModel::get();
        return $allContacts;
    }
}

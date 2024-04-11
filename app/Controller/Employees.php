<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\User;

class Employees
{
    public function addPatients(Request $request): string
    {
        return new View('employees.add_patients');
    }
    public function addDoctors(Request $request): string
    {
        return new View('employees.add_add_doctors');
    }
}
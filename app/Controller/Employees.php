<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\User;
use Model\Patients;
use Model\Doctors;
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
    public function patients(Request $request): string
    {
        $students=Patients::all();
        return new View('employees.patients', ['patients'=>$patients]);
    }

    public function doctors(Request $request): string
    {
        $students=Doctors::all();
        return new View('employees.doctors', ['doctors'=>$doctors]);
    }

}
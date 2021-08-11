<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
// use App\Models\User;


 class EmpController extends Controller
{
    public function EmpData(){
        return "all emps data are empty <h1>Is is it working</h1>";
    }
    public function index(){
        $emps=new \stdClass();
        $emps->Name="Ali hasann";
        $emps->Id=1;
        $emps->Salary=2000;
        
        

        
        return view("Emps.AllEmps",compact("emps"));
    }
}

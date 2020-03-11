<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesIndexController extends Controller
{
  public function index()
  {
    return response()->json(Company::all());
  }

  public function getCompany(int $id) 
  {
    try {
      $company = Company::findOrFail($id);

      return response()->json([
        'id' => $company->id,
        'name' => $company->name,
        'address' => $company->address
      ]);
    } catch (\Exception $e) {
        return response()->json([
          'error' => true,
          'message' => $e->getMessage()
        ]);
    }
  }
}

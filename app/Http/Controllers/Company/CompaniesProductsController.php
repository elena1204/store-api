<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesProductsController extends Controller
{
    public function getProducts(int $id)
    {
      try {
        $company = Company::findOrFail($id);
      
        return response()->json($company->getProducts());
      } catch (\Exception $e) {
          return response()->json([
            'error' => true,
            'message' => $e->getMessage()
          ]);
      }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
      return response()->json(Company::all());
    }

    public function create(Request $request)
    {
      try {
        $company = new Company;
        $company->name = $request->get('name');
        $company->address = $request->get('address');

        $company->save();

        return response()->json([
          'message' => 'The company is successfully stored'
        ]);
      } catch (\Exception $e) {
          return response()->json([
            'error' => true,
            'message' => $e->getMessage()
          ]);
      }
    }
}

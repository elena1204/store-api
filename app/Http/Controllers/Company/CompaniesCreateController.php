<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Company;

class CompaniesCreateController extends Controller
{
  public function create(Request $request)
  {
    try {
      

      $company = new Company;
      $company->name = $request->get('name');
      $company->address = $request->get('address');

      $company->save();

      Log::info('Company was successfully created through CompaniesCreateController');

      return response()->json([
        'message' => 'The company is successfully stored'
      ]);
    } catch (\Exception $e) {
        Log::critical('Error happened: ' . $e->getMessage());

        return response()->json([
          'error' => true,
          'message' => $e->getMessage()
        ]);
    }
  }
}

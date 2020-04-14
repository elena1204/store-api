<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CompanyRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Company;

class CompaniesCreateController extends Controller
{
  public function create(Request $request, CompanyRepositoryInterface $companyRepository)
  {
    try {
      $company = new Company($request->all());

      $companyRepository->store($company);

      Log::info('Company was successfully created through CompaniesCreateController');

      return response()->json([
         'error' => false,
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

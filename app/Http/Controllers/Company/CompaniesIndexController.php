<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CompanyRepositoryInterface;
use App\Company;

class CompaniesIndexController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        try {
            $companies = $this->companyRepository->all();

            return response()->json($companies);
        } catch(\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function getCompany(int $id)
    {
        try {
          $company = $this->companyRepository->get($id);

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

<?php

namespace App\Repositories;

use App\Company;
use App\Repositories\Contracts\CompanyRepositoryInterface;

class EloquentCompanyRepository implements CompanyRepositoryInterface
{
    public function get(int $id): ?Company
    {
        return Company::find($id);
    }
}

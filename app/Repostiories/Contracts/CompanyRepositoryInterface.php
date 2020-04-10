<?php

namespace App\Repositories\Contracts;

use App\Company;

interface CompanyRepositoryInterface
{
    public function get(int $id): ?Company;
}

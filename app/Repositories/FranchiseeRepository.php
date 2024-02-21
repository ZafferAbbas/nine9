<?php

namespace App\Repositories;

use App\Models\Franchisee;
use App\Repositories\BaseRepository;

class FranchiseeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'company_name',
        'contact_info'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Franchisee::class;
    }
}

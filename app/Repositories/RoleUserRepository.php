<?php

namespace App\Repositories;

use App\Models\RoleUser;
use App\Repositories\BaseRepository;

class RoleUserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'role_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return RoleUser::class;
    }
}

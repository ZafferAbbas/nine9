<?php

namespace App\Repositories;

use App\Models\Expense;
use App\Repositories\BaseRepository;

class ExpenseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'shop_id',
        'date',
        'amount',
        'category',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Expense::class;
    }
}

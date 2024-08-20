<?php

namespace App\Service;

use App\Contract\FaqContract;
use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;

class FaqService  extends BaseService implements FaqContract
{

    protected Model $model;

    public function __construct(Faq $model)
    {
        $this->model = $model;
    }
}
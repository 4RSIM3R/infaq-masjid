<?php

namespace App\Service;

use App\Contract\ReportContract;
use App\Models\Report;
use Illuminate\Database\Eloquent\Model;

class ReportService extends BaseService implements ReportContract
{

    protected Model $model;

    public function __construct(Report $model)
    {
        $this->model = $model;
    }
}

<?php

namespace App\Service;

use App\Contract\CampaignContract;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;

class CampaignService  extends BaseService implements CampaignContract
{

    protected Model $model;

    public function __construct(Campaign $model)
    {
        $this->model = $model;
    }
}

<?php

namespace App\Service;

use App\Contract\SettingContract;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;

class SettingService extends BaseService implements SettingContract
{

    protected Model $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }
}

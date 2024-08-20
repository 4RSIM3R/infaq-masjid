<?php 

namespace App\Service;

use App\Contract\DonationContract;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Model;

class DonationService  extends BaseService implements DonationContract 
{

    protected Model $model;

    public function __construct(Donation $model)
    {
        $this->model = $model;
    }
}
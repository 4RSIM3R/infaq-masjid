<?php 

namespace App\Service;

use App\Contract\EventContract;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class EventService  extends BaseService implements EventContract 
{

    protected Model $model;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }
}
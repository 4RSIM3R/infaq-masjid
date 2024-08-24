<?php

namespace App\Providers;

use App\Contract\BaseContract;
use App\Contract\CampaignContract;
use App\Contract\DonationContract;
use App\Contract\EventContract;
use App\Contract\FaqContract;
use App\Contract\SettingContract;
use App\Service\BaseService;
use App\Service\CampaignService;
use App\Service\DonationService;
use App\Service\EventService;
use App\Service\FaqService;
use App\Service\SettingService;
use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseContract::class, BaseService::class);
        $this->app->bind(CampaignContract::class, CampaignService::class);
        $this->app->bind(DonationContract::class, DonationService::class);
        $this->app->bind(EventContract::class, EventService::class);
        $this->app->bind(FaqContract::class, FaqService::class);
        $this->app->bind(SettingContract::class, SettingService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

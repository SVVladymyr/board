<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ApplicationRepository;
use App\Repositories\OrganizationRepository;
use App\Repositories\PassageRepository;
use App\Repositories\SettingRepository;
use App\Repositories\StatusRepository;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Repositories\Interfaces\PassageRepositoryInterface;
use App\Repositories\Interfaces\SettingRepositoryInterface;
use App\Repositories\Interfaces\StatusRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(ApplicationRepositoryInterface::class, ApplicationRepository::class);
        $this->app->bind(OrganizationRepositoryInterface::class, OrganizationRepository::class);
        $this->app->bind(PassageRepositoryInterface::class, PassageRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(StatusRepositoryInterface::class, StatusRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

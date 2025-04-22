<?php

namespace App\Providers;

use App\Service\AboutUsService;
use App\Service\AboutUsServiceInterface;
use App\Service\BookService;
use App\Service\BookServiceInterface;
use App\Service\CommunicationService;
use App\Service\CommunicationServiceInterface;
use App\Service\MenuService;
use App\Service\MenuServiceInterface;
use App\Service\SliderService;
use App\Service\SliderServiceInterface;
use App\Service\UserService;
use App\Service\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BookServiceInterface::class, BookService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(CommunicationServiceInterface::class, CommunicationService::class);
        $this->app->bind(MenuServiceInterface::class, MenuService::class);
        $this->app->bind(AboutUsServiceInterface::class, AboutUsService::class);
        $this->app->bind(SliderServiceInterface::class, SliderService::class);
    }

    public function boot(): void
    {
        //
    }
}

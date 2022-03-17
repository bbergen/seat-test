<?php

namespace Bryan\Seat\Test;

use Seat\Services\AbstractSeatPlugin;

class SeatTestServiceProvider extends AbstractSeatPlugin
{
    public function boot()
    {
        $this->addRoutes();
        $this->addViews();
    }

    public function addRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    public function addViews()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'test');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/package.sidebar.php', 'package.sidebar');
    }

    public function getName(): string
    {
        return 'SeAT Test';
    }

    public function getPackageRespoitoryUrl(): string
    {
        return 'https://github.com/bbergen/seat-test';
    }

    public function getPackagistPackageName(): string
    {
        return 'seat-test';
    }

    public function getPackagistVendorName(): string
    {
        return 'bryan';
    }
}
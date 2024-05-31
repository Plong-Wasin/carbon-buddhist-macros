<?php

namespace Wasinpwg\LaravelCarbonMacroBuddhist\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Wasinpwg\LaravelCarbonMacroBuddhist\LaravelCarbonMacroBuddhistServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Wasinpwg\\LaravelCarbonMacroBuddhist\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelCarbonMacroBuddhistServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-carbon-macro-buddhist_table.php.stub';
        $migration->up();
        */
    }
}

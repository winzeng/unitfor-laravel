<?php
/**
 * @Author: anchen
 * @Date:   2019-07-30 09:50:56
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-07-30 18:37:44
 */
namespace Zeng\Unitfor\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class UnitforServiceProvider extends ServiceProvider
{
    public function boot(){

    }

    public function register(){
        // echo ' this is cath laravel';
        $this->registerRoutes();
        //指定组件的名称,对应的自定义的资源地址
        //'unitfor' 为 __DIR__.'/../../resources/views' 的别名
        // print_r(__DIR__);die;

        $this->loadViewsFrom(
            __DIR__.'/../../resource/views', 'unitfor');
        // echo 7788;die;
    }

        /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        // print_r($this->routeConfiguration());die;
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            // 'domain' => config('telescope.domain', null),//访问的域名设置
            'namespace' => 'Zeng\Unitfor\Http\Controllers',//命名空间
            'prefix' => 'zeng',
            'middleware' => 'web',
        ];
    }
}
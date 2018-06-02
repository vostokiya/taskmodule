<?php 

namespace Vostokiya\Taskmodule; 


/** * Сервис провайдер для подключения модулей */
class TaskmoduleServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot() {
        $this->publishes([
            __DIR__ . '/Modules' => base_path('App/Modules'),
        ]);
    }

    public function register() {
        
    }

}

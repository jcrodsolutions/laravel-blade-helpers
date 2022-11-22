<?php

namespace Jcrodriguezt\LaravelBladeHelpers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeHelpersServiceProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
		$this->publishes([
			__DIR__ . '/../config/blade-helpers.php' => config_path(path: 'blade-helpers.php'),
		]);
		
        /*
         * Esto es para poder usar en blade @loadcss('bs5') por ejemplo para cargar bootstrap
         */
        Blade::directive('loadcss', function (string $css) {
            $css = str_replace(['"', "'"], "", $css);

            $file = $this->loadAsset($css,'css');
            if (!$file) {
                return "<!-- No pude cargar el css: {$css} -->";
            }

            return "<link rel='stylesheet' href='" . $this->loadAsset($css,'css') . "' alt='{$css}'/>";
        });

        Blade::directive('loadjs', function (string $js) {
            $js = str_replace(['"', "'"], "", $js);

            $file = $this->loadAsset($js,'js');
            if (!$file) {
                return "<!-- No pude cargar el js: {$js} -->";
            }

            return "<script src='" . $this->loadAsset($js,'js') . "'></script>";
        });
		
        Blade::directive('loadimg', function (string $img) {
            $img = str_replace(['"', "'"], "", $img);

            $file = $this->loadAsset($img,'img');
            if (!$file) {
                return "<!-- No pude cargar el img: {$img} -->";
            }

            return "<img src='" . $this->loadAsset($img,'img') . "' />";
        });
    }

    private function loadAsset(string $asset, string $type) {
        $return = false;

        if (!config('blade-helpers.'.$type.'.' . $asset)) {
            return false;
        }
        
        $file = config('blade-helpers.'.$type.'path') . config('blade-helpers.'.$type.'.' . $asset);
		
        if (file_exists($file)) {
            $file .= "?v=" . filemtime($file);
            $return = config('app.url') . '/' . $file;
        } else {
			if ($type=='css'){dd('No Existe: '.$file);}
			
		}
        return $return;
    }

}

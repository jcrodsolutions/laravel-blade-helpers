<?php

namespace Jcrodsolutions\LaravelBladeHelpers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jcrodsolutions\LaravelBladeHelpers\App\View\Components\{
    Ig5,
    PbBoton,
    PbCarousel,
    PbImagen,
    PbSeccionImagenes,
    PbSeccionImgTabla,
    PbSeccionImgTexto,
    PbSeccionTextoBlockquote,
    PbTituloRow,
};

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

        $this->loadViewsFrom(__DIR__.'/resources/views','lbh');
        $this->loadViewComponentsAs('lbh', [
            Ig5::class,
            PbBoton::class,
            PbCarousel::class,
            PbImagen::class,
            PbSeccionImagenes::class,
            PbSeccionImgTabla::class,
            PbSeccionImgTexto::class,
            PbSeccionTextoBlockquote::class,
            PbTituloRow::class,
        ]);

        /*
         * Esto es para poder usar en blade @loadcss('bs5') por ejemplo para cargar bootstrap
         */
        Blade::directive('loadcss', function (string $css) {
            $css = str_replace(['"', "'"], "", $css);

            $file = $this->loadAsset($css, 'css');
            if (!$file) {
                return "<!-- No pude cargar el css: {$css} -->";
            }

            $params = isset($file['params']) ? $file['params'] : "";
            return "<link rel='stylesheet' href='" . $this->loadAsset($css, 'css')['src'] . "' alt='{$css}'  {$params}/>";
        });

        Blade::directive('loadjs', function (string $js) {
            $js = str_replace(['"', "'"], "", $js);

            $file = $this->loadAsset($js, 'js');
            if (!$file) {
                return "<!-- No pude cargar el js: {$js} -->";
            }

            $params = isset($file['params']) ? $file['params'] : "";
            return "<script src='" . $this->loadAsset($js, 'js')['src'] . "' {$params}></script>";
        });
                
        Blade::directive('loadimg', function (string $img) {
            $img = str_replace(['"', "'"], "", $img);

            $file = $this->loadAsset($img, 'img');
            if (!$file) {
                return "<!-- No pude cargar el img: {$img} -->";
            }

            $params = isset($file['params']) ? $file['params'] : "";
            return "<img src='" . $file['src'] . "' {$params}/>";
        });
    }

    private function loadAsset(string $asset, string $type) {
        $return = false;

        $path = config('blade-helpers.' . $type . 'path');
        $arr = config('blade-helpers.' . $type . '.' . $asset);

        if (!$arr || !isset($arr['src']) || $arr['src'] == '' || $arr['src'] === null) {
            return false;
        }

        if (substr($arr['src'], 0, 4) == 'http') {
            return $arr;
        }

        $file = $path . $arr['src'];

        if (file_exists($file)) {
            $file .= "?v=" . filemtime($file);
            $arr['src'] = config('app.url') . '/' . $file;
//            $return = config('app.url') . '/' . $file;
            return $arr;
        }
        return $return;
    }
}

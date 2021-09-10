<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Package\Jalali\Area\Area;

class Jalali extends Container
{
    public function __construct()
    {
        $this->gkieogwukagigisy(__DIR__);
        if ($this->gmiyqqaekqcsoime()) {
            parent::__construct();
            $this->iemaakgqgqosiecm();
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'], 21);
        parent::wigskegsqequoeks();
    }
    public function iemaakgqgqosiecm()
    {
        Area::symcgieuakksimmu();
        Asset::symcgieuakksimmu();
        date_default_timezone_set('Asia/Tehran');
    }
    public function yeyiguyegmmyusea()
    {
        $omkysikckkcieckq = "{$this->akuociswqmoigkas()}_activate";
        if (!DecoratorOption::get($omkysikckkcieckq, 0)) {
            DecoratorOption::update('WPLANG', 'en_US');
            DecoratorOption::update($omkysikckkcieckq, 1);
            try {
                if (!function_exists('wp_download_language_pack')) {
                    require_once ABSPATH . '/wp-admin/includes/translation-install.php';
                    if (wp_can_install_language_pack()) {
                        @wp_download_language_pack('fa_IR');
                    }
                }
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        }
    }
}

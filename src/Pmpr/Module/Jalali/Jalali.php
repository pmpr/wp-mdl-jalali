<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68010624c200d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Woocommerce; class Jalali extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Jalali', PR__MDL__JALALI); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Area::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'], 21)->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye']); $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue'])->waqewsckuayqguos('enqueue_datepicker_assets', [$this, 'muquyaimcyiwcecu']); } public function yeyiguyegmmyusea() { $uusmaiomayssaecw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this) . '_activate'; $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->oeowmqwauagmkkwu($uusmaiomayssaecw, 1, function () { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $qkqgcaykemoiecma->update('WPLANG', 'en_US'); try { if (!function_exists('wp_download_language_pack')) { require_once ABSPATH . '/wp-admin/includes/translation-install.php'; if (wp_can_install_language_pack()) { @wp_download_language_pack('fa_IR'); } } } catch (Exception $wgaoewqkwgomoaai) { } }); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($this->kmuweyayaqoeqiyw()->moeogyisgeuwoeea()) { $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'virastar', 'virastar.js')->simswskycwagoeqy()); } $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'admin', 'admin.js')->simswskycwagoeqy()); $meakksicouekcgoe->wwmusmkkcwsiciou($this, 'months', [__('Farvardin', PR__MDL__JALALI), __('Ordibehesht', PR__MDL__JALALI), __('Khordad', PR__MDL__JALALI), __('Tir', PR__MDL__JALALI), __('Mordad', PR__MDL__JALALI), __('Shahrivar', PR__MDL__JALALI), __('Mehr', PR__MDL__JALALI), __('Aban', PR__MDL__JALALI), __('Azar', PR__MDL__JALALI), __('Dey', PR__MDL__JALALI), __('Bahman', PR__MDL__JALALI), __('Esfand', PR__MDL__JALALI)]); $this->muquyaimcyiwcecu(); } public function muquyaimcyiwcecu(string $sqeykgyoooqysmca = Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $oqkcmcewgaqymmoe = $meakksicouekcgoe->owygwqwawqoiusis($this, 'datepicker', 'datepicker.js')->simswskycwagoeqy()->okawmmwsiuauwsiu(); $iesegggmcccqyquo = $meakksicouekcgoe->awgyqswkqywwmkye($this, 'datepicker', 'datepicker.css'); if ($sqeykgyoooqysmca === Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe->qeqgammgesiwiysc($oqkcmcewgaqymmoe)->qeqgammgesiwiysc($iesegggmcccqyquo); } else { $meakksicouekcgoe->yawoscugkyysowie($oqkcmcewgaqymmoe)->yawoscugkyysowie($iesegggmcccqyquo); } } }

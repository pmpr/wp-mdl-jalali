<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
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
        goto cwikoaeqmmoimmso;
        egaymskkosukqeao:
        if (!$this->gmiyqqaekqcsoime()) {
            goto acggikioyeueeowg;
        }
        goto kaiesowkgwogqseg;
        cwswueuqoamqasya:
        acggikioyeueeowg:
        goto kgmeiwiakwicgkkk;
        kaiesowkgwogqseg:
        parent::__construct();
        goto kicwiowcogmauwiy;
        kicwiowcogmauwiy:
        $this->iemaakgqgqosiecm();
        goto cwswueuqoamqasya;
        cwikoaeqmmoimmso:
        $this->gkieogwukagigisy(__DIR__);
        goto egaymskkosukqeao;
        kgmeiwiakwicgkkk:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'], 21);
        parent::wigskegsqequoeks();
    }
    public function iemaakgqgqosiecm()
    {
        goto suuskagowwgsouqw;
        omykokikgocoikec:
        Asset::symcgieuakksimmu();
        goto csieaismmmocyacu;
        suuskagowwgsouqw:
        Area::symcgieuakksimmu();
        goto omykokikgocoikec;
        csieaismmmocyacu:
        date_default_timezone_set('Asia/Tehran');
        goto aquqkiggamaoegoo;
        aquqkiggamaoegoo:
    }
    public function yeyiguyegmmyusea()
    {
        goto mqimkwickkgqqeoi;
        ceiuqsiqgiuiekem:
        try {
            if (!function_exists('wp_download_language_pack')) {
                goto agemwookwseyycqo;
                owuuuiekkaeoeacq:
                mykiyqcqiegkiqys:
                goto saauykgakaeiyoua;
                cquecqekuucwoumw:
                if (!wp_can_install_language_pack()) {
                    goto mykiyqcqiegkiqys;
                }
                goto koiscokkkaimiecq;
                agemwookwseyycqo:
                require_once ABSPATH . '/wp-admin/includes/translation-install.php';
                goto cquecqekuucwoumw;
                koiscokkkaimiecq:
                @wp_download_language_pack('fa_IR');
                goto owuuuiekkaeoeacq;
                saauykgakaeiyoua:
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto gsymkkskwsgggoic;
        kwyimqumkuuyaiku:
        if (DecoratorOption::get($omkysikckkcieckq, 0)) {
            goto qwemkcoaseywkuuc;
        }
        goto gkqiqaqecmoogmaa;
        gsymkkskwsgggoic:
        qwemkcoaseywkuuc:
        goto ugykmcouiwiscoqu;
        gkqiqaqecmoogmaa:
        DecoratorOption::update('WPLANG', 'en_US');
        goto mceucsaeouuwyumm;
        mceucsaeouuwyumm:
        DecoratorOption::update($omkysikckkcieckq, 1);
        goto ceiuqsiqgiuiekem;
        mqimkwickkgqqeoi:
        $omkysikckkcieckq = "{$this->akuociswqmoigkas()}_activate";
        goto kwyimqumkuuyaiku;
        ugykmcouiwiscoqu:
    }
}

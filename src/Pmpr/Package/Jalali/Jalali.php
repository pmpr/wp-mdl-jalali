<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4ccec9f71             |
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
        goto egaymskkosukqeao;
        egaymskkosukqeao:
        $this->gkieogwukagigisy(__DIR__);
        goto kaiesowkgwogqseg;
        kaiesowkgwogqseg:
        if (!$this->gmiyqqaekqcsoime()) {
            goto cwikoaeqmmoimmso;
        }
        goto kicwiowcogmauwiy;
        cwswueuqoamqasya:
        $this->iemaakgqgqosiecm();
        goto kgmeiwiakwicgkkk;
        kgmeiwiakwicgkkk:
        cwikoaeqmmoimmso:
        goto suuskagowwgsouqw;
        kicwiowcogmauwiy:
        parent::__construct();
        goto cwswueuqoamqasya;
        suuskagowwgsouqw:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\137\x69\x6e\x69\x74", [$this, "\x79\x65\x79\x69\x67\165\171\145\x67\x6d\x6d\x79\x75\163\x65\141"], 21);
        parent::wigskegsqequoeks();
    }
    public function iemaakgqgqosiecm()
    {
        goto omykokikgocoikec;
        aquqkiggamaoegoo:
        date_default_timezone_set("\x41\163\151\141\57\x54\x65\x68\162\x61\x6e");
        goto mykiyqcqiegkiqys;
        omykokikgocoikec:
        Area::symcgieuakksimmu();
        goto csieaismmmocyacu;
        csieaismmmocyacu:
        Asset::symcgieuakksimmu();
        goto aquqkiggamaoegoo;
        mykiyqcqiegkiqys:
    }
    public function yeyiguyegmmyusea()
    {
        goto kwyimqumkuuyaiku;
        mceucsaeouuwyumm:
        DecoratorOption::update("\x57\120\x4c\x41\x4e\x47", "\x65\x6e\137\125\x53");
        goto ceiuqsiqgiuiekem;
        kwyimqumkuuyaiku:
        $omkysikckkcieckq = "{$this->akuociswqmoigkas()}\x5f\x61\x63\x74\151\x76\x61\x74\x65";
        goto gkqiqaqecmoogmaa;
        gkqiqaqecmoogmaa:
        if (DecoratorOption::get($omkysikckkcieckq, 0)) {
            goto mqimkwickkgqqeoi;
        }
        goto mceucsaeouuwyumm;
        gsymkkskwsgggoic:
        try {
            if (!function_exists("\167\160\137\x64\157\x77\x6e\154\157\x61\144\137\x6c\x61\156\x67\165\x61\x67\145\x5f\160\141\x63\x6b")) {
                goto cquecqekuucwoumw;
                koiscokkkaimiecq:
                if (!wp_can_install_language_pack()) {
                    goto agemwookwseyycqo;
                }
                goto owuuuiekkaeoeacq;
                cquecqekuucwoumw:
                require_once ABSPATH . "\x2f\167\160\x2d\141\x64\155\x69\156\x2f\151\156\143\x6c\x75\x64\x65\163\x2f\164\162\141\x6e\x73\x6c\x61\164\151\x6f\156\55\x69\156\163\x74\x61\154\x6c\56\x70\x68\x70";
                goto koiscokkkaimiecq;
                owuuuiekkaeoeacq:
                @wp_download_language_pack("\146\x61\x5f\111\122");
                goto saauykgakaeiyoua;
                saauykgakaeiyoua:
                agemwookwseyycqo:
                goto qwemkcoaseywkuuc;
                qwemkcoaseywkuuc:
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto ugykmcouiwiscoqu;
        ceiuqsiqgiuiekem:
        DecoratorOption::update($omkysikckkcieckq, 1);
        goto gsymkkskwsgggoic;
        ugykmcouiwiscoqu:
        mqimkwickkgqqeoi:
        goto isewysikysqewkis;
        isewysikysqewkis:
    }
}

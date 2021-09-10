<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4f9d2ecb0             |
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
        kaiesowkgwogqseg:
        parent::__construct();
        goto kicwiowcogmauwiy;
        cwswueuqoamqasya:
        acggikioyeueeowg:
        goto kgmeiwiakwicgkkk;
        cwikoaeqmmoimmso:
        $this->gkieogwukagigisy(__DIR__);
        goto egaymskkosukqeao;
        kicwiowcogmauwiy:
        $this->iemaakgqgqosiecm();
        goto cwswueuqoamqasya;
        kgmeiwiakwicgkkk:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\x69\x6e\x69\164", [$this, "\x79\x65\x79\151\x67\165\171\x65\147\155\x6d\x79\x75\163\x65\x61"], 21);
        parent::wigskegsqequoeks();
    }
    public function iemaakgqgqosiecm()
    {
        goto suuskagowwgsouqw;
        suuskagowwgsouqw:
        Area::symcgieuakksimmu();
        goto omykokikgocoikec;
        csieaismmmocyacu:
        date_default_timezone_set("\101\x73\151\141\57\x54\145\150\162\141\x6e");
        goto aquqkiggamaoegoo;
        omykokikgocoikec:
        Asset::symcgieuakksimmu();
        goto csieaismmmocyacu;
        aquqkiggamaoegoo:
    }
    public function yeyiguyegmmyusea()
    {
        goto mqimkwickkgqqeoi;
        mceucsaeouuwyumm:
        DecoratorOption::update($omkysikckkcieckq, 1);
        goto ceiuqsiqgiuiekem;
        gsymkkskwsgggoic:
        qwemkcoaseywkuuc:
        goto ugykmcouiwiscoqu;
        ceiuqsiqgiuiekem:
        try {
            if (!function_exists("\167\160\x5f\144\157\x77\x6e\154\x6f\x61\144\x5f\154\x61\156\147\x75\x61\x67\x65\137\x70\x61\x63\153")) {
                goto agemwookwseyycqo;
                owuuuiekkaeoeacq:
                mykiyqcqiegkiqys:
                goto saauykgakaeiyoua;
                agemwookwseyycqo:
                require_once ABSPATH . "\57\x77\160\55\141\x64\155\x69\156\x2f\151\x6e\143\x6c\x75\x64\x65\x73\57\164\x72\x61\156\x73\154\141\x74\x69\x6f\x6e\x2d\151\x6e\163\x74\x61\154\x6c\x2e\x70\x68\160";
                goto cquecqekuucwoumw;
                koiscokkkaimiecq:
                @wp_download_language_pack("\146\x61\137\111\x52");
                goto owuuuiekkaeoeacq;
                cquecqekuucwoumw:
                if (!wp_can_install_language_pack()) {
                    goto mykiyqcqiegkiqys;
                }
                goto koiscokkkaimiecq;
                saauykgakaeiyoua:
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto gsymkkskwsgggoic;
        mqimkwickkgqqeoi:
        $omkysikckkcieckq = "{$this->akuociswqmoigkas()}\x5f\141\143\164\x69\166\x61\x74\145";
        goto kwyimqumkuuyaiku;
        kwyimqumkuuyaiku:
        if (DecoratorOption::get($omkysikckkcieckq, 0)) {
            goto qwemkcoaseywkuuc;
        }
        goto gkqiqaqecmoogmaa;
        gkqiqaqecmoogmaa:
        DecoratorOption::update("\x57\x50\x4c\x41\x4e\107", "\x65\156\137\125\123");
        goto mceucsaeouuwyumm;
        ugykmcouiwiscoqu:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali\Area;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Package\Jalali\Container;
use Pmpr\Package\Jalali\Converter;
use Pmpr\Package\Jalali\Setting;
use Pmpr\Package\Jalali\Translator;
use WP_Comment;
use WP_Locale;

class Common extends Container
{
    
    protected ?string $locale = null;
    
    protected ?Converter $converter = null;
    
    protected ?Translator $translator = null;
    
    public function __construct()
    {
        $this->converter = Converter::symcgieuakksimmu();
        $this->translator = Translator::symcgieuakksimmu();
        parent::__construct();
    }
    
    public function uacmswwoiqckokew() : ?Converter
    {
        return $this->converter;
    }
    
    public function kkkikouyuqigocai() : ?Translator
    {
        return $this->translator;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('get_term', [$this, 'kckogqkiycqeumoa'])->cecaguuoecmccuse('get_comment', [$this, 'semmskukaeyeouue'])->cecaguuoecmccuse('locale', [$this, 'uqkiyeuegiacwuqq'], 10)->cecaguuoecmccuse('get_the_date', [$this, 'mikaiusgimoekqye'], 99, 3);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->wmmkekaaacyuumsk();
    }
    
    public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao = 'fa')
    {
        if (!$aamkqmkgsaqmcuao) {
            $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        }
        return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao);
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = 'fa', $eqmcogmcemgigckm = '٫')
    {
        if (!$aamkqmkgsaqmcuao) {
            $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        }
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
    }
    
    public function kckogqkiycqeumoa($iwewcwusemqaiggk)
    {
        $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk);
        if ($iwewcwusemqaiggk) {
            if ($this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
                $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name);
            }
            if ($this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
                $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name);
            }
        }
        return $iwewcwusemqaiggk;
    }
    
    public function gcyuqqgwseaumuyg($icsywsyukqcciiky)
    {
        global $wpdb, $wp_query;
        if (!is_null($wp_query)) {
            $gcisockiummsmcag = $wp_query->get('m');
            $usqcwoasmiiomgks = $wp_query->get('year');
            $mwemskcucwsyycwm = $wp_query->get('monthnum');
            $oqkwcmcmimkmkwgk = $wp_query->get('day');
            $ygykagaqyuawwiyo = $wp_query->get('hour');
            $sckumcuqemuukces = $wp_query->get('minute');
            $gcegymooyemmaysk = $wp_query->get('second');
            if ($gcisockiummsmcag != '' && $gcisockiummsmcag != '0') {
                $gcisockiummsmcag = preg_replace('/[^0-9]/', '', $gcisockiummsmcag);
                $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4);
                $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2);
                $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2);
                $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2);
                $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2);
                $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2);
            }
            if ($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300) {
                $cwiqececuoeacuaa = ["/YEAR\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $usqcwoasmiiomgks . "/", "/DAYOFMONTH\\([\\s]*{$wpdb->posts}\\.post_date[\\s]*\\)[\\s]*=[\\s]*" . $oqkwcmcmimkmkwgk . "/", "/MONTH\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $mwemskcucwsyycwm . "/", "/HOUR\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $ygykagaqyuawwiyo . "/", "/MINUTE\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $sckumcuqemuukces . "/", "/SECOND\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $gcegymooyemmaysk . "/"];
                $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "1=1", $icsywsyukqcciiky);
            }
        }
        return $icsywsyukqcciiky;
    }
    public function wmmkekaaacyuumsk()
    {
        global $wp_locale;
        $this->locale = DecoratorUser::iyouigcsiacgwksc();
        if ($wp_locale instanceof WP_Locale) {
            $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::NUMBERS_DECIMAL_POINT);
            $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::NUMBERS_THOUSAND_SEPARATOR);
            if ($geqcesmqwkeayoiu) {
                $wp_locale->number_format['thousands_sep'] = $geqcesmqwkeayoiu;
            }
            if ($qawscmyuiuymkscy) {
                $wp_locale->number_format['decimal_point'] = $qawscmyuiuymkscy;
            }
        }
    }
    
    public function iyouigcsiacgwksc() : ?string
    {
        return $this->locale;
    }
    
    public function semmskukaeyeouue($aqqmosqmsuueyaes)
    {
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content;
        } else {
            $ewgwqamkygiqaawc = $aqqmosqmsuueyaes;
        }
        if ($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc)) {
            if ($this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
                $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc);
            }
            if ($this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
                $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc);
            }
        }
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc;
        } else {
            $aqqmosqmsuueyaes = $ewgwqamkygiqaawc;
        }
        return $aqqmosqmsuueyaes;
    }
    
    public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese)
    {
        if (function_exists('debug_backtrace')) {
            $dkcwuyaoaeekqeao = debug_backtrace();
            if ($this->sscegwueamckwmcy($this->ygyygikyocoymgaw('disable'), $dkcwuyaoaeekqeao)) {
                return $aumwicqgsiymkssc;
            }
        }
        return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa);
    }
    
    public function gwyqggqwgaawqmww($ewgwqamkygiqaawc)
    {
        return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc);
    }
    
    public function beekyawqaoysgowq($ewgwqamkygiqaawc)
    {
        return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc);
    }
    
    public function uqkiyeuegiacwuqq($aamkqmkgsaqmcuao) : ?string
    {
        global $aamkqmkgsaqmcuao;
        $aamkqmkgsaqmcuao = 'fa_IR';
        return $aamkqmkgsaqmcuao;
    }
    
    public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak)
    {
        if ($ocogsiouoiuuguym) {
            $ocogsiouoiuuguym = $this->mikaiusgimoekqye(date('Y-m-d H:i:s', $yiuogaeewyockeak), $saqmwwmqiwmkiwaa);
        }
        return $ocogsiouoiuuguym;
    }
    
    public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = 'fa')
    {
        if (is_int($cqgoimumaewouews)) {
            $yiuogaeewyockeak = $cqgoimumaewouews;
        } elseif (is_numeric($cqgoimumaewouews)) {
            $yiuogaeewyockeak = intval($cqgoimumaewouews);
        } else {
            $yiuogaeewyockeak = strtotime($cqgoimumaewouews);
        }
        if (!$saqmwwmqiwmkiwaa) {
            $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw();
        }
        if ($yiuogaeewyockeak) {
            if (empty($aamkqmkgsaqmcuao) && is_admin() && $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) {
                $aamkqmkgsaqmcuao = 'fa';
            } elseif (empty($aamkqmkgsaqmcuao) && is_admin()) {
                $aamkqmkgsaqmcuao = 'en';
            } elseif (empty($aamkqmkgsaqmcuao) && !is_admin() && $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
                $aamkqmkgsaqmcuao = 'fa';
            } elseif (empty($aamkqmkgsaqmcuao) && !is_admin()) {
                $aamkqmkgsaqmcuao = 'en';
            }
            $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $aamkqmkgsaqmcuao);
        }
        return $cqgoimumaewouews;
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '')
    {
        return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg);
    }
}

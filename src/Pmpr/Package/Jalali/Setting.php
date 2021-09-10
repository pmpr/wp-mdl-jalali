<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4f9d2ecb0             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Setting extends BaseClass
{
    const ADMIN_FONT = "\141\144\x6d\x69\x6e\x5f\146\x6f\x6e\164";
    const NUMBERS_DECIMAL_POINT = "\x6e\165\x6d\142\x65\x72\163\137\x64\145\x63\151\x6d\x61\154\137\x70\x6f\151\156\x74";
    const NUMBERS_THOUSAND_SEPARATOR = "\156\165\155\x62\145\x72\x73\x5f\x74\150\x6f\x75\163\x61\156\x64\x5f\163\145\x70\x61\x72\141\164\157\x72";
    const VIRASTAR_POST_TYPE_TARGETS = "\166\151\162\141\163\164\x61\x72\137\x70\157\x73\x74\137\x74\171\x70\145\137\x74\x61\x72\x67\145\x74\163";
    const FRONT_CONVERT = "\x66\162\x6f\156\164\137\x63\x6f\x6e\x76\145\162\x74";
    const ADMIN_CONVERT = "\x61\x64\155\x69\x6e\137\143\x6f\156\166\x65\x72\x74";
    const _DATES = "\137\144\141\164\x65\163";
    const _LETTERS = "\x5f\154\x65\x74\164\x65\162\x73";
    const _NUMBERS = "\137\x6e\165\155\x62\x65\162\x73";
    const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES;
    const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS;
    const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES;
    const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS;
    const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\x70\145\x72\155\x61\154\151\156\x6b\137\144\141\x74\x65\x73";
    
    public function __construct()
    {
        $this->name = self::akuociswqmoigkas();
        parent::__construct();
    }
    public function gogaagekwoisaqgu()
    {
        $this->title = __("\112\141\154\x61\154\151", PR__PKG__JALALI);
    }
    public function ecwgiiuacoaokqkw()
    {
        goto qiaqsassksqiuyae;
        qogqewiwmwiwskgm:
        $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\x61\x6c\141\x6c\151\x5f\160\x6c\165\147\151\x6e\163\x5f\x74\141\142\x5f\155\145\x74\141\x5f\142\157\170\145\163"), []);
        goto qgoiooayqmqqsiok;
        qiaqsassksqiuyae:
        $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\107\145\x6e\x65\x72\x61\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\137\x6e\165\x6d\x62\145\x72\163", __("\116\x75\x6d\142\145\x72\x73", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\x65\x63\x69\155\x61\x6c\x20\x73\x79\155\x62\157\154\x3a", PR__PKG__JALALI), ["\56" => sprintf("\x25\x73\x20\50\x2e\x29", __("\120\x6f\x69\x6e\164", PR__PKG__JALALI)), "\x2f" => sprintf("\45\163\x20\x28\x2f\x29", __("\123\x6c\141\163\x68", PR__PKG__JALALI)), "\47" => sprintf("\x25\163\x20\50\x27\x29", __("\x53\151\x6e\x67\x6c\x65\40\161\x75\157\164\145", PR__PKG__JALALI)), "\54" => sprintf("\x25\x73\x20\50\54\51", __("\x43\157\x6d\155\141", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\124\150\x6f\165\163\141\156\x64\40\x73\x65\160\141\x72\x61\164\x6f\x72\x20\163\x79\155\x62\157\x6c\72", PR__PKG__JALALI), ["\54" => sprintf("\45\x73\40\50\x2c\51", __("\x43\157\x6d\x6d\141", PR__PKG__JALALI)), "\x2e" => sprintf("\45\163\x20\x28\56\x29", __("\120\157\151\156\x74", PR__PKG__JALALI)), "\40" => sprintf("\45\163\x20\x28\x20\51", __("\123\160\141\143\x65", PR__PKG__JALALI)), "\47" => sprintf("\x25\163\40\50\47\51", __("\123\151\156\147\x6c\x65\x20\161\x75\x6f\164\x65", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\146\x72\x6f\156\x74", __("\106\x72\157\x6e\x74\x20\120\141\x67\145", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\x50\145\x72\x6d\141\x6c\151\156\x6b\x20\104\141\x74\145\x73", PR__PKG__JALALI), __("\x43\157\156\166\x65\x72\x74\x20\144\141\x74\x65\x73\40\151\156\x20\160\145\162\155\141\x6c\151\156\153\56", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\x61\144\155\151\156", __("\x41\x64\x6d\151\156\x69\x73\x74\162\x61\164\157\x72\x20\x50\141\156\145\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\x41\x64\x76\141\156\143\145\144", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __("\106\x6f\156\x74", PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\x69\162\141\x73\164\x61\162\40\x54\x61\x72\x67\x65\x74\40\120\157\163\164\40\x54\x79\x70\145\x73", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\x6f\x75\x74\x70\165\x74" => self::LABELS]), __("\x43\x68\x6f\151\143\x65\40\x70\x6f\163\164\x20\x74\x79\x70\145\163\40\171\x6f\165\40\167\141\x6e\164\x20\145\156\141\142\x6c\x65\x20\166\151\162\141\163\164\x61\162\x20\x66\157\x72\x20\164\150\145\155\x65\56", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR));
        goto qogqewiwmwiwskgm;
        qwigomakwmyiwkgo:
        $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\x70\x6c\x75\147\x69\156\163", __("\120\154\x75\147\151\x6e\x73", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG));
        goto myoicgcuugciueis;
        myoicgcuugciueis:
        cecuyayqoioasumi:
        goto asmecuqiyyswueqe;
        qgoiooayqmqqsiok:
        if (!$ysseeyogiaqmummy) {
            goto cecuyayqoioasumi;
        }
        goto qwigomakwmyiwkgo;
        asmecuqiyyswueqe:
    }
    
    public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox
    {
        return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\107\145\156\x65\x72\141\x6c", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\104\141\x74\x65\40\46\x20\x54\151\x6d\145", PR__PKG__JALALI), __("\103\157\x6e\x76\x65\162\x74\x20\x64\x61\164\145\x73\x20\x69\x6e\x20\x74\x68\151\x73\x20\163\x65\147\x6d\x65\x6e\164", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\x4c\145\x74\x74\145\x72\x73", PR__PKG__JALALI), __("\x43\x68\x61\x6e\x67\145\x20\141\162\141\x62\151\x63\40\154\x65\x74\x74\x65\162\163\40\x74\157\40\x66\x61\x72\x73\151", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\x4e\165\155\x62\x65\162\163", PR__PKG__JALALI), __("\x43\x6f\156\166\x65\162\x74\x20\x6e\x75\155\142\x65\x72\x73\x20\x69\x6e\x20\x74\x68\x69\163\x20\163\145\x67\x6d\145\156\164", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR);
    }
    
    public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false)
    {
        goto mkwskuycuyguqqok;
        kiqogmwcgcamwiig:
        cuykwgmswkskqkyi:
        goto iomcaiwewsawiamu;
        kwagwqyusyiyoaqs:
        csscmcacoikwsecs:
        goto yowsmsiyimmimemc;
        sciwggaeogcoesiu:
        $wakuamsqaqkweqmy = ["\x56\141\172\x69\x72" => "\x68\x74\164\160\x73\72\x2f\57\143\x64\156\152\163\x2e\143\154\x6f\165\x64\x66\154\141\x72\x65\x2e\x63\157\x6d\57\x61\x6a\x61\x78\57\x6c\151\142\163\x2f\166\141\172\x69\162\55\146\x6f\156\x74\x2f\62\67\x2e\62\56\61\57\x66\157\156\x74\x2d\146\141\143\145\x2e\x63\x73\163", "\x4c\157\164\165\163" => "\x68\x74\164\x70\163\72\x2f\x2f\143\144\x6e\56\x66\157\156\x74\143\144\156\56\151\162\x2f\106\x6f\x6e\x74\x2f\x50\145\162\x73\151\x61\x6e\57\x4c\x6f\x74\x75\163\x2f\x4c\157\164\165\163\56\143\x73\x73", "\131\145\153\141\x6e" => "\150\x74\164\x70\x73\x3a\x2f\x2f\143\x64\x6e\56\x66\157\156\164\x63\x64\156\56\x69\x72\57\106\157\156\x74\57\x50\145\162\163\x69\141\156\57\131\x65\x6b\x61\x6e\x2f\x59\x65\153\141\156\56\x63\x73\x73", "\x53\x61\x68\x65\x6c" => "\x68\164\x74\x70\x73\x3a\57\x2f\143\144\x6e\56\146\x6f\156\x74\x63\x64\156\x2e\x69\162\57\106\157\156\x74\57\x50\145\162\x73\151\x61\156\x2f\x53\141\x68\x65\154\x2f\123\x61\x68\145\x6c\56\x63\163\x73", "\115\151\164\x72\x61" => "\150\164\164\160\x73\72\57\x2f\x63\x64\156\x2e\146\x6f\156\164\143\x64\156\56\151\162\57\106\x6f\156\164\x2f\x50\145\162\163\151\x61\x6e\x2f\115\x69\x74\x72\x61\x2f\x4d\151\x74\x72\141\x2e\x63\163\163", "\x53\141\155\151\x6d" => "\150\x74\x74\x70\x73\72\x2f\57\x63\x64\x6e\56\x66\x6f\156\x74\143\x64\156\56\x69\x72\57\106\x6f\x6e\x74\x2f\x50\145\x72\163\x69\x61\x6e\x2f\x53\x61\155\151\155\57\123\x61\x6d\x69\x6d\x2e\x63\x73\x73", "\x4e\x61\172\x61\156\151\156" => "\150\x74\164\x70\163\x3a\x2f\57\143\144\x6e\56\x66\157\156\164\x63\144\156\x2e\151\x72\x2f\x46\x6f\156\164\57\x50\145\x72\163\x69\141\x6e\x2f\x4e\141\172\x61\156\x69\x6e\57\116\x61\172\141\156\151\x6e\56\x63\x73\x73", "\x53\150\141\x62\x6e\x61\x6d" => "\150\164\x74\160\163\x3a\x2f\57\x63\x64\x6e\56\146\x6f\156\x74\143\144\x6e\56\x69\x72\x2f\x46\157\156\x74\x2f\x50\145\x72\x73\151\x61\156\57\123\150\141\x62\156\141\155\57\x53\x68\x61\x62\x6e\141\x6d\56\x63\x73\163"];
        goto eqkauqciwewmgeoi;
        sqiciiuwmykocycc:
        if (!$iaaeswuecqawokwi) {
            goto kuicqywysciceggs;
        }
        goto eequksumcoogyoem;
        eequksumcoogyoem:
        $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, "\x76\141\x7a\x69\x72");
        goto uukumskkeggaowck;
        yowsmsiyimmimemc:
        $wakuamsqaqkweqmy = ["\x56\x61\172\151\x72" => __("\x56\141\x72\172\x69\x72", PR__PKG__JALALI), "\x4c\x6f\x74\165\163" => __("\x4c\x6f\x74\x75\163", PR__PKG__JALALI), "\x59\145\x6b\x61\x6e" => __("\131\145\153\x61\156", PR__PKG__JALALI), "\x53\141\x68\145\154" => __("\x53\x61\x68\x65\x6c", PR__PKG__JALALI), "\x4d\151\x74\x72\141" => __("\x4d\151\x74\x72\141", PR__PKG__JALALI), "\x53\x61\155\151\155" => __("\x53\x61\155\x69\x6d", PR__PKG__JALALI), "\x4e\141\172\x61\x6e\151\x6e" => __("\116\141\x7a\x61\156\x69\x6e", PR__PKG__JALALI), "\x53\x68\141\x62\156\x61\155" => __("\123\x68\141\142\156\x61\x6d", PR__PKG__JALALI)];
        goto kiqogmwcgcamwiig;
        cggowoquuiwqkyew:
        return $wakuamsqaqkweqmy;
        goto ocokwuuquaokmasc;
        iomcaiwewsawiamu:
        $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy("\147\145\x74\137\x66\157\156\164\x73", $wakuamsqaqkweqmy);
        goto sqiciiuwmykocycc;
        uukumskkeggaowck:
        kuicqywysciceggs:
        goto cggowoquuiwqkyew;
        mkwskuycuyguqqok:
        if ($wmiquokeookimeiw) {
            goto csscmcacoikwsecs;
        }
        goto sciwggaeogcoesiu;
        eqkauqciwewmgeoi:
        goto cuykwgmswkskqkyi;
        goto kwagwqyusyiyoaqs;
        ocokwuuquaokmasc:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4ccec9f71             |
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
    const ADMIN_FONT = "\141\144\155\151\x6e\137\146\x6f\156\164";
    const NUMBERS_DECIMAL_POINT = "\x6e\165\x6d\142\145\x72\x73\137\x64\x65\x63\x69\x6d\141\154\137\160\x6f\x69\x6e\164";
    const NUMBERS_THOUSAND_SEPARATOR = "\156\x75\x6d\x62\145\162\x73\137\x74\x68\x6f\165\163\x61\x6e\144\137\x73\145\160\141\x72\x61\x74\157\x72";
    const VIRASTAR_POST_TYPE_TARGETS = "\x76\151\x72\141\163\x74\x61\162\x5f\160\x6f\163\x74\137\164\171\x70\x65\137\164\141\162\147\145\x74\163";
    const FRONT_CONVERT = "\x66\x72\157\156\x74\x5f\x63\x6f\x6e\x76\x65\162\164";
    const ADMIN_CONVERT = "\141\x64\x6d\151\x6e\137\143\x6f\x6e\166\x65\162\x74";
    const _DATES = "\x5f\144\141\164\x65\x73";
    const _LETTERS = "\137\x6c\x65\164\x74\145\x72\x73";
    const _NUMBERS = "\137\x6e\165\155\142\x65\162\163";
    const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES;
    const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS;
    const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES;
    const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS;
    const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\x70\x65\162\155\x61\x6c\x69\156\153\x5f\144\x61\x74\x65\163";
    
    public function __construct()
    {
        $this->name = self::akuociswqmoigkas();
        parent::__construct();
    }
    public function gogaagekwoisaqgu()
    {
        $this->title = __("\x4a\141\154\x61\x6c\x69", PR__PKG__JALALI);
    }
    public function ecwgiiuacoaokqkw()
    {
        goto qiaqsassksqiuyae;
        qiaqsassksqiuyae:
        $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\107\x65\156\145\162\141\154", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\x5f\x6e\x75\155\x62\145\x72\x73", __("\116\165\155\x62\x65\x72\163", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\145\x63\151\155\x61\x6c\x20\163\x79\x6d\142\157\x6c\72", PR__PKG__JALALI), ["\56" => sprintf("\x25\x73\40\50\x2e\51", __("\x50\157\x69\x6e\x74", PR__PKG__JALALI)), "\57" => sprintf("\x25\163\x20\x28\x2f\x29", __("\x53\x6c\141\x73\x68", PR__PKG__JALALI)), "\x27" => sprintf("\45\163\x20\50\47\x29", __("\x53\x69\x6e\147\x6c\145\40\x71\165\157\164\x65", PR__PKG__JALALI)), "\x2c" => sprintf("\x25\x73\x20\50\54\51", __("\103\157\x6d\x6d\x61", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\x54\150\x6f\x75\x73\x61\156\x64\x20\x73\145\x70\x61\x72\x61\164\x6f\x72\x20\163\x79\155\x62\x6f\x6c\72", PR__PKG__JALALI), ["\54" => sprintf("\45\x73\40\50\x2c\x29", __("\x43\x6f\155\155\141", PR__PKG__JALALI)), "\56" => sprintf("\45\163\40\x28\x2e\51", __("\x50\157\151\156\x74", PR__PKG__JALALI)), "\x20" => sprintf("\45\163\40\50\x20\51", __("\x53\160\x61\143\145", PR__PKG__JALALI)), "\x27" => sprintf("\45\x73\40\50\47\51", __("\123\151\156\x67\154\x65\40\161\165\x6f\x74\x65", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\146\x72\x6f\156\x74", __("\x46\162\157\156\x74\40\x50\141\x67\x65", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\x50\145\x72\x6d\x61\x6c\151\156\x6b\x20\x44\x61\164\x65\x73", PR__PKG__JALALI), __("\103\x6f\x6e\166\x65\162\x74\40\144\x61\164\145\x73\40\x69\x6e\40\160\145\x72\155\141\154\x69\x6e\153\x2e", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\x61\x64\155\x69\x6e", __("\x41\144\x6d\151\156\151\163\x74\162\141\x74\x6f\x72\40\120\141\156\145\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\x41\144\166\141\x6e\143\145\x64", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __("\x46\x6f\156\x74", PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\x69\162\x61\x73\164\x61\162\40\x54\141\x72\x67\x65\x74\x20\120\157\x73\164\40\x54\171\160\145\x73", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\157\x75\x74\x70\165\164" => self::LABELS]), __("\103\150\x6f\151\143\145\40\x70\157\x73\164\x20\164\x79\160\145\163\40\171\157\165\40\167\x61\x6e\164\40\x65\156\x61\142\x6c\145\40\166\x69\162\x61\163\x74\141\162\x20\146\157\x72\40\x74\150\x65\x6d\x65\x2e", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR));
        goto qogqewiwmwiwskgm;
        qogqewiwmwiwskgm:
        $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\x61\154\141\154\151\x5f\x70\x6c\165\x67\151\156\163\137\x74\141\142\x5f\x6d\145\x74\141\137\142\x6f\x78\145\x73"), []);
        goto qgoiooayqmqqsiok;
        qgoiooayqmqqsiok:
        if (!$ysseeyogiaqmummy) {
            goto cecuyayqoioasumi;
        }
        goto qwigomakwmyiwkgo;
        qwigomakwmyiwkgo:
        $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\x70\154\x75\x67\x69\x6e\163", __("\120\x6c\x75\147\x69\x6e\x73", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG));
        goto myoicgcuugciueis;
        myoicgcuugciueis:
        cecuyayqoioasumi:
        goto asmecuqiyyswueqe;
        asmecuqiyyswueqe:
    }
    
    public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox
    {
        return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\x47\x65\x6e\145\x72\x61\x6c", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\x44\x61\x74\x65\x20\x26\40\x54\151\x6d\145", PR__PKG__JALALI), __("\103\x6f\156\x76\145\162\x74\x20\x64\141\164\145\163\x20\151\156\40\x74\150\x69\163\x20\163\145\147\x6d\x65\x6e\164", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\114\x65\164\164\145\x72\163", PR__PKG__JALALI), __("\x43\150\141\156\x67\145\40\x61\x72\x61\142\x69\143\40\154\145\164\x74\145\x72\163\x20\x74\x6f\x20\x66\x61\x72\163\x69", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\x4e\x75\155\x62\145\x72\163", PR__PKG__JALALI), __("\x43\157\156\166\x65\162\x74\40\x6e\x75\x6d\142\145\162\x73\40\151\x6e\x20\x74\x68\x69\163\40\163\145\147\x6d\145\156\x74", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR);
    }
    
    public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false)
    {
        goto mkwskuycuyguqqok;
        iomcaiwewsawiamu:
        $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy("\x67\145\164\x5f\146\x6f\156\164\x73", $wakuamsqaqkweqmy);
        goto sqiciiuwmykocycc;
        yowsmsiyimmimemc:
        $wakuamsqaqkweqmy = ["\x56\x61\172\151\x72" => __("\126\x61\162\x7a\x69\x72", PR__PKG__JALALI), "\114\x6f\x74\x75\163" => __("\x4c\x6f\164\x75\x73", PR__PKG__JALALI), "\x59\145\x6b\x61\156" => __("\131\145\x6b\x61\x6e", PR__PKG__JALALI), "\x53\x61\150\145\154" => __("\x53\141\150\145\154", PR__PKG__JALALI), "\115\x69\164\162\141" => __("\x4d\151\164\162\x61", PR__PKG__JALALI), "\123\x61\x6d\x69\x6d" => __("\x53\x61\x6d\151\x6d", PR__PKG__JALALI), "\x4e\x61\172\x61\156\151\x6e" => __("\x4e\x61\x7a\141\156\x69\156", PR__PKG__JALALI), "\x53\150\x61\x62\x6e\x61\155" => __("\123\x68\x61\x62\x6e\141\x6d", PR__PKG__JALALI)];
        goto kiqogmwcgcamwiig;
        eqkauqciwewmgeoi:
        goto cuykwgmswkskqkyi;
        goto kwagwqyusyiyoaqs;
        uukumskkeggaowck:
        kuicqywysciceggs:
        goto cggowoquuiwqkyew;
        mkwskuycuyguqqok:
        if ($wmiquokeookimeiw) {
            goto csscmcacoikwsecs;
        }
        goto sciwggaeogcoesiu;
        kiqogmwcgcamwiig:
        cuykwgmswkskqkyi:
        goto iomcaiwewsawiamu;
        kwagwqyusyiyoaqs:
        csscmcacoikwsecs:
        goto yowsmsiyimmimemc;
        sciwggaeogcoesiu:
        $wakuamsqaqkweqmy = ["\126\x61\x7a\151\x72" => "\150\164\x74\160\163\72\x2f\57\143\144\156\152\163\56\x63\x6c\x6f\x75\144\146\154\141\x72\145\56\x63\x6f\x6d\57\141\x6a\141\x78\57\x6c\151\x62\x73\x2f\166\141\172\x69\162\55\146\x6f\156\164\57\62\67\56\62\56\61\x2f\x66\x6f\x6e\x74\x2d\146\x61\143\145\x2e\143\163\x73", "\114\157\164\165\163" => "\x68\164\x74\x70\x73\x3a\57\57\143\x64\x6e\56\x66\x6f\156\164\x63\144\156\56\x69\162\57\106\x6f\x6e\164\x2f\120\145\x72\163\x69\141\156\x2f\x4c\x6f\164\165\x73\x2f\x4c\157\164\x75\163\x2e\x63\163\163", "\x59\145\x6b\x61\156" => "\x68\164\164\x70\x73\x3a\57\x2f\x63\144\156\x2e\x66\157\x6e\164\x63\144\156\56\x69\162\x2f\106\x6f\156\164\x2f\120\145\x72\163\151\x61\x6e\57\131\145\153\x61\x6e\57\x59\x65\x6b\x61\156\56\143\x73\163", "\123\141\x68\145\x6c" => "\150\164\x74\160\x73\x3a\x2f\x2f\143\144\156\56\x66\157\x6e\164\143\144\x6e\x2e\x69\x72\57\106\x6f\x6e\x74\x2f\120\x65\162\163\151\141\156\57\123\141\x68\x65\x6c\x2f\123\141\x68\145\154\x2e\x63\x73\x73", "\115\x69\164\162\x61" => "\150\164\x74\160\163\72\57\x2f\143\144\x6e\x2e\x66\157\x6e\x74\143\x64\x6e\56\151\162\x2f\106\x6f\x6e\164\x2f\120\x65\x72\x73\151\141\156\57\115\x69\x74\162\x61\x2f\x4d\151\x74\162\x61\56\143\x73\163", "\x53\141\155\x69\x6d" => "\150\164\x74\160\x73\x3a\x2f\x2f\x63\x64\156\x2e\x66\157\156\164\x63\x64\x6e\x2e\x69\x72\57\x46\157\156\164\x2f\120\x65\162\163\151\141\x6e\x2f\123\x61\155\151\155\57\x53\141\155\151\155\x2e\143\163\x73", "\116\x61\172\141\156\151\156" => "\150\x74\164\160\x73\x3a\57\x2f\x63\x64\156\56\146\157\x6e\164\x63\144\156\56\151\x72\x2f\106\157\156\164\57\120\145\162\163\x69\141\x6e\57\116\141\x7a\x61\156\151\156\57\x4e\x61\172\141\x6e\x69\x6e\56\x63\163\163", "\123\150\141\142\156\141\x6d" => "\150\x74\x74\160\163\x3a\57\x2f\143\x64\x6e\56\146\x6f\156\x74\x63\144\x6e\x2e\151\x72\x2f\x46\157\x6e\164\57\120\x65\162\163\151\x61\x6e\x2f\x53\x68\141\142\x6e\x61\x6d\x2f\123\150\x61\x62\156\x61\x6d\x2e\x63\163\163"];
        goto eqkauqciwewmgeoi;
        sqiciiuwmykocycc:
        if (!$iaaeswuecqawokwi) {
            goto kuicqywysciceggs;
        }
        goto eequksumcoogyoem;
        cggowoquuiwqkyew:
        return $wakuamsqaqkweqmy;
        goto ocokwuuquaokmasc;
        eequksumcoogyoem:
        $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, "\x76\141\172\x69\x72");
        goto uukumskkeggaowck;
        ocokwuuquaokmasc:
    }
}

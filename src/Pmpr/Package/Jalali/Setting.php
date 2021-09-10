<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
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
    const ADMIN_FONT = 'admin_font';
    const NUMBERS_DECIMAL_POINT = 'numbers_decimal_point';
    const NUMBERS_THOUSAND_SEPARATOR = 'numbers_thousand_separator';
    const VIRASTAR_POST_TYPE_TARGETS = 'virastar_post_type_targets';
    const FRONT_CONVERT = 'front_convert';
    const ADMIN_CONVERT = 'admin_convert';
    const _DATES = '_dates';
    const _LETTERS = '_letters';
    const _NUMBERS = '_numbers';
    const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES;
    const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS;
    const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES;
    const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS;
    const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS;
    const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . 'permalink_dates';
    
    public function __construct()
    {
        $this->name = self::akuociswqmoigkas();
        parent::__construct();
    }
    public function gogaagekwoisaqgu()
    {
        $this->title = __('Jalali', PR__PKG__JALALI);
    }
    public function ecwgiiuacoaokqkw()
    {
        $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __('General', PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . '_numbers', __('Numbers', PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __('Decimal symbol:', PR__PKG__JALALI), ["." => sprintf("%s (.)", __('Point', PR__PKG__JALALI)), "/" => sprintf("%s (/)", __('Slash', PR__PKG__JALALI)), "'" => sprintf("%s (')", __('Single quote', PR__PKG__JALALI)), "," => sprintf("%s (,)", __('Comma', PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __('Thousand separator symbol:', PR__PKG__JALALI), ["," => sprintf("%s (,)", __('Comma', PR__PKG__JALALI)), "." => sprintf("%s (.)", __('Point', PR__PKG__JALALI)), " " => sprintf("%s ( )", __('Space', PR__PKG__JALALI)), "'" => sprintf("%s (')", __('Single quote', PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . '_front', __('Front Page', PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __('Permalink Dates', PR__PKG__JALALI), __('Convert dates in permalink.', PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . '_admin', __('Administrator Panel', PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __('Advanced', PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __('Font', PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __('Virastar Target Post Types', PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(['output' => self::LABELS]), __('Choice post types you want enable virastar for theme.', PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR));
        $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('jalali_plugins_tab_meta_boxes'), []);
        if ($ysseeyogiaqmummy) {
            $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . '_plugins', __('Plugins', PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG));
        }
    }
    
    public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox
    {
        return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __('General', PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __('Date & Time', PR__PKG__JALALI), __('Convert dates in this segment', PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __('Letters', PR__PKG__JALALI), __('Change arabic letters to farsi', PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __('Numbers', PR__PKG__JALALI), __('Convert numbers in this segment', PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR);
    }
    
    public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false)
    {
        if ($wmiquokeookimeiw) {
            $wakuamsqaqkweqmy = ['Vazir' => __('Varzir', PR__PKG__JALALI), 'Lotus' => __('Lotus', PR__PKG__JALALI), 'Yekan' => __('Yekan', PR__PKG__JALALI), 'Sahel' => __('Sahel', PR__PKG__JALALI), 'Mitra' => __('Mitra', PR__PKG__JALALI), 'Samim' => __('Samim', PR__PKG__JALALI), 'Nazanin' => __('Nazanin', PR__PKG__JALALI), 'Shabnam' => __('Shabnam', PR__PKG__JALALI)];
        } else {
            $wakuamsqaqkweqmy = ['Vazir' => 'https://cdnjs.cloudflare.com/ajax/libs/vazir-font/27.2.1/font-face.css', 'Lotus' => 'https://cdn.fontcdn.ir/Font/Persian/Lotus/Lotus.css', 'Yekan' => 'https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.css', 'Sahel' => 'https://cdn.fontcdn.ir/Font/Persian/Sahel/Sahel.css', 'Mitra' => 'https://cdn.fontcdn.ir/Font/Persian/Mitra/Mitra.css', 'Samim' => 'https://cdn.fontcdn.ir/Font/Persian/Samim/Samim.css', 'Nazanin' => 'https://cdn.fontcdn.ir/Font/Persian/Nazanin/Nazanin.css', 'Shabnam' => 'https://cdn.fontcdn.ir/Font/Persian/Shabnam/Shabnam.css'];
        }
        $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy('get_fonts', $wakuamsqaqkweqmy);
        if ($iaaeswuecqawokwi) {
            $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, 'vazir');
        }
        return $wakuamsqaqkweqmy;
    }
}

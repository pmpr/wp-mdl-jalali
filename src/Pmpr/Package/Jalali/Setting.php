<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0278e18924             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Setting extends BaseClass { const ADMIN_FONT = "\141\144\155\151\156\x5f\146\157\x6e\x74"; const NUMBERS_DECIMAL_POINT = "\156\165\155\x62\x65\162\163\137\x64\145\143\151\x6d\x61\x6c\137\x70\157\x69\156\x74"; const NUMBERS_THOUSAND_SEPARATOR = "\156\165\x6d\x62\145\162\x73\x5f\164\150\x6f\x75\x73\141\x6e\144\137\x73\x65\x70\x61\162\x61\x74\x6f\162"; const VIRASTAR_POST_TYPE_TARGETS = "\166\151\x72\x61\x73\164\141\x72\137\x70\x6f\163\x74\137\x74\171\x70\145\x5f\x74\141\x72\147\145\164\163"; const FRONT_CONVERT = "\146\162\x6f\x6e\x74\x5f\x63\x6f\156\166\145\162\x74"; const ADMIN_CONVERT = "\141\144\x6d\151\156\x5f\143\x6f\156\x76\145\162\164"; const _DATES = "\137\x64\x61\164\145\163"; const _LETTERS = "\x5f\154\x65\164\x74\x65\162\x73"; const _NUMBERS = "\x5f\156\x75\155\x62\x65\x72\x73"; const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES; const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS; const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS; const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES; const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS; const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS; const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\x70\145\x72\155\141\x6c\151\x6e\153\137\144\x61\x74\145\163"; public function __construct() { $this->name = self::akuociswqmoigkas(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\112\x61\154\x61\x6c\x69", PR__PKG__JALALI); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\x47\x65\x6e\x65\x72\x61\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\x5f\156\165\x6d\x62\x65\x72\163", __("\x4e\x75\x6d\142\x65\162\163", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\x65\x63\x69\155\141\154\x20\x73\171\x6d\142\157\154\72", PR__PKG__JALALI), ["\x2e" => sprintf("\45\x73\x20\x28\56\51", __("\x50\157\x69\x6e\164", PR__PKG__JALALI)), "\x2f" => sprintf("\45\x73\40\x28\57\x29", __("\123\x6c\141\x73\x68", PR__PKG__JALALI)), "\47" => sprintf("\45\163\x20\50\x27\51", __("\123\x69\x6e\147\x6c\x65\40\161\165\157\164\x65", PR__PKG__JALALI)), "\x2c" => sprintf("\x25\163\x20\50\54\x29", __("\103\157\x6d\x6d\141", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\124\x68\157\x75\x73\x61\x6e\x64\40\x73\145\160\x61\162\x61\164\157\162\x20\163\171\155\142\157\154\x3a", PR__PKG__JALALI), ["\x2c" => sprintf("\45\163\40\50\54\x29", __("\x43\157\155\155\x61", PR__PKG__JALALI)), "\x2e" => sprintf("\45\163\x20\50\56\x29", __("\120\x6f\151\x6e\164", PR__PKG__JALALI)), "\x20" => sprintf("\45\163\x20\50\x20\x29", __("\x53\160\141\x63\145", PR__PKG__JALALI)), "\x27" => sprintf("\x25\x73\40\x28\x27\x29", __("\123\151\x6e\x67\154\145\40\x71\x75\157\x74\145", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\146\x72\157\x6e\x74", __("\106\162\157\x6e\164\x20\x50\x61\147\145", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\120\x65\x72\155\141\154\x69\x6e\x6b\x20\104\x61\164\145\x73", PR__PKG__JALALI), __("\x43\157\156\166\x65\x72\x74\x20\144\141\x74\145\x73\40\x69\156\40\x70\145\x72\155\x61\x6c\151\x6e\153\x2e", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\141\144\x6d\151\156", __("\x41\x64\x6d\151\x6e\151\163\164\162\141\x74\x6f\x72\x20\x50\141\x6e\145\154", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\101\x64\x76\141\156\x63\145\144", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\x69\162\141\163\164\x61\x72\x20\x54\141\x72\x67\145\x74\x20\120\x6f\163\x74\40\124\171\160\145\163", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\157\x75\x74\160\165\164" => self::eoaiagsgqsmskugs]), __("\x43\x68\157\151\x63\145\x20\160\x6f\x73\164\40\x74\x79\160\x65\163\x20\171\x6f\165\x20\167\x61\x6e\x74\x20\x65\156\141\x62\x6c\145\40\166\151\x72\x61\163\x74\x61\162\x20\x66\157\162\x20\164\x68\x65\155\x65\56", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR)); $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\141\x6c\141\x6c\x69\x5f\x70\154\165\x67\x69\x6e\x73\x5f\x74\x61\142\137\x6d\x65\x74\141\x5f\x62\x6f\x78\145\163"), []); if (!$ysseeyogiaqmummy) { goto ykomgumacooyomsk; } $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\160\154\x75\x67\x69\x6e\x73", __("\120\x6c\x75\x67\x69\156\163", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); ykomgumacooyomsk: } public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox { return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\x47\x65\x6e\x65\162\x61\154", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\104\x61\x74\145\40\x26\40\x54\x69\155\145", PR__PKG__JALALI), __("\103\x6f\156\x76\145\162\x74\40\x64\141\x74\x65\163\40\151\156\40\164\x68\x69\163\40\163\145\x67\155\x65\x6e\164", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\x4c\145\164\x74\x65\x72\163", PR__PKG__JALALI), __("\x43\150\141\x6e\147\145\40\141\162\x61\x62\151\143\40\x6c\x65\164\164\145\162\x73\x20\164\157\x20\146\x61\162\x73\151", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\116\165\155\142\x65\x72\163", PR__PKG__JALALI), __("\x43\157\x6e\166\x65\x72\164\40\x6e\x75\x6d\x62\x65\162\163\x20\151\156\40\164\x68\x69\x73\x20\163\x65\x67\x6d\x65\x6e\x74", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR); } }

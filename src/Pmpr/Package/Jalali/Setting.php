<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680ecaa1e22             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Setting extends BaseClass { const ADMIN_FONT = "\141\x64\155\151\156\137\x66\x6f\x6e\x74"; const NUMBERS_DECIMAL_POINT = "\x6e\165\155\142\x65\x72\163\x5f\x64\145\143\151\155\141\x6c\x5f\x70\157\151\156\x74"; const NUMBERS_THOUSAND_SEPARATOR = "\x6e\165\x6d\x62\x65\x72\163\x5f\x74\150\x6f\x75\x73\x61\x6e\144\x5f\163\145\x70\141\x72\x61\164\x6f\162"; const VIRASTAR_POST_TYPE_TARGETS = "\166\x69\x72\141\163\x74\x61\x72\x5f\x70\157\163\164\137\164\171\x70\x65\137\164\141\x72\x67\x65\x74\163"; const FRONT_CONVERT = "\146\x72\157\x6e\164\137\143\x6f\156\x76\x65\162\164"; const ADMIN_CONVERT = "\141\144\155\151\x6e\137\x63\157\156\166\145\162\164"; const _DATES = "\x5f\x64\x61\x74\145\163"; const _LETTERS = "\137\x6c\145\164\x74\x65\x72\163"; const _NUMBERS = "\137\156\x75\155\142\145\x72\163"; const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES; const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS; const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS; const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES; const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS; const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS; const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\160\x65\162\x6d\141\x6c\151\x6e\153\137\144\x61\x74\x65\163"; public function __construct() { $this->name = self::akuociswqmoigkas(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x4a\x61\x6c\x61\x6c\151", PR__PKG__JALALI); } public function ecwgiiuacoaokqkw() { goto sgiwoiscywusgmmm; sgiwoiscywusgmmm: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\x47\x65\156\x65\162\x61\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\137\x6e\165\x6d\142\145\162\163", __("\116\x75\155\x62\145\x72\x73", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\x65\x63\151\x6d\x61\x6c\40\163\171\155\142\157\154\x3a", PR__PKG__JALALI), ["\56" => sprintf("\45\163\x20\50\56\51", __("\120\157\x69\156\x74", PR__PKG__JALALI)), "\57" => sprintf("\45\163\40\x28\x2f\x29", __("\x53\154\141\x73\150", PR__PKG__JALALI)), "\47" => sprintf("\x25\163\x20\50\47\51", __("\x53\x69\156\x67\154\145\40\x71\x75\157\164\x65", PR__PKG__JALALI)), "\x2c" => sprintf("\45\x73\x20\x28\x2c\51", __("\x43\x6f\x6d\155\141", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\x54\150\157\x75\x73\x61\156\144\40\x73\145\160\x61\162\141\x74\157\162\40\163\x79\155\142\x6f\x6c\x3a", PR__PKG__JALALI), ["\x2c" => sprintf("\45\x73\40\50\x2c\x29", __("\103\x6f\x6d\x6d\x61", PR__PKG__JALALI)), "\x2e" => sprintf("\x25\163\40\x28\56\x29", __("\120\157\x69\x6e\x74", PR__PKG__JALALI)), "\x20" => sprintf("\x25\x73\40\x28\40\51", __("\x53\160\x61\143\145", PR__PKG__JALALI)), "\47" => sprintf("\45\163\x20\50\47\51", __("\123\x69\156\147\154\x65\40\161\165\x6f\x74\x65", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\146\x72\x6f\156\x74", __("\106\x72\157\156\164\40\x50\141\x67\145", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\x50\145\x72\x6d\141\154\151\x6e\153\x20\x44\141\x74\x65\x73", PR__PKG__JALALI), __("\103\157\156\x76\145\x72\x74\40\144\141\x74\145\x73\x20\151\156\x20\x70\145\x72\155\141\x6c\x69\156\x6b\56", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\141\x64\x6d\151\x6e", __("\x41\x64\x6d\x69\x6e\x69\163\164\x72\x61\164\157\162\40\x50\141\156\145\154", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\x41\x64\x76\x61\156\143\x65\x64", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __("\106\157\156\x74", PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\x69\x72\141\163\x74\x61\162\40\x54\x61\162\x67\x65\164\x20\120\157\x73\164\x20\x54\x79\x70\x65\x73", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\157\165\164\160\x75\x74" => self::LABELS]), __("\x43\150\157\x69\x63\145\40\x70\157\163\x74\40\x74\171\x70\145\163\x20\x79\157\x75\40\167\x61\156\164\x20\x65\156\141\142\x6c\145\x20\x76\151\162\x61\x73\164\141\162\40\x66\157\x72\x20\x74\x68\145\155\x65\x2e", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR)); goto skuqigsokaguscas; wmumywgyyeagqoeq: qmoocweoekqueuyy: goto smcguieygyqcaqgs; mmgmqogugasaqkgg: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\x70\x6c\x75\x67\x69\156\x73", __("\120\x6c\165\x67\x69\156\x73", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto wmumywgyyeagqoeq; quyogmwugsyoaaiu: if (!$ysseeyogiaqmummy) { goto qmoocweoekqueuyy; } goto mmgmqogugasaqkgg; skuqigsokaguscas: $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\141\154\141\154\x69\x5f\160\154\x75\x67\151\x6e\163\137\x74\141\142\137\155\x65\x74\x61\x5f\142\157\170\x65\x73"), []); goto quyogmwugsyoaaiu; smcguieygyqcaqgs: } public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox { return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\107\145\x6e\145\162\x61\x6c", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\x44\x61\164\x65\40\46\40\x54\x69\155\145", PR__PKG__JALALI), __("\103\157\156\166\145\162\164\x20\144\141\x74\145\x73\x20\x69\x6e\40\x74\x68\151\x73\40\x73\145\147\155\145\x6e\x74", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\114\x65\x74\164\x65\x72\163", PR__PKG__JALALI), __("\103\x68\141\156\x67\145\x20\x61\162\141\x62\x69\143\x20\154\145\164\x74\145\162\163\40\164\157\x20\146\141\162\163\x69", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\x4e\x75\x6d\142\x65\x72\163", PR__PKG__JALALI), __("\103\157\156\166\x65\162\164\x20\x6e\x75\x6d\142\x65\x72\x73\x20\x69\156\40\x74\150\151\163\40\163\145\147\x6d\x65\x6e\x74", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR); } public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false) { goto eyiwqgqcsqakwqss; iauwuugggmegwisk: $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy("\147\145\x74\137\146\157\156\164\x73", $wakuamsqaqkweqmy); goto aukucaieceiwesmm; kqyoakickmseyyeq: $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, "\166\x61\172\x69\162"); goto micceocwuwkyusic; iwueukqcywkiyqge: return $wakuamsqaqkweqmy; goto ykwasaaoeeiuomim; ooqksueucyagyuoe: mgcuiguaomoqwwwm: goto osmmoyqkqoucsgow; osmmoyqkqoucsgow: $wakuamsqaqkweqmy = ["\126\x61\172\151\x72" => __("\126\x61\x72\x7a\151\x72", PR__PKG__JALALI), "\x4c\x6f\164\165\163" => __("\114\157\x74\x75\x73", PR__PKG__JALALI), "\131\145\153\x61\156" => __("\x59\145\153\141\x6e", PR__PKG__JALALI), "\x53\x61\150\x65\154" => __("\x53\x61\150\145\154", PR__PKG__JALALI), "\115\151\164\162\141" => __("\x4d\151\x74\162\x61", PR__PKG__JALALI), "\x53\x61\x6d\151\155" => __("\123\x61\155\151\x6d", PR__PKG__JALALI), "\x4e\141\172\141\156\151\x6e" => __("\x4e\141\172\x61\x6e\x69\156", PR__PKG__JALALI), "\x53\150\141\x62\156\141\x6d" => __("\123\x68\x61\142\156\141\155", PR__PKG__JALALI)]; goto wgiygcmqaokywuqa; yssqmyoaokkksukc: goto eoyiumycaigawmmc; goto ooqksueucyagyuoe; aukucaieceiwesmm: if (!$iaaeswuecqawokwi) { goto yuoeumyiuqkuouey; } goto kqyoakickmseyyeq; wgiygcmqaokywuqa: eoyiumycaigawmmc: goto iauwuugggmegwisk; sckioayasmkcoeoo: $wakuamsqaqkweqmy = ["\126\141\172\151\x72" => "\150\x74\164\x70\163\72\57\x2f\143\144\x6e\152\163\x2e\143\x6c\157\x75\144\146\x6c\x61\x72\145\x2e\x63\x6f\x6d\x2f\x61\x6a\x61\x78\x2f\154\x69\142\163\x2f\166\141\x7a\x69\162\x2d\146\157\156\164\x2f\62\67\x2e\62\x2e\x31\57\x66\x6f\x6e\x74\x2d\x66\x61\x63\145\56\143\x73\x73", "\114\x6f\x74\165\x73" => "\150\x74\164\160\163\72\x2f\57\143\x64\156\56\146\157\156\164\x63\x64\156\x2e\151\162\x2f\106\x6f\x6e\164\x2f\x50\145\x72\x73\x69\x61\156\x2f\114\157\164\165\x73\x2f\114\x6f\164\x75\x73\56\143\163\x73", "\131\145\x6b\x61\156" => "\150\x74\x74\x70\163\72\x2f\57\x63\144\x6e\x2e\146\x6f\x6e\164\x63\x64\156\x2e\x69\x72\57\x46\157\156\164\57\120\x65\162\163\x69\x61\x6e\57\x59\x65\x6b\x61\156\x2f\131\145\153\x61\x6e\x2e\x63\163\x73", "\x53\x61\x68\145\x6c" => "\x68\x74\x74\160\163\72\x2f\57\x63\144\x6e\x2e\146\x6f\x6e\164\143\144\x6e\56\151\x72\57\106\157\156\x74\x2f\x50\145\162\163\x69\x61\156\57\x53\x61\150\145\154\x2f\x53\x61\150\x65\154\x2e\143\163\163", "\x4d\151\164\x72\141" => "\x68\x74\164\x70\163\72\x2f\57\143\x64\156\x2e\146\157\156\x74\143\144\x6e\x2e\x69\162\x2f\x46\x6f\x6e\164\57\x50\x65\x72\x73\x69\x61\156\x2f\x4d\x69\x74\x72\x61\x2f\115\x69\x74\162\x61\x2e\x63\163\x73", "\123\141\x6d\151\x6d" => "\150\x74\x74\x70\163\72\57\x2f\x63\144\156\x2e\x66\157\156\164\x63\x64\156\x2e\x69\x72\x2f\x46\157\x6e\164\x2f\120\x65\162\163\151\x61\156\57\x53\141\x6d\x69\x6d\x2f\123\x61\x6d\x69\x6d\56\x63\163\163", "\116\141\172\141\x6e\151\156" => "\x68\164\164\x70\x73\72\57\57\143\x64\x6e\56\x66\157\x6e\x74\x63\x64\x6e\x2e\151\162\57\x46\x6f\156\164\57\x50\x65\x72\x73\151\x61\x6e\x2f\x4e\141\172\x61\x6e\x69\x6e\57\x4e\x61\172\141\156\x69\x6e\56\x63\163\x73", "\x53\x68\x61\142\x6e\x61\x6d" => "\x68\x74\x74\x70\163\72\57\57\143\x64\x6e\x2e\146\x6f\156\164\143\x64\156\x2e\151\162\57\106\x6f\x6e\164\x2f\120\145\x72\163\151\141\x6e\57\123\150\x61\142\x6e\141\x6d\x2f\x53\150\141\x62\156\x61\x6d\56\x63\163\x73"]; goto yssqmyoaokkksukc; micceocwuwkyusic: yuoeumyiuqkuouey: goto iwueukqcywkiyqge; eyiwqgqcsqakwqss: if ($wmiquokeookimeiw) { goto mgcuiguaomoqwwwm; } goto sckioayasmkcoeoo; ykwasaaoeeiuomim: } }

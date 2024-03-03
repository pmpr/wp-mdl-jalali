<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e50a1b649a4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\141") { return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!("\x63" !== strtolower($saqmwwmqiwmkiwaa))) { goto coywmiyqgsweuiic; } if (is_int($cqgoimumaewouews)) { goto qwcegcuowwgiccos; } if (is_numeric($cqgoimumaewouews)) { goto twkmiuomimomscew; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto kooskuwkuayiuose; twkmiuomimomscew: $yiuogaeewyockeak = (int) $cqgoimumaewouews; kooskuwkuayiuose: goto qcessicwuikwqsis; qwcegcuowwgiccos: $yiuogaeewyockeak = $cqgoimumaewouews; qcessicwuikwqsis: if ($saqmwwmqiwmkiwaa) { goto yssscwioiyygssec; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->isiuiegyqiomccsw(); yssscwioiyygssec: if (!$yiuogaeewyockeak) { goto ieumumsgyguceusy; } $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $this->ewamemuocoskqiuu($locale)); ieumumsgyguceusy: coywmiyqgsweuiic: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\141", $eqmcogmcemgigckm = "\331\253") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }

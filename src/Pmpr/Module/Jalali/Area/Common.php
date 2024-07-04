<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687080c4527c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\x66\141") { return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!("\x63" !== strtolower($saqmwwmqiwmkiwaa))) { goto quwcqmyokicssyew; } if (is_int($cqgoimumaewouews)) { goto wwkgkaecgiwggcck; } if (is_numeric($cqgoimumaewouews)) { goto gygawoqywkukmqee; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto kciouyuaqkyqomam; gygawoqywkukmqee: $yiuogaeewyockeak = (int) $cqgoimumaewouews; kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $yiuogaeewyockeak = $cqgoimumaewouews; umgaesggesswoaqe: if ($saqmwwmqiwmkiwaa) { goto qsygcycwieukkgwc; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->isiuiegyqiomccsw(); qsygcycwieukkgwc: if (!$yiuogaeewyockeak) { goto kiwqkcaekqqyuegq; } $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $this->ewamemuocoskqiuu($locale)); kiwqkcaekqqyuegq: quwcqmyokicssyew: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\141", $eqmcogmcemgigckm = "\331\253") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }

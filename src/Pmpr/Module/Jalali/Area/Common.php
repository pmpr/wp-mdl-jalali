<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8eda2905             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\141") { return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!("\143" !== strtolower($saqmwwmqiwmkiwaa))) { goto wwkgkaecgiwggcck; } if (is_int($cqgoimumaewouews)) { goto oouoqimaaqcmccay; } if (is_numeric($cqgoimumaewouews)) { goto siqagquguiemuoku; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto ycakugokkqkuqyiu; siqagquguiemuoku: $yiuogaeewyockeak = (int) $cqgoimumaewouews; ycakugokkqkuqyiu: goto sycygoiaiqqageym; oouoqimaaqcmccay: $yiuogaeewyockeak = $cqgoimumaewouews; sycygoiaiqqageym: if ($saqmwwmqiwmkiwaa) { goto gygawoqywkukmqee; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->isiuiegyqiomccsw(); gygawoqywkukmqee: if (!$yiuogaeewyockeak) { goto kciouyuaqkyqomam; } $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $this->ewamemuocoskqiuu($locale)); kciouyuaqkyqomam: wwkgkaecgiwggcck: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\141", $eqmcogmcemgigckm = "\331\253") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }

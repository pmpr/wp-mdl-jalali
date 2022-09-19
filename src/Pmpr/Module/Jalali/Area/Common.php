<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             632819e704dc8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\141") { if ($locale) { goto kooskuwkuayiuose; } $locale = DecoratorI18N::iyouigcsiacgwksc(); kooskuwkuayiuose: return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = "\x66\x61") { if (is_int($cqgoimumaewouews)) { goto yssscwioiyygssec; } if (is_numeric($cqgoimumaewouews)) { goto qwcegcuowwgiccos; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto qcessicwuikwqsis; qwcegcuowwgiccos: $yiuogaeewyockeak = (int) $cqgoimumaewouews; qcessicwuikwqsis: goto ieumumsgyguceusy; yssscwioiyygssec: $yiuogaeewyockeak = $cqgoimumaewouews; ieumumsgyguceusy: if ($saqmwwmqiwmkiwaa) { goto coywmiyqgsweuiic; } $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw(); coywmiyqgsweuiic: if (!$yiuogaeewyockeak) { goto umgaesggesswoaqe; } $goecwaaykqoaaagg = DecoratorQuery::goecwaaykqoaaagg(); if (empty($locale) && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto kciouyuaqkyqomam; } if (empty($locale) && $goecwaaykqoaaagg) { goto sycygoiaiqqageym; } if (empty($locale) && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto ycakugokkqkuqyiu; } if (!(empty($locale) && !$goecwaaykqoaaagg)) { goto siqagquguiemuoku; } $locale = "\x65\x6e"; siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $locale = "\146\141"; oouoqimaaqcmccay: goto gygawoqywkukmqee; sycygoiaiqqageym: $locale = "\145\x6e"; gygawoqywkukmqee: goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $locale = "\x66\141"; wwkgkaecgiwggcck: $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $locale); umgaesggesswoaqe: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\x61", $eqmcogmcemgigckm = "\xd9\253") { if ($locale) { goto qsygcycwieukkgwc; } $locale = DecoratorI18N::iyouigcsiacgwksc(); qsygcycwieukkgwc: return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }
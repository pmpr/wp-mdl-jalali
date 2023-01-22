<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccfb819dc4d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\x61") { if ($locale) { goto uqqaiagaeqgqgaiy; } $locale = DecoratorI18N::iyouigcsiacgwksc(); uqqaiagaeqgqgaiy: return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = "\146\x61") { if (is_int($cqgoimumaewouews)) { goto aegysmeecgcgayyw; } if (is_numeric($cqgoimumaewouews)) { goto esuiysskoweawsue; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto gaomwagkcciesyqy; esuiysskoweawsue: $yiuogaeewyockeak = (int) $cqgoimumaewouews; gaomwagkcciesyqy: goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $yiuogaeewyockeak = $cqgoimumaewouews; suqkuqygkkgwyaie: if ($saqmwwmqiwmkiwaa) { goto soaccwqimeksgwiw; } $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw(); soaccwqimeksgwiw: if (!$yiuogaeewyockeak) { goto wmywuusgukmmaams; } $goecwaaykqoaaagg = DecoratorQuery::goecwaaykqoaaagg(); if (empty($locale) && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto ewymsmkkiksgwysk; } if (empty($locale) && $goecwaaykqoaaagg) { goto syiqkaasoueowwui; } if (empty($locale) && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto skkamseieeusycye; } if (!(empty($locale) && !$goecwaaykqoaaagg)) { goto wiysogeqqwgioyka; } $locale = "\x65\156"; wiysogeqqwgioyka: goto cgiscsqwwgqqaeqi; skkamseieeusycye: $locale = "\146\x61"; cgiscsqwwgqqaeqi: goto giaacoqqqsekcayy; syiqkaasoueowwui: $locale = "\x65\156"; giaacoqqqsekcayy: goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $locale = "\x66\141"; cmegwsegsosyqcai: $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $locale); wmywuusgukmmaams: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\x61", $eqmcogmcemgigckm = "\331\253") { if ($locale) { goto gkyawqqcmigqgaiq; } $locale = DecoratorI18N::iyouigcsiacgwksc(); gkyawqqcmigqgaiq: return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }

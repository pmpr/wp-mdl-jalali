<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6687080c4527c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ewamemuocoskqiuu($locale) : string { if (in_array($locale, ["\x65\156", "\x66\x61"])) { goto qwigomakwmyiwkgo; } $locale = false; qwigomakwmyiwkgo: $goecwaaykqoaaagg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg(); if (!$locale && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto mkwskuycuyguqqok; } if (!$locale && $goecwaaykqoaaagg) { goto cuykwgmswkskqkyi; } if (!$locale && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto asmecuqiyyswueqe; } if (!(!$locale && !$goecwaaykqoaaagg)) { goto myoicgcuugciueis; } $locale = "\145\156"; myoicgcuugciueis: goto csscmcacoikwsecs; asmecuqiyyswueqe: $locale = "\146\x61"; csscmcacoikwsecs: goto kuicqywysciceggs; cuykwgmswkskqkyi: $locale = "\145\156"; kuicqywysciceggs: goto sciwggaeogcoesiu; mkwskuycuyguqqok: $locale = "\146\x61"; sciwggaeogcoesiu: return $locale; } public function moeogyisgeuwoeea() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->weysguygiseoukqw(Setting::mequmaoyiwsmgmsi, [])); } }

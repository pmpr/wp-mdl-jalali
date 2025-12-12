<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             693b6081eda89             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function ewamemuocoskqiuu($locale) : string { if (!in_array($locale, ['en', 'fa'])) { $locale = false; } $goecwaaykqoaaagg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg(); if (!$locale && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { $locale = 'fa'; } else { if (!$locale && $goecwaaykqoaaagg) { $locale = 'en'; } else { if (!$locale && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { $locale = 'fa'; } else { if (!$locale && !$goecwaaykqoaaagg) { $locale = 'en'; } } } } return $locale; } public function ksskkagoieiyuuwe($locale = null) : bool { if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return in_array($locale, ['fa', 'fa_IR'], true); } public function qeegmakycwwycmcm($locale = null) : bool { if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return in_array($locale, ['en', 'en_US', 'en_UK'], true); } }

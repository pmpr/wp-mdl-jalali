<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d860446cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\56"; const mguscayoesieyygm = ["\331\xaa", "\333\xb0", "\xdb\261", "\xdb\xb2", "\333\263", "\xdb\xb4", "\xdb\xb5", "\333\266", "\333\xb7", "\xdb\270", "\xdb\271", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\45", "\x30", "\x31", "\x32", "\63", "\64", "\65", "\66", "\67", "\70", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x74\x72\x61\x6e\x73\x5f\x77\x6f\x72\144", [$this, "\164\162\141\156\163\x6c\141\164\x65"], 10, 2)->aqaqisyssqeomwom("\164\x72\141\156\x73\x5f\x6e\x75\x6d\x62\x65\162", [$this, "\151\145\141\x63\157\x77\x73\x73\x65\155\145\x75\145\x77\141\147"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($this->ksskkagoieiyuuwe($locale)) { $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); } else { $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\331\x8a", "\xd9\203", "\330\xa9", "\331\xa4", "\xd9\245", "\331\246"], ["\xdb\x8c", "\332\xa9", "\xd9\207", "\xdb\xb4", "\xdb\xb5", "\333\xb6"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { if ($this->ksskkagoieiyuuwe()) { $sociqikgoyemqaac = preg_replace_callback("\57\x28\77\72\46\43\x5c\144\173\x32\x2c\64\175\x3b\x29\x7c\50\x5c\144\53\133\134\x2e\x5c\x64\x5d\x2a\51\174\50\77\x3a\133\141\55\x7a\135\50\x3f\72\133\x5c\170\x30\60\55\x5c\x78\63\102\x5c\170\63\104\55\134\x78\x37\106\x5d\x7c\74\134\163\52\133\x5e\76\135\53\76\x29\52\x29\x7c\74\134\163\52\x5b\136\76\x5d\x2b\x3e\57\x69", [$this, "\163\163\x71\x6f\161\171\163\x75\x75\x61\x77\145\157\x73\167\x61"], $sociqikgoyemqaac); } return $sociqikgoyemqaac; } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $meyiiwcswqmuggyg[1] ?? false; if ($eusockqasqqmoess !== false) { $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); } else { $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); } return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = '', $eqmcogmcemgigckm = "\x2c") { $ksskkagoieiyuuwe = $this->ksskkagoieiyuuwe($locale); if ($ksskkagoieiyuuwe) { $eqmcogmcemgigckm = "\331\xab"; } $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff95aa9ccda             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\156\151\164"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\x65\164\137\x74\145\162\x6d", [$this, "\x6b\143\153\x6f\x67\x71\x6b\x69\171\x63\161\x65\165\x6d\x6f\x61"])->cecaguuoecmccuse("\147\x65\164\137\143\157\155\155\145\156\x74", [$this, "\163\x65\155\x6d\x73\x6b\165\x6b\141\145\171\145\x6f\x75\x75\x65"])->cecaguuoecmccuse("\154\157\143\x61\154\x65", [$this, "\165\x71\153\x69\171\x65\x75\x65\x67\151\141\143\x77\165\x71\161"], 10)->cecaguuoecmccuse("\147\x65\x74\137\x74\x68\x65\x5f\x64\x61\164\145", [$this, "\155\151\x6b\141\151\x75\163\x67\151\155\x6f\145\153\x71\x79\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto kooskuwkuayiuose; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto eyiamcekkgkiawqy; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); eyiamcekkgkiawqy: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto twkmiuomimomscew; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); twkmiuomimomscew: kooskuwkuayiuose: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\x6d"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\x79\145\x61\x72"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\x6d\x6f\156\164\x68\156\x75\x6d"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\144\x61\171"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\x68\x6f\165\162"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\155\151\156\x75\164\145"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\145\143\157\156\144"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto qwcegcuowwgiccos; } $gcisockiummsmcag = preg_replace("\57\x5b\x5e\60\x2d\71\x5d\57", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); qwcegcuowwgiccos: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto qcessicwuikwqsis; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\131\x45\x41\x52\134\x28\x5b\x5c\163\x5d\52{$aasascamegmwqmqk}\x2e\x70\157\x73\164\137\144\141\x74\145\133\x5c\x73\x5d\x2a\134\x29\133\134\x73\x5d\52\75\x5b\x5c\163\135\52" . $usqcwoasmiiomgks . "\57", "\57\104\101\x59\x4f\106\x4d\117\x4e\x54\x48\x5c\50\133\134\x73\x5d\52{$aasascamegmwqmqk}\134\x2e\160\x6f\x73\164\137\144\141\164\x65\133\134\163\x5d\x2a\x5c\51\133\134\163\x5d\52\x3d\133\x5c\x73\x5d\x2a" . $oqkwcmcmimkmkwgk . "\57", "\x2f\x4d\117\x4e\x54\110\134\50\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\56\160\157\x73\164\137\x64\x61\164\145\133\x5c\x73\135\52\134\x29\x5b\x5c\163\135\x2a\75\133\x5c\x73\x5d\x2a" . $mwemskcucwsyycwm . "\x2f", "\57\x48\117\125\122\x5c\x28\x5b\134\163\135\52{$aasascamegmwqmqk}\x2e\x70\157\x73\164\137\144\141\164\x65\133\x5c\163\135\x2a\134\x29\x5b\x5c\x73\x5d\52\75\x5b\134\163\135\52" . $ygykagaqyuawwiyo . "\x2f", "\x2f\x4d\x49\116\125\124\105\x5c\50\133\134\163\135\52{$aasascamegmwqmqk}\56\x70\157\x73\164\137\x64\x61\x74\145\133\134\163\135\x2a\134\51\x5b\134\x73\x5d\x2a\x3d\x5b\x5c\163\135\52" . $sckumcuqemuukces . "\x2f", "\57\123\x45\103\x4f\116\104\x5c\50\x5b\134\163\x5d\52{$aasascamegmwqmqk}\x2e\x70\x6f\x73\x74\x5f\x64\141\x74\x65\133\134\163\x5d\52\x5c\51\x5b\134\x73\x5d\52\75\133\x5c\x73\x5d\x2a" . $gcegymooyemmaysk . "\x2f"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\x3d\x31", $icsywsyukqcciiky); qcessicwuikwqsis: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc()); if (!$wp_locale instanceof WP_Locale) { goto coywmiyqgsweuiic; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto yssscwioiyygssec; } $wp_locale->number_format["\x74\x68\x6f\165\163\141\156\144\163\137\x73\x65\x70"] = $geqcesmqwkeayoiu; yssscwioiyygssec: if (!$qawscmyuiuymkscy) { goto ieumumsgyguceusy; } $wp_locale->number_format["\x64\x65\143\x69\x6d\141\154\x5f\x70\x6f\151\x6e\164"] = $qawscmyuiuymkscy; ieumumsgyguceusy: coywmiyqgsweuiic: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto siqagquguiemuoku; } $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto ycakugokkqkuqyiu; siqagquguiemuoku: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; ycakugokkqkuqyiu: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto gygawoqywkukmqee; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto oouoqimaaqcmccay; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); oouoqimaaqcmccay: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto sycygoiaiqqageym; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); sycygoiaiqqageym: gygawoqywkukmqee: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto kciouyuaqkyqomam; } $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; wwkgkaecgiwggcck: return $aqqmosqmsuueyaes; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\x66\141\137\111\x52")) { goto umgaesggesswoaqe; } $locale = "\x66\x61\x5f\x49\122"; umgaesggesswoaqe: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto qsygcycwieukkgwc; } qsygcycwieukkgwc: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }

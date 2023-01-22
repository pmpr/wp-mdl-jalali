<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf2ff93361             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x69\156\151\164"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\x5f\x74\145\162\x6d", [$this, "\153\x63\153\x6f\x67\x71\x6b\151\x79\x63\161\x65\x75\155\x6f\x61"])->cecaguuoecmccuse("\147\x65\x74\x5f\143\157\x6d\x6d\145\156\164", [$this, "\x73\x65\x6d\155\163\153\165\x6b\141\145\x79\x65\x6f\x75\165\145"])->cecaguuoecmccuse("\x6c\157\143\x61\x6c\x65", [$this, "\165\x71\153\151\x79\145\x75\x65\x67\x69\141\x63\x77\165\161\161"], 10)->cecaguuoecmccuse("\147\145\164\x5f\x74\x68\145\x5f\x64\141\164\x65", [$this, "\x6d\151\153\x61\151\165\163\147\x69\155\157\145\153\161\x79\145"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto eegqyykygiccaoeo; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto qkcyqocqqwmqgqww; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); qkcyqocqqwmqgqww: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto miyqyeiwquwsacsm; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); miyqyeiwquwsacsm: eegqyykygiccaoeo: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $gcisockiummsmcag = ManipulateDatabase::get("\155"); $usqcwoasmiiomgks = ManipulateDatabase::get("\x79\x65\x61\x72"); $mwemskcucwsyycwm = ManipulateDatabase::get("\155\x6f\156\x74\x68\x6e\165\155"); $oqkwcmcmimkmkwgk = ManipulateDatabase::get("\144\141\x79"); $ygykagaqyuawwiyo = ManipulateDatabase::get("\150\157\x75\x72"); $sckumcuqemuukces = ManipulateDatabase::get("\155\151\156\165\164\145"); $gcegymooyemmaysk = ManipulateDatabase::get("\163\145\x63\x6f\156\x64"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto ywqgcegomwaiuquc; } $gcisockiummsmcag = preg_replace("\57\133\x5e\60\55\71\x5d\x2f", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); ywqgcegomwaiuquc: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto wmmggowmigekyoso; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\x2f\x59\x45\x41\122\134\x28\133\x5c\x73\135\x2a{$aasascamegmwqmqk}\56\160\157\x73\x74\137\144\x61\x74\145\x5b\x5c\x73\x5d\x2a\x5c\51\133\x5c\x73\x5d\x2a\x3d\133\x5c\x73\x5d\x2a" . $usqcwoasmiiomgks . "\x2f", "\57\x44\101\x59\117\106\115\x4f\116\x54\x48\x5c\50\133\x5c\163\135\52{$aasascamegmwqmqk}\x5c\56\x70\x6f\x73\164\137\144\x61\x74\145\x5b\x5c\x73\x5d\x2a\134\x29\133\134\163\135\52\x3d\x5b\x5c\x73\135\52" . $oqkwcmcmimkmkwgk . "\57", "\x2f\115\x4f\116\124\110\x5c\50\133\134\x73\135\x2a{$aasascamegmwqmqk}\56\160\x6f\x73\x74\x5f\144\x61\x74\x65\133\134\163\x5d\x2a\134\51\133\134\163\x5d\52\x3d\133\x5c\163\x5d\52" . $mwemskcucwsyycwm . "\57", "\57\x48\117\x55\122\134\x28\x5b\134\163\135\52{$aasascamegmwqmqk}\56\160\157\163\164\x5f\144\x61\164\x65\x5b\x5c\x73\135\52\134\x29\133\134\163\x5d\x2a\x3d\x5b\x5c\163\x5d\x2a" . $ygykagaqyuawwiyo . "\57", "\57\115\x49\x4e\125\x54\x45\134\x28\133\x5c\163\x5d\52{$aasascamegmwqmqk}\56\160\157\163\x74\x5f\144\141\164\x65\x5b\134\x73\135\52\134\51\x5b\134\163\135\x2a\x3d\133\134\x73\x5d\x2a" . $sckumcuqemuukces . "\x2f", "\57\123\x45\103\117\x4e\x44\x5c\50\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\163\164\x5f\144\141\164\145\x5b\134\x73\x5d\x2a\x5c\51\x5b\134\163\x5d\x2a\75\133\134\x73\x5d\x2a" . $gcegymooyemmaysk . "\x2f"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\x31\x3d\x31", $icsywsyukqcciiky); wmmggowmigekyoso: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = DecoratorUser::iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto suswcqoyyqkkquuo; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto soqqemyioggmoakg; } $wp_locale->number_format["\x74\150\157\165\163\x61\156\x64\x73\x5f\x73\145\x70"] = $geqcesmqwkeayoiu; soqqemyioggmoakg: if (!$qawscmyuiuymkscy) { goto acaqummmoyiemqss; } $wp_locale->number_format["\x64\145\x63\x69\155\141\x6c\x5f\160\157\x69\x6e\164"] = $qawscmyuiuymkscy; acaqummmoyiemqss: suswcqoyyqkkquuo: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto eeqesooyqagwawae; } $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; oqugqwcyomiaaoqu: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto hoeeyiowekaeemko; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto foeeqckqsyockkak; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); foeeqckqsyockkak: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto iekumemscwieugqw; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); iekumemscwieugqw: hoeeyiowekaeemko: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto kymkucucyeoeikim; } $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; usquiuuyiyqaeyiu: return $aqqmosqmsuueyaes; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\x66\x61\x5f\111\122")) { goto qicwaskssogcokgm; } $locale = "\146\x61\x5f\111\122"; qicwaskssogcokgm: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto uguigkcmukuouway; } uguigkcmukuouway: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }

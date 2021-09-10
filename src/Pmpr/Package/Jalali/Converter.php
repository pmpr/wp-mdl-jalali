<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4f9d2ecb0             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Converter extends Container
{
    
    protected ?Translator $translator = null;
    
    public function __construct()
    {
        $this->translator = Translator::symcgieuakksimmu();
        parent::__construct();
    }
    
    public function kkkikouyuqigocai() : ?Translator
    {
        return $this->translator;
    }
    
    public function eiaysiqcywusmwoe($mwemskcucwsyycwm)
    {
        $qcgkuqesqqymcuui = $this->yqeyqmywaiwkkcao(["\x6d\155" => (int) $mwemskcucwsyycwm]);
        return ManipulateArray::get($qcgkuqesqqymcuui, "\x6d\x6d", $qcgkuqesqqymcuui);
    }
    
    public function ogoquecgeowwigwk($sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg) : bool
    {
        goto yiwiqaqmwiogawym;
        yiwiqaqmwiogawym:
        [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\137", $this->msywmyaoqmaegsuy($sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\x5f" . $yywykyucyekisogg));
        goto goacqqsgaaigyuaw;
        goacqqsgaaigyuaw:
        $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5);
        goto meawswgwagoqgkye;
        meawswgwagoqgkye:
        return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1);
        goto wcesymwqykqoyuqk;
        wcesymwqykqoyuqk:
    }
    
    public function yqeyqmywaiwkkcao($uomewyckeuqoqocu, $ugkymqicywakcemw = '')
    {
        goto uguigkcmukuouway;
        uqqaiagaeqgqgaiy:
        usqgaogkqgemuima:
        goto esuiysskoweawsue;
        esuiysskoweawsue:
        return $ugkymqicywakcemw === '' ? $uomewyckeuqoqocu : implode($ugkymqicywakcemw, $uomewyckeuqoqocu);
        goto gaomwagkcciesyqy;
        uguigkcmukuouway:
        foreach ($uomewyckeuqoqocu as $sqeykgyoooqysmca => $mqwsmsykyouoomgm) {
            goto foeeqckqsyockkak;
            kymkucucyeoeikim:
            egasokooagakisiy:
            goto usquiuuyiyqaeyiu;
            iekumemscwieugqw:
            switch ($sqeykgyoooqysmca) {
                case "\163\x73":
                    goto goeoymmqqqeeoime;
                    coywmiyqgsweuiic:
                    goto egasokooagakisiy;
                    goto siqagquguiemuoku;
                    eiawsoasmscmqswa:
                    $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1);
                    goto ickcmqoiosquugwe;
                    twkmiuomimomscew:
                    qgegkeomwscwwiuw:
                    goto kooskuwkuayiuose;
                    goeoymmqqqeeoime:
                    $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm);
                    goto eiawsoasmscmqswa;
                    eyiamcekkgkiawqy:
                    goto qmiwsequckckoaei;
                    goto twkmiuomimomscew;
                    kooskuwkuayiuose:
                    $kckiiskiksiousiy = '';
                    goto qwcegcuowwgiccos;
                    ygkcacsyyckescqs:
                    $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1);
                    goto cuoqqgaygogsmmic;
                    sukskmcwsoysiuqu:
                    $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise];
                    goto igymseewwyiocoug;
                    qcessicwuikwqsis:
                    $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10];
                    goto yssscwioiyygssec;
                    qwcegcuowwgiccos:
                    $ygaqkccwykqkamoo = [__("\x54\145\156", PR__PKG__JALALI), __("\105\x6c\x65\x76\x65\x6e", PR__PKG__JALALI), __("\124\167\145\154\166\x65", PR__PKG__JALALI), __("\124\150\151\x72\164\145\145\x6e", PR__PKG__JALALI), __("\x46\x6f\x75\x72\x74\145\x65\x6e", PR__PKG__JALALI), __("\106\151\146\x74\x65\x65\x6e", PR__PKG__JALALI), __("\123\x69\170\164\x65\x65\156", PR__PKG__JALALI), __("\x53\145\x76\145\x6e\164\145\145\156", PR__PKG__JALALI), __("\x45\x69\x67\x68\164\x65\145\x6e", PR__PKG__JALALI), __("\116\x69\156\145\x74\x65\145\156", PR__PKG__JALALI)];
                    goto qcessicwuikwqsis;
                    ickcmqoiosquugwe:
                    $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = '';
                    goto qmeoaqmsuseueqiy;
                    cuoqqgaygogsmmic:
                    $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : "\x20\331\x88\40";
                    goto cgewcsueoyaeikgm;
                    igymseewwyiocoug:
                    $uoumogqmkuousoia = ['', __("\117\156\x65", PR__PKG__JALALI), __("\124\x77\x6f", PR__PKG__JALALI), __("\x54\150\x72\x65\145", PR__PKG__JALALI), __("\106\157\x75\162", PR__PKG__JALALI), __("\x46\x69\x76\145", PR__PKG__JALALI), __("\123\151\170", PR__PKG__JALALI), __("\x53\145\166\x65\x6e", PR__PKG__JALALI), __("\105\x69\147\x68\164", PR__PKG__JALALI), __("\x4e\x69\156\x65", PR__PKG__JALALI)];
                    goto mqccmesakuemceqi;
                    qmeoaqmsuseueqiy:
                    if ($eouwgmemicwiwise == 1) {
                        goto qgegkeomwscwwiuw;
                    }
                    goto ygkcacsyyckescqs;
                    cgewcsueoyaeikgm:
                    $ukoioyqsqkuskqom = ['', '', __("\124\167\145\156\164\x79", PR__PKG__JALALI), __("\124\x68\151\x72\164\171", PR__PKG__JALALI), __("\106\x6f\x72\164\171", PR__PKG__JALALI), __("\x46\x69\x66\x74\x79", PR__PKG__JALALI), __("\123\x69\170\x74\171", PR__PKG__JALALI), __("\x53\x65\166\x65\156\164\x79", PR__PKG__JALALI), __("\x45\x69\x67\x68\x74\171", PR__PKG__JALALI), __("\x4e\x69\x6e\145\164\x79", PR__PKG__JALALI)];
                    goto sukskmcwsoysiuqu;
                    ieumumsgyguceusy:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(["\61\62", "\61\63", "\x31\64", "\61\x39", "\62\x30"], ["\331\x87\330\xb2\xd8\247\330\261\x20\331\210\40\xd8\257\xd9\210\xdb\214\330\263\330\252", "\331\207\330\xb2\xd8\xa7\330\xb1\x20\xd9\210\40\xd8\263\xdb\x8c\330\265\xd8\xaf", "\xd9\207\330\xb2\xd8\247\330\xb1\x20\xd9\210\x20\xda\206\331\207\xd8\xa7\330\261\xd8\265\330\xaf", "\331\207\330\xb2\xd8\247\xd8\xb1\x20\331\210\40\331\x86\331\207\330\265\xd8\257", "\330\257\xd9\210\xd9\207\330\xb2\xd8\247\xd8\261"], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == "\x30\x30" ? '' : "\40\xd9\210\40") : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku;
                    goto coywmiyqgsweuiic;
                    mqccmesakuemceqi:
                    $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou];
                    goto eyiamcekkgkiawqy;
                    yssscwioiyygssec:
                    qmiwsequckckoaei:
                    goto ieumumsgyguceusy;
                    siqagquguiemuoku:
                case "\x6d\x6d":
                    goto ycakugokkqkuqyiu;
                    ycakugokkqkuqyiu:
                    $uusmaiomayssaecw = ["\331\x81\xd8\xb1\xd9\210\330\xb1\330\257\333\214\331\206", "\xd8\xa7\330\261\xd8\257\xdb\214\xd8\xa8\331\x87\330\264\330\xaa", "\xd8\256\xd8\xb1\330\257\xd8\247\330\xaf", "\xd8\xaa\xdb\214\330\261", "\xd9\x85\330\261\330\xaf\xd8\xa7\330\257", "\330\264\xd9\x87\xd8\xb1\333\x8c\331\210\xd8\xb1", "\xd9\205\xd9\x87\xd8\xb1", "\330\242\xd8\xa8\xd8\xa7\xd9\206", "\330\xa2\330\xb0\330\261", "\330\257\xdb\x8c", "\xd8\250\331\207\xd9\x85\331\206", "\xd8\247\xd8\263\xd9\201\xd9\206\330\xaf"];
                    goto oouoqimaaqcmccay;
                    sycygoiaiqqageym:
                    goto egasokooagakisiy;
                    goto gygawoqywkukmqee;
                    oouoqimaaqcmccay:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto sycygoiaiqqageym;
                    gygawoqywkukmqee:
                case "\x72\162":
                    goto kciouyuaqkyqomam;
                    kciouyuaqkyqomam:
                    $uusmaiomayssaecw = ["\xdb\214\xda\xa9", "\330\257\331\210", "\330\263\331\x87", "\xda\x86\331\207\330\247\xd8\xb1", "\xd9\xbe\xd9\206\330\254", "\330\264\330\264", "\331\207\331\x81\xd8\252", "\331\x87\xd8\xb4\330\xaa", "\xd9\x86\xd9\x87", "\330\xaf\xd9\x87", "\xdb\x8c\xd8\247\330\262\xd8\257\331\207", "\330\257\331\210\xd8\247\330\262\330\xaf\331\207", "\330\xb3\333\214\xd8\xb2\330\257\331\x87", "\332\x86\xd9\207\xd8\xa7\xd8\261\xd8\xaf\xd9\x87", "\331\xbe\xd8\xa7\xd9\x86\xd8\262\330\257\331\207", "\xd8\xb4\xd8\247\331\206\330\262\330\257\331\207", "\331\x87\331\201\330\xaf\331\x87", "\xd9\207\330\xac\330\257\xd9\207", "\xd9\x86\331\x88\xd8\xb2\330\xaf\xd9\x87", "\xd8\xa8\xdb\214\xd8\xb3\330\xaa", "\xd8\xa8\xdb\x8c\xd8\263\xd8\xaa\x20\xd9\210\x20\xdb\x8c\332\xa9", "\xd8\250\xdb\x8c\xd8\263\xd8\xaa\x20\331\x88\x20\xd8\xaf\xd9\210", "\330\250\xdb\x8c\330\263\xd8\xaa\x20\xd9\210\40\330\xb3\xd9\x87", "\330\xa8\xdb\214\xd8\263\330\252\x20\331\210\40\332\x86\xd9\x87\xd8\xa7\xd8\xb1", "\330\xa8\333\214\xd8\263\xd8\252\x20\331\x88\x20\xd9\xbe\xd9\x86\330\254", "\xd8\250\333\x8c\xd8\263\330\xaa\40\331\210\40\xd8\xb4\330\xb4", "\330\xa8\333\214\330\263\330\252\40\331\x88\40\xd9\x87\xd9\x81\xd8\xaa", "\330\xa8\333\214\330\xb3\330\252\40\331\210\40\331\207\330\xb4\xd8\252", "\xd8\250\333\x8c\330\263\330\xaa\40\xd9\210\40\331\x86\xd9\x87", "\330\263\xdb\x8c", "\xd8\263\333\x8c\40\xd9\210\40\333\x8c\332\251"];
                    goto wwkgkaecgiwggcck;
                    wwkgkaecgiwggcck:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto umgaesggesswoaqe;
                    umgaesggesswoaqe:
                    goto egasokooagakisiy;
                    goto qsygcycwieukkgwc;
                    qsygcycwieukkgwc:
                case "\x72\150":
                    goto kiwqkcaekqqyuegq;
                    kiwqkcaekqqyuegq:
                    $uusmaiomayssaecw = [__("\x53\x61\164\x75\162\144\141\x79", PR__PKG__JALALI), __("\123\x75\156\x64\x61\171", PR__PKG__JALALI), __("\x4d\x6f\156\144\x61\x79", PR__PKG__JALALI), __("\x54\165\145\x73\x64\x61\x79", PR__PKG__JALALI), __("\127\145\144\x6e\145\163\x64\x61\x79", PR__PKG__JALALI), __("\x54\150\165\162\163\144\141\x79", PR__PKG__JALALI), __("\106\162\x69\144\x61\x79", PR__PKG__JALALI)];
                    goto quwcqmyokicssyew;
                    iqcogmsguwoikame:
                    goto egasokooagakisiy;
                    goto gimmuoqwckiseaik;
                    quwcqmyokicssyew:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto iqcogmsguwoikame;
                    gimmuoqwckiseaik:
                case "\163\150":
                    goto cmqucgoewuyieoyk;
                    ayyweymyuuiauamo:
                    goto egasokooagakisiy;
                    goto mosqsmqimqgqoase;
                    yqykqysmiquwoasu:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12];
                    goto ayyweymyuuiauamo;
                    cmqucgoewuyieoyk:
                    $uusmaiomayssaecw = [__("\123\x6e\141\153\145", PR__PKG__JALALI), __("\110\157\162\163\x65", PR__PKG__JALALI), __("\107\157\141\x74", PR__PKG__JALALI), __("\115\x6f\156\153\145\171", PR__PKG__JALALI), __("\122\157\157\163\164\x65\x72", PR__PKG__JALALI), __("\104\x6f\x67", PR__PKG__JALALI), __("\120\x69\x67", PR__PKG__JALALI), __("\122\x61\x74", PR__PKG__JALALI), __("\117\170", PR__PKG__JALALI), __("\x54\x69\x67\x65\x72", PR__PKG__JALALI), __("\x52\141\142\142\151\x74", PR__PKG__JALALI), __("\x44\x72\141\147\x6f\156", PR__PKG__JALALI)];
                    goto yqykqysmiquwoasu;
                    mosqsmqimqgqoase:
                case "\x6d\142":
                    goto omugkkesagcyagmk;
                    omugkkesagcyagmk:
                    $uusmaiomayssaecw = ["\xd8\xad\331\x85\331\x84", "\xd8\xab\xd9\210\xd8\261", "\330\254\xd9\210\xd8\262\330\xa7", "\330\xb3\xd8\xb1\330\xb7\xd8\247\331\x86", "\330\xa7\xd8\263\xd8\xaf", "\xd8\xb3\331\x86\330\xa8\xd9\x84\xd9\x87", "\xd9\205\xdb\214\xd8\xb2\xd8\xa7\331\x86", "\330\xb9\xd9\x82\xd8\261\xd8\250", "\xd9\202\xd9\x88\330\263", "\xd8\xac\xd8\257\333\214", "\xd8\257\331\204\xd9\210", "\xd8\xad\xd9\210\xd8\xaa"];
                    goto ygcsmkuycoagwyou;
                    ygcsmkuycoagwyou:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto kqksuugcgsyeoayy;
                    kqksuugcgsyeoayy:
                    goto egasokooagakisiy;
                    goto iggyqogweyosuikc;
                    iggyqogweyosuikc:
                case "\146\x66":
                    goto qqewoyookaskiuek;
                    qkcyqocqqwmqgqww:
                    goto egasokooagakisiy;
                    goto miyqyeiwquwsacsm;
                    ssoucoucsgccekwe:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)];
                    goto qkcyqocqqwmqgqww;
                    qqewoyookaskiuek:
                    $uusmaiomayssaecw = [__("\x53\x70\x72\151\156\147", PR__PKG__JALALI), __("\x53\x75\x6d\155\145\162", PR__PKG__JALALI), __("\x41\165\164\165\155\156", PR__PKG__JALALI), __("\127\151\156\x74\x65\162", PR__PKG__JALALI)];
                    goto ssoucoucsgccekwe;
                    miyqyeiwquwsacsm:
                case "\x6b\x6d":
                    goto eegqyykygiccaoeo;
                    wmmggowmigekyoso:
                    goto egasokooagakisiy;
                    goto soqqemyioggmoakg;
                    eegqyykygiccaoeo:
                    $uusmaiomayssaecw = ["\xd9\x81\330\xb1", "\xd8\247\330\xb1", "\330\256\330\xb1", "\330\xaa\xdb\214\342\200\x8d", "\331\205\xd8\261", "\xd8\xb4\xd9\207\342\200\x8d", "\331\x85\331\x87\xe2\x80\x8d", "\xd8\xa2\xd8\250\342\x80\x8d", "\330\xa2\xd8\xb0", "\xd8\xaf\xdb\x8c", "\xd8\xa8\331\x87\xe2\200\x8d", "\330\xa7\330\xb3\xe2\x80\x8d"];
                    goto ywqgcegomwaiuquc;
                    ywqgcegomwaiuquc:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto wmmggowmigekyoso;
                    soqqemyioggmoakg:
                case "\x6b\150":
                    goto acaqummmoyiemqss;
                    suswcqoyyqkkquuo:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto eeqesooyqagwawae;
                    eeqesooyqagwawae:
                    goto egasokooagakisiy;
                    goto oqugqwcyomiaaoqu;
                    acaqummmoyiemqss:
                    $uusmaiomayssaecw = [__("\x53\141\x74", PR__PKG__JALALI), __("\x53\x75\156", PR__PKG__JALALI), __("\x4d\x6f\156", PR__PKG__JALALI), __("\x54\x75\x65", PR__PKG__JALALI), __("\x57\x65\x64", PR__PKG__JALALI), __("\124\x68\165", PR__PKG__JALALI), __("\106\x72\151", PR__PKG__JALALI)];
                    goto suswcqoyyqkkquuo;
                    oqugqwcyomiaaoqu:
                default:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm;
            }
            goto hoeeyiowekaeemko;
            hoeeyiowekaeemko:
            kecwuwwcwokuksyq:
            goto kymkucucyeoeikim;
            usquiuuyiyqaeyiu:
            mswsoaimesegiiic:
            goto qicwaskssogcokgm;
            foeeqckqsyockkak:
            $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm);
            goto iekumemscwieugqw;
            qicwaskssogcokgm:
        }
        goto uqqaiagaeqgqgaiy;
        gaomwagkcciesyqy:
    }
    
    public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = "\145\156", $eqmcogmcemgigckm = "\331\xab")
    {
    }
    
    public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '')
    {
        goto cgiscsqwwgqqaeqi;
        qoqskyuuwueqkquk:
        skkamseieeusycye:
        goto iwsuawwqomaowuii;
        wmywuusgukmmaams:
        goto suqkuqygkkgwyaie;
        goto gkyawqqcmigqgaiq;
        ueigkucgaucgeimc:
        $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365);
        goto sggawugoykqcmsug;
        scisgsyemmsekgos:
        suqkuqygkkgwyaie:
        goto cewmoqyysgsmuiya;
        wkeuuycukmuqiaom:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto wakmayaoqoskekqy;
        cmegwsegsosyqcai:
        $mggkikkcoygokucs -= 621;
        goto wmywuusgukmmaams;
        cgiscsqwwgqqaeqi:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode("\137", $this->ieacowssemeuewag($mggkikkcoygokucs . "\x5f" . $gguqkwucwcyqgwem . "\137" . $asgqasceaecqgouu));
        goto syiqkaasoueowwui;
        wgewmqieuamsoayy:
        $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461);
        goto kqgcyoscsusgoaqi;
        eeauyscekuckoues:
        goto skkamseieeusycye;
        goto eogwckcymuugikuy;
        egyyiccaeeiooaua:
        $mggkikkcoygokucs -= 1600;
        goto scisgsyemmsekgos;
        iwsuawwqomaowuii:
        return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs;
        goto wcugqegqsuuuwqao;
        gkyawqqcmigqgaiq:
        aegysmeecgcgayyw:
        goto ooeausyowguqicuo;
        ugqaaewwmkocwwgy:
        $immmocykksywgkqu %= 12053;
        goto wgewmqieuamsoayy;
        wakmayaoqoskekqy:
        soaccwqimeksgwiw:
        goto qmuwoecuacmkwgem;
        omqiayeucoioqoao:
        $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053);
        goto ugqaaewwmkocwwgy;
        ewymsmkkiksgwysk:
        $yywykyucyekisogg = 0;
        goto cmegwsegsosyqcai;
        igooksugieceoege:
        $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1];
        goto omqiayeucoioqoao;
        qmuwoecuacmkwgem:
        if ($immmocykksywgkqu < 186) {
            goto wiysogeqqwgioyka;
        }
        goto owmuceyswmgueasi;
        giaacoqqqsekcayy:
        if ($mggkikkcoygokucs > 1600) {
            goto aegysmeecgcgayyw;
        }
        goto ewymsmkkiksgwysk;
        kqgcyoscsusgoaqi:
        $immmocykksywgkqu %= 1461;
        goto ueigkucgaucgeimc;
        msemumccgceyugmg:
        $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31);
        goto wagqgeqymeqoeuyi;
        cewmoqyysgsmuiya:
        $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs;
        goto igooksugieceoege;
        mwsmsguqqkcwiiuk:
        $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30;
        goto eeauyscekuckoues;
        syiqkaasoueowwui:
        $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        goto giaacoqqqsekcayy;
        ooeausyowguqicuo:
        $yywykyucyekisogg = 979;
        goto egyyiccaeeiooaua;
        owmuceyswmgueasi:
        $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30);
        goto mwsmsguqqkcwiiuk;
        sggawugoykqcmsug:
        if (!($immmocykksywgkqu > 365)) {
            goto soaccwqimeksgwiw;
        }
        goto wkeuuycukmuqiaom;
        wagqgeqymeqoeuyi:
        $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31;
        goto qoqskyuuwueqkquk;
        eogwckcymuugikuy:
        wiysogeqqwgioyka:
        goto msemumccgceyugmg;
        wcugqegqsuuuwqao:
    }
    
    public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '')
    {
        goto kqqiegkuqagcqsya;
        ogqmesokykywseys:
        $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186);
        goto ykomgumacooyomsk;
        isgwkwacoyimiauk:
        return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu;
        goto mggeqkcksyaymcsa;
        eekcoeikaeaaeyii:
        $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365);
        goto cogywoqcqummsyus;
        cwwmimggaaecmucw:
        $yywykyucyekisogg -= 979;
        goto awoaooyoeoyeeqee;
        kqqiegkuqagcqsya:
        [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode("\137", $this->ieacowssemeuewag($yywykyucyekisogg . "\x5f" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs));
        goto ousiuuwgwkiyikyq;
        ugqwuugsweqgmywk:
        emmsycooskoqmgeg:
        goto uaukmuiwskcemcsw;
        iikiiioqiyegyaak:
        $immmocykksywgkqu %= 36524;
        goto uiosisocuwokwkie;
        cscusseysqygsoiy:
        ouamogymawucwswu:
        goto isgwkwacoyimiauk;
        ocaguquugeamqckq:
        $immmocykksywgkqu %= 1461;
        goto eekcoeikaeaaeyii;
        ykomgumacooyomsk:
        $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097);
        goto mqkmcysgoiaouiwm;
        uaukmuiwskcemcsw:
        $asgqasceaecqgouu = $immmocykksywgkqu + 1;
        goto sockeswygwcskeuq;
        mkwkkmkgiqiamacc:
        $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        goto uaqackioaiqwcocy;
        cogywoqcqummsyus:
        if (!($immmocykksywgkqu > 365)) {
            goto emmsycooskoqmgeg;
        }
        goto gmwykkouysyaqwqm;
        aomysykcgikegiau:
        $mggkikkcoygokucs = 1600;
        goto cwwmimggaaecmucw;
        csammceowmqwaamq:
        $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461);
        goto ocaguquugeamqckq;
        gcckqucukawcasgk:
        mqicocmqegwukkwg:
        goto qmkaeeomgkwggoyo;
        uiosisocuwokwkie:
        if (!($immmocykksywgkqu >= 365)) {
            goto mqicocmqegwukkwg;
        }
        goto cuumeogeomowqisc;
        ogsaaqsaogcqiouy:
        $mggkikkcoygokucs = 621;
        goto iwekmyyccgiyuecc;
        awoaooyoeoyeeqee:
        ciykoyeioqgyaeqo:
        goto ogqmesokykywseys;
        iwekmyyccgiyuecc:
        goto ciykoyeioqgyaeqo;
        goto ikqqskkqqwmwssoo;
        kosaqwikueyksqmw:
        if (!($immmocykksywgkqu > 36524)) {
            goto qgeugwymkkiacwoc;
        }
        goto gicyayswqyuoekcq;
        ousiuuwgwkiyikyq:
        if ($yywykyucyekisogg > 979) {
            goto asiqwuoswmigcaki;
        }
        goto ogsaaqsaogcqiouy;
        sockeswygwcskeuq:
        $gguqkwucwcyqgwem = 0;
        goto mkwkkmkgiqiamacc;
        cuumeogeomowqisc:
        $immmocykksywgkqu++;
        goto gcckqucukawcasgk;
        gicyayswqyuoekcq:
        $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524);
        goto iikiiioqiyegyaak;
        mqkmcysgoiaouiwm:
        $immmocykksywgkqu %= 146097;
        goto kosaqwikueyksqmw;
        qmkaeeomgkwggoyo:
        qgeugwymkkiacwoc:
        goto csammceowmqwaamq;
        ikqqskkqqwmwssoo:
        asiqwuoswmigcaki:
        goto aomysykcgikegiau;
        uaqackioaiqwcocy:
        foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) {
            goto oomguqikqokqwgku;
            kkumywowcoycymeo:
            mugqyyeayeyggqqk:
            goto miweggwqeiaeweia;
            wyuemgggaqogsmsq:
            acsqgiuageaasiyy:
            goto guykyqecgswcsmws;
            samwkqgwouggsguc:
            goto ouamogymawucwswu;
            goto wyuemgggaqogsmsq;
            oomguqikqokqwgku:
            if (!($asgqasceaecqgouu <= $mokouoooiwsmcmiu)) {
                goto acsqgiuageaasiyy;
            }
            goto samwkqgwouggsguc;
            guykyqecgswcsmws:
            $asgqasceaecqgouu -= $mokouoooiwsmcmiu;
            goto kkumywowcoycymeo;
            miweggwqeiaeweia:
        }
        goto cscusseysqygsoiy;
        gmwykkouysyaqwqm:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto ugqwuugsweqgmywk;
        mggeqkcksyaymcsa:
    }
    
    public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = "\x66\x61")
    {
        goto yuimwyoywaiiqacs;
        usymasgsyqgsuocg:
        kqswcsysqawkcgye:
        goto aiccyaswigkaycqk;
        okkmcocqokkskasy:
        $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0;
        goto qiiigwkqeoewsuwm;
        aueaceeyommgkicu:
        uegouoiuyoqkcscg:
        goto mysueeoswqgccmui;
        qsgqwyqaqiowkmco:
        $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1);
        goto yqagomygmeoecwey;
        qikaewekoecykeou:
        eeyyskqsmquyquqw:
        goto eucqomyqykgoiuge;
        ikqeeaysmqgcgawq:
        $ciyackuwsqkoqese = 0;
        goto mscgewkcqcoowweg;
        yqagomygmeoecwey:
        goto cgyakcqgugqgkqiw;
        goto qikaewekoecykeou;
        yuimwyoywaiiqacs:
        $T_sec = 0;
        goto ocywegekakimmwcq;
        qiiigwkqeoewsuwm:
        $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa);
        goto esaqcqqwuussiiwo;
        eucqomyqykgoiuge:
        switch ($uskwgmsuqowaosow) {
            case "\105":
            case "\x52":
            case "\x78":
            case "\130":
                $qcgkuqesqqymcuui .= "\150\164\164\x70\x3a\x2f\57\152\x64\x66\56\x73\143\162\x2e\151\x72";
                goto ewscugeuicukkycc;
            case "\102":
            case "\145":
            case "\147":
            case "\x47":
            case "\x68":
            case "\x49":
            case "\124":
            case "\x75":
            case "\132":
                $qcgkuqesqqymcuui .= date($uskwgmsuqowaosow, $msqmoegqiqqmesci);
                goto ewscugeuicukkycc;
            case "\141":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\120\115", PR__PKG__JALALI) : __("\x41\x4d", PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case "\101":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\102\145\146\x6f\162\145\40\x6e\x6f\x6f\156", PR__PKG__JALALI) : __("\x41\x66\x74\x65\162\40\x6e\157\157\x6e", PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case "\x62":
                $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1;
                goto ewscugeuicukkycc;
            case "\143":
                $qcgkuqesqqymcuui .= $j_y . "\57" . $j_m . "\x2f" . $j_d . "\x20\330\214" . $ocogsiouoiuuguym[0] . "\72" . $ocogsiouoiuuguym[1] . "\x3a" . $ocogsiouoiuuguym[6] . "\40" . $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case "\x43":
                $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100);
                goto ewscugeuicukkycc;
            case "\144":
                $qcgkuqesqqymcuui .= $j_d < 10 ? "\x30" . $j_d : $j_d;
                goto ewscugeuicukkycc;
            case "\104":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6b\150" => $ocogsiouoiuuguym[7]], "\x20");
                goto ewscugeuicukkycc;
            case "\x66":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\146\146" => $j_m], "\40");
                goto ewscugeuicukkycc;
            case "\115":
            case "\106":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6d\x6d" => $j_m], "\40");
                goto ewscugeuicukkycc;
            case "\x48":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0];
                goto ewscugeuicukkycc;
            case "\x69":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1];
                goto ewscugeuicukkycc;
            case "\x6a":
                $qcgkuqesqqymcuui .= $j_d;
                goto ewscugeuicukkycc;
            case "\x4a":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x72\162" => $j_d], "\x20");
                goto ewscugeuicukkycc;
            case "\x6b":
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case "\x4b":
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case "\154":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\162\x68" => $ocogsiouoiuuguym[7]], "\40");
                goto ewscugeuicukkycc;
            case "\114":
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq;
                goto ewscugeuicukkycc;
            case "\155":
                $qcgkuqesqqymcuui .= $j_m > 9 ? $j_m : "\60" . $j_m;
                goto ewscugeuicukkycc;
            
            case "\x6e":
                $qcgkuqesqqymcuui .= $j_m;
                goto ewscugeuicukkycc;
            case "\x4e":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] + 1;
                goto ewscugeuicukkycc;
            case "\x6f":
                goto wusciwkkckmqigms;
                wusciwkkckmqigms:
                $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto iiiccouaaqsyikae;
                ukkcmocamwgiqayu:
                $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y);
                goto mwysseaekcsiesmm;
                mwysseaekcsiesmm:
                goto ewscugeuicukkycc;
                goto amgsueumgaguceaa;
                iiiccouaaqsyikae:
                $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo;
                goto ukkcmocamwgiqayu;
                amgsueumgaguceaa:
            case "\x4f":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4];
                goto ewscugeuicukkycc;
            case "\x70":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\155\142" => $j_m], "\40");
                goto ewscugeuicukkycc;
            case "\x50":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case "\161":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\163\x68" => $j_y], "\40");
                goto ewscugeuicukkycc;
            case "\x51":
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            case "\162":
                goto gygwewcqsmwqismo;
                uougwgeyiokewkkm:
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . "\72" . $ocogsiouoiuuguym[1] . "\x3a" . $ocogsiouoiuuguym[6] . "\40" . $ocogsiouoiuuguym[4] . "\x20" . $uusmaiomayssaecw["\x72\x68"] . "\xd8\214\x20" . $j_d . "\x20" . $uusmaiomayssaecw["\x6d\x6d"] . "\x20" . $j_y;
                goto gommacygsykyussk;
                gygwewcqsmwqismo:
                $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(["\162\150" => $ocogsiouoiuuguym[7], "\x6d\155" => $j_m]);
                goto uougwgeyiokewkkm;
                gommacygsykyussk:
                goto ewscugeuicukkycc;
                goto ukqocwewouckikso;
                ukqocwewouckikso:
            case "\163":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6];
                goto ewscugeuicukkycc;
            case "\x53":
                $qcgkuqesqqymcuui .= "\330\xa7\331\x85";
                goto ewscugeuicukkycc;
            case "\x74":
                $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29;
                goto ewscugeuicukkycc;
            case "\125":
                $qcgkuqesqqymcuui .= $msqmoegqiqqmesci;
                goto ewscugeuicukkycc;
            case "\x76":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\163" => $j_y % 100], "\x20");
                goto ewscugeuicukkycc;
            case "\126":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\163" => $j_y], "\x20");
                goto ewscugeuicukkycc;
            case "\x77":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto ewscugeuicukkycc;
            case "\x57":
                goto uqokiksoqcwwqgio;
                iesekaeqeomeuaui:
                uykousayyomcaeaa:
                goto wsesqmcqoiyyqkqi;
                qukocuwgakemmyga:
                if (!($aaeqayuykcqoqiuu < 0)) {
                    goto ucqmumuygcywwqma;
                }
                goto sioekkmekwygemyc;
                yykqaowwsqgqysmq:
                $ecsiqegmcewekssu = 0;
                goto kwiggogcgciwuwqk;
                yiowgigkkwsoqcci:
                ucqmumuygcywwqma:
                goto ieqesiiageaauiuw;
                oyeyomcgkmgymogq:
                $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52;
                goto iesekaeqeomeuaui;
                oimkeqocuguqqsqk:
                iuuuususuuuaieem:
                goto oeocukauoyosicso;
                uckewycoogsogwiy:
                $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? "\60\61" : ($mqwsmsykyouoomgm < 10 ? "\60" . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm);
                goto ikuuiauwouuqawuw;
                ikuuiauwouuqawuw:
                goto ewscugeuicukkycc;
                goto yoqakewookqoqacm;
                ieqesiiageaauiuw:
                $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7);
                goto gamqcwuwkikwqoay;
                uqokiksoqcwwqgio:
                $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7;
                goto qukocuwgakemmyga;
                wkwamkgkwykeqkec:
                $mqwsmsykyouoomgm++;
                goto oimkeqocuguqqsqk;
                oeocukauoyosicso:
                $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq;
                goto suqceasgacskcmkc;
                kwiggogcgciwuwqk:
                kocqqoyymosmuksu:
                goto uckewycoogsogwiy;
                mogkoocsoeuyoqqa:
                uimeeckqksqeekqq:
                goto wkwamkgkwykeqkec;
                wsesqmcqoiyyqkqi:
                goto iuuuususuuuaieem;
                goto mogkoocsoeuyoqqa;
                sioekkmekwygemyc:
                $aaeqayuykcqoqiuu += 7;
                goto yiowgigkkwsoqcci;
                mscyggqcesgqqksu:
                if (!($mqwsmsykyouoomgm < 1)) {
                    goto uykousayyomcaeaa;
                }
                goto oyeyomcgkmgymogq;
                suqceasgacskcmkc:
                if (!($ecsiqegmcewekssu == 7)) {
                    goto kocqqoyymosmuksu;
                }
                goto yykqaowwsqgqysmq;
                gamqcwuwkikwqoay:
                if ($aaeqayuykcqoqiuu < 4) {
                    goto uimeeckqksqeekqq;
                }
                goto mscyggqcesgqqksu;
                yoqakewookqoqacm:
            case "\171":
                $qcgkuqesqqymcuui .= substr($j_y, 2, 2);
                goto ewscugeuicukkycc;
            case "\131":
                $qcgkuqesqqymcuui .= $j_y;
                goto ewscugeuicukkycc;
            case "\172":
                $qcgkuqesqqymcuui .= $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            default:
                $qcgkuqesqqymcuui .= $uskwgmsuqowaosow;
        }
        goto usymasgsyqgsuocg;
        mscgewkcqcoowweg:
        gswcoeiisamakwii:
        goto suqcsgaosywaauuu;
        sqyokemumceysegy:
        cgyakcqgugqgkqiw:
        goto oqousikwiiqagoyw;
        esaqcqqwuussiiwo:
        $qcgkuqesqqymcuui = '';
        goto ikqeeaysmqgcgawq;
        emqswoaawgeyosmi:
        
        $ocogsiouoiuuguym = explode("\x5f", date("\110\137\151\137\x6a\137\156\137\117\x5f\x50\137\x73\x5f\x77\x5f\x59", $msqmoegqiqqmesci));
        goto iwsmmkqaoksmocok;
        ocywegekakimmwcq:
        $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak));
        goto emqswoaawgeyosmi;
        mysueeoswqgccmui:
        return $mcmaiqckgiuqayau != "\x65\x6e" ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, "\x66\141", "\x2e") : $qcgkuqesqqymcuui;
        goto egmayaiikwsskgmy;
        esikeyqyuikmaiek:
        $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185;
        goto okkmcocqokkskasy;
        gsygwgsiawgmqiyi:
        if (!($uskwgmsuqowaosow == "\x5c")) {
            goto eeyyskqsmquyquqw;
        }
        goto qsgqwyqaqiowkmco;
        wwukgaquuyoissgy:
        $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1);
        goto gsygwgsiawgmqiyi;
        zayqqeqgcwkekwws:
        goto gswcoeiisamakwii;
        goto aueaceeyommgkicu;
        iwsmmkqaoksmocok:
        [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]);
        goto esikeyqyuikmaiek;
        oqousikwiiqagoyw:
        $ciyackuwsqkoqese++;
        goto zayqqeqgcwkekwws;
        aiccyaswigkaycqk:
        ewscugeuicukkycc:
        goto sqyokemumceysegy;
        suqcsgaosywaauuu:
        if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) {
            goto uegouoiuyoqkcscg;
        }
        goto wwukgaquuyoissgy;
        egmayaiikwsskgmy:
    }
    
    public function ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\145\156", $eqmcogmcemgigckm = "\xd9\253")
    {
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
    }
    
    public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = "\x41\x73\x69\141\57\124\x65\x68\162\141\x6e", $seieuccuyuucuigq = "\x65\x6e") : array
    {
        goto ucuoeymyqeokgsya;
        sguskaeaaqcagqgc:
        return ["\163\145\143\x6f\x6e\144\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), "\x6d\x69\156\x75\164\145\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), "\150\157\x75\162\x73" => $ocogsiouoiuuguym[1], "\155\x64\x61\171" => $ocogsiouoiuuguym[3], "\x77\144\141\171" => $ocogsiouoiuuguym[7], "\x6d\x6f\156" => $ocogsiouoiuuguym[5], "\171\x65\x61\x72" => $ocogsiouoiuuguym[8], "\x79\144\x61\171" => $ocogsiouoiuuguym[9], "\x77\x65\x65\153\144\141\171" => $ocogsiouoiuuguym[4], "\x6d\x6f\x6e\x74\150" => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)];
        goto agkmiayuawacakau;
        yuuyikiacmmueosu:
        $ocogsiouoiuuguym = explode("\137", $this->date("\x46\x5f\107\137\151\137\152\x5f\x6c\137\x6e\x5f\x73\137\167\x5f\131\137\x7a", $msqmoegqiqqmesci, $seieuccuyuucuigq));
        goto sguskaeaaqcagqgc;
        ucuoeymyqeokgsya:
        $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak);
        goto yuuyikiacmmueosu;
        agkmiayuawacakau:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = "\101\x73\151\141\57\x54\145\x68\x72\x61\x6e")
    {
        goto gqmewagyagamokok;
        smcguieygyqcaqgs:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme);
        goto mgcuiguaomoqwwwm;
        eckcqesiokgwkkiw:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu);
        goto ecouwqosmoyyqmkw;
        mqiiqkuaoekeuswo:
        goto egsycocugqyyswsi;
        goto qmoocweoekqueuyy;
        kqyoakickmseyyeq:
        $cqgoimumaewouews = time();
        goto micceocwuwkyusic;
        wgiygcmqaokywuqa:
        mkomygccqkmkumsi:
        goto iauwuugggmegwisk;
        eoyiumycaigawmmc:
        goto ciucewqgyoiouesq;
        goto yuoeumyiuqkuouey;
        oyiuyywyeoskckuw:
        if ($gcisockiummsmcag === '') {
            goto cgmgqucewwssmicq;
        }
        goto goqmywuiicciasyk;
        uycesqqkoeamocgm:
        syuaummumssgwwee:
        goto ceiwqkyquikcemmo;
        yoagcooekomeokwg:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto eckcqesiokgwkkiw;
        mgcuiguaomoqwwwm:
        aoquoewagkseayug:
        goto eoyiumycaigawmmc;
        goqmywuiicciasyk:
        if ($piuesceqiguuskme === '') {
            goto osuscoaaomwcqkew;
        }
        goto siecswkggyikqkga;
        micceocwuwkyusic:
        oyiuemaaykgkqqam:
        goto iwueukqcywkiyqge;
        wkgskiuiukiuyque:
        [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\x5f", $this->ieacowssemeuewag($ackqauiusooswkmw . "\x5f" . $gcisockiummsmcag . "\137" . $piuesceqiguuskme . "\137" . $sseomcuueskqeayq . "\x5f" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg));
        goto oyiuyywyeoskckuw;
        eyiwqgqcsqakwqss:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag);
        goto sckioayasmkcoeoo;
        wmumywgyyeagqoeq:
        qiaimmucomukkeka:
        goto smcguieygyqcaqgs;
        sqmoqymckwsogsqg:
        date_default_timezone_set($umusyyqoeegoyiqs);
        goto uycesqqkoeamocgm;
        ooqksueucyagyuoe:
        cgmgqucewwssmicq:
        goto osmmoyqkqoucsgow;
        iauwuugggmegwisk:
        goto oyiuemaaykgkqqam;
        goto aukucaieceiwesmm;
        ceiwqkyquikcemmo:
        $cqgoimumaewouews = 0;
        goto ukomuiwukymcoaso;
        osmmoyqkqoucsgow:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw);
        goto wgiygcmqaokywuqa;
        yuoeumyiuqkuouey:
        osuscoaaomwcqkew:
        goto eyiwqgqcsqakwqss;
        sgiwoiscywusgmmm:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]);
        goto skuqigsokaguscas;
        yssqmyoaokkksukc:
        goto mkomygccqkmkumsi;
        goto ooqksueucyagyuoe;
        iksewmsaugayqaqq:
        goto qkcsykuocwuyaice;
        goto yamyagayiooyeekg;
        ecouwqosmoyyqmkw:
        qkcsykuocwuyaice:
        goto mqiiqkuaoekeuswo;
        sckioayasmkcoeoo:
        ciucewqgyoiouesq:
        goto yssqmyoaokkksukc;
        yamyagayiooyeekg:
        oocuemosmeeekgas:
        goto yoagcooekomeokwg;
        aukucaieceiwesmm:
        ussceseaimqywuiy:
        goto kqyoakickmseyyeq;
        qmoocweoekqueuyy:
        uoeasoimegouymka:
        goto sgiwoiscywusgmmm;
        iwueukqcywkiyqge:
        return $cqgoimumaewouews;
        goto ykwasaaoeeiuomim;
        easqmyamcmeesgya:
        if ($ikiykmwgkuqwcmcs === '') {
            goto uoeasoimegouymka;
        }
        goto yuqgwwmqwqiuwmaw;
        quyogmwugsyoaaiu:
        egsycocugqyyswsi:
        goto mmgmqogugasaqkgg;
        skuqigsokaguscas:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem);
        goto quyogmwugsyoaaiu;
        qkuiwoqksgayqqmg:
        $ocogsiouoiuuguym = explode("\x5f", $this->date("\131\137\152", '', "\x65\156"));
        goto easqmyamcmeesgya;
        siecswkggyikqkga:
        if ($sseomcuueskqeayq === '') {
            goto qiaimmucomukkeka;
        }
        goto qkuiwoqksgayqqmg;
        gqmewagyagamokok:
        if (!($umusyyqoeegoyiqs != "\x6c\x6f\143\141\154")) {
            goto syuaummumssgwwee;
        }
        goto sqmoqymckwsogsqg;
        smiemmcqqukyguuu:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs);
        goto iksewmsaugayqaqq;
        yuqgwwmqwqiuwmaw:
        if ($yywykyucyekisogg === '') {
            goto oocuemosmeeekgas;
        }
        goto quaqmuusokiyqgqe;
        ukomuiwukymcoaso:
        if ($ackqauiusooswkmw === '') {
            goto ussceseaimqywuiy;
        }
        goto wkgskiuiukiuyque;
        mmgmqogugasaqkgg:
        goto aoquoewagkseayug;
        goto wmumywgyyeagqoeq;
        quaqmuusokiyqgqe:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto smiemmcqqukyguuu;
        ykwasaaoeeiuomim:
    }
}

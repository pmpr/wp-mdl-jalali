<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4ccec9f71             |
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
        $qcgkuqesqqymcuui = $this->yqeyqmywaiwkkcao(["\155\155" => (int) $mwemskcucwsyycwm]);
        return ManipulateArray::get($qcgkuqesqqymcuui, "\155\155", $qcgkuqesqqymcuui);
    }
    
    public function ogoquecgeowwigwk($sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg) : bool
    {
        goto yiwiqaqmwiogawym;
        yiwiqaqmwiogawym:
        [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\137", $this->msywmyaoqmaegsuy($sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg));
        goto goacqqsgaaigyuaw;
        goacqqsgaaigyuaw:
        $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5);
        goto meawswgwagoqgkye;
        meawswgwagoqgkye:
        return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1);
        goto wcesymwqykqoyuqk;
        wcesymwqykqoyuqk:
    }
    
    public function yqeyqmywaiwkkcao($uomewyckeuqoqocu, $ugkymqicywakcemw = '') : string
    {
        goto uguigkcmukuouway;
        esuiysskoweawsue:
        return $ugkymqicywakcemw === '' ? $uomewyckeuqoqocu : implode($ugkymqicywakcemw, $uomewyckeuqoqocu);
        goto gaomwagkcciesyqy;
        uqqaiagaeqgqgaiy:
        usqgaogkqgemuima:
        goto esuiysskoweawsue;
        uguigkcmukuouway:
        foreach ($uomewyckeuqoqocu as $sqeykgyoooqysmca => $mqwsmsykyouoomgm) {
            goto foeeqckqsyockkak;
            iekumemscwieugqw:
            switch ($sqeykgyoooqysmca) {
                case "\x73\163":
                    goto goeoymmqqqeeoime;
                    qcessicwuikwqsis:
                    $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10];
                    goto yssscwioiyygssec;
                    coywmiyqgsweuiic:
                    goto egasokooagakisiy;
                    goto siqagquguiemuoku;
                    ickcmqoiosquugwe:
                    $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = '';
                    goto qmeoaqmsuseueqiy;
                    cgewcsueoyaeikgm:
                    $ukoioyqsqkuskqom = ['', '', __("\x54\x77\145\156\164\171", PR__PKG__JALALI), __("\x54\x68\x69\162\164\x79", PR__PKG__JALALI), __("\x46\157\x72\x74\x79", PR__PKG__JALALI), __("\x46\151\146\164\x79", PR__PKG__JALALI), __("\x53\151\x78\164\171", PR__PKG__JALALI), __("\123\x65\166\x65\156\164\171", PR__PKG__JALALI), __("\105\151\x67\150\164\171", PR__PKG__JALALI), __("\x4e\x69\x6e\145\164\x79", PR__PKG__JALALI)];
                    goto sukskmcwsoysiuqu;
                    qmeoaqmsuseueqiy:
                    if ($eouwgmemicwiwise == 1) {
                        goto qgegkeomwscwwiuw;
                    }
                    goto ygkcacsyyckescqs;
                    ygkcacsyyckescqs:
                    $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1);
                    goto cuoqqgaygogsmmic;
                    ieumumsgyguceusy:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(["\61\x32", "\x31\63", "\61\64", "\61\x39", "\62\x30"], ["\331\x87\xd8\262\xd8\247\330\xb1\40\331\x88\40\xd8\257\xd9\210\333\214\xd8\xb3\xd8\252", "\xd9\207\xd8\262\xd8\247\330\261\x20\xd9\210\40\xd8\263\333\x8c\330\xb5\330\257", "\331\x87\330\262\xd8\xa7\xd8\xb1\x20\xd9\x88\x20\332\x86\xd9\x87\330\247\330\261\330\265\xd8\257", "\331\x87\330\262\xd8\xa7\330\xb1\40\xd9\x88\x20\xd9\x86\331\207\330\265\330\257", "\xd8\xaf\331\210\xd9\x87\330\262\xd8\xa7\330\261"], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == "\60\x30" ? '' : "\x20\xd9\210\40") : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku;
                    goto coywmiyqgsweuiic;
                    qwcegcuowwgiccos:
                    $ygaqkccwykqkamoo = [__("\x54\145\x6e", PR__PKG__JALALI), __("\105\x6c\145\x76\x65\x6e", PR__PKG__JALALI), __("\x54\x77\x65\x6c\166\145", PR__PKG__JALALI), __("\x54\150\151\162\x74\x65\x65\156", PR__PKG__JALALI), __("\x46\x6f\x75\x72\x74\x65\x65\156", PR__PKG__JALALI), __("\106\151\146\x74\145\x65\156", PR__PKG__JALALI), __("\123\x69\170\x74\x65\x65\156", PR__PKG__JALALI), __("\x53\145\x76\x65\x6e\x74\145\145\156", PR__PKG__JALALI), __("\105\x69\x67\x68\164\x65\x65\x6e", PR__PKG__JALALI), __("\x4e\151\x6e\145\x74\145\145\156", PR__PKG__JALALI)];
                    goto qcessicwuikwqsis;
                    kooskuwkuayiuose:
                    $kckiiskiksiousiy = '';
                    goto qwcegcuowwgiccos;
                    cuoqqgaygogsmmic:
                    $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : "\x20\331\210\40";
                    goto cgewcsueoyaeikgm;
                    yssscwioiyygssec:
                    qmiwsequckckoaei:
                    goto ieumumsgyguceusy;
                    sukskmcwsoysiuqu:
                    $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise];
                    goto igymseewwyiocoug;
                    eiawsoasmscmqswa:
                    $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1);
                    goto ickcmqoiosquugwe;
                    eyiamcekkgkiawqy:
                    goto qmiwsequckckoaei;
                    goto twkmiuomimomscew;
                    goeoymmqqqeeoime:
                    $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm);
                    goto eiawsoasmscmqswa;
                    mqccmesakuemceqi:
                    $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou];
                    goto eyiamcekkgkiawqy;
                    igymseewwyiocoug:
                    $uoumogqmkuousoia = ['', __("\x4f\x6e\145", PR__PKG__JALALI), __("\124\167\x6f", PR__PKG__JALALI), __("\x54\x68\162\145\145", PR__PKG__JALALI), __("\x46\157\165\162", PR__PKG__JALALI), __("\106\151\166\x65", PR__PKG__JALALI), __("\123\151\x78", PR__PKG__JALALI), __("\x53\x65\166\145\x6e", PR__PKG__JALALI), __("\x45\x69\147\x68\x74", PR__PKG__JALALI), __("\x4e\x69\156\145", PR__PKG__JALALI)];
                    goto mqccmesakuemceqi;
                    twkmiuomimomscew:
                    qgegkeomwscwwiuw:
                    goto kooskuwkuayiuose;
                    siqagquguiemuoku:
                case "\x6d\x6d":
                    goto ycakugokkqkuqyiu;
                    oouoqimaaqcmccay:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto sycygoiaiqqageym;
                    ycakugokkqkuqyiu:
                    $uusmaiomayssaecw = ["\331\x81\330\261\331\x88\330\261\330\257\xdb\x8c\xd9\206", "\xd8\247\330\xb1\xd8\257\333\x8c\xd8\250\xd9\207\xd8\264\330\xaa", "\330\xae\330\xb1\xd8\xaf\xd8\247\xd8\257", "\xd8\xaa\xdb\214\330\xb1", "\xd9\x85\xd8\xb1\330\xaf\xd8\247\xd8\xaf", "\330\xb4\xd9\x87\xd8\xb1\xdb\214\331\x88\330\261", "\xd9\x85\331\x87\xd8\261", "\xd8\xa2\xd8\xa8\xd8\xa7\331\206", "\xd8\242\330\260\330\261", "\330\257\333\214", "\330\250\xd9\x87\331\x85\xd9\206", "\xd8\247\330\263\xd9\201\331\x86\xd8\257"];
                    goto oouoqimaaqcmccay;
                    sycygoiaiqqageym:
                    goto egasokooagakisiy;
                    goto gygawoqywkukmqee;
                    gygawoqywkukmqee:
                case "\x72\162":
                    goto kciouyuaqkyqomam;
                    wwkgkaecgiwggcck:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto umgaesggesswoaqe;
                    umgaesggesswoaqe:
                    goto egasokooagakisiy;
                    goto qsygcycwieukkgwc;
                    kciouyuaqkyqomam:
                    $uusmaiomayssaecw = ["\xdb\x8c\332\251", "\xd8\257\331\x88", "\xd8\xb3\xd9\207", "\332\206\xd9\207\330\247\xd8\xb1", "\331\xbe\331\x86\330\xac", "\330\264\xd8\xb4", "\331\207\xd9\201\xd8\252", "\xd9\207\330\xb4\330\xaa", "\331\x86\xd9\207", "\xd8\257\331\207", "\xdb\x8c\xd8\xa7\330\xb2\330\xaf\xd9\207", "\xd8\257\xd9\x88\xd8\xa7\330\xb2\xd8\xaf\xd9\207", "\xd8\xb3\333\x8c\330\xb2\330\257\331\x87", "\xda\206\xd9\x87\330\247\xd8\xb1\330\257\331\x87", "\xd9\xbe\330\xa7\xd9\206\330\262\330\xaf\331\x87", "\xd8\xb4\330\247\xd9\x86\xd8\262\xd8\xaf\331\207", "\331\x87\331\201\xd8\xaf\xd9\x87", "\xd9\207\xd8\xac\xd8\257\xd9\207", "\331\206\331\210\xd8\xb2\330\257\331\207", "\xd8\250\333\x8c\xd8\xb3\xd8\xaa", "\330\xa8\xdb\214\xd8\263\330\252\40\331\x88\40\xdb\x8c\332\251", "\xd8\250\xdb\214\xd8\xb3\xd8\252\40\xd9\x88\40\xd8\xaf\331\x88", "\xd8\xa8\xdb\x8c\330\263\xd8\xaa\x20\xd9\210\x20\xd8\xb3\331\x87", "\330\xa8\333\214\330\xb3\330\252\x20\331\210\x20\xda\x86\xd9\207\330\247\330\xb1", "\xd8\xa8\xdb\214\xd8\xb3\xd8\252\40\331\x88\x20\331\xbe\xd9\206\330\254", "\330\250\xdb\214\xd8\263\330\252\x20\xd9\210\x20\330\264\xd8\264", "\330\xa8\xdb\x8c\330\xb3\330\252\40\xd9\210\40\331\207\331\x81\330\xaa", "\xd8\xa8\333\214\330\263\xd8\xaa\x20\xd9\210\x20\331\x87\330\xb4\xd8\xaa", "\xd8\xa8\xdb\x8c\xd8\263\xd8\252\40\331\210\40\xd9\x86\331\207", "\xd8\263\333\214", "\xd8\263\333\214\40\xd9\210\40\xdb\x8c\332\251"];
                    goto wwkgkaecgiwggcck;
                    qsygcycwieukkgwc:
                case "\x72\x68":
                    goto kiwqkcaekqqyuegq;
                    quwcqmyokicssyew:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto iqcogmsguwoikame;
                    iqcogmsguwoikame:
                    goto egasokooagakisiy;
                    goto gimmuoqwckiseaik;
                    kiwqkcaekqqyuegq:
                    $uusmaiomayssaecw = [__("\x53\141\x74\x75\162\x64\x61\171", PR__PKG__JALALI), __("\123\165\156\x64\x61\x79", PR__PKG__JALALI), __("\x4d\157\x6e\x64\141\171", PR__PKG__JALALI), __("\124\165\x65\163\144\141\x79", PR__PKG__JALALI), __("\127\x65\144\156\x65\x73\x64\x61\x79", PR__PKG__JALALI), __("\x54\x68\165\162\x73\144\x61\171", PR__PKG__JALALI), __("\106\162\151\144\x61\x79", PR__PKG__JALALI)];
                    goto quwcqmyokicssyew;
                    gimmuoqwckiseaik:
                case "\x73\150":
                    goto cmqucgoewuyieoyk;
                    yqykqysmiquwoasu:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12];
                    goto ayyweymyuuiauamo;
                    ayyweymyuuiauamo:
                    goto egasokooagakisiy;
                    goto mosqsmqimqgqoase;
                    cmqucgoewuyieoyk:
                    $uusmaiomayssaecw = [__("\123\156\x61\153\145", PR__PKG__JALALI), __("\110\x6f\x72\163\x65", PR__PKG__JALALI), __("\x47\x6f\x61\x74", PR__PKG__JALALI), __("\x4d\x6f\156\x6b\x65\x79", PR__PKG__JALALI), __("\x52\157\157\x73\164\145\162", PR__PKG__JALALI), __("\104\x6f\147", PR__PKG__JALALI), __("\120\x69\x67", PR__PKG__JALALI), __("\122\141\164", PR__PKG__JALALI), __("\117\170", PR__PKG__JALALI), __("\x54\151\x67\145\162", PR__PKG__JALALI), __("\x52\141\x62\x62\151\x74", PR__PKG__JALALI), __("\x44\x72\x61\147\157\x6e", PR__PKG__JALALI)];
                    goto yqykqysmiquwoasu;
                    mosqsmqimqgqoase:
                case "\x6d\x62":
                    goto omugkkesagcyagmk;
                    ygcsmkuycoagwyou:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto kqksuugcgsyeoayy;
                    omugkkesagcyagmk:
                    $uusmaiomayssaecw = ["\330\xad\xd9\x85\331\204", "\xd8\253\331\x88\330\261", "\xd8\254\331\210\xd8\xb2\330\xa7", "\330\xb3\330\261\xd8\267\330\xa7\xd9\x86", "\330\247\330\xb3\xd8\xaf", "\xd8\xb3\331\x86\330\xa8\331\204\331\x87", "\xd9\205\xdb\214\xd8\262\330\xa7\331\206", "\330\xb9\331\202\xd8\261\xd8\250", "\xd9\x82\331\210\xd8\263", "\330\xac\xd8\xaf\333\x8c", "\xd8\257\xd9\x84\331\210", "\xd8\xad\xd9\x88\330\252"];
                    goto ygcsmkuycoagwyou;
                    kqksuugcgsyeoayy:
                    goto egasokooagakisiy;
                    goto iggyqogweyosuikc;
                    iggyqogweyosuikc:
                case "\x66\146":
                    goto qqewoyookaskiuek;
                    ssoucoucsgccekwe:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)];
                    goto qkcyqocqqwmqgqww;
                    qkcyqocqqwmqgqww:
                    goto egasokooagakisiy;
                    goto miyqyeiwquwsacsm;
                    qqewoyookaskiuek:
                    $uusmaiomayssaecw = [__("\123\160\x72\x69\156\147", PR__PKG__JALALI), __("\x53\165\155\155\x65\x72", PR__PKG__JALALI), __("\x41\165\x74\165\155\x6e", PR__PKG__JALALI), __("\x57\x69\x6e\164\145\162", PR__PKG__JALALI)];
                    goto ssoucoucsgccekwe;
                    miyqyeiwquwsacsm:
                case "\153\155":
                    goto eegqyykygiccaoeo;
                    eegqyykygiccaoeo:
                    $uusmaiomayssaecw = ["\xd9\201\330\xb1", "\330\247\xd8\xb1", "\xd8\256\330\xb1", "\330\252\333\x8c\342\x80\x8d", "\331\205\330\261", "\330\264\xd9\x87\342\200\x8d", "\331\205\331\x87\xe2\200\x8d", "\xd8\xa2\xd8\xa8\342\x80\x8d", "\330\242\330\xb0", "\xd8\257\333\214", "\330\250\xd9\207\342\x80\215", "\330\247\xd8\263\342\x80\x8d"];
                    goto ywqgcegomwaiuquc;
                    ywqgcegomwaiuquc:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto wmmggowmigekyoso;
                    wmmggowmigekyoso:
                    goto egasokooagakisiy;
                    goto soqqemyioggmoakg;
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
                    $uusmaiomayssaecw = [__("\123\141\x74", PR__PKG__JALALI), __("\123\x75\x6e", PR__PKG__JALALI), __("\x4d\157\x6e", PR__PKG__JALALI), __("\124\165\145", PR__PKG__JALALI), __("\x57\x65\x64", PR__PKG__JALALI), __("\124\150\165", PR__PKG__JALALI), __("\x46\162\x69", PR__PKG__JALALI)];
                    goto suswcqoyyqkkquuo;
                    oqugqwcyomiaaoqu:
                default:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm;
            }
            goto hoeeyiowekaeemko;
            kymkucucyeoeikim:
            egasokooagakisiy:
            goto usquiuuyiyqaeyiu;
            foeeqckqsyockkak:
            $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm);
            goto iekumemscwieugqw;
            usquiuuyiyqaeyiu:
            mswsoaimesegiiic:
            goto qicwaskssogcokgm;
            hoeeyiowekaeemko:
            kecwuwwcwokuksyq:
            goto kymkucucyeoeikim;
            qicwaskssogcokgm:
        }
        goto uqqaiagaeqgqgaiy;
        gaomwagkcciesyqy:
    }
    
    public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = "\x65\x6e", $eqmcogmcemgigckm = "\xd9\xab")
    {
    }
    
    public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '')
    {
        goto cgiscsqwwgqqaeqi;
        owmuceyswmgueasi:
        $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30);
        goto mwsmsguqqkcwiiuk;
        ueigkucgaucgeimc:
        $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365);
        goto sggawugoykqcmsug;
        wkeuuycukmuqiaom:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto wakmayaoqoskekqy;
        cgiscsqwwgqqaeqi:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode("\137", $this->ieacowssemeuewag($mggkikkcoygokucs . "\x5f" . $gguqkwucwcyqgwem . "\137" . $asgqasceaecqgouu));
        goto syiqkaasoueowwui;
        ugqaaewwmkocwwgy:
        $immmocykksywgkqu %= 12053;
        goto wgewmqieuamsoayy;
        sggawugoykqcmsug:
        if (!($immmocykksywgkqu > 365)) {
            goto soaccwqimeksgwiw;
        }
        goto wkeuuycukmuqiaom;
        iwsuawwqomaowuii:
        return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs;
        goto wcugqegqsuuuwqao;
        wakmayaoqoskekqy:
        soaccwqimeksgwiw:
        goto qmuwoecuacmkwgem;
        mwsmsguqqkcwiiuk:
        $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30;
        goto eeauyscekuckoues;
        egyyiccaeeiooaua:
        $mggkikkcoygokucs -= 1600;
        goto scisgsyemmsekgos;
        ooeausyowguqicuo:
        $yywykyucyekisogg = 979;
        goto egyyiccaeeiooaua;
        wgewmqieuamsoayy:
        $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461);
        goto kqgcyoscsusgoaqi;
        omqiayeucoioqoao:
        $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053);
        goto ugqaaewwmkocwwgy;
        msemumccgceyugmg:
        $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31);
        goto wagqgeqymeqoeuyi;
        giaacoqqqsekcayy:
        if ($mggkikkcoygokucs > 1600) {
            goto aegysmeecgcgayyw;
        }
        goto ewymsmkkiksgwysk;
        wmywuusgukmmaams:
        goto suqkuqygkkgwyaie;
        goto gkyawqqcmigqgaiq;
        scisgsyemmsekgos:
        suqkuqygkkgwyaie:
        goto cewmoqyysgsmuiya;
        igooksugieceoege:
        $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1];
        goto omqiayeucoioqoao;
        cmegwsegsosyqcai:
        $mggkikkcoygokucs -= 621;
        goto wmywuusgukmmaams;
        cewmoqyysgsmuiya:
        $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs;
        goto igooksugieceoege;
        eeauyscekuckoues:
        goto skkamseieeusycye;
        goto eogwckcymuugikuy;
        kqgcyoscsusgoaqi:
        $immmocykksywgkqu %= 1461;
        goto ueigkucgaucgeimc;
        ewymsmkkiksgwysk:
        $yywykyucyekisogg = 0;
        goto cmegwsegsosyqcai;
        syiqkaasoueowwui:
        $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        goto giaacoqqqsekcayy;
        qmuwoecuacmkwgem:
        if ($immmocykksywgkqu < 186) {
            goto wiysogeqqwgioyka;
        }
        goto owmuceyswmgueasi;
        gkyawqqcmigqgaiq:
        aegysmeecgcgayyw:
        goto ooeausyowguqicuo;
        eogwckcymuugikuy:
        wiysogeqqwgioyka:
        goto msemumccgceyugmg;
        wagqgeqymeqoeuyi:
        $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31;
        goto qoqskyuuwueqkquk;
        qoqskyuuwueqkquk:
        skkamseieeusycye:
        goto iwsuawwqomaowuii;
        wcugqegqsuuuwqao:
    }
    
    public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '')
    {
        goto kqqiegkuqagcqsya;
        kosaqwikueyksqmw:
        if (!($immmocykksywgkqu > 36524)) {
            goto qgeugwymkkiacwoc;
        }
        goto gicyayswqyuoekcq;
        eekcoeikaeaaeyii:
        $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365);
        goto cogywoqcqummsyus;
        uaqackioaiqwcocy:
        foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) {
            goto oomguqikqokqwgku;
            oomguqikqokqwgku:
            if (!($asgqasceaecqgouu <= $mokouoooiwsmcmiu)) {
                goto acsqgiuageaasiyy;
            }
            goto samwkqgwouggsguc;
            samwkqgwouggsguc:
            goto ouamogymawucwswu;
            goto wyuemgggaqogsmsq;
            wyuemgggaqogsmsq:
            acsqgiuageaasiyy:
            goto guykyqecgswcsmws;
            guykyqecgswcsmws:
            $asgqasceaecqgouu -= $mokouoooiwsmcmiu;
            goto kkumywowcoycymeo;
            kkumywowcoycymeo:
            mugqyyeayeyggqqk:
            goto miweggwqeiaeweia;
            miweggwqeiaeweia:
        }
        goto cscusseysqygsoiy;
        sockeswygwcskeuq:
        $gguqkwucwcyqgwem = 0;
        goto mkwkkmkgiqiamacc;
        cscusseysqygsoiy:
        ouamogymawucwswu:
        goto isgwkwacoyimiauk;
        isgwkwacoyimiauk:
        return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu;
        goto mggeqkcksyaymcsa;
        ousiuuwgwkiyikyq:
        if ($yywykyucyekisogg > 979) {
            goto asiqwuoswmigcaki;
        }
        goto ogsaaqsaogcqiouy;
        ogsaaqsaogcqiouy:
        $mggkikkcoygokucs = 621;
        goto iwekmyyccgiyuecc;
        gmwykkouysyaqwqm:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto ugqwuugsweqgmywk;
        uaukmuiwskcemcsw:
        $asgqasceaecqgouu = $immmocykksywgkqu + 1;
        goto sockeswygwcskeuq;
        gicyayswqyuoekcq:
        $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524);
        goto iikiiioqiyegyaak;
        cogywoqcqummsyus:
        if (!($immmocykksywgkqu > 365)) {
            goto emmsycooskoqmgeg;
        }
        goto gmwykkouysyaqwqm;
        qmkaeeomgkwggoyo:
        qgeugwymkkiacwoc:
        goto csammceowmqwaamq;
        ogqmesokykywseys:
        $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186);
        goto ykomgumacooyomsk;
        iikiiioqiyegyaak:
        $immmocykksywgkqu %= 36524;
        goto uiosisocuwokwkie;
        cwwmimggaaecmucw:
        $yywykyucyekisogg -= 979;
        goto awoaooyoeoyeeqee;
        mkwkkmkgiqiamacc:
        $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        goto uaqackioaiqwcocy;
        ugqwuugsweqgmywk:
        emmsycooskoqmgeg:
        goto uaukmuiwskcemcsw;
        gcckqucukawcasgk:
        mqicocmqegwukkwg:
        goto qmkaeeomgkwggoyo;
        iwekmyyccgiyuecc:
        goto ciykoyeioqgyaeqo;
        goto ikqqskkqqwmwssoo;
        ikqqskkqqwmwssoo:
        asiqwuoswmigcaki:
        goto aomysykcgikegiau;
        kqqiegkuqagcqsya:
        [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode("\x5f", $this->ieacowssemeuewag($yywykyucyekisogg . "\x5f" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs));
        goto ousiuuwgwkiyikyq;
        uiosisocuwokwkie:
        if (!($immmocykksywgkqu >= 365)) {
            goto mqicocmqegwukkwg;
        }
        goto cuumeogeomowqisc;
        mqkmcysgoiaouiwm:
        $immmocykksywgkqu %= 146097;
        goto kosaqwikueyksqmw;
        awoaooyoeoyeeqee:
        ciykoyeioqgyaeqo:
        goto ogqmesokykywseys;
        cuumeogeomowqisc:
        $immmocykksywgkqu++;
        goto gcckqucukawcasgk;
        aomysykcgikegiau:
        $mggkikkcoygokucs = 1600;
        goto cwwmimggaaecmucw;
        ocaguquugeamqckq:
        $immmocykksywgkqu %= 1461;
        goto eekcoeikaeaaeyii;
        csammceowmqwaamq:
        $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461);
        goto ocaguquugeamqckq;
        ykomgumacooyomsk:
        $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097);
        goto mqkmcysgoiaouiwm;
        mggeqkcksyaymcsa:
    }
    
    public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = "\x66\141")
    {
        goto ocywegekakimmwcq;
        esaqcqqwuussiiwo:
        $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa);
        goto ikqeeaysmqgcgawq;
        ikqeeaysmqgcgawq:
        $qcgkuqesqqymcuui = '';
        goto mscgewkcqcoowweg;
        emqswoaawgeyosmi:
        $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak));
        goto iwsmmkqaoksmocok;
        wwukgaquuyoissgy:
        if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) {
            goto uegouoiuyoqkcscg;
        }
        goto gsygwgsiawgmqiyi;
        okkmcocqokkskasy:
        $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185;
        goto qiiigwkqeoewsuwm;
        qikaewekoecykeou:
        goto cgyakcqgugqgkqiw;
        goto eucqomyqykgoiuge;
        egmayaiikwsskgmy:
        return $mcmaiqckgiuqayau != "\145\156" ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, "\146\141", "\x2e") : $qcgkuqesqqymcuui;
        goto ucuoeymyqeokgsya;
        mscgewkcqcoowweg:
        $ciyackuwsqkoqese = 0;
        goto suqcsgaosywaauuu;
        qsgqwyqaqiowkmco:
        if (!($uskwgmsuqowaosow == "\134")) {
            goto eeyyskqsmquyquqw;
        }
        goto yqagomygmeoecwey;
        ocywegekakimmwcq:
        $T_sec = 0;
        goto emqswoaawgeyosmi;
        aiccyaswigkaycqk:
        kqswcsysqawkcgye:
        goto sqyokemumceysegy;
        eucqomyqykgoiuge:
        eeyyskqsmquyquqw:
        goto usymasgsyqgsuocg;
        qiiigwkqeoewsuwm:
        $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0;
        goto esaqcqqwuussiiwo;
        yqagomygmeoecwey:
        $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1);
        goto qikaewekoecykeou;
        oqousikwiiqagoyw:
        cgyakcqgugqgkqiw:
        goto zayqqeqgcwkekwws;
        suqcsgaosywaauuu:
        yuimwyoywaiiqacs:
        goto wwukgaquuyoissgy;
        aueaceeyommgkicu:
        goto yuimwyoywaiiqacs;
        goto mysueeoswqgccmui;
        usymasgsyqgsuocg:
        switch ($uskwgmsuqowaosow) {
            case "\105":
            case "\x52":
            case "\x78":
            case "\130":
                $qcgkuqesqqymcuui .= "\x68\164\x74\x70\72\57\x2f\x6a\144\x66\56\163\x63\x72\56\151\x72";
                goto ewscugeuicukkycc;
            case "\102":
            case "\x65":
            case "\147":
            case "\107":
            case "\150":
            case "\111":
            case "\124":
            case "\x75":
            case "\x5a":
                $qcgkuqesqqymcuui .= date($uskwgmsuqowaosow, $msqmoegqiqqmesci);
                goto ewscugeuicukkycc;
            case "\141":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\x50\115", PR__PKG__JALALI) : __("\101\x4d", PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case "\101":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\x42\x65\146\x6f\x72\145\40\x6e\x6f\x6f\x6e", PR__PKG__JALALI) : __("\x41\x66\x74\x65\x72\x20\156\x6f\157\156", PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case "\x62":
                $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1;
                goto ewscugeuicukkycc;
            case "\143":
                $qcgkuqesqqymcuui .= $j_y . "\x2f" . $j_m . "\x2f" . $j_d . "\x20\xd8\214" . $ocogsiouoiuuguym[0] . "\x3a" . $ocogsiouoiuuguym[1] . "\x3a" . $ocogsiouoiuuguym[6] . "\x20" . $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case "\103":
                $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100);
                goto ewscugeuicukkycc;
            case "\144":
                $qcgkuqesqqymcuui .= $j_d < 10 ? "\x30" . $j_d : $j_d;
                goto ewscugeuicukkycc;
            case "\x44":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\153\150" => $ocogsiouoiuuguym[7]], "\x20");
                goto ewscugeuicukkycc;
            case "\x66":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\146\146" => $j_m], "\x20");
                goto ewscugeuicukkycc;
            case "\115":
            case "\x46":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\155\155" => $j_m], "\40");
                goto ewscugeuicukkycc;
            case "\110":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0];
                goto ewscugeuicukkycc;
            case "\151":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1];
                goto ewscugeuicukkycc;
            case "\152":
                $qcgkuqesqqymcuui .= $j_d;
                goto ewscugeuicukkycc;
            case "\112":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x72\162" => $j_d], "\x20");
                goto ewscugeuicukkycc;
            case "\153":
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case "\113":
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case "\154":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\162\150" => $ocogsiouoiuuguym[7]], "\40");
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
            case "\157":
                goto wusciwkkckmqigms;
                ukkcmocamwgiqayu:
                $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y);
                goto mwysseaekcsiesmm;
                iiiccouaaqsyikae:
                $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo;
                goto ukkcmocamwgiqayu;
                wusciwkkckmqigms:
                $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto iiiccouaaqsyikae;
                mwysseaekcsiesmm:
                goto ewscugeuicukkycc;
                goto amgsueumgaguceaa;
                amgsueumgaguceaa:
            case "\x4f":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4];
                goto ewscugeuicukkycc;
            case "\x70":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6d\142" => $j_m], "\40");
                goto ewscugeuicukkycc;
            case "\x50":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case "\161":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\163\x68" => $j_y], "\x20");
                goto ewscugeuicukkycc;
            case "\121":
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            case "\162":
                goto gygwewcqsmwqismo;
                gygwewcqsmwqismo:
                $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(["\162\150" => $ocogsiouoiuuguym[7], "\155\155" => $j_m]);
                goto uougwgeyiokewkkm;
                gommacygsykyussk:
                goto ewscugeuicukkycc;
                goto ukqocwewouckikso;
                uougwgeyiokewkkm:
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . "\x3a" . $ocogsiouoiuuguym[1] . "\72" . $ocogsiouoiuuguym[6] . "\x20" . $ocogsiouoiuuguym[4] . "\x20" . $uusmaiomayssaecw["\x72\150"] . "\330\214\x20" . $j_d . "\x20" . $uusmaiomayssaecw["\x6d\155"] . "\x20" . $j_y;
                goto gommacygsykyussk;
                ukqocwewouckikso:
            case "\163":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6];
                goto ewscugeuicukkycc;
            case "\x53":
                $qcgkuqesqqymcuui .= "\330\xa7\xd9\205";
                goto ewscugeuicukkycc;
            case "\x74":
                $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29;
                goto ewscugeuicukkycc;
            case "\x55":
                $qcgkuqesqqymcuui .= $msqmoegqiqqmesci;
                goto ewscugeuicukkycc;
            case "\166":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\x73" => $j_y % 100], "\40");
                goto ewscugeuicukkycc;
            case "\x56":
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\163\x73" => $j_y], "\40");
                goto ewscugeuicukkycc;
            case "\x77":
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto ewscugeuicukkycc;
            case "\127":
                goto uqokiksoqcwwqgio;
                ikuuiauwouuqawuw:
                $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? "\x30\x31" : ($mqwsmsykyouoomgm < 10 ? "\x30" . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm);
                goto yoqakewookqoqacm;
                uqokiksoqcwwqgio:
                $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7;
                goto qukocuwgakemmyga;
                yoqakewookqoqacm:
                goto ewscugeuicukkycc;
                goto gswcoeiisamakwii;
                iesekaeqeomeuaui:
                uimeeckqksqeekqq:
                goto wsesqmcqoiyyqkqi;
                kwiggogcgciwuwqk:
                $ecsiqegmcewekssu = 0;
                goto uckewycoogsogwiy;
                yiowgigkkwsoqcci:
                ucqmumuygcywwqma:
                goto ieqesiiageaauiuw;
                mogkoocsoeuyoqqa:
                goto uykousayyomcaeaa;
                goto wkwamkgkwykeqkec;
                yykqaowwsqgqysmq:
                if (!($ecsiqegmcewekssu == 7)) {
                    goto kocqqoyymosmuksu;
                }
                goto kwiggogcgciwuwqk;
                wkwamkgkwykeqkec:
                iuuuususuuuaieem:
                goto oimkeqocuguqqsqk;
                oeocukauoyosicso:
                uykousayyomcaeaa:
                goto suqceasgacskcmkc;
                sioekkmekwygemyc:
                $aaeqayuykcqoqiuu += 7;
                goto yiowgigkkwsoqcci;
                suqceasgacskcmkc:
                $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq;
                goto yykqaowwsqgqysmq;
                mscyggqcesgqqksu:
                if ($mqwsmsykyouoomgm < 1) {
                    goto iuuuususuuuaieem;
                }
                goto oyeyomcgkmgymogq;
                uckewycoogsogwiy:
                kocqqoyymosmuksu:
                goto ikuuiauwouuqawuw;
                oimkeqocuguqqsqk:
                $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52;
                goto oeocukauoyosicso;
                wsesqmcqoiyyqkqi:
                $mqwsmsykyouoomgm++;
                goto mogkoocsoeuyoqqa;
                gamqcwuwkikwqoay:
                if ($aaeqayuykcqoqiuu < 4) {
                    goto uimeeckqksqeekqq;
                }
                goto mscyggqcesgqqksu;
                ieqesiiageaauiuw:
                $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7);
                goto gamqcwuwkikwqoay;
                qukocuwgakemmyga:
                if (!($aaeqayuykcqoqiuu < 0)) {
                    goto ucqmumuygcywwqma;
                }
                goto sioekkmekwygemyc;
                oyeyomcgkmgymogq:
                goto uykousayyomcaeaa;
                goto iesekaeqeomeuaui;
                gswcoeiisamakwii:
            case "\x79":
                $qcgkuqesqqymcuui .= substr($j_y, 2, 2);
                goto ewscugeuicukkycc;
            case "\x59":
                $qcgkuqesqqymcuui .= $j_y;
                goto ewscugeuicukkycc;
            case "\x7a":
                $qcgkuqesqqymcuui .= $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            default:
                $qcgkuqesqqymcuui .= $uskwgmsuqowaosow;
        }
        goto aiccyaswigkaycqk;
        sqyokemumceysegy:
        ewscugeuicukkycc:
        goto oqousikwiiqagoyw;
        gsygwgsiawgmqiyi:
        $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1);
        goto qsgqwyqaqiowkmco;
        iwsmmkqaoksmocok:
        
        $ocogsiouoiuuguym = explode("\137", date("\110\137\151\137\152\x5f\x6e\137\x4f\x5f\x50\137\x73\x5f\x77\x5f\x59", $msqmoegqiqqmesci));
        goto esikeyqyuikmaiek;
        mysueeoswqgccmui:
        uegouoiuyoqkcscg:
        goto egmayaiikwsskgmy;
        zayqqeqgcwkekwws:
        $ciyackuwsqkoqese++;
        goto aueaceeyommgkicu;
        esikeyqyuikmaiek:
        [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]);
        goto okkmcocqokkskasy;
        ucuoeymyqeokgsya:
    }
    
    public function ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\x65\156", $eqmcogmcemgigckm = "\331\253")
    {
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
    }
    
    public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = "\x41\163\151\141\x2f\x54\x65\x68\162\141\156", $seieuccuyuucuigq = "\x65\x6e") : array
    {
        goto yuuyikiacmmueosu;
        yuuyikiacmmueosu:
        $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak);
        goto sguskaeaaqcagqgc;
        sguskaeaaqcagqgc:
        $ocogsiouoiuuguym = explode("\x5f", $this->date("\x46\x5f\x47\x5f\151\x5f\152\137\x6c\x5f\x6e\137\163\137\x77\137\131\x5f\x7a", $msqmoegqiqqmesci, $seieuccuyuucuigq));
        goto agkmiayuawacakau;
        agkmiayuawacakau:
        return ["\x73\x65\143\157\156\x64\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), "\155\151\156\x75\164\x65\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), "\150\157\x75\x72\163" => $ocogsiouoiuuguym[1], "\155\x64\x61\x79" => $ocogsiouoiuuguym[3], "\x77\144\x61\x79" => $ocogsiouoiuuguym[7], "\x6d\x6f\x6e" => $ocogsiouoiuuguym[5], "\171\145\x61\x72" => $ocogsiouoiuuguym[8], "\171\144\x61\171" => $ocogsiouoiuuguym[9], "\167\x65\x65\153\x64\x61\171" => $ocogsiouoiuuguym[4], "\155\x6f\156\164\x68" => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)];
        goto syuaummumssgwwee;
        syuaummumssgwwee:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = "\101\x73\151\x61\x2f\x54\x65\x68\162\x61\156")
    {
        goto sqmoqymckwsogsqg;
        skuqigsokaguscas:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]);
        goto quyogmwugsyoaaiu;
        sgiwoiscywusgmmm:
        egsycocugqyyswsi:
        goto skuqigsokaguscas;
        wgiygcmqaokywuqa:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw);
        goto iauwuugggmegwisk;
        qkuiwoqksgayqqmg:
        if ($sseomcuueskqeayq === '') {
            goto aoquoewagkseayug;
        }
        goto easqmyamcmeesgya;
        eckcqesiokgwkkiw:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto ecouwqosmoyyqmkw;
        goqmywuiicciasyk:
        if ($gcisockiummsmcag === '') {
            goto mkomygccqkmkumsi;
        }
        goto siecswkggyikqkga;
        uycesqqkoeamocgm:
        date_default_timezone_set($umusyyqoeegoyiqs);
        goto ceiwqkyquikcemmo;
        yssqmyoaokkksukc:
        cgmgqucewwssmicq:
        goto ooqksueucyagyuoe;
        siecswkggyikqkga:
        if ($piuesceqiguuskme === '') {
            goto ciucewqgyoiouesq;
        }
        goto qkuiwoqksgayqqmg;
        yuqgwwmqwqiuwmaw:
        if ($ikiykmwgkuqwcmcs === '') {
            goto egsycocugqyyswsi;
        }
        goto quaqmuusokiyqgqe;
        wmumywgyyeagqoeq:
        goto osuscoaaomwcqkew;
        goto smcguieygyqcaqgs;
        mmgmqogugasaqkgg:
        qiaimmucomukkeka:
        goto wmumywgyyeagqoeq;
        smcguieygyqcaqgs:
        aoquoewagkseayug:
        goto mgcuiguaomoqwwwm;
        wkgskiuiukiuyque:
        if ($ackqauiusooswkmw === '') {
            goto oyiuemaaykgkqqam;
        }
        goto oyiuyywyeoskckuw;
        yuoeumyiuqkuouey:
        goto cgmgqucewwssmicq;
        goto eyiwqgqcsqakwqss;
        ooqksueucyagyuoe:
        goto ussceseaimqywuiy;
        goto osmmoyqkqoucsgow;
        sckioayasmkcoeoo:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag);
        goto yssqmyoaokkksukc;
        quaqmuusokiyqgqe:
        if ($yywykyucyekisogg === '') {
            goto qkcsykuocwuyaice;
        }
        goto smiemmcqqukyguuu;
        yamyagayiooyeekg:
        goto uoeasoimegouymka;
        goto yoagcooekomeokwg;
        oyiuyywyeoskckuw:
        [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\x5f", $this->ieacowssemeuewag($ackqauiusooswkmw . "\137" . $gcisockiummsmcag . "\x5f" . $piuesceqiguuskme . "\x5f" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\x5f" . $yywykyucyekisogg));
        goto goqmywuiicciasyk;
        sqmoqymckwsogsqg:
        if (!($umusyyqoeegoyiqs != "\x6c\x6f\143\141\154")) {
            goto oocuemosmeeekgas;
        }
        goto uycesqqkoeamocgm;
        easqmyamcmeesgya:
        $ocogsiouoiuuguym = explode("\137", $this->date("\131\x5f\152", '', "\145\156"));
        goto yuqgwwmqwqiuwmaw;
        mqiiqkuaoekeuswo:
        uoeasoimegouymka:
        goto qmoocweoekqueuyy;
        eyiwqgqcsqakwqss:
        ciucewqgyoiouesq:
        goto sckioayasmkcoeoo;
        ukomuiwukymcoaso:
        $cqgoimumaewouews = 0;
        goto wkgskiuiukiuyque;
        aukucaieceiwesmm:
        goto gqmewagyagamokok;
        goto kqyoakickmseyyeq;
        micceocwuwkyusic:
        $cqgoimumaewouews = time();
        goto iwueukqcywkiyqge;
        yoagcooekomeokwg:
        qkcsykuocwuyaice:
        goto eckcqesiokgwkkiw;
        osmmoyqkqoucsgow:
        mkomygccqkmkumsi:
        goto wgiygcmqaokywuqa;
        ecouwqosmoyyqmkw:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu);
        goto mqiiqkuaoekeuswo;
        qmoocweoekqueuyy:
        goto qiaimmucomukkeka;
        goto sgiwoiscywusgmmm;
        smiemmcqqukyguuu:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto iksewmsaugayqaqq;
        eoyiumycaigawmmc:
        osuscoaaomwcqkew:
        goto yuoeumyiuqkuouey;
        iauwuugggmegwisk:
        ussceseaimqywuiy:
        goto aukucaieceiwesmm;
        kqyoakickmseyyeq:
        oyiuemaaykgkqqam:
        goto micceocwuwkyusic;
        mgcuiguaomoqwwwm:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme);
        goto eoyiumycaigawmmc;
        ykwasaaoeeiuomim:
        return $cqgoimumaewouews;
        goto acggikioyeueeowg;
        iwueukqcywkiyqge:
        gqmewagyagamokok:
        goto ykwasaaoeeiuomim;
        iksewmsaugayqaqq:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs);
        goto yamyagayiooyeekg;
        quyogmwugsyoaaiu:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem);
        goto mmgmqogugasaqkgg;
        ceiwqkyquikcemmo:
        oocuemosmeeekgas:
        goto ukomuiwukymcoaso;
        acggikioyeueeowg:
    }
}

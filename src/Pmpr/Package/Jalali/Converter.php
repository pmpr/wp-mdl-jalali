<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
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
        $qcgkuqesqqymcuui = $this->yqeyqmywaiwkkcao(['mm' => (int) $mwemskcucwsyycwm]);
        return ManipulateArray::get($qcgkuqesqqymcuui, 'mm', $qcgkuqesqqymcuui);
    }
    
    public function ogoquecgeowwigwk($sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg) : bool
    {
        goto yiwiqaqmwiogawym;
        goacqqsgaaigyuaw:
        $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5);
        goto meawswgwagoqgkye;
        meawswgwagoqgkye:
        return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1);
        goto wcesymwqykqoyuqk;
        yiwiqaqmwiogawym:
        [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode('_', $this->msywmyaoqmaegsuy($sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs . '_' . $yywykyucyekisogg));
        goto goacqqsgaaigyuaw;
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
            foeeqckqsyockkak:
            $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm);
            goto iekumemscwieugqw;
            hoeeyiowekaeemko:
            kecwuwwcwokuksyq:
            goto kymkucucyeoeikim;
            kymkucucyeoeikim:
            egasokooagakisiy:
            goto usquiuuyiyqaeyiu;
            iekumemscwieugqw:
            switch ($sqeykgyoooqysmca) {
                case 'ss':
                    goto goeoymmqqqeeoime;
                    qwcegcuowwgiccos:
                    $ygaqkccwykqkamoo = [__('Ten', PR__PKG__JALALI), __('Eleven', PR__PKG__JALALI), __('Twelve', PR__PKG__JALALI), __('Thirteen', PR__PKG__JALALI), __('Fourteen', PR__PKG__JALALI), __('Fifteen', PR__PKG__JALALI), __('Sixteen', PR__PKG__JALALI), __('Seventeen', PR__PKG__JALALI), __('Eighteen', PR__PKG__JALALI), __('Nineteen', PR__PKG__JALALI)];
                    goto qcessicwuikwqsis;
                    ickcmqoiosquugwe:
                    $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = '';
                    goto qmeoaqmsuseueqiy;
                    igymseewwyiocoug:
                    $uoumogqmkuousoia = ['', __('One', PR__PKG__JALALI), __('Two', PR__PKG__JALALI), __('Three', PR__PKG__JALALI), __('Four', PR__PKG__JALALI), __('Five', PR__PKG__JALALI), __('Six', PR__PKG__JALALI), __('Seven', PR__PKG__JALALI), __('Eight', PR__PKG__JALALI), __('Nine', PR__PKG__JALALI)];
                    goto mqccmesakuemceqi;
                    cuoqqgaygogsmmic:
                    $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : ' و ';
                    goto cgewcsueoyaeikgm;
                    eyiamcekkgkiawqy:
                    goto qmiwsequckckoaei;
                    goto twkmiuomimomscew;
                    ieumumsgyguceusy:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(['12', '13', '14', '19', '20'], ['هزار و دویست', 'هزار و سیصد', 'هزار و چهارصد', 'هزار و نهصد', 'دوهزار'], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == '00' ? '' : ' و ') : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku;
                    goto coywmiyqgsweuiic;
                    cgewcsueoyaeikgm:
                    $ukoioyqsqkuskqom = ['', '', __('Twenty', PR__PKG__JALALI), __('Thirty', PR__PKG__JALALI), __('Forty', PR__PKG__JALALI), __('Fifty', PR__PKG__JALALI), __('Sixty', PR__PKG__JALALI), __('Seventy', PR__PKG__JALALI), __('Eighty', PR__PKG__JALALI), __('Ninety', PR__PKG__JALALI)];
                    goto sukskmcwsoysiuqu;
                    kooskuwkuayiuose:
                    $kckiiskiksiousiy = '';
                    goto qwcegcuowwgiccos;
                    mqccmesakuemceqi:
                    $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou];
                    goto eyiamcekkgkiawqy;
                    twkmiuomimomscew:
                    qgegkeomwscwwiuw:
                    goto kooskuwkuayiuose;
                    goeoymmqqqeeoime:
                    $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm);
                    goto eiawsoasmscmqswa;
                    qcessicwuikwqsis:
                    $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10];
                    goto yssscwioiyygssec;
                    sukskmcwsoysiuqu:
                    $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise];
                    goto igymseewwyiocoug;
                    coywmiyqgsweuiic:
                    goto egasokooagakisiy;
                    goto siqagquguiemuoku;
                    yssscwioiyygssec:
                    qmiwsequckckoaei:
                    goto ieumumsgyguceusy;
                    eiawsoasmscmqswa:
                    $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1);
                    goto ickcmqoiosquugwe;
                    qmeoaqmsuseueqiy:
                    if ($eouwgmemicwiwise == 1) {
                        goto qgegkeomwscwwiuw;
                    }
                    goto ygkcacsyyckescqs;
                    ygkcacsyyckescqs:
                    $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1);
                    goto cuoqqgaygogsmmic;
                    siqagquguiemuoku:
                case 'mm':
                    goto ycakugokkqkuqyiu;
                    sycygoiaiqqageym:
                    goto egasokooagakisiy;
                    goto gygawoqywkukmqee;
                    ycakugokkqkuqyiu:
                    $uusmaiomayssaecw = ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'];
                    goto oouoqimaaqcmccay;
                    oouoqimaaqcmccay:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto sycygoiaiqqageym;
                    gygawoqywkukmqee:
                case 'rr':
                    goto kciouyuaqkyqomam;
                    kciouyuaqkyqomam:
                    $uusmaiomayssaecw = ['یک', 'دو', 'سه', 'چهار', 'پنج', 'شش', 'هفت', 'هشت', 'نه', 'ده', 'یازده', 'دوازده', 'سیزده', 'چهارده', 'پانزده', 'شانزده', 'هفده', 'هجده', 'نوزده', 'بیست', 'بیست و یک', 'بیست و دو', 'بیست و سه', 'بیست و چهار', 'بیست و پنج', 'بیست و شش', 'بیست و هفت', 'بیست و هشت', 'بیست و نه', 'سی', 'سی و یک'];
                    goto wwkgkaecgiwggcck;
                    wwkgkaecgiwggcck:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto umgaesggesswoaqe;
                    umgaesggesswoaqe:
                    goto egasokooagakisiy;
                    goto qsygcycwieukkgwc;
                    qsygcycwieukkgwc:
                case 'rh':
                    goto kiwqkcaekqqyuegq;
                    quwcqmyokicssyew:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto iqcogmsguwoikame;
                    kiwqkcaekqqyuegq:
                    $uusmaiomayssaecw = [__('Saturday', PR__PKG__JALALI), __('Sunday', PR__PKG__JALALI), __('Monday', PR__PKG__JALALI), __('Tuesday', PR__PKG__JALALI), __('Wednesday', PR__PKG__JALALI), __('Thursday', PR__PKG__JALALI), __('Friday', PR__PKG__JALALI)];
                    goto quwcqmyokicssyew;
                    iqcogmsguwoikame:
                    goto egasokooagakisiy;
                    goto gimmuoqwckiseaik;
                    gimmuoqwckiseaik:
                case 'sh':
                    goto cmqucgoewuyieoyk;
                    cmqucgoewuyieoyk:
                    $uusmaiomayssaecw = [__('Snake', PR__PKG__JALALI), __('Horse', PR__PKG__JALALI), __('Goat', PR__PKG__JALALI), __('Monkey', PR__PKG__JALALI), __('Rooster', PR__PKG__JALALI), __('Dog', PR__PKG__JALALI), __('Pig', PR__PKG__JALALI), __('Rat', PR__PKG__JALALI), __('Ox', PR__PKG__JALALI), __('Tiger', PR__PKG__JALALI), __('Rabbit', PR__PKG__JALALI), __('Dragon', PR__PKG__JALALI)];
                    goto yqykqysmiquwoasu;
                    ayyweymyuuiauamo:
                    goto egasokooagakisiy;
                    goto mosqsmqimqgqoase;
                    yqykqysmiquwoasu:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12];
                    goto ayyweymyuuiauamo;
                    mosqsmqimqgqoase:
                case 'mb':
                    goto omugkkesagcyagmk;
                    ygcsmkuycoagwyou:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto kqksuugcgsyeoayy;
                    omugkkesagcyagmk:
                    $uusmaiomayssaecw = ['حمل', 'ثور', 'جوزا', 'سرطان', 'اسد', 'سنبله', 'میزان', 'عقرب', 'قوس', 'جدی', 'دلو', 'حوت'];
                    goto ygcsmkuycoagwyou;
                    kqksuugcgsyeoayy:
                    goto egasokooagakisiy;
                    goto iggyqogweyosuikc;
                    iggyqogweyosuikc:
                case 'ff':
                    goto qqewoyookaskiuek;
                    ssoucoucsgccekwe:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)];
                    goto qkcyqocqqwmqgqww;
                    qqewoyookaskiuek:
                    $uusmaiomayssaecw = [__('Spring', PR__PKG__JALALI), __('Summer', PR__PKG__JALALI), __('Autumn', PR__PKG__JALALI), __('Winter', PR__PKG__JALALI)];
                    goto ssoucoucsgccekwe;
                    qkcyqocqqwmqgqww:
                    goto egasokooagakisiy;
                    goto miyqyeiwquwsacsm;
                    miyqyeiwquwsacsm:
                case 'km':
                    goto eegqyykygiccaoeo;
                    eegqyykygiccaoeo:
                    $uusmaiomayssaecw = ['فر', 'ار', 'خر', 'تی‍', 'مر', 'شه‍', 'مه‍', 'آب‍', 'آذ', 'دی', 'به‍', 'اس‍'];
                    goto ywqgcegomwaiuquc;
                    wmmggowmigekyoso:
                    goto egasokooagakisiy;
                    goto soqqemyioggmoakg;
                    ywqgcegomwaiuquc:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto wmmggowmigekyoso;
                    soqqemyioggmoakg:
                case 'kh':
                    goto acaqummmoyiemqss;
                    suswcqoyyqkkquuo:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto eeqesooyqagwawae;
                    acaqummmoyiemqss:
                    $uusmaiomayssaecw = [__('Sat', PR__PKG__JALALI), __('Sun', PR__PKG__JALALI), __('Mon', PR__PKG__JALALI), __('Tue', PR__PKG__JALALI), __('Wed', PR__PKG__JALALI), __('Thu', PR__PKG__JALALI), __('Fri', PR__PKG__JALALI)];
                    goto suswcqoyyqkkquuo;
                    eeqesooyqagwawae:
                    goto egasokooagakisiy;
                    goto oqugqwcyomiaaoqu;
                    oqugqwcyomiaaoqu:
                default:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm;
            }
            goto hoeeyiowekaeemko;
            usquiuuyiyqaeyiu:
            mswsoaimesegiiic:
            goto qicwaskssogcokgm;
            qicwaskssogcokgm:
        }
        goto uqqaiagaeqgqgaiy;
        gaomwagkcciesyqy:
    }
    
    public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = 'en', $eqmcogmcemgigckm = '٫')
    {
    }
    
    public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '')
    {
        goto cgiscsqwwgqqaeqi;
        qmuwoecuacmkwgem:
        if ($immmocykksywgkqu < 186) {
            goto wiysogeqqwgioyka;
        }
        goto owmuceyswmgueasi;
        cgiscsqwwgqqaeqi:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode('_', $this->ieacowssemeuewag($mggkikkcoygokucs . '_' . $gguqkwucwcyqgwem . '_' . $asgqasceaecqgouu));
        goto syiqkaasoueowwui;
        owmuceyswmgueasi:
        $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30);
        goto mwsmsguqqkcwiiuk;
        ugqaaewwmkocwwgy:
        $immmocykksywgkqu %= 12053;
        goto wgewmqieuamsoayy;
        iwsuawwqomaowuii:
        return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs;
        goto wcugqegqsuuuwqao;
        cewmoqyysgsmuiya:
        $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs;
        goto igooksugieceoege;
        giaacoqqqsekcayy:
        if ($mggkikkcoygokucs > 1600) {
            goto aegysmeecgcgayyw;
        }
        goto ewymsmkkiksgwysk;
        sggawugoykqcmsug:
        if (!($immmocykksywgkqu > 365)) {
            goto soaccwqimeksgwiw;
        }
        goto wkeuuycukmuqiaom;
        scisgsyemmsekgos:
        suqkuqygkkgwyaie:
        goto cewmoqyysgsmuiya;
        gkyawqqcmigqgaiq:
        aegysmeecgcgayyw:
        goto ooeausyowguqicuo;
        eogwckcymuugikuy:
        wiysogeqqwgioyka:
        goto msemumccgceyugmg;
        ewymsmkkiksgwysk:
        $yywykyucyekisogg = 0;
        goto cmegwsegsosyqcai;
        kqgcyoscsusgoaqi:
        $immmocykksywgkqu %= 1461;
        goto ueigkucgaucgeimc;
        msemumccgceyugmg:
        $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31);
        goto wagqgeqymeqoeuyi;
        qoqskyuuwueqkquk:
        skkamseieeusycye:
        goto iwsuawwqomaowuii;
        igooksugieceoege:
        $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1];
        goto omqiayeucoioqoao;
        wagqgeqymeqoeuyi:
        $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31;
        goto qoqskyuuwueqkquk;
        omqiayeucoioqoao:
        $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053);
        goto ugqaaewwmkocwwgy;
        wgewmqieuamsoayy:
        $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461);
        goto kqgcyoscsusgoaqi;
        ueigkucgaucgeimc:
        $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365);
        goto sggawugoykqcmsug;
        ooeausyowguqicuo:
        $yywykyucyekisogg = 979;
        goto egyyiccaeeiooaua;
        eeauyscekuckoues:
        goto skkamseieeusycye;
        goto eogwckcymuugikuy;
        egyyiccaeeiooaua:
        $mggkikkcoygokucs -= 1600;
        goto scisgsyemmsekgos;
        mwsmsguqqkcwiiuk:
        $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30;
        goto eeauyscekuckoues;
        wakmayaoqoskekqy:
        soaccwqimeksgwiw:
        goto qmuwoecuacmkwgem;
        syiqkaasoueowwui:
        $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        goto giaacoqqqsekcayy;
        cmegwsegsosyqcai:
        $mggkikkcoygokucs -= 621;
        goto wmywuusgukmmaams;
        wkeuuycukmuqiaom:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto wakmayaoqoskekqy;
        wmywuusgukmmaams:
        goto suqkuqygkkgwyaie;
        goto gkyawqqcmigqgaiq;
        wcugqegqsuuuwqao:
    }
    
    public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '')
    {
        goto kqqiegkuqagcqsya;
        mqkmcysgoiaouiwm:
        $immmocykksywgkqu %= 146097;
        goto kosaqwikueyksqmw;
        gmwykkouysyaqwqm:
        $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        goto ugqwuugsweqgmywk;
        eekcoeikaeaaeyii:
        $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365);
        goto cogywoqcqummsyus;
        awoaooyoeoyeeqee:
        ciykoyeioqgyaeqo:
        goto ogqmesokykywseys;
        ogsaaqsaogcqiouy:
        $mggkikkcoygokucs = 621;
        goto iwekmyyccgiyuecc;
        iwekmyyccgiyuecc:
        goto ciykoyeioqgyaeqo;
        goto ikqqskkqqwmwssoo;
        cuumeogeomowqisc:
        $immmocykksywgkqu++;
        goto gcckqucukawcasgk;
        ykomgumacooyomsk:
        $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097);
        goto mqkmcysgoiaouiwm;
        ikqqskkqqwmwssoo:
        asiqwuoswmigcaki:
        goto aomysykcgikegiau;
        gicyayswqyuoekcq:
        $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524);
        goto iikiiioqiyegyaak;
        uaukmuiwskcemcsw:
        $asgqasceaecqgouu = $immmocykksywgkqu + 1;
        goto sockeswygwcskeuq;
        kosaqwikueyksqmw:
        if (!($immmocykksywgkqu > 36524)) {
            goto qgeugwymkkiacwoc;
        }
        goto gicyayswqyuoekcq;
        uiosisocuwokwkie:
        if (!($immmocykksywgkqu >= 365)) {
            goto mqicocmqegwukkwg;
        }
        goto cuumeogeomowqisc;
        gcckqucukawcasgk:
        mqicocmqegwukkwg:
        goto qmkaeeomgkwggoyo;
        ousiuuwgwkiyikyq:
        if ($yywykyucyekisogg > 979) {
            goto asiqwuoswmigcaki;
        }
        goto ogsaaqsaogcqiouy;
        csammceowmqwaamq:
        $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461);
        goto ocaguquugeamqckq;
        uaqackioaiqwcocy:
        foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) {
            goto oomguqikqokqwgku;
            wyuemgggaqogsmsq:
            acsqgiuageaasiyy:
            goto guykyqecgswcsmws;
            kkumywowcoycymeo:
            mugqyyeayeyggqqk:
            goto miweggwqeiaeweia;
            guykyqecgswcsmws:
            $asgqasceaecqgouu -= $mokouoooiwsmcmiu;
            goto kkumywowcoycymeo;
            oomguqikqokqwgku:
            if (!($asgqasceaecqgouu <= $mokouoooiwsmcmiu)) {
                goto acsqgiuageaasiyy;
            }
            goto samwkqgwouggsguc;
            samwkqgwouggsguc:
            goto ouamogymawucwswu;
            goto wyuemgggaqogsmsq;
            miweggwqeiaeweia:
        }
        goto cscusseysqygsoiy;
        kqqiegkuqagcqsya:
        [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode('_', $this->ieacowssemeuewag($yywykyucyekisogg . '_' . $sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs));
        goto ousiuuwgwkiyikyq;
        isgwkwacoyimiauk:
        return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu;
        goto mggeqkcksyaymcsa;
        mkwkkmkgiqiamacc:
        $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        goto uaqackioaiqwcocy;
        cogywoqcqummsyus:
        if (!($immmocykksywgkqu > 365)) {
            goto emmsycooskoqmgeg;
        }
        goto gmwykkouysyaqwqm;
        sockeswygwcskeuq:
        $gguqkwucwcyqgwem = 0;
        goto mkwkkmkgiqiamacc;
        cwwmimggaaecmucw:
        $yywykyucyekisogg -= 979;
        goto awoaooyoeoyeeqee;
        iikiiioqiyegyaak:
        $immmocykksywgkqu %= 36524;
        goto uiosisocuwokwkie;
        aomysykcgikegiau:
        $mggkikkcoygokucs = 1600;
        goto cwwmimggaaecmucw;
        ugqwuugsweqgmywk:
        emmsycooskoqmgeg:
        goto uaukmuiwskcemcsw;
        cscusseysqygsoiy:
        ouamogymawucwswu:
        goto isgwkwacoyimiauk;
        ocaguquugeamqckq:
        $immmocykksywgkqu %= 1461;
        goto eekcoeikaeaaeyii;
        qmkaeeomgkwggoyo:
        qgeugwymkkiacwoc:
        goto csammceowmqwaamq;
        ogqmesokykywseys:
        $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186);
        goto ykomgumacooyomsk;
        mggeqkcksyaymcsa:
    }
    
    public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = 'fa')
    {
        goto yuimwyoywaiiqacs;
        oqousikwiiqagoyw:
        $ciyackuwsqkoqese++;
        goto zayqqeqgcwkekwws;
        qsgqwyqaqiowkmco:
        $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1);
        goto yqagomygmeoecwey;
        esikeyqyuikmaiek:
        $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185;
        goto okkmcocqokkskasy;
        yuimwyoywaiiqacs:
        $T_sec = 0;
        goto ocywegekakimmwcq;
        ikqeeaysmqgcgawq:
        $ciyackuwsqkoqese = 0;
        goto mscgewkcqcoowweg;
        usymasgsyqgsuocg:
        kqswcsysqawkcgye:
        goto aiccyaswigkaycqk;
        sqyokemumceysegy:
        cgyakcqgugqgkqiw:
        goto oqousikwiiqagoyw;
        ocywegekakimmwcq:
        $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak));
        goto emqswoaawgeyosmi;
        aueaceeyommgkicu:
        uegouoiuyoqkcscg:
        goto mysueeoswqgccmui;
        suqcsgaosywaauuu:
        if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) {
            goto uegouoiuyoqkcscg;
        }
        goto wwukgaquuyoissgy;
        emqswoaawgeyosmi:
        
        $ocogsiouoiuuguym = explode('_', date('H_i_j_n_O_P_s_w_Y', $msqmoegqiqqmesci));
        goto iwsmmkqaoksmocok;
        wwukgaquuyoissgy:
        $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1);
        goto gsygwgsiawgmqiyi;
        qikaewekoecykeou:
        eeyyskqsmquyquqw:
        goto eucqomyqykgoiuge;
        gsygwgsiawgmqiyi:
        if (!($uskwgmsuqowaosow == '\\')) {
            goto eeyyskqsmquyquqw;
        }
        goto qsgqwyqaqiowkmco;
        yqagomygmeoecwey:
        goto cgyakcqgugqgkqiw;
        goto qikaewekoecykeou;
        mscgewkcqcoowweg:
        gswcoeiisamakwii:
        goto suqcsgaosywaauuu;
        mysueeoswqgccmui:
        return $mcmaiqckgiuqayau != 'en' ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, 'fa', '.') : $qcgkuqesqqymcuui;
        goto egmayaiikwsskgmy;
        eucqomyqykgoiuge:
        switch ($uskwgmsuqowaosow) {
            case 'E':
            case 'R':
            case 'x':
            case 'X':
                $qcgkuqesqqymcuui .= 'http://jdf.scr.ir';
                goto ewscugeuicukkycc;
            case 'B':
            case 'e':
            case 'g':
            case 'G':
            case 'h':
            case 'I':
            case 'T':
            case 'u':
            case 'Z':
                $qcgkuqesqqymcuui .= date($uskwgmsuqowaosow, $msqmoegqiqqmesci);
                goto ewscugeuicukkycc;
            case 'a':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __('PM', PR__PKG__JALALI) : __('AM', PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case 'A':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __('Before noon', PR__PKG__JALALI) : __('After noon', PR__PKG__JALALI);
                goto ewscugeuicukkycc;
            case 'b':
                $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1;
                goto ewscugeuicukkycc;
            case 'c':
                $qcgkuqesqqymcuui .= $j_y . '/' . $j_m . '/' . $j_d . ' ،' . $ocogsiouoiuuguym[0] . ':' . $ocogsiouoiuuguym[1] . ':' . $ocogsiouoiuuguym[6] . ' ' . $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case 'C':
                $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100);
                goto ewscugeuicukkycc;
            case 'd':
                $qcgkuqesqqymcuui .= $j_d < 10 ? '0' . $j_d : $j_d;
                goto ewscugeuicukkycc;
            case 'D':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['kh' => $ocogsiouoiuuguym[7]], ' ');
                goto ewscugeuicukkycc;
            case 'f':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ff' => $j_m], ' ');
                goto ewscugeuicukkycc;
            case 'M':
            case 'F':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['mm' => $j_m], ' ');
                goto ewscugeuicukkycc;
            case 'H':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0];
                goto ewscugeuicukkycc;
            case 'i':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1];
                goto ewscugeuicukkycc;
            case 'j':
                $qcgkuqesqqymcuui .= $j_d;
                goto ewscugeuicukkycc;
            case 'J':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['rr' => $j_d], ' ');
                goto ewscugeuicukkycc;
            case 'k':
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case 'K':
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto ewscugeuicukkycc;
            case 'l':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['rh' => $ocogsiouoiuuguym[7]], ' ');
                goto ewscugeuicukkycc;
            case 'L':
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq;
                goto ewscugeuicukkycc;
            case 'm':
                $qcgkuqesqqymcuui .= $j_m > 9 ? $j_m : '0' . $j_m;
                goto ewscugeuicukkycc;
            
            case 'n':
                $qcgkuqesqqymcuui .= $j_m;
                goto ewscugeuicukkycc;
            case 'N':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] + 1;
                goto ewscugeuicukkycc;
            case 'o':
                goto wusciwkkckmqigms;
                wusciwkkckmqigms:
                $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto iiiccouaaqsyikae;
                iiiccouaaqsyikae:
                $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo;
                goto ukkcmocamwgiqayu;
                ukkcmocamwgiqayu:
                $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y);
                goto mwysseaekcsiesmm;
                mwysseaekcsiesmm:
                goto ewscugeuicukkycc;
                goto amgsueumgaguceaa;
                amgsueumgaguceaa:
            case 'O':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4];
                goto ewscugeuicukkycc;
            case 'p':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['mb' => $j_m], ' ');
                goto ewscugeuicukkycc;
            case 'P':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5];
                goto ewscugeuicukkycc;
            case 'q':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['sh' => $j_y], ' ');
                goto ewscugeuicukkycc;
            case 'Q':
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            case 'r':
                goto gygwewcqsmwqismo;
                gommacygsykyussk:
                goto ewscugeuicukkycc;
                goto ukqocwewouckikso;
                uougwgeyiokewkkm:
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . ':' . $ocogsiouoiuuguym[1] . ':' . $ocogsiouoiuuguym[6] . ' ' . $ocogsiouoiuuguym[4] . ' ' . $uusmaiomayssaecw['rh'] . '، ' . $j_d . ' ' . $uusmaiomayssaecw['mm'] . ' ' . $j_y;
                goto gommacygsykyussk;
                gygwewcqsmwqismo:
                $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(['rh' => $ocogsiouoiuuguym[7], 'mm' => $j_m]);
                goto uougwgeyiokewkkm;
                ukqocwewouckikso:
            case 's':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6];
                goto ewscugeuicukkycc;
            case 'S':
                $qcgkuqesqqymcuui .= 'ام';
                goto ewscugeuicukkycc;
            case 't':
                $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29;
                goto ewscugeuicukkycc;
            case 'U':
                $qcgkuqesqqymcuui .= $msqmoegqiqqmesci;
                goto ewscugeuicukkycc;
            case 'v':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ss' => $j_y % 100], ' ');
                goto ewscugeuicukkycc;
            case 'V':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ss' => $j_y], ' ');
                goto ewscugeuicukkycc;
            case 'w':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto ewscugeuicukkycc;
            case 'W':
                goto uqokiksoqcwwqgio;
                kwiggogcgciwuwqk:
                kocqqoyymosmuksu:
                goto uckewycoogsogwiy;
                yiowgigkkwsoqcci:
                ucqmumuygcywwqma:
                goto ieqesiiageaauiuw;
                oyeyomcgkmgymogq:
                $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52;
                goto iesekaeqeomeuaui;
                iesekaeqeomeuaui:
                uykousayyomcaeaa:
                goto wsesqmcqoiyyqkqi;
                mscyggqcesgqqksu:
                if (!($mqwsmsykyouoomgm < 1)) {
                    goto uykousayyomcaeaa;
                }
                goto oyeyomcgkmgymogq;
                ikuuiauwouuqawuw:
                goto ewscugeuicukkycc;
                goto yoqakewookqoqacm;
                ieqesiiageaauiuw:
                $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7);
                goto gamqcwuwkikwqoay;
                wkwamkgkwykeqkec:
                $mqwsmsykyouoomgm++;
                goto oimkeqocuguqqsqk;
                oimkeqocuguqqsqk:
                iuuuususuuuaieem:
                goto oeocukauoyosicso;
                gamqcwuwkikwqoay:
                if ($aaeqayuykcqoqiuu < 4) {
                    goto uimeeckqksqeekqq;
                }
                goto mscyggqcesgqqksu;
                uqokiksoqcwwqgio:
                $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7;
                goto qukocuwgakemmyga;
                oeocukauoyosicso:
                $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq;
                goto suqceasgacskcmkc;
                qukocuwgakemmyga:
                if (!($aaeqayuykcqoqiuu < 0)) {
                    goto ucqmumuygcywwqma;
                }
                goto sioekkmekwygemyc;
                suqceasgacskcmkc:
                if (!($ecsiqegmcewekssu == 7)) {
                    goto kocqqoyymosmuksu;
                }
                goto yykqaowwsqgqysmq;
                wsesqmcqoiyyqkqi:
                goto iuuuususuuuaieem;
                goto mogkoocsoeuyoqqa;
                sioekkmekwygemyc:
                $aaeqayuykcqoqiuu += 7;
                goto yiowgigkkwsoqcci;
                uckewycoogsogwiy:
                $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? '01' : ($mqwsmsykyouoomgm < 10 ? '0' . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm);
                goto ikuuiauwouuqawuw;
                mogkoocsoeuyoqqa:
                uimeeckqksqeekqq:
                goto wkwamkgkwykeqkec;
                yykqaowwsqgqysmq:
                $ecsiqegmcewekssu = 0;
                goto kwiggogcgciwuwqk;
                yoqakewookqoqacm:
            case 'y':
                $qcgkuqesqqymcuui .= substr($j_y, 2, 2);
                goto ewscugeuicukkycc;
            case 'Y':
                $qcgkuqesqqymcuui .= $j_y;
                goto ewscugeuicukkycc;
            case 'z':
                $qcgkuqesqqymcuui .= $seaogmggwosgceoo;
                goto ewscugeuicukkycc;
            default:
                $qcgkuqesqqymcuui .= $uskwgmsuqowaosow;
        }
        goto usymasgsyqgsuocg;
        okkmcocqokkskasy:
        $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0;
        goto qiiigwkqeoewsuwm;
        iwsmmkqaoksmocok:
        [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]);
        goto esikeyqyuikmaiek;
        aiccyaswigkaycqk:
        ewscugeuicukkycc:
        goto sqyokemumceysegy;
        esaqcqqwuussiiwo:
        $qcgkuqesqqymcuui = '';
        goto ikqeeaysmqgcgawq;
        qiiigwkqeoewsuwm:
        $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa);
        goto esaqcqqwuussiiwo;
        zayqqeqgcwkekwws:
        goto gswcoeiisamakwii;
        goto aueaceeyommgkicu;
        egmayaiikwsskgmy:
    }
    
    public function ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao = 'en', $eqmcogmcemgigckm = '٫')
    {
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
    }
    
    public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = 'Asia/Tehran', $seieuccuyuucuigq = 'en') : array
    {
        goto ucuoeymyqeokgsya;
        yuuyikiacmmueosu:
        $ocogsiouoiuuguym = explode('_', $this->date('F_G_i_j_l_n_s_w_Y_z', $msqmoegqiqqmesci, $seieuccuyuucuigq));
        goto sguskaeaaqcagqgc;
        sguskaeaaqcagqgc:
        return ['seconds' => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), 'minutes' => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), 'hours' => $ocogsiouoiuuguym[1], 'mday' => $ocogsiouoiuuguym[3], 'wday' => $ocogsiouoiuuguym[7], 'mon' => $ocogsiouoiuuguym[5], 'year' => $ocogsiouoiuuguym[8], 'yday' => $ocogsiouoiuuguym[9], 'weekday' => $ocogsiouoiuuguym[4], 'month' => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)];
        goto agkmiayuawacakau;
        ucuoeymyqeokgsya:
        $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak);
        goto yuuyikiacmmueosu;
        agkmiayuawacakau:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = 'Asia/Tehran')
    {
        goto gqmewagyagamokok;
        wgiygcmqaokywuqa:
        mkomygccqkmkumsi:
        goto iauwuugggmegwisk;
        mmgmqogugasaqkgg:
        goto aoquoewagkseayug;
        goto wmumywgyyeagqoeq;
        smcguieygyqcaqgs:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme);
        goto mgcuiguaomoqwwwm;
        eoyiumycaigawmmc:
        goto ciucewqgyoiouesq;
        goto yuoeumyiuqkuouey;
        yssqmyoaokkksukc:
        goto mkomygccqkmkumsi;
        goto ooqksueucyagyuoe;
        yamyagayiooyeekg:
        oocuemosmeeekgas:
        goto yoagcooekomeokwg;
        qmoocweoekqueuyy:
        uoeasoimegouymka:
        goto sgiwoiscywusgmmm;
        aukucaieceiwesmm:
        ussceseaimqywuiy:
        goto kqyoakickmseyyeq;
        yuoeumyiuqkuouey:
        osuscoaaomwcqkew:
        goto eyiwqgqcsqakwqss;
        sckioayasmkcoeoo:
        ciucewqgyoiouesq:
        goto yssqmyoaokkksukc;
        quaqmuusokiyqgqe:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto smiemmcqqukyguuu;
        ooqksueucyagyuoe:
        cgmgqucewwssmicq:
        goto osmmoyqkqoucsgow;
        yuqgwwmqwqiuwmaw:
        if ($yywykyucyekisogg === '') {
            goto oocuemosmeeekgas;
        }
        goto quaqmuusokiyqgqe;
        uycesqqkoeamocgm:
        syuaummumssgwwee:
        goto ceiwqkyquikcemmo;
        kqyoakickmseyyeq:
        $cqgoimumaewouews = time();
        goto micceocwuwkyusic;
        iwueukqcywkiyqge:
        return $cqgoimumaewouews;
        goto ykwasaaoeeiuomim;
        wmumywgyyeagqoeq:
        qiaimmucomukkeka:
        goto smcguieygyqcaqgs;
        mgcuiguaomoqwwwm:
        aoquoewagkseayug:
        goto eoyiumycaigawmmc;
        iksewmsaugayqaqq:
        goto qkcsykuocwuyaice;
        goto yamyagayiooyeekg;
        oyiuyywyeoskckuw:
        if ($gcisockiummsmcag === '') {
            goto cgmgqucewwssmicq;
        }
        goto goqmywuiicciasyk;
        ecouwqosmoyyqmkw:
        qkcsykuocwuyaice:
        goto mqiiqkuaoekeuswo;
        eckcqesiokgwkkiw:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu);
        goto ecouwqosmoyyqmkw;
        micceocwuwkyusic:
        oyiuemaaykgkqqam:
        goto iwueukqcywkiyqge;
        sgiwoiscywusgmmm:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]);
        goto skuqigsokaguscas;
        ceiwqkyquikcemmo:
        $cqgoimumaewouews = 0;
        goto ukomuiwukymcoaso;
        eyiwqgqcsqakwqss:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag);
        goto sckioayasmkcoeoo;
        osmmoyqkqoucsgow:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw);
        goto wgiygcmqaokywuqa;
        goqmywuiicciasyk:
        if ($piuesceqiguuskme === '') {
            goto osuscoaaomwcqkew;
        }
        goto siecswkggyikqkga;
        siecswkggyikqkga:
        if ($sseomcuueskqeayq === '') {
            goto qiaimmucomukkeka;
        }
        goto qkuiwoqksgayqqmg;
        gqmewagyagamokok:
        if (!($umusyyqoeegoyiqs != 'local')) {
            goto syuaummumssgwwee;
        }
        goto sqmoqymckwsogsqg;
        quyogmwugsyoaaiu:
        egsycocugqyyswsi:
        goto mmgmqogugasaqkgg;
        iauwuugggmegwisk:
        goto oyiuemaaykgkqqam;
        goto aukucaieceiwesmm;
        yoagcooekomeokwg:
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
        goto eckcqesiokgwkkiw;
        ukomuiwukymcoaso:
        if ($ackqauiusooswkmw === '') {
            goto ussceseaimqywuiy;
        }
        goto wkgskiuiukiuyque;
        wkgskiuiukiuyque:
        [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode('_', $this->ieacowssemeuewag($ackqauiusooswkmw . '_' . $gcisockiummsmcag . '_' . $piuesceqiguuskme . '_' . $sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs . '_' . $yywykyucyekisogg));
        goto oyiuyywyeoskckuw;
        sqmoqymckwsogsqg:
        date_default_timezone_set($umusyyqoeegoyiqs);
        goto uycesqqkoeamocgm;
        qkuiwoqksgayqqmg:
        $ocogsiouoiuuguym = explode('_', $this->date('Y_j', '', 'en'));
        goto easqmyamcmeesgya;
        mqiiqkuaoekeuswo:
        goto egsycocugqyyswsi;
        goto qmoocweoekqueuyy;
        easqmyamcmeesgya:
        if ($ikiykmwgkuqwcmcs === '') {
            goto uoeasoimegouymka;
        }
        goto yuqgwwmqwqiuwmaw;
        smiemmcqqukyguuu:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs);
        goto iksewmsaugayqaqq;
        skuqigsokaguscas:
        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem);
        goto quyogmwugsyoaaiu;
        ykwasaaoeeiuomim:
    }
}

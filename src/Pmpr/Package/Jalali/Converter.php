<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
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
        [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode('_', $this->msywmyaoqmaegsuy($sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs . '_' . $yywykyucyekisogg));
        $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5);
        return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1);
    }
    
    public function yqeyqmywaiwkkcao($uomewyckeuqoqocu, $ugkymqicywakcemw = '')
    {
        foreach ($uomewyckeuqoqocu as $sqeykgyoooqysmca => $mqwsmsykyouoomgm) {
            $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm);
            switch ($sqeykgyoooqysmca) {
                case 'ss':
                    $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm);
                    $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1);
                    $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = '';
                    if ($eouwgmemicwiwise == 1) {
                        $kckiiskiksiousiy = '';
                        $ygaqkccwykqkamoo = [__('Ten', PR__PKG__JALALI), __('Eleven', PR__PKG__JALALI), __('Twelve', PR__PKG__JALALI), __('Thirteen', PR__PKG__JALALI), __('Fourteen', PR__PKG__JALALI), __('Fifteen', PR__PKG__JALALI), __('Sixteen', PR__PKG__JALALI), __('Seventeen', PR__PKG__JALALI), __('Eighteen', PR__PKG__JALALI), __('Nineteen', PR__PKG__JALALI)];
                        $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10];
                    } else {
                        $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1);
                        $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : ' و ';
                        $ukoioyqsqkuskqom = ['', '', __('Twenty', PR__PKG__JALALI), __('Thirty', PR__PKG__JALALI), __('Forty', PR__PKG__JALALI), __('Fifty', PR__PKG__JALALI), __('Sixty', PR__PKG__JALALI), __('Seventy', PR__PKG__JALALI), __('Eighty', PR__PKG__JALALI), __('Ninety', PR__PKG__JALALI)];
                        $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise];
                        $uoumogqmkuousoia = ['', __('One', PR__PKG__JALALI), __('Two', PR__PKG__JALALI), __('Three', PR__PKG__JALALI), __('Four', PR__PKG__JALALI), __('Five', PR__PKG__JALALI), __('Six', PR__PKG__JALALI), __('Seven', PR__PKG__JALALI), __('Eight', PR__PKG__JALALI), __('Nine', PR__PKG__JALALI)];
                        $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou];
                    }
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(['12', '13', '14', '19', '20'], ['هزار و دویست', 'هزار و سیصد', 'هزار و چهارصد', 'هزار و نهصد', 'دوهزار'], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == '00' ? '' : ' و ') : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku;
                    goto qogqewiwmwiwskgm;
                case 'mm':
                    $uusmaiomayssaecw = ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto qogqewiwmwiwskgm;
                case 'rr':
                    $uusmaiomayssaecw = ['یک', 'دو', 'سه', 'چهار', 'پنج', 'شش', 'هفت', 'هشت', 'نه', 'ده', 'یازده', 'دوازده', 'سیزده', 'چهارده', 'پانزده', 'شانزده', 'هفده', 'هجده', 'نوزده', 'بیست', 'بیست و یک', 'بیست و دو', 'بیست و سه', 'بیست و چهار', 'بیست و پنج', 'بیست و شش', 'بیست و هفت', 'بیست و هشت', 'بیست و نه', 'سی', 'سی و یک'];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto qogqewiwmwiwskgm;
                case 'rh':
                    $uusmaiomayssaecw = [__('Saturday', PR__PKG__JALALI), __('Sunday', PR__PKG__JALALI), __('Monday', PR__PKG__JALALI), __('Tuesday', PR__PKG__JALALI), __('Wednesday', PR__PKG__JALALI), __('Thursday', PR__PKG__JALALI), __('Friday', PR__PKG__JALALI)];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto qogqewiwmwiwskgm;
                case 'sh':
                    $uusmaiomayssaecw = [__('Snake', PR__PKG__JALALI), __('Horse', PR__PKG__JALALI), __('Goat', PR__PKG__JALALI), __('Monkey', PR__PKG__JALALI), __('Rooster', PR__PKG__JALALI), __('Dog', PR__PKG__JALALI), __('Pig', PR__PKG__JALALI), __('Rat', PR__PKG__JALALI), __('Ox', PR__PKG__JALALI), __('Tiger', PR__PKG__JALALI), __('Rabbit', PR__PKG__JALALI), __('Dragon', PR__PKG__JALALI)];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12];
                    goto qogqewiwmwiwskgm;
                case 'mb':
                    $uusmaiomayssaecw = ['حمل', 'ثور', 'جوزا', 'سرطان', 'اسد', 'سنبله', 'میزان', 'عقرب', 'قوس', 'جدی', 'دلو', 'حوت'];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto qogqewiwmwiwskgm;
                case 'ff':
                    $uusmaiomayssaecw = [__('Spring', PR__PKG__JALALI), __('Summer', PR__PKG__JALALI), __('Autumn', PR__PKG__JALALI), __('Winter', PR__PKG__JALALI)];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)];
                    goto qogqewiwmwiwskgm;
                case 'km':
                    $uusmaiomayssaecw = ['فر', 'ار', 'خر', 'تی‍', 'مر', 'شه‍', 'مه‍', 'آب‍', 'آذ', 'دی', 'به‍', 'اس‍'];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1];
                    goto qogqewiwmwiwskgm;
                case 'kh':
                    $uusmaiomayssaecw = [__('Sat', PR__PKG__JALALI), __('Sun', PR__PKG__JALALI), __('Mon', PR__PKG__JALALI), __('Tue', PR__PKG__JALALI), __('Wed', PR__PKG__JALALI), __('Thu', PR__PKG__JALALI), __('Fri', PR__PKG__JALALI)];
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm];
                    goto qogqewiwmwiwskgm;
                default:
                    $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm;
            }
            qgoiooayqmqqsiok:
            qogqewiwmwiwskgm:
            qiaqsassksqiuyae:
        }
        cecuyayqoioasumi:
        return $ugkymqicywakcemw === '' ? $uomewyckeuqoqocu : implode($ugkymqicywakcemw, $uomewyckeuqoqocu);
    }
    
    public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = 'en', $eqmcogmcemgigckm = '٫')
    {
    }
    
    public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '')
    {
        [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode('_', $this->ieacowssemeuewag($mggkikkcoygokucs . '_' . $gguqkwucwcyqgwem . '_' . $asgqasceaecqgouu));
        $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
        if ($mggkikkcoygokucs > 1600) {
            $yywykyucyekisogg = 979;
            $mggkikkcoygokucs -= 1600;
        } else {
            $yywykyucyekisogg = 0;
            $mggkikkcoygokucs -= 621;
        }
        $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs;
        $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1];
        $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053);
        $immmocykksywgkqu %= 12053;
        $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461);
        $immmocykksywgkqu %= 1461;
        $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365);
        if ($immmocykksywgkqu > 365) {
            $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        }
        if ($immmocykksywgkqu < 186) {
            $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31);
            $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31;
        } else {
            $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30);
            $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30;
        }
        return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs;
    }
    
    public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '')
    {
        [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode('_', $this->ieacowssemeuewag($yywykyucyekisogg . '_' . $sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs));
        if ($yywykyucyekisogg > 979) {
            $mggkikkcoygokucs = 1600;
            $yywykyucyekisogg -= 979;
        } else {
            $mggkikkcoygokucs = 621;
        }
        $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186);
        $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097);
        $immmocykksywgkqu %= 146097;
        if ($immmocykksywgkqu > 36524) {
            $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524);
            $immmocykksywgkqu %= 36524;
            if ($immmocykksywgkqu >= 365) {
                $immmocykksywgkqu++;
            }
        }
        $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461);
        $immmocykksywgkqu %= 1461;
        $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365);
        if ($immmocykksywgkqu > 365) {
            $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365;
        }
        $asgqasceaecqgouu = $immmocykksywgkqu + 1;
        $gguqkwucwcyqgwem = 0;
        $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) {
            if ($asgqasceaecqgouu <= $mokouoooiwsmcmiu) {
                goto qwigomakwmyiwkgo;
            }
            $asgqasceaecqgouu -= $mokouoooiwsmcmiu;
            myoicgcuugciueis:
        }
        qwigomakwmyiwkgo:
        return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu;
    }
    
    public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = 'fa')
    {
        $T_sec = 0;
        $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak));
        
        $ocogsiouoiuuguym = explode('_', date('H_i_j_n_O_P_s_w_Y', $msqmoegqiqqmesci));
        [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]);
        $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185;
        $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0;
        $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa);
        $qcgkuqesqqymcuui = '';
        $ciyackuwsqkoqese = 0;
        mkwskuycuyguqqok:
        if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) {
            goto asmecuqiyyswueqe;
        }
        $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1);
        if ($uskwgmsuqowaosow == '\\') {
            $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1);
            goto csscmcacoikwsecs;
        }
        switch ($uskwgmsuqowaosow) {
            case 'E':
            case 'R':
            case 'x':
            case 'X':
                $qcgkuqesqqymcuui .= 'http://jdf.scr.ir';
                goto cuykwgmswkskqkyi;
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
                goto cuykwgmswkskqkyi;
            case 'a':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __('PM', PR__PKG__JALALI) : __('AM', PR__PKG__JALALI);
                goto cuykwgmswkskqkyi;
            case 'A':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __('Before noon', PR__PKG__JALALI) : __('After noon', PR__PKG__JALALI);
                goto cuykwgmswkskqkyi;
            case 'b':
                $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1;
                goto cuykwgmswkskqkyi;
            case 'c':
                $qcgkuqesqqymcuui .= $j_y . '/' . $j_m . '/' . $j_d . ' ،' . $ocogsiouoiuuguym[0] . ':' . $ocogsiouoiuuguym[1] . ':' . $ocogsiouoiuuguym[6] . ' ' . $ocogsiouoiuuguym[5];
                goto cuykwgmswkskqkyi;
            case 'C':
                $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100);
                goto cuykwgmswkskqkyi;
            case 'd':
                $qcgkuqesqqymcuui .= $j_d < 10 ? '0' . $j_d : $j_d;
                goto cuykwgmswkskqkyi;
            case 'D':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['kh' => $ocogsiouoiuuguym[7]], ' ');
                goto cuykwgmswkskqkyi;
            case 'f':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ff' => $j_m], ' ');
                goto cuykwgmswkskqkyi;
            case 'M':
            case 'F':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['mm' => $j_m], ' ');
                goto cuykwgmswkskqkyi;
            case 'H':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0];
                goto cuykwgmswkskqkyi;
            case 'i':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1];
                goto cuykwgmswkskqkyi;
            case 'j':
                $qcgkuqesqqymcuui .= $j_d;
                goto cuykwgmswkskqkyi;
            case 'J':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['rr' => $j_d], ' ');
                goto cuykwgmswkskqkyi;
            case 'k':
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto cuykwgmswkskqkyi;
            case 'K':
                $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau);
                goto cuykwgmswkskqkyi;
            case 'l':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['rh' => $ocogsiouoiuuguym[7]], ' ');
                goto cuykwgmswkskqkyi;
            case 'L':
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq;
                goto cuykwgmswkskqkyi;
            case 'm':
                $qcgkuqesqqymcuui .= $j_m > 9 ? $j_m : '0' . $j_m;
                goto cuykwgmswkskqkyi;
            
            case 'n':
                $qcgkuqesqqymcuui .= $j_m;
                goto cuykwgmswkskqkyi;
            case 'N':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] + 1;
                goto cuykwgmswkskqkyi;
            case 'o':
                $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo;
                $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y);
                goto cuykwgmswkskqkyi;
            case 'O':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4];
                goto cuykwgmswkskqkyi;
            case 'p':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['mb' => $j_m], ' ');
                goto cuykwgmswkskqkyi;
            case 'P':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5];
                goto cuykwgmswkskqkyi;
            case 'q':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['sh' => $j_y], ' ');
                goto cuykwgmswkskqkyi;
            case 'Q':
                $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo;
                goto cuykwgmswkskqkyi;
            case 'r':
                $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(['rh' => $ocogsiouoiuuguym[7], 'mm' => $j_m]);
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . ':' . $ocogsiouoiuuguym[1] . ':' . $ocogsiouoiuuguym[6] . ' ' . $ocogsiouoiuuguym[4] . ' ' . $uusmaiomayssaecw['rh'] . '، ' . $j_d . ' ' . $uusmaiomayssaecw['mm'] . ' ' . $j_y;
                goto cuykwgmswkskqkyi;
            case 's':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6];
                goto cuykwgmswkskqkyi;
            case 'S':
                $qcgkuqesqqymcuui .= 'ام';
                goto cuykwgmswkskqkyi;
            case 't':
                $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29;
                goto cuykwgmswkskqkyi;
            case 'U':
                $qcgkuqesqqymcuui .= $msqmoegqiqqmesci;
                goto cuykwgmswkskqkyi;
            case 'v':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ss' => $j_y % 100], ' ');
                goto cuykwgmswkskqkyi;
            case 'V':
                $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(['ss' => $j_y], ' ');
                goto cuykwgmswkskqkyi;
            case 'w':
                $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1;
                goto cuykwgmswkskqkyi;
            case 'W':
                $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7;
                if ($aaeqayuykcqoqiuu < 0) {
                    $aaeqayuykcqoqiuu += 7;
                }
                $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7);
                if ($aaeqayuykcqoqiuu < 4) {
                    $mqwsmsykyouoomgm++;
                } else {
                    if ($mqwsmsykyouoomgm < 1) {
                        $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52;
                    }
                }
                $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq;
                if ($ecsiqegmcewekssu == 7) {
                    $ecsiqegmcewekssu = 0;
                }
                $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? '01' : ($mqwsmsykyouoomgm < 10 ? '0' . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm);
                goto cuykwgmswkskqkyi;
            case 'y':
                $qcgkuqesqqymcuui .= substr($j_y, 2, 2);
                goto cuykwgmswkskqkyi;
            case 'Y':
                $qcgkuqesqqymcuui .= $j_y;
                goto cuykwgmswkskqkyi;
            case 'z':
                $qcgkuqesqqymcuui .= $seaogmggwosgceoo;
                goto cuykwgmswkskqkyi;
            default:
                $qcgkuqesqqymcuui .= $uskwgmsuqowaosow;
        }
        kuicqywysciceggs:
        cuykwgmswkskqkyi:
        csscmcacoikwsecs:
        $ciyackuwsqkoqese++;
        goto mkwskuycuyguqqok;
        asmecuqiyyswueqe:
        return $mcmaiqckgiuqayau != 'en' ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, 'fa', '.') : $qcgkuqesqqymcuui;
    }
    
    public function ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao = 'en', $eqmcogmcemgigckm = '٫')
    {
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
    }
    
    public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = 'Asia/Tehran', $seieuccuyuucuigq = 'en') : array
    {
        $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak);
        $ocogsiouoiuuguym = explode('_', $this->date('F_G_i_j_l_n_s_w_Y_z', $msqmoegqiqqmesci, $seieuccuyuucuigq));
        return ['seconds' => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), 'minutes' => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), 'hours' => $ocogsiouoiuuguym[1], 'mday' => $ocogsiouoiuuguym[3], 'wday' => $ocogsiouoiuuguym[7], 'mon' => $ocogsiouoiuuguym[5], 'year' => $ocogsiouoiuuguym[8], 'yday' => $ocogsiouoiuuguym[9], 'weekday' => $ocogsiouoiuuguym[4], 'month' => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)];
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = 'Asia/Tehran')
    {
        if ($umusyyqoeegoyiqs != 'local') {
            date_default_timezone_set($umusyyqoeegoyiqs);
        }
        $cqgoimumaewouews = 0;
        if ($ackqauiusooswkmw === '') {
            $cqgoimumaewouews = time();
        } else {
            [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode('_', $this->ieacowssemeuewag($ackqauiusooswkmw . '_' . $gcisockiummsmcag . '_' . $piuesceqiguuskme . '_' . $sseomcuueskqeayq . '_' . $ikiykmwgkuqwcmcs . '_' . $yywykyucyekisogg));
            if ($gcisockiummsmcag === '') {
                $cqgoimumaewouews = mktime($ackqauiusooswkmw);
            } else {
                if ($piuesceqiguuskme === '') {
                    $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag);
                } else {
                    if ($sseomcuueskqeayq === '') {
                        $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme);
                    } else {
                        $ocogsiouoiuuguym = explode('_', $this->date('Y_j', '', 'en'));
                        if ($ikiykmwgkuqwcmcs === '') {
                            [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]);
                            $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem);
                        } else {
                            if ($yywykyucyekisogg === '') {
                                [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
                                $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu);
                            } else {
                                [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs);
                                $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs);
                            }
                        }
                    }
                }
            }
        }
        return $cqgoimumaewouews;
    }
}

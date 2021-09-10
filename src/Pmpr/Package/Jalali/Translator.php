<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Translator extends Container
{
    const SEPARATOR = ".";
    const PERSIAN_NUMBERS = ["٪", "۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹", self::SEPARATOR => self::SEPARATOR];
    const ENGLISH_NUMBERS = ["%", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", self::SEPARATOR => self::SEPARATOR];
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw('trans_word'), [$this, 'translate'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw('trans_number'), [$this, 'ieacowssemeuewag'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao)
    {
        goto agyooskogigyayws;
        iiiwsgameuomumgw:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto mcukocaaoyuugoeu;
        egwgyekaiqomyeaa:
        return $cmwygeyygwqaemaq;
        goto kssuqmsgmaaeqigw;
        scockmiqikwwkqse:
        switch ($aamkqmkgsaqmcuao) {
            case 'fa':
            case 'fa_IR':
                goto momuweiasiwskekw;
                momuweiasiwskekw:
                $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq);
                goto qaewauyekqucciyc;
                qaewauyekqucciyc:
                $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq);
                goto bgakaasgwwygosyi;
                bgakaasgwwygosyi:
                goto kuuawiosmkgqsscy;
                goto aucwccaiqwsmyuaq;
                aucwccaiqwsmyuaq:
            case 'en':
            case 'en_US':
                $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq);
                goto kuuawiosmkgqsscy;
        }
        goto okycquokqoamsquy;
        mcukocaaoyuugoeu:
        saiuoomgskwgyeya:
        goto scockmiqikwwkqse;
        agyooskogigyayws:
        if ($aamkqmkgsaqmcuao) {
            goto saiuoomgskwgyeya;
        }
        goto iiiwsgameuomumgw;
        cgwokqwakqcmiieo:
        kuuawiosmkgqsscy:
        goto egwgyekaiqomyeaa;
        okycquokqoamsquy:
        kwocaqggwcksesce:
        goto cgwokqwakqcmiieo;
        kssuqmsgmaaeqigw:
    }
    
    public function eesmuqmoykoqawug($cmwygeyygwqaemaq)
    {
        return str_replace(['ي', 'ك', 'ة', '٤', '٥', '٦'], ['ی', 'ک', 'ه', '۴', '۵', '۶'], $cmwygeyygwqaemaq);
    }
    
    public function nkyiiqgsgaeeecso($sociqikgoyemqaac)
    {
        return preg_replace_callback('/(?:&#\\d{2,4};)|(\\d+[\\.\\d]*)|(?:[a-z](?:[\\x00-\\x3B\\x3D-\\x7F]|<\\s*[^>]+>)*)|<\\s*[^>]+>/i', [$this, 'ssqoqysuuaweoswa'], $sociqikgoyemqaac);
    }
    
    private function ssqoqysuuaweoswa($meyiiwcswqmuggyg)
    {
        goto acaeigkmigikeuyu;
        wykuosegisygosiq:
        $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess);
        goto ugikgkwuwmgymgus;
        kqyeukywmgismyaq:
        if ($eusockqasqqmoess !== false) {
            goto uwusswwekqcsisus;
        }
        goto mukwsuuuqcgesmwc;
        mukwsuuuqcgesmwc:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0);
        goto cqeoguiqiymkyweo;
        ugikgkwuwmgymgus:
        mciumqyyossyiuyk:
        goto gsgyayuaekgyoumc;
        gsgyayuaekgyoumc:
        return $eusockqasqqmoess;
        goto omemqagskckoeoog;
        cqeoguiqiymkyweo:
        goto mciumqyyossyiuyk;
        goto omgcsmsikaggaooc;
        omgcsmsikaggaooc:
        uwusswwekqcsisus:
        goto wykuosegisygosiq;
        acaeigkmigikeuyu:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false);
        goto kqyeukywmgismyaq;
        omemqagskckoeoog:
    }
    
    public function mgmuuqwaamswcoug($ygmmaywsqqycaaok)
    {
        return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok);
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = 'fa', $eqmcogmcemgigckm = '٫')
    {
        goto aeuosggumiiwoesm;
        aeuosggumiiwoesm:
        $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS;
        goto wyqmeyoaggwuioak;
        sqmqwqeoygcmqcim:
        $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ['fa', 'fa_IR']);
        goto syykqmkiyoekqsek;
        syykqmkiyoekqsek:
        return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac);
        goto aiqekkyauwswayyq;
        wyqmeyoaggwuioak:
        $uusmaiomayssaecw = self::PERSIAN_NUMBERS;
        goto uyksacasqywyessc;
        uyksacasqywyessc:
        $uusmaiomayssaecw[self::SEPARATOR] = $eqmcogmcemgigckm;
        goto sqmqwqeoygcmqcim;
        aiqekkyauwswayyq:
    }
}

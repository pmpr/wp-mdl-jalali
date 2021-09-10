<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
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
        if (!$aamkqmkgsaqmcuao) {
            $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        }
        switch ($aamkqmkgsaqmcuao) {
            case 'fa':
            case 'fa_IR':
                $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq);
                $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq);
                goto eequksumcoogyoem;
            case 'en':
            case 'en_US':
                $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq);
                goto eequksumcoogyoem;
        }
        uukumskkeggaowck:
        eequksumcoogyoem:
        return $cmwygeyygwqaemaq;
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
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false);
        if ($eusockqasqqmoess !== false) {
            $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess);
        } else {
            $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0);
        }
        return $eusockqasqqmoess;
    }
    
    public function mgmuuqwaamswcoug($ygmmaywsqqycaaok)
    {
        return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok);
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = 'fa', $eqmcogmcemgigckm = '٫')
    {
        $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS;
        $uusmaiomayssaecw = self::PERSIAN_NUMBERS;
        $uusmaiomayssaecw[self::SEPARATOR] = $eqmcogmcemgigckm;
        $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ['fa', 'fa_IR']);
        return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac);
    }
}

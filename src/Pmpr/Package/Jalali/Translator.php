<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4f9d2ecb0             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Translator extends Container
{
    const SEPARATOR = "\56";
    const PERSIAN_NUMBERS = ["\xd9\252", "\xdb\260", "\xdb\xb1", "\333\xb2", "\xdb\xb3", "\xdb\264", "\xdb\265", "\333\xb6", "\333\267", "\xdb\270", "\333\xb9", self::SEPARATOR => self::SEPARATOR];
    const ENGLISH_NUMBERS = ["\x25", "\x30", "\61", "\62", "\x33", "\x34", "\x35", "\x36", "\x37", "\x38", "\71", self::SEPARATOR => self::SEPARATOR];
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\162\141\156\163\137\167\x6f\x72\144"), [$this, "\x74\x72\141\x6e\163\x6c\x61\x74\145"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\x72\x61\x6e\x73\137\x6e\165\x6d\x62\x65\x72"), [$this, "\151\x65\141\143\x6f\167\163\x73\145\155\145\165\x65\167\141\147"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao)
    {
        goto agyooskogigyayws;
        scockmiqikwwkqse:
        switch ($aamkqmkgsaqmcuao) {
            case "\x66\141":
            case "\x66\141\x5f\111\x52":
                goto momuweiasiwskekw;
                qaewauyekqucciyc:
                $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq);
                goto bgakaasgwwygosyi;
                bgakaasgwwygosyi:
                goto kuuawiosmkgqsscy;
                goto aucwccaiqwsmyuaq;
                momuweiasiwskekw:
                $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq);
                goto qaewauyekqucciyc;
                aucwccaiqwsmyuaq:
            case "\145\156":
            case "\x65\156\x5f\125\x53":
                $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq);
                goto kuuawiosmkgqsscy;
        }
        goto okycquokqoamsquy;
        iiiwsgameuomumgw:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto mcukocaaoyuugoeu;
        mcukocaaoyuugoeu:
        saiuoomgskwgyeya:
        goto scockmiqikwwkqse;
        egwgyekaiqomyeaa:
        return $cmwygeyygwqaemaq;
        goto kssuqmsgmaaeqigw;
        okycquokqoamsquy:
        kwocaqggwcksesce:
        goto cgwokqwakqcmiieo;
        agyooskogigyayws:
        if ($aamkqmkgsaqmcuao) {
            goto saiuoomgskwgyeya;
        }
        goto iiiwsgameuomumgw;
        cgwokqwakqcmiieo:
        kuuawiosmkgqsscy:
        goto egwgyekaiqomyeaa;
        kssuqmsgmaaeqigw:
    }
    
    public function eesmuqmoykoqawug($cmwygeyygwqaemaq)
    {
        return str_replace(["\xd9\212", "\331\203", "\xd8\251", "\331\244", "\331\245", "\xd9\xa6"], ["\333\x8c", "\xda\251", "\xd9\207", "\xdb\xb4", "\333\xb5", "\333\xb6"], $cmwygeyygwqaemaq);
    }
    
    public function nkyiiqgsgaeeecso($sociqikgoyemqaac)
    {
        return preg_replace_callback("\57\x28\77\72\x26\43\x5c\x64\173\62\x2c\64\175\x3b\x29\x7c\50\x5c\144\x2b\133\134\x2e\134\144\x5d\52\x29\x7c\50\x3f\72\x5b\141\x2d\x7a\135\x28\77\72\x5b\x5c\170\x30\x30\55\x5c\170\63\x42\134\x78\x33\104\x2d\x5c\170\x37\106\x5d\x7c\74\134\x73\52\133\136\76\x5d\x2b\x3e\51\52\51\174\x3c\x5c\x73\x2a\133\x5e\76\135\53\76\x2f\x69", [$this, "\163\x73\x71\x6f\161\x79\x73\165\x75\141\x77\145\x6f\163\x77\141"], $sociqikgoyemqaac);
    }
    
    private function ssqoqysuuaweoswa($meyiiwcswqmuggyg)
    {
        goto acaeigkmigikeuyu;
        omgcsmsikaggaooc:
        uwusswwekqcsisus:
        goto wykuosegisygosiq;
        mukwsuuuqcgesmwc:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0);
        goto cqeoguiqiymkyweo;
        gsgyayuaekgyoumc:
        return $eusockqasqqmoess;
        goto omemqagskckoeoog;
        wykuosegisygosiq:
        $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess);
        goto ugikgkwuwmgymgus;
        cqeoguiqiymkyweo:
        goto mciumqyyossyiuyk;
        goto omgcsmsikaggaooc;
        ugikgkwuwmgymgus:
        mciumqyyossyiuyk:
        goto gsgyayuaekgyoumc;
        kqyeukywmgismyaq:
        if ($eusockqasqqmoess !== false) {
            goto uwusswwekqcsisus;
        }
        goto mukwsuuuqcgesmwc;
        acaeigkmigikeuyu:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false);
        goto kqyeukywmgismyaq;
        omemqagskckoeoog:
    }
    
    public function mgmuuqwaamswcoug($ygmmaywsqqycaaok)
    {
        return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok);
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\141", $eqmcogmcemgigckm = "\xd9\xab")
    {
        goto aeuosggumiiwoesm;
        syykqmkiyoekqsek:
        return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac);
        goto aiqekkyauwswayyq;
        uyksacasqywyessc:
        $uusmaiomayssaecw[self::SEPARATOR] = $eqmcogmcemgigckm;
        goto sqmqwqeoygcmqcim;
        aeuosggumiiwoesm:
        $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS;
        goto wyqmeyoaggwuioak;
        wyqmeyoaggwuioak:
        $uusmaiomayssaecw = self::PERSIAN_NUMBERS;
        goto uyksacasqywyessc;
        sqmqwqeoygcmqcim:
        $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ["\x66\x61", "\146\141\x5f\111\x52"]);
        goto syykqmkiyoekqsek;
        aiqekkyauwswayyq:
    }
}

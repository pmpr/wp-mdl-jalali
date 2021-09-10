<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4ccec9f71             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Translator extends Container
{
    const SEPARATOR = "\56";
    const PERSIAN_NUMBERS = ["\331\252", "\333\260", "\xdb\xb1", "\333\262", "\333\xb3", "\333\264", "\xdb\265", "\333\266", "\xdb\267", "\333\xb8", "\333\xb9", self::SEPARATOR => self::SEPARATOR];
    const ENGLISH_NUMBERS = ["\x25", "\x30", "\61", "\x32", "\63", "\x34", "\x35", "\x36", "\67", "\x38", "\x39", self::SEPARATOR => self::SEPARATOR];
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\x72\x61\156\x73\x5f\x77\157\162\x64"), [$this, "\x74\162\x61\156\x73\x6c\141\x74\x65"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\162\141\x6e\163\137\x6e\165\155\142\x65\x72"), [$this, "\x69\x65\141\x63\x6f\x77\163\x73\x65\x6d\x65\x75\x65\167\141\147"], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao)
    {
        goto iiiwsgameuomumgw;
        egwgyekaiqomyeaa:
        kwocaqggwcksesce:
        goto kssuqmsgmaaeqigw;
        okycquokqoamsquy:
        switch ($aamkqmkgsaqmcuao) {
            case "\146\141":
            case "\x66\141\137\111\x52":
                goto qaewauyekqucciyc;
                qaewauyekqucciyc:
                $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq);
                goto bgakaasgwwygosyi;
                bgakaasgwwygosyi:
                $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq);
                goto aucwccaiqwsmyuaq;
                aucwccaiqwsmyuaq:
                goto kwocaqggwcksesce;
                goto agyooskogigyayws;
                agyooskogigyayws:
            case "\145\156":
            case "\145\x6e\x5f\x55\123":
                $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq);
                goto kwocaqggwcksesce;
        }
        goto cgwokqwakqcmiieo;
        scockmiqikwwkqse:
        kuuawiosmkgqsscy:
        goto okycquokqoamsquy;
        iiiwsgameuomumgw:
        if ($aamkqmkgsaqmcuao) {
            goto kuuawiosmkgqsscy;
        }
        goto mcukocaaoyuugoeu;
        kssuqmsgmaaeqigw:
        return $cmwygeyygwqaemaq;
        goto uwusswwekqcsisus;
        mcukocaaoyuugoeu:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto scockmiqikwwkqse;
        cgwokqwakqcmiieo:
        momuweiasiwskekw:
        goto egwgyekaiqomyeaa;
        uwusswwekqcsisus:
    }
    
    public function eesmuqmoykoqawug($cmwygeyygwqaemaq)
    {
        return str_replace(["\xd9\212", "\xd9\x83", "\330\xa9", "\xd9\244", "\331\xa5", "\331\xa6"], ["\xdb\214", "\332\251", "\331\207", "\xdb\xb4", "\xdb\xb5", "\333\266"], $cmwygeyygwqaemaq);
    }
    
    public function nkyiiqgsgaeeecso($sociqikgoyemqaac)
    {
        return preg_replace_callback("\57\50\x3f\x3a\46\43\x5c\144\x7b\62\54\64\175\x3b\x29\x7c\50\134\144\x2b\133\134\56\134\x64\x5d\x2a\51\174\x28\x3f\x3a\x5b\x61\55\x7a\x5d\50\77\x3a\x5b\134\x78\60\60\x2d\x5c\x78\x33\x42\134\170\63\x44\x2d\x5c\170\67\x46\135\x7c\x3c\134\163\x2a\133\x5e\76\135\53\76\x29\52\x29\174\x3c\134\163\52\x5b\136\x3e\135\53\x3e\57\x69", [$this, "\163\x73\161\157\161\171\x73\165\x75\x61\x77\145\157\163\167\x61"], $sociqikgoyemqaac);
    }
    
    private function ssqoqysuuaweoswa($meyiiwcswqmuggyg)
    {
        goto kqyeukywmgismyaq;
        ugikgkwuwmgymgus:
        $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess);
        goto gsgyayuaekgyoumc;
        wykuosegisygosiq:
        mciumqyyossyiuyk:
        goto ugikgkwuwmgymgus;
        omemqagskckoeoog:
        return $eusockqasqqmoess;
        goto aeuosggumiiwoesm;
        omgcsmsikaggaooc:
        goto acaeigkmigikeuyu;
        goto wykuosegisygosiq;
        mukwsuuuqcgesmwc:
        if ($eusockqasqqmoess !== false) {
            goto mciumqyyossyiuyk;
        }
        goto cqeoguiqiymkyweo;
        gsgyayuaekgyoumc:
        acaeigkmigikeuyu:
        goto omemqagskckoeoog;
        cqeoguiqiymkyweo:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0);
        goto omgcsmsikaggaooc;
        kqyeukywmgismyaq:
        $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false);
        goto mukwsuuuqcgesmwc;
        aeuosggumiiwoesm:
    }
    
    public function mgmuuqwaamswcoug($ygmmaywsqqycaaok)
    {
        return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok);
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\x61", $eqmcogmcemgigckm = "\331\xab")
    {
        goto wyqmeyoaggwuioak;
        wyqmeyoaggwuioak:
        $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS;
        goto uyksacasqywyessc;
        uyksacasqywyessc:
        $uusmaiomayssaecw = self::PERSIAN_NUMBERS;
        goto sqmqwqeoygcmqcim;
        sqmqwqeoygcmqcim:
        $uusmaiomayssaecw[self::SEPARATOR] = $eqmcogmcemgigckm;
        goto syykqmkiyoekqsek;
        aiqekkyauwswayyq:
        return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac);
        goto mmcikqikqecaeswu;
        syykqmkiyoekqsek:
        $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ["\x66\141", "\x66\141\137\111\122"]);
        goto aiqekkyauwswayyq;
        mmcikqikqecaeswu:
    }
}

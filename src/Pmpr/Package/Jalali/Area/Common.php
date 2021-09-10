<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4f9d2ecb0             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali\Area;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Package\Jalali\Container;
use Pmpr\Package\Jalali\Converter;
use Pmpr\Package\Jalali\Setting;
use Pmpr\Package\Jalali\Translator;
use WP_Comment;
use WP_Locale;

class Common extends Container
{
    
    protected ?string $locale = null;
    
    protected ?Converter $converter = null;
    
    protected ?Translator $translator = null;
    
    public function __construct()
    {
        goto ikcwmsgocyuqiumc;
        eqiiaokcgakicaye:
        $this->translator = Translator::symcgieuakksimmu();
        goto gcucsowqoeiwmyyq;
        gcucsowqoeiwmyyq:
        parent::__construct();
        goto kyiuewcikkqagwwg;
        ikcwmsgocyuqiumc:
        $this->converter = Converter::symcgieuakksimmu();
        goto eqiiaokcgakicaye;
        kyiuewcikkqagwwg:
    }
    
    public function uacmswwoiqckokew() : ?Converter
    {
        return $this->converter;
    }
    
    public function kkkikouyuqigocai() : ?Translator
    {
        return $this->translator;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\156\151\164"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\145\164\x5f\164\x65\162\x6d", [$this, "\x6b\143\x6b\157\x67\161\x6b\x69\x79\x63\161\x65\x75\x6d\x6f\141"])->cecaguuoecmccuse("\x67\x65\164\137\x63\157\155\x6d\x65\156\164", [$this, "\163\145\155\155\163\x6b\x75\153\141\x65\171\x65\157\x75\x75\145"])->cecaguuoecmccuse("\x6c\x6f\x63\x61\154\145", [$this, "\165\161\x6b\x69\171\x65\165\x65\x67\x69\141\x63\167\x75\x71\161"], 10)->cecaguuoecmccuse("\147\x65\164\x5f\x74\x68\145\137\x64\141\164\145", [$this, "\155\x69\153\x61\151\x75\x73\x67\151\x6d\x6f\145\x6b\x71\171\145"], 99, 3);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->wmmkekaaacyuumsk();
    }
    
    public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao = "\x66\141")
    {
        goto oasggeyceiyieuuo;
        quamuugoocyyceec:
        return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao);
        goto qcssigmcayuyweiy;
        wwcqoeuwskquakwy:
        aumowowgewgqmwci:
        goto quamuugoocyyceec;
        oasggeyceiyieuuo:
        if ($aamkqmkgsaqmcuao) {
            goto aumowowgewgqmwci;
        }
        goto omuauimgkygcecsc;
        omuauimgkygcecsc:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto wwcqoeuwskquakwy;
        qcssigmcayuyweiy:
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\x61", $eqmcogmcemgigckm = "\xd9\xab")
    {
        goto mugscgugcogcasue;
        mugscgugcogcasue:
        if ($aamkqmkgsaqmcuao) {
            goto iymaiwqimisgacmk;
        }
        goto qyyyycwaookqaoke;
        qyyyycwaookqaoke:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ssywsaaqqaucesau;
        ygcgoaokauigwuus:
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
        goto ysiqakyaiooyscwy;
        ssywsaaqqaucesau:
        iymaiwqimisgacmk:
        goto ygcgoaokauigwuus;
        ysiqakyaiooyscwy:
    }
    
    public function kckogqkiycqeumoa($iwewcwusemqaiggk)
    {
        goto yiceawuuiusakwiq;
        yiceawuuiusakwiq:
        $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk);
        goto sgocecweikecwwgq;
        giugwaeuwaomossq:
        return $iwewcwusemqaiggk;
        goto acgqaeakoyasgkku;
        sgocecweikecwwgq:
        if (!$iwewcwusemqaiggk) {
            goto qeuyekusasqmcqms;
        }
        goto qwisiamkmkkwucyo;
        iwkckkeimmeoquyq:
        auumaoycmsmsgigs:
        goto masakmomqmeocqqg;
        yoqsigmoyaaceqky:
        ousmyagwsiooumos:
        goto suqckoccuyeeymww;
        yksywwikmeksikqc:
        $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name);
        goto yoqsigmoyaaceqky;
        suqckoccuyeeymww:
        qeuyekusasqmcqms:
        goto giugwaeuwaomossq;
        yqcusaeysomccaok:
        $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name);
        goto iwkckkeimmeoquyq;
        qwisiamkmkkwucyo:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto auumaoycmsmsgigs;
        }
        goto yqcusaeysomccaok;
        masakmomqmeocqqg:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto ousmyagwsiooumos;
        }
        goto yksywwikmeksikqc;
        acgqaeakoyasgkku:
    }
    
    public function gcyuqqgwseaumuyg($icsywsyukqcciiky)
    {
        goto ekoqieigyoeyauqa;
        uyeyscsaigimsqwq:
        $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\x3d\x31", $icsywsyukqcciiky);
        goto mwieyyqamgwicgco;
        gkoaeuekqockuoiq:
        sycougcyeqmeiagk:
        goto eekaiaeqewiqkkgm;
        yqicwmekwuoywyus:
        $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2);
        goto gkoaeuekqockuoiq;
        uqcsksaywyqeumig:
        $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4);
        goto yggmaskeguaqkusc;
        qyeswawykmasuqye:
        if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\60")) {
            goto sycougcyeqmeiagk;
        }
        goto uwaimsisescsgyqk;
        ekoqieigyoeyauqa:
        global $wpdb, $wp_query;
        goto cuwcsamuuqyuyqsu;
        awaqksikyomsuaeo:
        $ygykagaqyuawwiyo = $wp_query->get("\x68\157\165\162");
        goto cuommomwmsackoqc;
        jsmisuccwyukksgc:
        $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2);
        goto kwmiwaecqcgiaqye;
        kceuusiekagyeoys:
        $cwiqececuoeacuaa = ["\57\131\x45\101\122\134\50\133\134\x73\135\x2a{$wpdb->posts}\56\x70\157\x73\x74\137\x64\x61\164\x65\x5b\x5c\x73\x5d\x2a\134\51\133\134\163\x5d\52\x3d\133\134\163\135\52" . $usqcwoasmiiomgks . "\x2f", "\57\104\101\x59\x4f\106\115\117\x4e\124\110\x5c\x28\133\x5c\x73\135\52{$wpdb->posts}\x5c\x2e\160\157\x73\164\x5f\144\141\164\145\x5b\134\x73\135\x2a\134\51\x5b\x5c\x73\135\x2a\x3d\x5b\x5c\x73\135\x2a" . $oqkwcmcmimkmkwgk . "\57", "\x2f\x4d\x4f\x4e\124\110\134\x28\133\134\x73\x5d\52{$wpdb->posts}\56\x70\157\x73\x74\137\x64\141\x74\x65\133\x5c\163\135\x2a\x5c\x29\133\134\163\135\x2a\x3d\x5b\x5c\163\x5d\52" . $mwemskcucwsyycwm . "\57", "\57\x48\x4f\x55\122\x5c\x28\x5b\134\163\135\x2a{$wpdb->posts}\x2e\x70\x6f\163\x74\137\x64\141\x74\145\x5b\x5c\x73\135\52\134\51\x5b\x5c\163\135\x2a\75\133\x5c\163\135\52" . $ygykagaqyuawwiyo . "\x2f", "\x2f\115\111\x4e\x55\124\105\x5c\50\x5b\134\163\x5d\52{$wpdb->posts}\x2e\160\x6f\163\164\x5f\x64\x61\x74\145\133\x5c\163\135\x2a\x5c\x29\133\x5c\x73\135\52\75\133\134\x73\135\x2a" . $sckumcuqemuukces . "\57", "\x2f\x53\105\103\x4f\116\104\134\50\133\x5c\x73\x5d\x2a{$wpdb->posts}\56\x70\157\x73\164\x5f\x64\x61\164\x65\x5b\134\x73\x5d\x2a\134\51\x5b\134\163\135\x2a\x3d\x5b\x5c\x73\135\52" . $gcegymooyemmaysk . "\x2f"];
        goto uyeyscsaigimsqwq;
        cuommomwmsackoqc:
        $sckumcuqemuukces = $wp_query->get("\x6d\151\156\165\x74\x65");
        goto ggeoqeowscwkeumy;
        ksckqkmwiqggykke:
        $usqcwoasmiiomgks = $wp_query->get("\171\145\141\x72");
        goto igwkcikeyoowosoi;
        kwmiwaecqcgiaqye:
        $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2);
        goto yqicwmekwuoywyus;
        yggmaskeguaqkusc:
        $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2);
        goto ukwoswyyogmsygqg;
        ukwoswyyogmsygqg:
        $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2);
        goto jsmisuccwyukksgc;
        iqsgossweywksoia:
        $oqkwcmcmimkmkwgk = $wp_query->get("\144\141\171");
        goto awaqksikyomsuaeo;
        eekaiaeqewiqkkgm:
        if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) {
            goto ssagcgqaucssyego;
        }
        goto kceuusiekagyeoys;
        esqwswmoegiqcckg:
        return $icsywsyukqcciiky;
        goto qmokwkocmcyeyesc;
        mimacwyuueomgwwy:
        $gcisockiummsmcag = $wp_query->get("\x6d");
        goto ksckqkmwiqggykke;
        cuwcsamuuqyuyqsu:
        if (is_null($wp_query)) {
            goto mqgeseysuwcaqwiy;
        }
        goto mimacwyuueomgwwy;
        uwaimsisescsgyqk:
        $gcisockiummsmcag = preg_replace("\57\x5b\x5e\x30\55\71\x5d\57", '', $gcisockiummsmcag);
        goto uqcsksaywyqeumig;
        ggeoqeowscwkeumy:
        $gcegymooyemmaysk = $wp_query->get("\163\x65\x63\157\x6e\x64");
        goto qyeswawykmasuqye;
        mwieyyqamgwicgco:
        ssagcgqaucssyego:
        goto wkiymcoqqiigqaaw;
        wkiymcoqqiigqaaw:
        mqgeseysuwcaqwiy:
        goto esqwswmoegiqcckg;
        igwkcikeyoowosoi:
        $mwemskcucwsyycwm = $wp_query->get("\x6d\x6f\x6e\x74\150\x6e\165\x6d");
        goto iqsgossweywksoia;
        qmokwkocmcyeyesc:
    }
    public function wmmkekaaacyuumsk()
    {
        goto skuuyysooocugyww;
        kakkuyeccaacewyo:
        $wp_locale->number_format["\164\x68\x6f\165\163\141\156\x64\x73\x5f\x73\x65\160"] = $geqcesmqwkeayoiu;
        goto cysgqimowcqoqqsc;
        cysgqimowcqoqqsc:
        mosuacsuaasssciu:
        goto ismeikacqqyqcmqe;
        yseyyukqaowwouua:
        kmooekeyemqgucci:
        goto qcgyggiaowuqswuw;
        skuuyysooocugyww:
        global $wp_locale;
        goto cmmusgkieoqyymgs;
        cmmusgkieoqyymgs:
        $this->locale = DecoratorUser::iyouigcsiacgwksc();
        goto mkgmaguyswskyioa;
        gicuuwuuuwumyooa:
        if (!$geqcesmqwkeayoiu) {
            goto mosuacsuaasssciu;
        }
        goto kakkuyeccaacewyo;
        qsokkkyoackoycie:
        $wp_locale->number_format["\144\145\x63\151\155\x61\154\137\160\x6f\x69\156\164"] = $qawscmyuiuymkscy;
        goto casgoamcqkekgeeo;
        ismeikacqqyqcmqe:
        if (!$qawscmyuiuymkscy) {
            goto qksckewucmosemuo;
        }
        goto qsokkkyoackoycie;
        usyckeewsgwaysam:
        $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::NUMBERS_THOUSAND_SEPARATOR);
        goto gicuuwuuuwumyooa;
        skwusmoyomgqkimm:
        $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::NUMBERS_DECIMAL_POINT);
        goto usyckeewsgwaysam;
        casgoamcqkekgeeo:
        qksckewucmosemuo:
        goto yseyyukqaowwouua;
        mkgmaguyswskyioa:
        if (!$wp_locale instanceof WP_Locale) {
            goto kmooekeyemqgucci;
        }
        goto skwusmoyomgqkimm;
        qcgyggiaowuqswuw:
    }
    
    public function iyouigcsiacgwksc() : ?string
    {
        return $this->locale;
    }
    
    public function semmskukaeyeouue($aqqmosqmsuueyaes)
    {
        goto egkeqqgakieyimuq;
        ugswokwmkumcmigc:
        return $aqqmosqmsuueyaes;
        goto gwiaimosqoiquwkc;
        ckwmkquuyyugigom:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content;
        goto cumeycwmuuqawwyu;
        acesyuieuuqwgkwm:
        ekakkiuuquqkccse:
        goto asaowisseacciyia;
        cakuguiciaiaeukg:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes;
        goto wswikooyuaaouqgk;
        iaomqomgiwiegoca:
        kwsqgqmwyyeykgum:
        goto ysweqawmawicakeo;
        kgysyqkoqgwmoscq:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ekakkiuuquqkccse;
        }
        goto makomwwyomweyamm;
        owisckseoogsugqq:
        $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc);
        goto ookcgumoacskyymy;
        egkeqqgakieyimuq:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto sooecucuakgkuyis;
        }
        goto cakuguiciaiaeukg;
        cumeycwmuuqawwyu:
        ywqakqkmmcoceqka:
        goto uaicwcqwauosmsqm;
        ookcgumoacskyymy:
        emauuoieewwoeyqq:
        goto cuseccewekgcgkyg;
        oqwcmgwimeisusoe:
        goto oqwwacmigasucsoc;
        goto acesyuieuuqwgkwm;
        goaowamiyyamueiw:
        $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc);
        goto iaomqomgiwiegoca;
        cuseccewekgcgkyg:
        koukiyqaccegmquc:
        goto kgysyqkoqgwmoscq;
        uaicwcqwauosmsqm:
        if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) {
            goto koukiyqaccegmquc;
        }
        goto gsqcoqqsioiyoykq;
        awwaiioyywmokwsm:
        sooecucuakgkuyis:
        goto ckwmkquuyyugigom;
        makomwwyomweyamm:
        $aqqmosqmsuueyaes = $ewgwqamkygiqaawc;
        goto oqwcmgwimeisusoe;
        gsqcoqqsioiyoykq:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto kwsqgqmwyyeykgum;
        }
        goto goaowamiyyamueiw;
        qiaaqkymeuuueoqk:
        oqwwacmigasucsoc:
        goto ugswokwmkumcmigc;
        ysweqawmawicakeo:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto emauuoieewwoeyqq;
        }
        goto owisckseoogsugqq;
        asaowisseacciyia:
        $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc;
        goto qiaaqkymeuuueoqk;
        wswikooyuaaouqgk:
        goto ywqakqkmmcoceqka;
        goto awwaiioyywmokwsm;
        gwiaimosqoiquwkc:
    }
    
    public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese)
    {
        goto qumkwsqqocooyuoq;
        wwswmaewcaisauei:
        return $aumwicqgsiymkssc;
        goto wsemeeocquawyauo;
        gcskyqewysqaceeg:
        $dkcwuyaoaeekqeao = debug_backtrace();
        goto kkewoqqowugagwoy;
        ocgkwqqmgasuoies:
        cigesysuauaiccms:
        goto wmaeicoyyciuaiuy;
        kkewoqqowugagwoy:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x69\163\141\x62\x6c\145"), $dkcwuyaoaeekqeao)) {
            goto owgakkqgckqcegoi;
        }
        goto wwswmaewcaisauei;
        qumkwsqqocooyuoq:
        if (!function_exists("\x64\145\x62\x75\x67\x5f\x62\141\143\153\164\x72\x61\143\145")) {
            goto cigesysuauaiccms;
        }
        goto gcskyqewysqaceeg;
        wmaeicoyyciuaiuy:
        return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa);
        goto ooysmgyeqoiesgqm;
        wsemeeocquawyauo:
        owgakkqgckqcegoi:
        goto ocgkwqqmgasuoies;
        ooysmgyeqoiesgqm:
    }
    
    public function gwyqggqwgaawqmww($ewgwqamkygiqaawc)
    {
        return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc);
    }
    
    public function beekyawqaoysgowq($ewgwqamkygiqaawc)
    {
        return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc);
    }
    
    public function uqkiyeuegiacwuqq($aamkqmkgsaqmcuao) : ?string
    {
        goto kwoyiysciqumswcy;
        aaogeemgkogagkai:
        $aamkqmkgsaqmcuao = "\x66\x61\137\111\122";
        goto qqmmycmsoqegcqqw;
        kwoyiysciqumswcy:
        global $aamkqmkgsaqmcuao;
        goto aaogeemgkogagkai;
        qqmmycmsoqegcqqw:
        return $aamkqmkgsaqmcuao;
        goto isqwwmikecauwyuc;
        isqwwmikecauwyuc:
    }
    
    public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak)
    {
        goto magymcqykamwqigw;
        magymcqykamwqigw:
        if (!$ocogsiouoiuuguym) {
            goto oiiqqgyqmggyiums;
        }
        goto ukogwqiuuuakkawy;
        ukogwqiuuuakkawy:
        $ocogsiouoiuuguym = $this->mikaiusgimoekqye(date("\x59\55\155\55\x64\x20\x48\72\x69\x3a\x73", $yiuogaeewyockeak), $saqmwwmqiwmkiwaa);
        goto gicmaqmuscawegie;
        gicmaqmuscawegie:
        oiiqqgyqmggyiums:
        goto oymyqcoekqyuiguq;
        oymyqcoekqyuiguq:
        return $ocogsiouoiuuguym;
        goto ayamomygygmgwgkg;
        ayamomygygmgwgkg:
    }
    
    public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = "\146\141")
    {
        goto yeemsgmumygmumqw;
        ocmagamuyawyiyka:
        kceeuicccqscwgsu:
        goto amqgiisymksuuuss;
        syoeqaqkseguwmgy:
        iquecygaakmiomeg:
        goto sgiouaqukyycswqm;
        kucqcgeesiccuuia:
        $aamkqmkgsaqmcuao = "\146\x61";
        goto oycuaqewsskgkqci;
        ygskksomysgaokek:
        gygqgauaceiuawkq:
        goto wwcwmkowgooocaem;
        iwgmywqocewwgoeo:
        goto jkgouewqysmscmqs;
        goto syoeqaqkseguwmgy;
        sgiouaqukyycswqm:
        $aamkqmkgsaqmcuao = "\146\141";
        goto gwkawguwsamuomuo;
        ggyoywwggggekycs:
        goto jkgouewqysmscmqs;
        goto gkkwmqoacciwomqs;
        xogaycsaesgqeqig:
        return $cqgoimumaewouews;
        goto gsiaskgsukseumig;
        kskqquqsegiiogek:
        iyeswoaqkaeggiiy:
        goto mocaoayiouggauiy;
        becceuuwokgoaewy:
        asqqqqakiagymemk:
        goto wyugqoowakyicyic;
        mocaoayiouggauiy:
        $yiuogaeewyockeak = intval($cqgoimumaewouews);
        goto ygskksomysgaokek;
        uuuceqkseqkqawko:
        goto gygqgauaceiuawkq;
        goto ekoegocuqoycoeyq;
        wowmysuygugawmmu:
        jkgouewqysmscmqs:
        goto mmmqqoemusicwgqg;
        gkkwmqoacciwomqs:
        sgiuwkisugmewmcs:
        goto kucqcgeesiccuuia;
        yksamaucqkqsawkk:
        $yiuogaeewyockeak = $cqgoimumaewouews;
        goto akeoaicoieaiekcw;
        iuysqgmmgqiywssm:
        if (empty($aamkqmkgsaqmcuao) && !is_admin() && $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
            goto iquecygaakmiomeg;
        }
        goto weouocwmwicayyiy;
        amqgiisymksuuuss:
        $aamkqmkgsaqmcuao = "\145\x6e";
        goto iwgmywqocewwgoeo;
        aeaciamekuqyieys:
        if (empty($aamkqmkgsaqmcuao) && is_admin() && $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) {
            goto sgiuwkisugmewmcs;
        }
        goto ugiqiewymimqecsu;
        wwcwmkowgooocaem:
        if ($saqmwwmqiwmkiwaa) {
            goto asqqqqakiagymemk;
        }
        goto qgkiguggkyiycwow;
        ugiqiewymimqecsu:
        if (empty($aamkqmkgsaqmcuao) && is_admin()) {
            goto kceeuicccqscwgsu;
        }
        goto iuysqgmmgqiywssm;
        ucasigqmoiwaimkk:
        eacysqsegwcqawsa:
        goto uugwmywmaqomeksa;
        oycuaqewsskgkqci:
        goto jkgouewqysmscmqs;
        goto ocmagamuyawyiyka;
        gwkawguwsamuomuo:
        goto jkgouewqysmscmqs;
        goto ucasigqmoiwaimkk;
        ekoegocuqoycoeyq:
        ucksaiwquekagyqe:
        goto yksamaucqkqsawkk;
        mmmqqoemusicwgqg:
        $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $aamkqmkgsaqmcuao);
        goto iquugwoswgkoiieg;
        qgkiguggkyiycwow:
        $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw();
        goto becceuuwokgoaewy;
        cwugokqsmiomgmqg:
        $yiuogaeewyockeak = strtotime($cqgoimumaewouews);
        goto uuuceqkseqkqawko;
        yeemsgmumygmumqw:
        if (is_int($cqgoimumaewouews)) {
            goto ucksaiwquekagyqe;
        }
        goto wkaoyycsoeoyqcae;
        wyugqoowakyicyic:
        if (!$yiuogaeewyockeak) {
            goto yimeskeioamqmuwg;
        }
        goto aeaciamekuqyieys;
        wkaoyycsoeoyqcae:
        if (is_numeric($cqgoimumaewouews)) {
            goto iyeswoaqkaeggiiy;
        }
        goto cwugokqsmiomgmqg;
        akeoaicoieaiekcw:
        goto gygqgauaceiuawkq;
        goto kskqquqsegiiogek;
        iquugwoswgkoiieg:
        yimeskeioamqmuwg:
        goto xogaycsaesgqeqig;
        weouocwmwicayyiy:
        if (empty($aamkqmkgsaqmcuao) && !is_admin()) {
            goto eacysqsegwcqawsa;
        }
        goto ggyoywwggggekycs;
        uugwmywmaqomeksa:
        $aamkqmkgsaqmcuao = "\145\156";
        goto wowmysuygugawmmu;
        gsiaskgsukseumig:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '')
    {
        return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg);
    }
}

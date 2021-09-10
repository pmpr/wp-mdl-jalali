<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b4ccec9f71             |
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
        goto eqiiaokcgakicaye;
        gcucsowqoeiwmyyq:
        $this->translator = Translator::symcgieuakksimmu();
        goto kyiuewcikkqagwwg;
        eqiiaokcgakicaye:
        $this->converter = Converter::symcgieuakksimmu();
        goto gcucsowqoeiwmyyq;
        kyiuewcikkqagwwg:
        parent::__construct();
        goto aumowowgewgqmwci;
        aumowowgewgqmwci:
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
        $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\x6e\151\x74"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x67\145\164\137\164\145\162\155", [$this, "\x6b\x63\x6b\157\x67\x71\153\151\171\143\x71\x65\165\155\157\x61"])->cecaguuoecmccuse("\147\145\164\x5f\143\x6f\155\155\145\x6e\x74", [$this, "\x73\145\x6d\x6d\163\153\165\x6b\141\x65\171\x65\157\x75\x75\145"])->cecaguuoecmccuse("\154\157\x63\141\154\145", [$this, "\165\161\153\x69\x79\x65\x75\145\x67\x69\x61\143\167\165\161\161"], 10)->cecaguuoecmccuse("\x67\145\164\x5f\x74\150\x65\137\144\x61\x74\145", [$this, "\155\x69\x6b\141\x69\x75\163\147\x69\155\x6f\x65\x6b\x71\x79\x65"], 99, 3);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->wmmkekaaacyuumsk();
    }
    
    public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao = "\x66\x61")
    {
        goto omuauimgkygcecsc;
        omuauimgkygcecsc:
        if ($aamkqmkgsaqmcuao) {
            goto oasggeyceiyieuuo;
        }
        goto wwcqoeuwskquakwy;
        qcssigmcayuyweiy:
        return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao);
        goto iymaiwqimisgacmk;
        wwcqoeuwskquakwy:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto quamuugoocyyceec;
        quamuugoocyyceec:
        oasggeyceiyieuuo:
        goto qcssigmcayuyweiy;
        iymaiwqimisgacmk:
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\141", $eqmcogmcemgigckm = "\331\xab")
    {
        goto qyyyycwaookqaoke;
        ygcgoaokauigwuus:
        mugscgugcogcasue:
        goto ysiqakyaiooyscwy;
        ysiqakyaiooyscwy:
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
        goto auumaoycmsmsgigs;
        ssywsaaqqaucesau:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ygcgoaokauigwuus;
        qyyyycwaookqaoke:
        if ($aamkqmkgsaqmcuao) {
            goto mugscgugcogcasue;
        }
        goto ssywsaaqqaucesau;
        auumaoycmsmsgigs:
    }
    
    public function kckogqkiycqeumoa($iwewcwusemqaiggk)
    {
        goto sgocecweikecwwgq;
        acgqaeakoyasgkku:
        return $iwewcwusemqaiggk;
        goto sycougcyeqmeiagk;
        masakmomqmeocqqg:
        ousmyagwsiooumos:
        goto yksywwikmeksikqc;
        yksywwikmeksikqc:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto qeuyekusasqmcqms;
        }
        goto yoqsigmoyaaceqky;
        iwkckkeimmeoquyq:
        $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name);
        goto masakmomqmeocqqg;
        yoqsigmoyaaceqky:
        $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name);
        goto suqckoccuyeeymww;
        sgocecweikecwwgq:
        $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk);
        goto qwisiamkmkkwucyo;
        qwisiamkmkkwucyo:
        if (!$iwewcwusemqaiggk) {
            goto yiceawuuiusakwiq;
        }
        goto yqcusaeysomccaok;
        yqcusaeysomccaok:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto ousmyagwsiooumos;
        }
        goto iwkckkeimmeoquyq;
        suqckoccuyeeymww:
        qeuyekusasqmcqms:
        goto giugwaeuwaomossq;
        giugwaeuwaomossq:
        yiceawuuiusakwiq:
        goto acgqaeakoyasgkku;
        sycougcyeqmeiagk:
    }
    
    public function gcyuqqgwseaumuyg($icsywsyukqcciiky)
    {
        goto cuwcsamuuqyuyqsu;
        kwmiwaecqcgiaqye:
        $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2);
        goto yqicwmekwuoywyus;
        awaqksikyomsuaeo:
        $oqkwcmcmimkmkwgk = $wp_query->get("\x64\141\171");
        goto cuommomwmsackoqc;
        esqwswmoegiqcckg:
        ekoqieigyoeyauqa:
        goto qmokwkocmcyeyesc;
        ukwoswyyogmsygqg:
        $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2);
        goto jsmisuccwyukksgc;
        yggmaskeguaqkusc:
        $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4);
        goto ukwoswyyogmsygqg;
        uwaimsisescsgyqk:
        if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) {
            goto ssagcgqaucssyego;
        }
        goto uqcsksaywyqeumig;
        kceuusiekagyeoys:
        if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) {
            goto mqgeseysuwcaqwiy;
        }
        goto uyeyscsaigimsqwq;
        ggeoqeowscwkeumy:
        $sckumcuqemuukces = $wp_query->get("\x6d\151\156\165\164\x65");
        goto qyeswawykmasuqye;
        cuwcsamuuqyuyqsu:
        global $wpdb, $wp_query;
        goto mimacwyuueomgwwy;
        cuommomwmsackoqc:
        $ygykagaqyuawwiyo = $wp_query->get("\x68\157\165\x72");
        goto ggeoqeowscwkeumy;
        igwkcikeyoowosoi:
        $usqcwoasmiiomgks = $wp_query->get("\x79\x65\x61\x72");
        goto iqsgossweywksoia;
        yqicwmekwuoywyus:
        $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2);
        goto gkoaeuekqockuoiq;
        uqcsksaywyqeumig:
        $gcisockiummsmcag = preg_replace("\57\x5b\136\60\x2d\71\x5d\x2f", '', $gcisockiummsmcag);
        goto yggmaskeguaqkusc;
        gkoaeuekqockuoiq:
        $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2);
        goto eekaiaeqewiqkkgm;
        iqsgossweywksoia:
        $mwemskcucwsyycwm = $wp_query->get("\155\x6f\x6e\164\150\x6e\165\x6d");
        goto awaqksikyomsuaeo;
        eekaiaeqewiqkkgm:
        ssagcgqaucssyego:
        goto kceuusiekagyeoys;
        uyeyscsaigimsqwq:
        $cwiqececuoeacuaa = ["\57\131\x45\101\122\134\x28\133\x5c\x73\135\52{$wpdb->posts}\56\160\157\x73\x74\137\144\x61\x74\x65\133\x5c\x73\x5d\52\134\51\133\134\x73\x5d\x2a\75\133\x5c\x73\x5d\x2a" . $usqcwoasmiiomgks . "\x2f", "\x2f\x44\x41\x59\x4f\x46\x4d\117\116\124\x48\x5c\50\x5b\134\163\135\52{$wpdb->posts}\134\56\x70\157\163\164\x5f\144\x61\x74\145\133\134\163\135\x2a\134\x29\133\134\163\135\x2a\75\133\134\163\x5d\x2a" . $oqkwcmcmimkmkwgk . "\57", "\x2f\115\117\x4e\x54\110\x5c\50\133\x5c\x73\x5d\x2a{$wpdb->posts}\x2e\160\157\x73\x74\x5f\144\141\x74\145\x5b\x5c\163\135\x2a\x5c\51\x5b\x5c\163\135\52\x3d\x5b\x5c\163\x5d\x2a" . $mwemskcucwsyycwm . "\57", "\57\x48\x4f\x55\x52\x5c\50\133\134\163\x5d\52{$wpdb->posts}\x2e\160\157\x73\164\137\144\141\x74\145\x5b\134\x73\x5d\52\x5c\x29\x5b\134\163\x5d\x2a\x3d\133\x5c\x73\x5d\x2a" . $ygykagaqyuawwiyo . "\57", "\57\x4d\111\116\125\124\105\134\x28\x5b\134\163\135\x2a{$wpdb->posts}\x2e\x70\157\x73\164\137\144\x61\x74\x65\133\x5c\x73\135\52\x5c\x29\x5b\134\x73\x5d\52\x3d\133\x5c\x73\x5d\52" . $sckumcuqemuukces . "\x2f", "\57\123\105\103\117\116\104\x5c\50\x5b\134\163\x5d\x2a{$wpdb->posts}\56\160\157\x73\x74\137\x64\x61\164\x65\133\134\163\135\52\134\51\x5b\134\163\x5d\52\75\x5b\134\x73\135\52" . $gcegymooyemmaysk . "\57"];
        goto mwieyyqamgwicgco;
        wkiymcoqqiigqaaw:
        mqgeseysuwcaqwiy:
        goto esqwswmoegiqcckg;
        qyeswawykmasuqye:
        $gcegymooyemmaysk = $wp_query->get("\x73\145\x63\157\x6e\144");
        goto uwaimsisescsgyqk;
        jsmisuccwyukksgc:
        $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2);
        goto kwmiwaecqcgiaqye;
        qmokwkocmcyeyesc:
        return $icsywsyukqcciiky;
        goto mosuacsuaasssciu;
        mimacwyuueomgwwy:
        if (is_null($wp_query)) {
            goto ekoqieigyoeyauqa;
        }
        goto ksckqkmwiqggykke;
        mwieyyqamgwicgco:
        $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\75\x31", $icsywsyukqcciiky);
        goto wkiymcoqqiigqaaw;
        ksckqkmwiqggykke:
        $gcisockiummsmcag = $wp_query->get("\x6d");
        goto igwkcikeyoowosoi;
        mosuacsuaasssciu:
    }
    public function wmmkekaaacyuumsk()
    {
        goto cmmusgkieoqyymgs;
        usyckeewsgwaysam:
        $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::NUMBERS_DECIMAL_POINT);
        goto gicuuwuuuwumyooa;
        skwusmoyomgqkimm:
        if (!$wp_locale instanceof WP_Locale) {
            goto skuuyysooocugyww;
        }
        goto usyckeewsgwaysam;
        cysgqimowcqoqqsc:
        $wp_locale->number_format["\164\150\x6f\x75\x73\x61\156\144\x73\x5f\163\145\160"] = $geqcesmqwkeayoiu;
        goto ismeikacqqyqcmqe;
        yseyyukqaowwouua:
        kmooekeyemqgucci:
        goto qcgyggiaowuqswuw;
        gicuuwuuuwumyooa:
        $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::NUMBERS_THOUSAND_SEPARATOR);
        goto kakkuyeccaacewyo;
        casgoamcqkekgeeo:
        $wp_locale->number_format["\x64\x65\143\x69\x6d\141\x6c\x5f\160\x6f\x69\x6e\164"] = $qawscmyuiuymkscy;
        goto yseyyukqaowwouua;
        ismeikacqqyqcmqe:
        qksckewucmosemuo:
        goto qsokkkyoackoycie;
        qcgyggiaowuqswuw:
        skuuyysooocugyww:
        goto sooecucuakgkuyis;
        cmmusgkieoqyymgs:
        global $wp_locale;
        goto mkgmaguyswskyioa;
        qsokkkyoackoycie:
        if (!$qawscmyuiuymkscy) {
            goto kmooekeyemqgucci;
        }
        goto casgoamcqkekgeeo;
        kakkuyeccaacewyo:
        if (!$geqcesmqwkeayoiu) {
            goto qksckewucmosemuo;
        }
        goto cysgqimowcqoqqsc;
        mkgmaguyswskyioa:
        $this->locale = DecoratorUser::iyouigcsiacgwksc();
        goto skwusmoyomgqkimm;
        sooecucuakgkuyis:
    }
    
    public function iyouigcsiacgwksc() : ?string
    {
        return $this->locale;
    }
    
    public function semmskukaeyeouue($aqqmosqmsuueyaes)
    {
        goto cakuguiciaiaeukg;
        oqwcmgwimeisusoe:
        $aqqmosqmsuueyaes = $ewgwqamkygiqaawc;
        goto acesyuieuuqwgkwm;
        awwaiioyywmokwsm:
        goto kwsqgqmwyyeykgum;
        goto ckwmkquuyyugigom;
        uaicwcqwauosmsqm:
        kwsqgqmwyyeykgum:
        goto gsqcoqqsioiyoykq;
        ysweqawmawicakeo:
        emauuoieewwoeyqq:
        goto owisckseoogsugqq;
        qiaaqkymeuuueoqk:
        $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc;
        goto ugswokwmkumcmigc;
        ookcgumoacskyymy:
        $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc);
        goto cuseccewekgcgkyg;
        ckwmkquuyyugigom:
        ywqakqkmmcoceqka:
        goto cumeycwmuuqawwyu;
        asaowisseacciyia:
        oqwwacmigasucsoc:
        goto qiaaqkymeuuueoqk;
        acesyuieuuqwgkwm:
        goto egkeqqgakieyimuq;
        goto asaowisseacciyia;
        makomwwyomweyamm:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto oqwwacmigasucsoc;
        }
        goto oqwcmgwimeisusoe;
        kgysyqkoqgwmoscq:
        ekakkiuuquqkccse:
        goto makomwwyomweyamm;
        wswikooyuaaouqgk:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes;
        goto awwaiioyywmokwsm;
        goaowamiyyamueiw:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto emauuoieewwoeyqq;
        }
        goto iaomqomgiwiegoca;
        gsqcoqqsioiyoykq:
        if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) {
            goto ekakkiuuquqkccse;
        }
        goto goaowamiyyamueiw;
        gwiaimosqoiquwkc:
        return $aqqmosqmsuueyaes;
        goto owgakkqgckqcegoi;
        ugswokwmkumcmigc:
        egkeqqgakieyimuq:
        goto gwiaimosqoiquwkc;
        iaomqomgiwiegoca:
        $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc);
        goto ysweqawmawicakeo;
        cakuguiciaiaeukg:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ywqakqkmmcoceqka;
        }
        goto wswikooyuaaouqgk;
        cumeycwmuuqawwyu:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content;
        goto uaicwcqwauosmsqm;
        cuseccewekgcgkyg:
        koukiyqaccegmquc:
        goto kgysyqkoqgwmoscq;
        owisckseoogsugqq:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto koukiyqaccegmquc;
        }
        goto ookcgumoacskyymy;
        owgakkqgckqcegoi:
    }
    
    public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese)
    {
        goto gcskyqewysqaceeg;
        wwswmaewcaisauei:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\151\163\141\142\x6c\x65"), $dkcwuyaoaeekqeao)) {
            goto cigesysuauaiccms;
        }
        goto wsemeeocquawyauo;
        kkewoqqowugagwoy:
        $dkcwuyaoaeekqeao = debug_backtrace();
        goto wwswmaewcaisauei;
        wmaeicoyyciuaiuy:
        qumkwsqqocooyuoq:
        goto ooysmgyeqoiesgqm;
        ocgkwqqmgasuoies:
        cigesysuauaiccms:
        goto wmaeicoyyciuaiuy;
        ooysmgyeqoiesgqm:
        return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa);
        goto kwoyiysciqumswcy;
        gcskyqewysqaceeg:
        if (!function_exists("\144\145\x62\x75\x67\137\x62\x61\x63\153\x74\x72\141\x63\145")) {
            goto qumkwsqqocooyuoq;
        }
        goto kkewoqqowugagwoy;
        wsemeeocquawyauo:
        return $aumwicqgsiymkssc;
        goto ocgkwqqmgasuoies;
        kwoyiysciqumswcy:
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
        goto aaogeemgkogagkai;
        isqwwmikecauwyuc:
        return $aamkqmkgsaqmcuao;
        goto oiiqqgyqmggyiums;
        aaogeemgkogagkai:
        global $aamkqmkgsaqmcuao;
        goto qqmmycmsoqegcqqw;
        qqmmycmsoqegcqqw:
        $aamkqmkgsaqmcuao = "\x66\x61\x5f\x49\122";
        goto isqwwmikecauwyuc;
        oiiqqgyqmggyiums:
    }
    
    public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak)
    {
        goto ukogwqiuuuakkawy;
        oymyqcoekqyuiguq:
        magymcqykamwqigw:
        goto ayamomygygmgwgkg;
        gicmaqmuscawegie:
        $ocogsiouoiuuguym = $this->mikaiusgimoekqye(date("\131\x2d\155\55\x64\40\x48\72\151\72\x73", $yiuogaeewyockeak), $saqmwwmqiwmkiwaa);
        goto oymyqcoekqyuiguq;
        ayamomygygmgwgkg:
        return $ocogsiouoiuuguym;
        goto gygqgauaceiuawkq;
        ukogwqiuuuakkawy:
        if (!$ocogsiouoiuuguym) {
            goto magymcqykamwqigw;
        }
        goto gicmaqmuscawegie;
        gygqgauaceiuawkq:
    }
    
    public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = "\x66\141")
    {
        goto wkaoyycsoeoyqcae;
        ekoegocuqoycoeyq:
        goto ucksaiwquekagyqe;
        goto yksamaucqkqsawkk;
        mocaoayiouggauiy:
        asqqqqakiagymemk:
        goto ygskksomysgaokek;
        sgiouaqukyycswqm:
        eacysqsegwcqawsa:
        goto gwkawguwsamuomuo;
        becceuuwokgoaewy:
        $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw();
        goto wyugqoowakyicyic;
        oycuaqewsskgkqci:
        $aamkqmkgsaqmcuao = "\x66\x61";
        goto ocmagamuyawyiyka;
        aeaciamekuqyieys:
        if (!$yiuogaeewyockeak) {
            goto yeemsgmumygmumqw;
        }
        goto ugiqiewymimqecsu;
        ucasigqmoiwaimkk:
        goto sgiuwkisugmewmcs;
        goto uugwmywmaqomeksa;
        kucqcgeesiccuuia:
        kceeuicccqscwgsu:
        goto oycuaqewsskgkqci;
        yksamaucqkqsawkk:
        iyeswoaqkaeggiiy:
        goto akeoaicoieaiekcw;
        ygskksomysgaokek:
        $yiuogaeewyockeak = intval($cqgoimumaewouews);
        goto wwcwmkowgooocaem;
        weouocwmwicayyiy:
        if (empty($aamkqmkgsaqmcuao) && !is_admin() && $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
            goto eacysqsegwcqawsa;
        }
        goto ggyoywwggggekycs;
        kskqquqsegiiogek:
        goto ucksaiwquekagyqe;
        goto mocaoayiouggauiy;
        ocmagamuyawyiyka:
        goto sgiuwkisugmewmcs;
        goto amqgiisymksuuuss;
        gwkawguwsamuomuo:
        $aamkqmkgsaqmcuao = "\146\x61";
        goto ucasigqmoiwaimkk;
        wyugqoowakyicyic:
        jkgouewqysmscmqs:
        goto aeaciamekuqyieys;
        wwcwmkowgooocaem:
        ucksaiwquekagyqe:
        goto qgkiguggkyiycwow;
        wkaoyycsoeoyqcae:
        if (is_int($cqgoimumaewouews)) {
            goto iyeswoaqkaeggiiy;
        }
        goto cwugokqsmiomgmqg;
        gkkwmqoacciwomqs:
        goto sgiuwkisugmewmcs;
        goto kucqcgeesiccuuia;
        xogaycsaesgqeqig:
        yeemsgmumygmumqw:
        goto gsiaskgsukseumig;
        wowmysuygugawmmu:
        $aamkqmkgsaqmcuao = "\x65\156";
        goto mmmqqoemusicwgqg;
        cwugokqsmiomgmqg:
        if (is_numeric($cqgoimumaewouews)) {
            goto asqqqqakiagymemk;
        }
        goto uuuceqkseqkqawko;
        qgkiguggkyiycwow:
        if ($saqmwwmqiwmkiwaa) {
            goto jkgouewqysmscmqs;
        }
        goto becceuuwokgoaewy;
        iquugwoswgkoiieg:
        $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $aamkqmkgsaqmcuao);
        goto xogaycsaesgqeqig;
        ugiqiewymimqecsu:
        if (empty($aamkqmkgsaqmcuao) && is_admin() && $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) {
            goto kceeuicccqscwgsu;
        }
        goto iuysqgmmgqiywssm;
        gsiaskgsukseumig:
        return $cqgoimumaewouews;
        goto syiyemqigyugagks;
        ggyoywwggggekycs:
        if (empty($aamkqmkgsaqmcuao) && !is_admin()) {
            goto yimeskeioamqmuwg;
        }
        goto gkkwmqoacciwomqs;
        amqgiisymksuuuss:
        iquecygaakmiomeg:
        goto iwgmywqocewwgoeo;
        uuuceqkseqkqawko:
        $yiuogaeewyockeak = strtotime($cqgoimumaewouews);
        goto ekoegocuqoycoeyq;
        syoeqaqkseguwmgy:
        goto sgiuwkisugmewmcs;
        goto sgiouaqukyycswqm;
        uugwmywmaqomeksa:
        yimeskeioamqmuwg:
        goto wowmysuygugawmmu;
        iuysqgmmgqiywssm:
        if (empty($aamkqmkgsaqmcuao) && is_admin()) {
            goto iquecygaakmiomeg;
        }
        goto weouocwmwicayyiy;
        mmmqqoemusicwgqg:
        sgiuwkisugmewmcs:
        goto iquugwoswgkoiieg;
        akeoaicoieaiekcw:
        $yiuogaeewyockeak = $cqgoimumaewouews;
        goto kskqquqsegiiogek;
        iwgmywqocewwgoeo:
        $aamkqmkgsaqmcuao = "\145\156";
        goto syoeqaqkseguwmgy;
        syiyemqigyugagks:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '')
    {
        return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg);
    }
}

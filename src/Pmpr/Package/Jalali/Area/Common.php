<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
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
        ikcwmsgocyuqiumc:
        $this->converter = Converter::symcgieuakksimmu();
        goto eqiiaokcgakicaye;
        eqiiaokcgakicaye:
        $this->translator = Translator::symcgieuakksimmu();
        goto gcucsowqoeiwmyyq;
        gcucsowqoeiwmyyq:
        parent::__construct();
        goto kyiuewcikkqagwwg;
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
        $this->qcsmikeggeemccuu('init', [$this, 'init']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('get_term', [$this, 'kckogqkiycqeumoa'])->cecaguuoecmccuse('get_comment', [$this, 'semmskukaeyeouue'])->cecaguuoecmccuse('locale', [$this, 'uqkiyeuegiacwuqq'], 10)->cecaguuoecmccuse('get_the_date', [$this, 'mikaiusgimoekqye'], 99, 3);
        parent::kgquecmsgcouyaya();
    }
    public function init()
    {
        $this->wmmkekaaacyuumsk();
    }
    
    public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao = 'fa')
    {
        goto oasggeyceiyieuuo;
        oasggeyceiyieuuo:
        if ($aamkqmkgsaqmcuao) {
            goto aumowowgewgqmwci;
        }
        goto omuauimgkygcecsc;
        wwcqoeuwskquakwy:
        aumowowgewgqmwci:
        goto quamuugoocyyceec;
        omuauimgkygcecsc:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto wwcqoeuwskquakwy;
        quamuugoocyyceec:
        return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao);
        goto qcssigmcayuyweiy;
        qcssigmcayuyweiy:
    }
    
    public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = 'fa', $eqmcogmcemgigckm = '٫')
    {
        goto mugscgugcogcasue;
        ssywsaaqqaucesau:
        iymaiwqimisgacmk:
        goto ygcgoaokauigwuus;
        ygcgoaokauigwuus:
        return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm);
        goto ysiqakyaiooyscwy;
        mugscgugcogcasue:
        if ($aamkqmkgsaqmcuao) {
            goto iymaiwqimisgacmk;
        }
        goto qyyyycwaookqaoke;
        qyyyycwaookqaoke:
        $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc();
        goto ssywsaaqqaucesau;
        ysiqakyaiooyscwy:
    }
    
    public function kckogqkiycqeumoa($iwewcwusemqaiggk)
    {
        goto yiceawuuiusakwiq;
        giugwaeuwaomossq:
        return $iwewcwusemqaiggk;
        goto acgqaeakoyasgkku;
        yoqsigmoyaaceqky:
        ousmyagwsiooumos:
        goto suqckoccuyeeymww;
        masakmomqmeocqqg:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto ousmyagwsiooumos;
        }
        goto yksywwikmeksikqc;
        yqcusaeysomccaok:
        $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name);
        goto iwkckkeimmeoquyq;
        yksywwikmeksikqc:
        $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name);
        goto yoqsigmoyaaceqky;
        yiceawuuiusakwiq:
        $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk);
        goto sgocecweikecwwgq;
        qwisiamkmkkwucyo:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto auumaoycmsmsgigs;
        }
        goto yqcusaeysomccaok;
        iwkckkeimmeoquyq:
        auumaoycmsmsgigs:
        goto masakmomqmeocqqg;
        sgocecweikecwwgq:
        if (!$iwewcwusemqaiggk) {
            goto qeuyekusasqmcqms;
        }
        goto qwisiamkmkkwucyo;
        suqckoccuyeeymww:
        qeuyekusasqmcqms:
        goto giugwaeuwaomossq;
        acgqaeakoyasgkku:
    }
    
    public function gcyuqqgwseaumuyg($icsywsyukqcciiky)
    {
        goto ekoqieigyoeyauqa;
        eekaiaeqewiqkkgm:
        if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) {
            goto ssagcgqaucssyego;
        }
        goto kceuusiekagyeoys;
        gkoaeuekqockuoiq:
        sycougcyeqmeiagk:
        goto eekaiaeqewiqkkgm;
        ekoqieigyoeyauqa:
        global $wpdb, $wp_query;
        goto cuwcsamuuqyuyqsu;
        cuommomwmsackoqc:
        $sckumcuqemuukces = $wp_query->get('minute');
        goto ggeoqeowscwkeumy;
        ksckqkmwiqggykke:
        $usqcwoasmiiomgks = $wp_query->get('year');
        goto igwkcikeyoowosoi;
        yqicwmekwuoywyus:
        $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2);
        goto gkoaeuekqockuoiq;
        iqsgossweywksoia:
        $oqkwcmcmimkmkwgk = $wp_query->get('day');
        goto awaqksikyomsuaeo;
        wkiymcoqqiigqaaw:
        mqgeseysuwcaqwiy:
        goto esqwswmoegiqcckg;
        ukwoswyyogmsygqg:
        $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2);
        goto jsmisuccwyukksgc;
        kwmiwaecqcgiaqye:
        $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2);
        goto yqicwmekwuoywyus;
        ggeoqeowscwkeumy:
        $gcegymooyemmaysk = $wp_query->get('second');
        goto qyeswawykmasuqye;
        mwieyyqamgwicgco:
        ssagcgqaucssyego:
        goto wkiymcoqqiigqaaw;
        esqwswmoegiqcckg:
        return $icsywsyukqcciiky;
        goto qmokwkocmcyeyesc;
        igwkcikeyoowosoi:
        $mwemskcucwsyycwm = $wp_query->get('monthnum');
        goto iqsgossweywksoia;
        cuwcsamuuqyuyqsu:
        if (is_null($wp_query)) {
            goto mqgeseysuwcaqwiy;
        }
        goto mimacwyuueomgwwy;
        mimacwyuueomgwwy:
        $gcisockiummsmcag = $wp_query->get('m');
        goto ksckqkmwiqggykke;
        awaqksikyomsuaeo:
        $ygykagaqyuawwiyo = $wp_query->get('hour');
        goto cuommomwmsackoqc;
        uyeyscsaigimsqwq:
        $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "1=1", $icsywsyukqcciiky);
        goto mwieyyqamgwicgco;
        uqcsksaywyqeumig:
        $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4);
        goto yggmaskeguaqkusc;
        uwaimsisescsgyqk:
        $gcisockiummsmcag = preg_replace('/[^0-9]/', '', $gcisockiummsmcag);
        goto uqcsksaywyqeumig;
        jsmisuccwyukksgc:
        $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2);
        goto kwmiwaecqcgiaqye;
        kceuusiekagyeoys:
        $cwiqececuoeacuaa = ["/YEAR\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $usqcwoasmiiomgks . "/", "/DAYOFMONTH\\([\\s]*{$wpdb->posts}\\.post_date[\\s]*\\)[\\s]*=[\\s]*" . $oqkwcmcmimkmkwgk . "/", "/MONTH\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $mwemskcucwsyycwm . "/", "/HOUR\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $ygykagaqyuawwiyo . "/", "/MINUTE\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $sckumcuqemuukces . "/", "/SECOND\\([\\s]*{$wpdb->posts}.post_date[\\s]*\\)[\\s]*=[\\s]*" . $gcegymooyemmaysk . "/"];
        goto uyeyscsaigimsqwq;
        qyeswawykmasuqye:
        if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != '0')) {
            goto sycougcyeqmeiagk;
        }
        goto uwaimsisescsgyqk;
        yggmaskeguaqkusc:
        $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2);
        goto ukwoswyyogmsygqg;
        qmokwkocmcyeyesc:
    }
    public function wmmkekaaacyuumsk()
    {
        goto skuuyysooocugyww;
        yseyyukqaowwouua:
        kmooekeyemqgucci:
        goto qcgyggiaowuqswuw;
        skwusmoyomgqkimm:
        $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::NUMBERS_DECIMAL_POINT);
        goto usyckeewsgwaysam;
        qsokkkyoackoycie:
        $wp_locale->number_format['decimal_point'] = $qawscmyuiuymkscy;
        goto casgoamcqkekgeeo;
        gicuuwuuuwumyooa:
        if (!$geqcesmqwkeayoiu) {
            goto mosuacsuaasssciu;
        }
        goto kakkuyeccaacewyo;
        kakkuyeccaacewyo:
        $wp_locale->number_format['thousands_sep'] = $geqcesmqwkeayoiu;
        goto cysgqimowcqoqqsc;
        mkgmaguyswskyioa:
        if (!$wp_locale instanceof WP_Locale) {
            goto kmooekeyemqgucci;
        }
        goto skwusmoyomgqkimm;
        cmmusgkieoqyymgs:
        $this->locale = DecoratorUser::iyouigcsiacgwksc();
        goto mkgmaguyswskyioa;
        cysgqimowcqoqqsc:
        mosuacsuaasssciu:
        goto ismeikacqqyqcmqe;
        casgoamcqkekgeeo:
        qksckewucmosemuo:
        goto yseyyukqaowwouua;
        skuuyysooocugyww:
        global $wp_locale;
        goto cmmusgkieoqyymgs;
        usyckeewsgwaysam:
        $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::NUMBERS_THOUSAND_SEPARATOR);
        goto gicuuwuuuwumyooa;
        ismeikacqqyqcmqe:
        if (!$qawscmyuiuymkscy) {
            goto qksckewucmosemuo;
        }
        goto qsokkkyoackoycie;
        qcgyggiaowuqswuw:
    }
    
    public function iyouigcsiacgwksc() : ?string
    {
        return $this->locale;
    }
    
    public function semmskukaeyeouue($aqqmosqmsuueyaes)
    {
        goto egkeqqgakieyimuq;
        oqwcmgwimeisusoe:
        goto oqwwacmigasucsoc;
        goto acesyuieuuqwgkwm;
        wswikooyuaaouqgk:
        goto ywqakqkmmcoceqka;
        goto awwaiioyywmokwsm;
        ookcgumoacskyymy:
        emauuoieewwoeyqq:
        goto cuseccewekgcgkyg;
        cumeycwmuuqawwyu:
        ywqakqkmmcoceqka:
        goto uaicwcqwauosmsqm;
        cakuguiciaiaeukg:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes;
        goto wswikooyuaaouqgk;
        uaicwcqwauosmsqm:
        if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) {
            goto koukiyqaccegmquc;
        }
        goto gsqcoqqsioiyoykq;
        iaomqomgiwiegoca:
        kwsqgqmwyyeykgum:
        goto ysweqawmawicakeo;
        ckwmkquuyyugigom:
        $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content;
        goto cumeycwmuuqawwyu;
        qiaaqkymeuuueoqk:
        oqwwacmigasucsoc:
        goto ugswokwmkumcmigc;
        owisckseoogsugqq:
        $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc);
        goto ookcgumoacskyymy;
        gsqcoqqsioiyoykq:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto kwsqgqmwyyeykgum;
        }
        goto goaowamiyyamueiw;
        ugswokwmkumcmigc:
        return $aqqmosqmsuueyaes;
        goto gwiaimosqoiquwkc;
        ysweqawmawicakeo:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto emauuoieewwoeyqq;
        }
        goto owisckseoogsugqq;
        asaowisseacciyia:
        $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc;
        goto qiaaqkymeuuueoqk;
        egkeqqgakieyimuq:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto sooecucuakgkuyis;
        }
        goto cakuguiciaiaeukg;
        kgysyqkoqgwmoscq:
        if ($aqqmosqmsuueyaes instanceof WP_Comment) {
            goto ekakkiuuquqkccse;
        }
        goto makomwwyomweyamm;
        cuseccewekgcgkyg:
        koukiyqaccegmquc:
        goto kgysyqkoqgwmoscq;
        goaowamiyyamueiw:
        $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc);
        goto iaomqomgiwiegoca;
        awwaiioyywmokwsm:
        sooecucuakgkuyis:
        goto ckwmkquuyyugigom;
        makomwwyomweyamm:
        $aqqmosqmsuueyaes = $ewgwqamkygiqaawc;
        goto oqwcmgwimeisusoe;
        acesyuieuuqwgkwm:
        ekakkiuuquqkccse:
        goto asaowisseacciyia;
        gwiaimosqoiquwkc:
    }
    
    public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese)
    {
        goto qumkwsqqocooyuoq;
        qumkwsqqocooyuoq:
        if (!function_exists('debug_backtrace')) {
            goto cigesysuauaiccms;
        }
        goto gcskyqewysqaceeg;
        wwswmaewcaisauei:
        return $aumwicqgsiymkssc;
        goto wsemeeocquawyauo;
        wmaeicoyyciuaiuy:
        return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa);
        goto ooysmgyeqoiesgqm;
        ocgkwqqmgasuoies:
        cigesysuauaiccms:
        goto wmaeicoyyciuaiuy;
        gcskyqewysqaceeg:
        $dkcwuyaoaeekqeao = debug_backtrace();
        goto kkewoqqowugagwoy;
        kkewoqqowugagwoy:
        if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw('disable'), $dkcwuyaoaeekqeao)) {
            goto owgakkqgckqcegoi;
        }
        goto wwswmaewcaisauei;
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
        qqmmycmsoqegcqqw:
        return $aamkqmkgsaqmcuao;
        goto isqwwmikecauwyuc;
        kwoyiysciqumswcy:
        global $aamkqmkgsaqmcuao;
        goto aaogeemgkogagkai;
        aaogeemgkogagkai:
        $aamkqmkgsaqmcuao = 'fa_IR';
        goto qqmmycmsoqegcqqw;
        isqwwmikecauwyuc:
    }
    
    public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak)
    {
        goto magymcqykamwqigw;
        oymyqcoekqyuiguq:
        return $ocogsiouoiuuguym;
        goto ayamomygygmgwgkg;
        magymcqykamwqigw:
        if (!$ocogsiouoiuuguym) {
            goto oiiqqgyqmggyiums;
        }
        goto ukogwqiuuuakkawy;
        ukogwqiuuuakkawy:
        $ocogsiouoiuuguym = $this->mikaiusgimoekqye(date('Y-m-d H:i:s', $yiuogaeewyockeak), $saqmwwmqiwmkiwaa);
        goto gicmaqmuscawegie;
        gicmaqmuscawegie:
        oiiqqgyqmggyiums:
        goto oymyqcoekqyuiguq;
        ayamomygygmgwgkg:
    }
    
    public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = 'fa')
    {
        goto yeemsgmumygmumqw;
        gkkwmqoacciwomqs:
        sgiuwkisugmewmcs:
        goto kucqcgeesiccuuia;
        mmmqqoemusicwgqg:
        $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $aamkqmkgsaqmcuao);
        goto iquugwoswgkoiieg;
        weouocwmwicayyiy:
        if (empty($aamkqmkgsaqmcuao) && !is_admin()) {
            goto eacysqsegwcqawsa;
        }
        goto ggyoywwggggekycs;
        sgiouaqukyycswqm:
        $aamkqmkgsaqmcuao = 'fa';
        goto gwkawguwsamuomuo;
        uuuceqkseqkqawko:
        goto gygqgauaceiuawkq;
        goto ekoegocuqoycoeyq;
        kucqcgeesiccuuia:
        $aamkqmkgsaqmcuao = 'fa';
        goto oycuaqewsskgkqci;
        wowmysuygugawmmu:
        jkgouewqysmscmqs:
        goto mmmqqoemusicwgqg;
        ygskksomysgaokek:
        gygqgauaceiuawkq:
        goto wwcwmkowgooocaem;
        ucasigqmoiwaimkk:
        eacysqsegwcqawsa:
        goto uugwmywmaqomeksa;
        wwcwmkowgooocaem:
        if ($saqmwwmqiwmkiwaa) {
            goto asqqqqakiagymemk;
        }
        goto qgkiguggkyiycwow;
        uugwmywmaqomeksa:
        $aamkqmkgsaqmcuao = 'en';
        goto wowmysuygugawmmu;
        kskqquqsegiiogek:
        iyeswoaqkaeggiiy:
        goto mocaoayiouggauiy;
        amqgiisymksuuuss:
        $aamkqmkgsaqmcuao = 'en';
        goto iwgmywqocewwgoeo;
        ggyoywwggggekycs:
        goto jkgouewqysmscmqs;
        goto gkkwmqoacciwomqs;
        iwgmywqocewwgoeo:
        goto jkgouewqysmscmqs;
        goto syoeqaqkseguwmgy;
        akeoaicoieaiekcw:
        goto gygqgauaceiuawkq;
        goto kskqquqsegiiogek;
        becceuuwokgoaewy:
        asqqqqakiagymemk:
        goto wyugqoowakyicyic;
        wyugqoowakyicyic:
        if (!$yiuogaeewyockeak) {
            goto yimeskeioamqmuwg;
        }
        goto aeaciamekuqyieys;
        ocmagamuyawyiyka:
        kceeuicccqscwgsu:
        goto amqgiisymksuuuss;
        mocaoayiouggauiy:
        $yiuogaeewyockeak = intval($cqgoimumaewouews);
        goto ygskksomysgaokek;
        oycuaqewsskgkqci:
        goto jkgouewqysmscmqs;
        goto ocmagamuyawyiyka;
        cwugokqsmiomgmqg:
        $yiuogaeewyockeak = strtotime($cqgoimumaewouews);
        goto uuuceqkseqkqawko;
        iuysqgmmgqiywssm:
        if (empty($aamkqmkgsaqmcuao) && !is_admin() && $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
            goto iquecygaakmiomeg;
        }
        goto weouocwmwicayyiy;
        yeemsgmumygmumqw:
        if (is_int($cqgoimumaewouews)) {
            goto ucksaiwquekagyqe;
        }
        goto wkaoyycsoeoyqcae;
        syoeqaqkseguwmgy:
        iquecygaakmiomeg:
        goto sgiouaqukyycswqm;
        iquugwoswgkoiieg:
        yimeskeioamqmuwg:
        goto xogaycsaesgqeqig;
        xogaycsaesgqeqig:
        return $cqgoimumaewouews;
        goto gsiaskgsukseumig;
        yksamaucqkqsawkk:
        $yiuogaeewyockeak = $cqgoimumaewouews;
        goto akeoaicoieaiekcw;
        qgkiguggkyiycwow:
        $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw();
        goto becceuuwokgoaewy;
        ugiqiewymimqecsu:
        if (empty($aamkqmkgsaqmcuao) && is_admin()) {
            goto kceeuicccqscwgsu;
        }
        goto iuysqgmmgqiywssm;
        gwkawguwsamuomuo:
        goto jkgouewqysmscmqs;
        goto ucasigqmoiwaimkk;
        wkaoyycsoeoyqcae:
        if (is_numeric($cqgoimumaewouews)) {
            goto iyeswoaqkaeggiiy;
        }
        goto cwugokqsmiomgmqg;
        aeaciamekuqyieys:
        if (empty($aamkqmkgsaqmcuao) && is_admin() && $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) {
            goto sgiuwkisugmewmcs;
        }
        goto ugiqiewymimqecsu;
        ekoegocuqoycoeyq:
        ucksaiwquekagyqe:
        goto yksamaucqkqsawkk;
        gsiaskgsukseumig:
    }
    
    public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '')
    {
        return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg);
    }
}

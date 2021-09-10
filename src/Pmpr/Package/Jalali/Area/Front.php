<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali\Area;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPage;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Package\Jalali\Setting;

class Front extends Common
{
    public function kgquecmsgcouyaya()
    {
        goto omsmaougqkqigogw;
        ucaoyoamaycsiacq:
        if (!$this->weysguygiseoukqw(Setting::FRONT_CONVERT_LETTERS)) {
            goto woqkgwmkmqsuceuy;
        }
        goto iuyagqakcieasiua;
        iokemmkgmcaksiqu:
        $this->cecaguuoecmccuse('wp_title', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_title', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_excerpt', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('comment_text', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('number_format_i18n', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('wp_list_categories', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_content', [$this, 'beekyawqaoysgowq'], 999)->cecaguuoecmccuse('get_comments_number', [$this, 'beekyawqaoysgowq'], 99);
        goto okagauksoqkoqygi;
        iaoyeugekskmewgs:
        if (!$this->weysguygiseoukqw(Setting::FRONT_CONVERT_NUMBERS)) {
            goto imwiyqcekcykscui;
        }
        goto iokemmkgmcaksiqu;
        okagauksoqkoqygi:
        imwiyqcekcykscui:
        goto eciksmgaqikwegwq;
        oasisywuwssumsok:
        woqkgwmkmqsuceuy:
        goto iaoyeugekskmewgs;
        kieyoaoawqacqamy:
        $this->cecaguuoecmccuse('post_link', [$this, 'ueoacwsyeeawcamc'], 10, 3);
        goto qckouamqueqiykqi;
        qweyymyuuqwcmkqg:
        if (!$this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
            goto syiyemqigyugagks;
        }
        goto guqmgiqaaowaauyo;
        iuyagqakcieasiua:
        $this->cecaguuoecmccuse('wp_title', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_title', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_excerpt', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_content', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_category', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('comment_text', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('comments_number', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('wp_list_categories', [$this, 'gwyqggqwgaawqmww'], 999);
        goto oasisywuwssumsok;
        eciksmgaqikwegwq:
        if (!$this->weysguygiseoukqw(Setting::FRONT_CONVERT_PERMALINK_DATES)) {
            goto umemmgiwimkymaya;
        }
        goto kieyoaoawqacqamy;
        guqmgiqaaowaauyo:
        $this->cecaguuoecmccuse('wp_date', [$this, 'egiuyaokiumwyyum'], 9999, 3)->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 3)->cecaguuoecmccuse('the_date', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('time_ago', [$this, 'beekyawqaoysgowq'], 100)->cecaguuoecmccuse('date_time_ago', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('get_comment_date', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('get_comment_time', [$this, 'mikaiusgimoekqye'], 99, 3);
        goto mccimkgwkkamsime;
        mccimkgwkkamsime:
        syiyemqigyugagks:
        goto ucaoyoamaycsiacq;
        omsmaougqkqigogw:
        parent::kgquecmsgcouyaya();
        goto geasgywiogoeamek;
        geasgywiogoeamek:
        $this->cecaguuoecmccuse('posts_where', [$this, 'gcyuqqgwseaumuyg'], 10, 2);
        goto qweyymyuuqwcmkqg;
        qckouamqueqiykqi:
        umemmgiwimkymaya:
        goto measoqewessauqma;
        measoqewessauqma:
    }
    
    public function ueoacwsyeeawcamc($iwywmkygwewiamwm, $post)
    {
        goto qowcwmsiyscackaa;
        qaiuogoowcoimwee:
        if (!(strpos($migiiksoiymissge, '%author%') !== false)) {
            goto agemeseegiuuowgo;
        }
        goto osqgywagokmsicqe;
        ssmgmiuqoeiuacsa:
        auaigccmwqwsqsku:
        goto wiqigqgiegmacgsw;
        qowcwmsiyscackaa:
        $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post, true);
        goto aqigiwmamkowomiw;
        ooqmaweuqmcmwsuk:
        $iwywmkygwewiamwm = user_trailingslashit($migiiksoiymissge, 'single');
        goto uscissuaiyuiukea;
        ucecweoaoyeoyuue:
        if ($guwumyyyakswawas) {
            goto gqaimiooakyykccy;
        }
        goto cqugssuesycomqwa;
        csyoimsqgwcmiwki:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($aokagokqyuysuksm);
        goto ggqwcqssoauckuic;
        koggssokukoukkay:
        $guwumyyyakswawas = get_category_parents($omwmuycmeqcqokom, false, '/', true) . $guwumyyyakswawas;
        goto ueaiskyiqcquiika;
        qioswooukgoowsuc:
        $iwywmkygwewiamwm = DecoratorPage::qmgcisuuikgmqcsu($aokagokqyuysuksm, $auucwmuqkeskqoai);
        goto ggoimgeeuugseiwk;
        qesqgumuouyymcwa:
        $ocogsiouoiuuguym = ManipulatePost::squyiyimquqicqke('Y-m-d H:i:s', $aokagokqyuysuksm, false);
        goto csyoimsqgwcmiwki;
        cqkuuyouqoqyguus:
        usort($cocugsyymkwcoaee, 'wp_list_sort');
        goto ssmgmiuqoeiuacsa;
        kuyqusuycscumuek:
        goswwiomuackymqi:
        goto cycwgukowsksmkyc;
        qmgueimkwqmsakis:
        $migiiksoiymissge = $iooyomkykmsiiquc . str_replace($gumeikyqiciaiocq, $gaawswgugsqsasqw, $migiiksoiymissge);
        goto ooqmaweuqmcmwsuk;
        aymmymequcisekie:
        if ($post->post_type == 'attachment') {
            goto ggqeakyaggiuegek;
        }
        goto gyeayeuuyiemuwuq;
        wiqigqgiegmacgsw:
        $guwumyyyakswawas = $cocugsyymkwcoaee[0]->slug;
        goto gwoacimkeyymqccq;
        mmkoqmccusoeaoyi:
        $gumeikyqiciaiocq = ['%year%', '%monthnum%', '%day%', '%hour%', '%minute%', '%second%', $auucwmuqkeskqoai ? '' : '%postname%', '%post_id%', '%category%', '%author%', $auucwmuqkeskqoai ? '' : '%pagename%'];
        goto waewaiuiogywqigu;
        ggqwcqssoauckuic:
        $iooyomkykmsiiquc = DecoratorOption::get('home');
        goto ggwcauaeuagekeyo;
        weggeeowykuqooyg:
        if (!$cocugsyymkwcoaee) {
            goto auaigccmwqwsqsku;
        }
        goto cqkuuyouqoqyguus;
        eimouyomcoqkmaae:
        $iwywmkygwewiamwm = DecoratorAttachment::qmgcisuuikgmqcsu($post, $auucwmuqkeskqoai);
        goto kkwqmoeeqygoimwg;
        ymwyooosikgokiaa:
        $qscaoekmoooeuyqg = null;
        goto qaiuogoowcoimwee;
        uscissuaiyuiukea:
        goto gykuaukukosiocoy;
        goto kuyqusuycscumuek;
        gyeayeuuyiemuwuq:
        $migiiksoiymissge = ManipulateSetting::ewswusimyeosaogm();
        goto kyggwyywiycksgqq;
        gaceikykesgywssm:
        $cocugsyymkwcoaee = get_the_category($aokagokqyuysuksm);
        goto weggeeowykuqooyg;
        ggwcauaeuagekeyo:
        $auucwmuqkeskqoai = strpos($iwywmkygwewiamwm, '%postname%') !== false || strpos($iwywmkygwewiamwm, '%pagename%') !== false;
        goto mmkoqmccusoeaoyi;
        sugumgeqcwgekcqs:
        $uaaoyoimqcqewueg = strtotime($ocogsiouoiuuguym);
        goto imeaiksowuukikui;
        ggoimgeeuugseiwk:
        goto camawumockccayaq;
        goto gimquiiwucueoqkw;
        qycsooiomiugimqc:
        uuisaeysawuagysg:
        goto qioswooukgoowsuc;
        eqemcocqsyasqycq:
        mcucegiogmuyogki:
        goto ucecweoaoyeoyuue;
        cqugssuesycomqwa:
        $ggauoeuaesiymgee = get_category(DecoratorOption::get('default_category'));
        goto kaiqsuaywyuckuoo;
        yuoamgkigcwaooqu:
        gqaimiooakyykccy:
        goto ymwyooosikgokiaa;
        gwoacimkeyymqccq:
        if (!($omwmuycmeqcqokom = $cocugsyymkwcoaee[0]->category_parent)) {
            goto wiaesksmicgikqcm;
        }
        goto koggssokukoukkay;
        imeaiksowuukikui:
        $guwumyyyakswawas = '';
        goto aqmiewawgseaqeqk;
        ueaiskyiqcquiika:
        wiaesksmicgikqcm:
        goto eqemcocqsyasqycq;
        aqmiewawgseaqeqk:
        if (!(strpos($migiiksoiymissge, '%category%') !== false)) {
            goto mcucegiogmuyogki;
        }
        goto gaceikykesgywssm;
        csucwwqcsaymyiuk:
        $ocogsiouoiuuguym = explode(" ", $this->mikaiusgimoekqye($uaaoyoimqcqewueg, 'Y m d H i s', 'en'));
        goto iiuuwuwcwamqegey;
        kaiqsuaywyuckuoo:
        $guwumyyyakswawas = is_wp_error($ggauoeuaesiymgee) ? '' : $ggauoeuaesiymgee->slug;
        goto yuoamgkigcwaooqu;
        aqigiwmamkowomiw:
        $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($aokagokqyuysuksm);
        goto qesqgumuouyymcwa;
        kkwqmoeeqygoimwg:
        camawumockccayaq:
        goto mwqcykaeywsmoumm;
        qccmuwiwykuegoga:
        agemeseegiuuowgo:
        goto csucwwqcsaymyiuk;
        kyggwyywiycksgqq:
        
        if ('' == $migiiksoiymissge || in_array($post->post_status, ['draft', 'pending', 'auto-draft', 'future'])) {
            goto goswwiomuackymqi;
        }
        goto sugumgeqcwgekcqs;
        yyamycyesguwueuw:
        if ($useksmwkuswkwcqg == 'page') {
            goto uuisaeysawuagysg;
        }
        goto aymmymequcisekie;
        cycwgukowsksmkyc:
        $iwywmkygwewiamwm = "{$iooyomkykmsiiquc}/?p={$aokagokqyuysuksm}";
        goto siuyaemoiiqyoggo;
        iiuuwuwcwamqegey:
        $gaawswgugsqsasqw = [$ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[4], $ocogsiouoiuuguym[5], $aaokuekaimigoyue, $aokagokqyuysuksm, $guwumyyyakswawas, $qscaoekmoooeuyqg, $aaokuekaimigoyue];
        goto qmgueimkwqmsakis;
        awgmyaycugswmwae:
        return $iwywmkygwewiamwm;
        goto ywoyioqqyuocoygk;
        mwqcykaeywsmoumm:
        usgcoawgqswoeiec:
        goto awgmyaycugswmwae;
        siuyaemoiiqyoggo:
        gykuaukukosiocoy:
        goto koemwyegoqwiikom;
        koemwyegoqwiikom:
        goto camawumockccayaq;
        goto qycsooiomiugimqc;
        gimquiiwucueoqkw:
        ggqeakyaggiuegek:
        goto eimouyomcoqkmaae;
        waewaiuiogywqigu:
        if (!$aokagokqyuysuksm) {
            goto usgcoawgqswoeiec;
        }
        goto yyamycyesguwueuw;
        osqgywagokmsicqe:
        $qscaoekmoooeuyqg = ManipulateUser::ygwimyogyaqgumam(ManipulatePost::mguqscccckuywsya($aokagokqyuysuksm), 'user_nicename');
        goto qccmuwiwykuegoga;
        ywoyioqqyuocoygk:
    }
}

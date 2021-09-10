<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali\Area;

use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Package\Jalali\Setting;
use WP_Post;
use WP_Query;

class Admin extends Common
{
    public function wigskegsqequoeks()
    {
        goto isaacywgkascmcsw;
        isaacywgkascmcsw:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES, false)) {
            goto eomcuogskessyicy;
        }
        goto quiguyyimiqeqcwa;
        iicaisyekagswmey:
        eomcuogskessyicy:
        goto ogwwasqkaageiwwi;
        sosqgaswegsomgkw:
        parent::wigskegsqequoeks();
        goto eiegguecasykwmyq;
        ogwwasqkaageiwwi:
        $this->qcsmikeggeemccuu('mce_css', [$this, 'ymsmsywaommeycgq'])->qcsmikeggeemccuu('load-options-general.php', [$this, 'aqkowacckgyeescu'])->qcsmikeggeemccuu('media_buttons', [$this, 'ugiqqmamaqgmkgkm'], 21)->qcsmikeggeemccuu('save_post', [$this, 'mckwugcacskwoqwu'], 10, 2);
        goto sosqgaswegsomgkw;
        quiguyyimiqeqcwa:
        $this->qcsmikeggeemccuu('load-edit.php', [$this, 'iiawaeywaciioaco'], 10)->qcsmikeggeemccuu('load-upload.php', [$this, 'iiawaeywaciioaco'], 10)->qcsmikeggeemccuu('restrict_manage_posts', [$this, 'qkkgasscqmqyiqwu'])->cecaguuoecmccuse('wp_date', [$this, 'egiuyaokiumwyyum'], 9999, 3);
        goto iicaisyekagswmey;
        eiegguecasykwmyq:
    }
    public function kgquecmsgcouyaya()
    {
        goto jyekikocgagcgywq;
        sckyiekoceuisqyq:
        iaywwgssaoecwmeg:
        goto kusuakkwcuqkcqaw;
        oeogyayooiwqcmia:
        $this->cecaguuoecmccuse('date_formats', [$this, 'cwyuycgicumkeequ'])->cecaguuoecmccuse('pre_get_posts', [$this, 'kgeiicuauqaqgmsw'])->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 4)->cecaguuoecmccuse('ajax_query_attachments_args', [$this, 'acsgsuwqowgsyqqo'])->cecaguuoecmccuse('media_library_months_with_files', [$this, 'yeceiewgomwacmmw'])->cecaguuoecmccuse('post_date_column_time', [$this, 'uckqyiacyueouiuo'], 10, 2)->cecaguuoecmccuse('disable_months_dropdown', [$this, 'yeawaimmmecwweoa'], 10, 2);
        goto uowiiyqmiaaaaoas;
        vokekoceocuskqsm:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto iaywwgssaoecwmeg;
        }
        goto ooykyoowougqkaso;
        sikckcmeiwmyakeu:
        $this->cecaguuoecmccuse('the_title', [$this, 'gwyqggqwgaawqmww'], 999);
        goto qaycycmeqkqcumog;
        kusuakkwcuqkcqaw:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto maeueeueqoywkiom;
        }
        goto sikckcmeiwmyakeu;
        qaycycmeqkqcumog:
        maeueeueqoywkiom:
        goto ikuwigsmisimaqoc;
        ikuwigsmisimaqoc:
        parent::kgquecmsgcouyaya();
        goto sigukociqouigous;
        uowiiyqmiaaaaoas:
        qiiqceousoicgeee:
        goto vokekoceocuskqsm;
        ooykyoowougqkaso:
        $this->cecaguuoecmccuse('the_title', [$this, 'beekyawqaoysgowq'], 999)->cecaguuoecmccuse('number_format_i18n', [$this, 'beekyawqaoysgowq']);
        goto sckyiekoceuisqyq;
        qoiyiuoyamwimusy:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) {
            goto qiiqceousoicgeee;
        }
        goto oeogyayooiwqcmia;
        jyekikocgagcgywq:
        $this->cecaguuoecmccuse('mce_buttons', [$this, 'qwmicoqmsgsaiggi'])->cecaguuoecmccuse('comment_save_pre', [$this, 'semmskukaeyeouue'])->cecaguuoecmccuse('mce_external_plugins', [$this, 'kywkmyokogeyayyw']);
        goto qoiyiuoyamwimusy;
        sigukociqouigous:
    }
    public function iiawaeywaciioaco()
    {
        $this->cecaguuoecmccuse('posts_where', [$this, 'gcyuqqgwseaumuyg'])->cecaguuoecmccuse('pre_get_posts', [$this, 'kgeiicuauqaqgmsw']);
    }
    
    public function kgeiicuauqaqgmsw($gqgemcmoicmgaqie)
    {
        goto oiywguooqeasueqq;
        ieoiygycmseqmmgc:
        $date_query = [['after' => $miisqgccsqqcscia, 'before' => $caacssaumiqeaoaw]];
        goto gkuwmiusoqwesqoo;
        cyymeyomuakqakwo:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto uwscegkmmumymoaq;
        wcioaoeiiawwqqqq:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto qaikeckkiwasykwk;
        agsuaimomgsoyiem:
        qwosyqcomiosguoa:
        goto kygccamgawookukq;
        yccuomocgmewkeca:
        $gyskaqycyaywiiyi = $mwemskcucwsyycwm <= 6 ? $gyskaqycyaywiiyi = 31 * 24 * 3600 : ($mwemskcucwsyycwm == 12 && !$iogigmsgiwaecekq ? 29 * 24 * 3600 : 30 * 24 * 3600);
        goto suiywiakesiegcwu;
        qgyaeoqgekocwkmw:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto sieykcqauaygcais;
        cquikgykuscqmigw:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, 0, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks);
        goto cyymeyomuakqakwo;
        tagquiiokseckkqs:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $this->ogmieugosioacswq(0, 0, 0, 1, 1, $usqcwoasmiiomgks));
        goto qoacckkkwsqkokye;
        uwscegkmmumymoaq:
        $gyskaqycyaywiiyi = 1 * 3600;
        goto gkwoqoeaecgkymeu;
        mugeiwyysiemwaym:
        mesesokuoomcioom:
        goto euymeegkukskiowq;
        rgaagksgsewuwgmo:
        $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2);
        goto mcmcocyuugueaeww;
        qysmyemoucigsmua:
        $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2);
        goto kuaiscyqkgcouiye;
        syuywgysqyckcqay:
        if (empty($oqkwcmcmimkmkwgk)) {
            goto mesesokuoomcioom;
        }
        goto ggewkaiwwgkmkwgc;
        myooisakyuggoggc:
        $sckumcuqemuukces = $gqgemcmoicmgaqie->get('minute');
        goto awkqcyusycccekwq;
        gkeymcqqsewayscs:
        if (!($usqcwoasmiiomgks && $usqcwoasmiiomgks < 1700)) {
            goto oqckuigyqswmqcqg;
        }
        goto qwiyicoywcekgyce;
        swuggqyiaiqywgge:
        if (empty($mwemskcucwsyycwm)) {
            goto aqwoykqaquewcaki;
        }
        goto ocwouquuwsaqakae;
        ykogqmmywykgouqy:
        $oqkwcmcmimkmkwgk = $gqgemcmoicmgaqie->get('day');
        goto aqksouwmeckaqyaq;
        ouaoyqugwsagkqaa:
        iuwccksomkkouogy:
        goto auaywaskqooasiuq;
        ooooceiweeackgie:
        omyquyiguuaociwq:
        goto gkeymcqqsewayscs;
        ayucsuwsiocgycww:
        if (!($eomsgokgyssmwmai > 5)) {
            goto yagscaikmmuagqcu;
        }
        goto smmagoyuqoigoesc;
        auaywaskqooasiuq:
        if (empty($sckumcuqemuukces)) {
            goto cceggewquoaemcwq;
        }
        goto ewoqyogcaksucksk;
        kwayumouacgkgyas:
        if (!($eomsgokgyssmwmai > 9)) {
            goto iumgcesksuawyuyo;
        }
        goto rgaagksgsewuwgmo;
        cwyaysecsakaqgew:
        $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2);
        goto kgqgcggccmiwayua;
        ysggiwiksocomkek:
        owismwmeqcmukagu:
        goto wkqwywgikoyqkyeg;
        sieykcqauaygcais:
        cceggewquoaemcwq:
        goto simkiasocoimioew;
        aqksouwmeckaqyaq:
        if (empty($gcisockiummsmcag)) {
            goto omyquyiguuaociwq;
        }
        goto gmsyoscesymiwwue;
        wmsiqkyqsiysgcyy:
        oqckuigyqswmqcqg:
        goto ysggiwiksocomkek;
        kygccamgawookukq:
        if (!($eomsgokgyssmwmai > 13)) {
            goto qaqooueskgciuqgc;
        }
        goto qysmyemoucigsmua;
        mcmcocyuugueaeww:
        iumgcesksuawyuyo:
        goto eucakkcoiiwkwsme;
        awkqcyusycccekwq:
        $gcegymooyemmaysk = $gqgemcmoicmgaqie->get('second');
        goto yugmwomumkosucsc;
        euymeegkukskiowq:
        if (empty($ygykagaqyuawwiyo)) {
            goto iuwccksomkkouogy;
        }
        goto cquikgykuscqmigw;
        kmiqskugkmaiugae:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto cqemkecywkkwaaii;
        cqemkecywkkwaaii:
        $gyskaqycyaywiiyi = 1;
        goto wcioaoeiiawwqqqq;
        gkuwmiusoqwesqoo:
        $gqgemcmoicmgaqie->set('date_query', $date_query);
        goto wmsiqkyqsiysgcyy;
        yugmwomumkosucsc:
        $usqcwoasmiiomgks = $gqgemcmoicmgaqie->get('year');
        goto kqwyogqqwumumiwg;
        kkieqqwwascekcmo:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto ycueoqkeakismiqw;
        gcaykgmmmqomsyis:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto yccuomocgmewkeca;
        oiywguooqeasueqq:
        if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_main_query())) {
            goto owismwmeqcmukagu;
        }
        goto equwcsciiggsuiam;
        equwcsciiggsuiam:
        $gcisockiummsmcag = $gqgemcmoicmgaqie->get('m');
        goto qsaoyggkqwcgskwk;
        qaikeckkiwasykwk:
        ioiwoukauoeamuca:
        goto ieoiygycmseqmmgc;
        wgeueumgacuuuama:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto yukacyeckkwagusw;
        simkiasocoimioew:
        if (empty($gcegymooyemmaysk)) {
            goto ioiwoukauoeamuca;
        }
        goto iuaeeeeggkikuiig;
        kqwyogqqwumumiwg:
        $mwemskcucwsyycwm = $gqgemcmoicmgaqie->get('monthnum');
        goto ykogqmmywykgouqy;
        ggewkaiwwgkmkwgc:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks);
        goto kkieqqwwascekcmo;
        awimwukcyiceackk:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto mugeiwyysiemwaym;
        wsqeiwkgoiekwasy:
        yagscaikmmuagqcu:
        goto swesqeqmagkicuws;
        yukacyeckkwagusw:
        $gyskaqycyaywiiyi = 1 * 60;
        goto qgyaeoqgekocwkmw;
        qwiyicoywcekgyce:
        $iogigmsgiwaecekq = $usqcwoasmiiomgks % 33 % 4 - 1 == (int) ($usqcwoasmiiomgks % 33 * 0.05) ? 1 : 0;
        goto tagquiiokseckkqs;
        kgqgcggccmiwayua:
        iyawqekeeawqkymm:
        goto kwayumouacgkgyas;
        swesqeqmagkicuws:
        if (!($eomsgokgyssmwmai > 7)) {
            goto iyawqekeeawqkymm;
        }
        goto cwyaysecsakaqgew;
        kuaiscyqkgcouiye:
        qaqooueskgciuqgc:
        goto ooooceiweeackgie;
        eucakkcoiiwkwsme:
        if (!($eomsgokgyssmwmai > 11)) {
            goto qwosyqcomiosguoa;
        }
        goto iwsaaiggkciigsmc;
        smmagoyuqoigoesc:
        $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2);
        goto wsqeiwkgoiekwasy;
        suiywiakesiegcwu:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto kmseiouukkqiumum;
        iwsaaiggkciigsmc:
        $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2);
        goto agsuaimomgsoyiem;
        iuaeeeeggkikuiig:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, $sckumcuqemuukces, $gcegymooyemmaysk, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks);
        goto kmiqskugkmaiugae;
        gmsyoscesymiwwue:
        $eomsgokgyssmwmai = strlen($gcisockiummsmcag);
        goto eiicmcasqikiyasw;
        eiicmcasqikiyasw:
        $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4);
        goto ayucsuwsiocgycww;
        ycueoqkeakismiqw:
        $gyskaqycyaywiiyi = 1 * 24 * 3600;
        goto awimwukcyiceackk;
        ocwouquuwsaqakae:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, 1, $usqcwoasmiiomgks);
        goto gcaykgmmmqomsyis;
        gkwoqoeaecgkymeu:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto ouaoyqugwsagkqaa;
        qoacckkkwsqkokye:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $this->ogmieugosioacswq(0, 0, 0, 1, 1, $usqcwoasmiiomgks + 1));
        goto swuggqyiaiqywgge;
        qsaoyggkqwcgskwk:
        $ygykagaqyuawwiyo = $gqgemcmoicmgaqie->get('hour');
        goto myooisakyuggoggc;
        kmseiouukkqiumum:
        aqwoykqaquewcaki:
        goto syuywgysqyckcqay;
        ewoqyogcaksucksk:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, $sckumcuqemuukces, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks);
        goto wgeueumgacuuuama;
        wkqwywgikoyqkyeg:
    }
    
    public function qwmicoqmsgsaiggi($qyukicweqoisimwg)
    {
        array_push($qyukicweqoisimwg, 'separator', 'ltr', 'rtl');
        return $qyukicweqoisimwg;
    }
    
    public function cwyuycgicumkeequ($cmaiwckmwcaymcua) : array
    {
        return array_merge($cmaiwckmwcaymcua, ['d F Y', 'Y/m/d', 'd p Y']);
    }
    public function ugiqqmamaqgmkgkm()
    {
        goto aueiggyawkmkamum;
        omekuqkuugyocmoc:
        ManipulateHTML::sykissckqqccoiqs('a', ['id' => 'virastar', 'class' => 'button virastar', 'data-width' => 800], [$wkaqekwwgqsqwcoi, __('Writing Correction', PR__PKG__JALALI)]);
        goto giuswooyckooaoms;
        qswqmgiwiyyqwioa:
        $wkaqekwwgqsqwcoi = ManipulateHTML::gmqyuaqwgiayskei('', ['class' => 'wp-media-buttons-icon dashicons dashicons-edit']);
        goto omekuqkuugyocmoc;
        aueiggyawkmkamum:
        if (!$this->moeogyisgeuwoeea()) {
            goto wqieuwguumokgyqg;
        }
        goto qswqmgiwiyyqwioa;
        giuswooyckooaoms:
        wqieuwguumokgyqg:
        goto uogkcsaewswoaosw;
        uogkcsaewswoaosw:
    }
    
    public function ymsmsywaommeycgq($mswwwqcouwqecwos)
    {
        goto eqemoayymokeqaqi;
        eqemoayymokeqaqi:
        $yggmykakaiikqmem = $this->miocmcoykayoyyau()->get('tinymce.css');
        goto keewmqmgqegumiwa;
        uiqycwuommmmuowy:
        $iaaeswuecqawokwi = $this->kmuweyayaqoeqiyw()->pwugmawueqmkaeim($iaaeswuecqawokwi);
        goto moqcomgmwiamuomq;
        ayyyeiyaosoacoqm:
        return $mswwwqcouwqecwos;
        goto aiwygewkmigcwusw;
        iqamwyasyoqsugeu:
        $iaaeswuecqawokwi = $this->weysguygiseoukqw(Setting::ADMIN_FONT);
        goto uiqycwuommmmuowy;
        sguyyaygwyikaggk:
        cykaikwsaskgeemo:
        goto ayyyeiyaosoacoqm;
        kumuckkicykgwqqm:
        miqmoasmioksggkm:
        goto sguyyaygwyikaggk;
        oqsecqsucukywaee:
        $mswwwqcouwqecwos .= ", {$yggmykakaiikqmem}";
        goto iqamwyasyoqsugeu;
        omgkuuyoiugcymmy:
        $mswwwqcouwqecwos .= ", {$iaaeswuecqawokwi}";
        goto kumuckkicykgwqqm;
        keewmqmgqegumiwa:
        if (!$yggmykakaiikqmem) {
            goto cykaikwsaskgeemo;
        }
        goto oqsecqsucukywaee;
        moqcomgmwiamuomq:
        if (!is_string($iaaeswuecqawokwi)) {
            goto miqmoasmioksggkm;
        }
        goto omgkuuyoiugcymmy;
        aiwygewkmigcwusw:
    }
    public function aqkowacckgyeescu()
    {
        goto wgaqkacekoyiwggi;
        jkaemsuwyyoamwim:
        if (!($kugcmmgkuuysuuwo && !$kywuswuiuaiyomse)) {
            goto ekmogkwmcqsykgsq;
        }
        goto suwsiaeoumiwkiqg;
        suwsiaeoumiwkiqg:
        $this->ggmgmqswqkgecosg('date_i18n', [$this, 'kegkegukuqqiakko']);
        goto yoauoocuckogmsuw;
        yosyyiksyyscacus:
        yqeqouqemksasmqc:
        goto kwcscewawgicomok;
        koiyaaokigmamqyc:
        ksoawacwkgasqgmk:
        goto qiqegseqwywcmwoe;
        qiqegseqwywcmwoe:
        $this->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 4);
        goto yosyyiksyyscacus;
        amyaoueckysgmmas:
        goto yqeqouqemksasmqc;
        goto koiyaaokigmamqyc;
        cscskwugoamcmqyu:
        $kugcmmgkuuysuuwo = $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES, false);
        goto emioyucskiowqumg;
        yoauoocuckogmsuw:
        ekmogkwmcqsykgsq:
        goto amyaoueckysgmmas;
        emioyucskiowqumg:
        if (!$kugcmmgkuuysuuwo && $kywuswuiuaiyomse) {
            goto ksoawacwkgasqgmk;
        }
        goto jkaemsuwyyoamwim;
        wgaqkacekoyiwggi:
        $kywuswuiuaiyomse = $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES, false);
        goto cscskwugoamcmqyu;
        kwcscewawgicomok:
    }
    public function qkkgasscqmqyiqwu()
    {
        goto msiuqseowuumiwuo;
        msiuqseowuumiwuo:
        global $post_type, $wpdb;
        goto gqycmyieayoegcsy;
        ycomeuqeessamows:
        kikkkocywiyuyuqw:
        goto owiguescmqyqukui;
        owiguescmqyqukui:
        $gcisockiummsmcag = isset($_GET['m']) ? (int) $_GET['m'] : 0;
        goto guummoewucyeuiek;
        sqiyuasgusgawuoi:
        $msuwimywkyqkwiym = count($ymccyoouuqkaacik);
        goto iayguaeseyaemwkk;
        ieoeeyieoskuyiyw:
        ManipulateHTML::sykissckqqccoiqs('select', ['class' => 'm'], $qiouiwasaauyaaue);
        goto ciiyqsiswkcwsocm;
        guummoewucyeuiek:
        $ugousekwcsgumqis = 0;
        goto mqacqosyicuiqwia;
        iayguaeseyaemwkk:
        if (!(!$msuwimywkyqkwiym || 1 == $msuwimywkyqkwiym && 0 == $ymccyoouuqkaacik[0]->month)) {
            goto kikkkocywiyuyuqw;
        }
        goto akyiiioycmgqyuok;
        mqacqosyicuiqwia:
        $qiouiwasaauyaaue = ManipulateHTML::uuccukgasskgimsq('option', [selected($gcisockiummsmcag, 0, false), 'value' => 0]);
        goto mcuoyseuwoueyaie;
        mcuoyseuwoueyaie:
        foreach ($ymccyoouuqkaacik as $arc_row) {
            goto oaociaioauummsey;
            egiauwuekseyeaeq:
            if (!($ugousekwcsgumqis != $ocogsiouoiuuguym)) {
                goto akoweomooyuwamow;
            }
            goto euuekiyqwkowiees;
            gcecamucuogcciig:
            qayiqaykkywcyisq:
            goto suscosoukqeyyqgs;
            oaociaioauummsey:
            if (!(0 == $arc_row->year)) {
                goto qayiqaykkywcyisq;
            }
            goto cueuscqkicwwicei;
            eysuawiooiswaseq:
            $eqwyacwmcqusmwoq = mktime(0, 0, 0, $mwemskcucwsyycwm, $arc_row->day, $usqcwoasmiiomgks);
            goto iecqkqoiqimmisyw;
            kiewcwsykccgocuc:
            $usqcwoasmiiomgks = $arc_row->year;
            goto eysuawiooiswaseq;
            eogomkswkaqwyycm:
            $ocogsiouoiuuguym = $this->mikaiusgimoekqye($eqwyacwmcqusmwoq, 'Ym', 'en');
            goto egiauwuekseyeaeq;
            suscosoukqeyyqgs:
            $mwemskcucwsyycwm = zeroise($arc_row->month, 2);
            goto kiewcwsykccgocuc;
            cueuscqkicwwicei:
            goto aymoguycgmuggcik;
            goto gcecamucuogcciig;
            euuekiyqwkowiees:
            $qiouiwasaauyaaue .= ManipulateHTML::uuccukgasskgimsq('option', [selected($gcisockiummsmcag, $ocogsiouoiuuguym, false), 'value' => $ocogsiouoiuuguym], $gaemgswqmuaysywa);
            goto assoyoeukmqiucyq;
            iecqkqoiqimmisyw:
            $gaemgswqmuaysywa = $this->mikaiusgimoekqye($eqwyacwmcqusmwoq, 'F Y');
            goto eogomkswkaqwyycm;
            assoyoeukmqiucyq:
            akoweomooyuwamow:
            goto kikkkoqiumqoeiyy;
            wyqueeskecameuks:
            aymoguycgmuggcik:
            goto esokkakkumskkmiu;
            kikkkoqiumqoeiyy:
            $ugousekwcsgumqis = $ocogsiouoiuuguym;
            goto wyqueeskecameuks;
            esokkakkumskkmiu:
        }
        goto kwowggaooiyqawyq;
        akyiiioycmgqyuok:
        return;
        goto ycomeuqeessamows;
        kwowggaooiyqawyq:
        aqeyqwuywqcmuoce:
        goto ieoeeyieoskuyiyw;
        gqycmyieayoegcsy:
        $ymccyoouuqkaacik = $wpdb->get_results($wpdb->prepare("\n\t\t\tSELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month, DAY( post_date ) as day\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE post_type = %s AND post_status <> 'auto-draft'\n\t\t\tORDER BY post_date DESC\n\t\t\t", $post_type));
        goto sqiyuasgusgawuoi;
        ciiyqsiswkcwsocm:
    }
    
    public function uckqyiacyueouiuo($cqgoimumaewouews, $post)
    {
        goto ukigmkeewuqomooc;
        ykcmomsiayaymysm:
        ugyawwukegyoqmsq:
        goto qoaawmmcqyacokws;
        qoaawmmcqyacokws:
        soqkewsayowwcmco:
        goto uwyeycaywowwiquu;
        ukigmkeewuqomooc:
        if (!$post) {
            goto soqkewsayowwcmco;
        }
        goto wwgikwuigiiqsswq;
        uwyeycaywowwiquu:
        return $cqgoimumaewouews;
        goto cwmuqmoeauqcewoy;
        uugiuqkesegaamqw:
        $cqgoimumaewouews = $this->mikaiusgimoekqye($ekasyoagocygouom, 'd F Y H:i');
        goto ykcmomsiayaymysm;
        wwgikwuigiiqsswq:
        $ekasyoagocygouom = ManipulatePost::squyiyimquqicqke('Y/m/d H:i:s', $post, false);
        goto seyygcwcaogkmaqe;
        seyygcwcaogkmaqe:
        if (!$ekasyoagocygouom) {
            goto ugyawwukegyoqmsq;
        }
        goto uugiuqkesegaamqw;
        cwmuqmoeauqcewoy:
    }
    
    public function kywkmyokogeyayyw($mseykiqqcmyesccu)
    {
        $mseykiqqcmyesccu['directionality'] = includes_url('js/tinymce/plugins/directionality/plugin.min.js');
        return $mseykiqqcmyesccu;
    }
    
    public function yeceiewgomwacmmw($ymccyoouuqkaacik)
    {
        goto swicauyqusmgeccu;
        gaskcgoeywuyukke:
        kcwgiwimgqesukqu:
        goto gqaqamewqeaqwcia;
        iomwkkieqcswkkaw:
        $ciyackuwsqkoqese++;
        goto eussqkkimciywios;
        ksiwgckusukisueg:
        $pre_date = '';
        goto sgkqgucguyccaaki;
        gqaqamewqeaqwcia:
        if (!$wpdb) {
            goto qosswumywsaeyqus;
        }
        goto okuqsqaiwwiigmyu;
        cuayqmasemsqsume:
        $wp_locale->month_abbrev[$this->uacmswwoiqckokew()->eiaysiqcywusmwoe($ciyackuwsqkoqese)] = $this->uacmswwoiqckokew()->eiaysiqcywusmwoe($ciyackuwsqkoqese);
        goto igmawmwssyskqqag;
        gcqssckowmywoesw:
        if (!($ciyackuwsqkoqese <= 12)) {
            goto eiecgqokmuekaesc;
        }
        goto eekkcooqswqouoei;
        sgkqgucguyccaaki:
        foreach ($ymccyoouuqkaacik as $wgywewwaswowuooi => $month_year) {
            goto oksqsucimimsswcg;
            uckusgwkoycmkeam:
            [$month_year->year, $month_year->month] = $this->uacmswwoiqckokew()->uuwciykyuogimcou($month_year->year, $month_year->month, $month_year->day);
            goto gscyiqmmegqmqcoe;
            gscyiqmmegqmqcoe:
            gcecieuocqawmgci:
            goto mieoguuqiwqioeqa;
            oksqsucimimsswcg:
            if (!($pre_date == $month_year->year . $month_year->month)) {
                goto msmmiaumiasmsiog;
            }
            goto gqeoaceyoiicoaec;
            ikukqooiowqywyqo:
            msmmiaumiasmsiog:
            goto cciakcwuweqmcose;
            cciakcwuweqmcose:
            $pre_date = $month_year->year . $month_year->month;
            goto uckusgwkoycmkeam;
            gqeoaceyoiicoaec:
            unset($ymccyoouuqkaacik[$wgywewwaswowuooi]);
            goto kkckyqmcyussauma;
            kkckyqmcyussauma:
            goto gcecieuocqawmgci;
            goto ikukqooiowqywyqo;
            mieoguuqiwqioeqa:
        }
        goto omuemegmkesqgwys;
        igmawmwssyskqqag:
        ggsugekocmsukuci:
        goto iomwkkieqcswkkaw;
        eekkcooqswqouoei:
        $wp_locale->month[str_pad(strval($ciyackuwsqkoqese), 2, '0', STR_PAD_LEFT)] = $this->uacmswwoiqckokew()->eiaysiqcywusmwoe($ciyackuwsqkoqese);
        goto cuayqmasemsqsume;
        omuemegmkesqgwys:
        wicuauokauykwoeu:
        goto geyiosucqswaeasw;
        ewsigoeswimiueqe:
        eiecgqokmuekaesc:
        goto gaskcgoeywuyukke;
        eussqkkimciywios:
        goto ceosmkqgqgwsowwg;
        goto ewsigoeswimiueqe;
        icoiqskygugkgmkm:
        $ciyackuwsqkoqese = 1;
        goto kocaieyauyiqmyiy;
        geyiosucqswaeasw:
        qosswumywsaeyqus:
        goto cmsiuimsiycomyay;
        maguoggkqamaiuag:
        if (!$wp_locale) {
            goto kcwgiwimgqesukqu;
        }
        goto icoiqskygugkgmkm;
        kocaieyauyiqmyiy:
        ceosmkqgqgwsowwg:
        goto gcqssckowmywoesw;
        cmsiuimsiycomyay:
        return $ymccyoouuqkaacik;
        goto qmqmskywcgiqgygm;
        swicauyqusmgeccu:
        global $wpdb, $wp_locale;
        goto maguoggkqamaiuag;
        okuqsqaiwwiigmyu:
        $ymccyoouuqkaacik = $wpdb->get_results($wpdb->prepare("\n\t\t\tSELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month, DAY( post_date ) as day\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE post_type = %s\n\t\t\tORDER BY post_date DESC", 'attachment'));
        goto ksiwgckusukisueg;
        qmqmskywcgiqgygm:
    }
    
    public function mckwugcacskwoqwu($post)
    {
        goto qmguoqeawegcoeoa;
        wiaymoucakyaikii:
        $post->post_excerpt = $this->beekyawqaoysgowq($post->post_excerpt);
        goto ociesuicgmkekcue;
        omumkeywqqogwwue:
        $post->post_title = $this->beekyawqaoysgowq($post->post_title);
        goto igyesgemqesackws;
        ymucaguacemwsgsi:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) {
            goto gmeiuoeewucukque;
        }
        goto qiikwossequwiuom;
        ceaamccscgcmqgka:
        if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) {
            goto ccgsycueagwegqeu;
        }
        goto omumkeywqqogwwue;
        igyesgemqesackws:
        $post->post_content = $this->beekyawqaoysgowq($post->post_content);
        goto wiaymoucakyaikii;
        yqqseqskcqeqkacm:
        return $post;
        goto ywokggauuiosegog;
        ycecaauekkiqacuu:
        if (!$post) {
            goto sayqggaieocmskko;
        }
        goto ceaamccscgcmqgka;
        qmguoqeawegcoeoa:
        $post = ManipulatePost::get($post);
        goto ycecaauekkiqacuu;
        qiikwossequwiuom:
        $post->post_title = $this->gwyqggqwgaawqmww($post->post_title);
        goto gaouaiemokqqgssw;
        ociesuicgmkekcue:
        ccgsycueagwegqeu:
        goto ymucaguacemwsgsi;
        oqgymyiwckkwueuw:
        gmeiuoeewucukque:
        goto qywkykqkeeuccoui;
        wqwmuuicoqigqwyc:
        $post->post_excerpt = $this->gwyqggqwgaawqmww($post->post_excerpt);
        goto oqgymyiwckkwueuw;
        qywkykqkeeuccoui:
        sayqggaieocmskko:
        goto yqqseqskcqeqkacm;
        gaouaiemokqqgssw:
        $post->post_content = $this->gwyqggqwgaawqmww($post->post_content);
        goto wqwmuuicoqigqwyc;
        ywokggauuiosegog:
    }
    
    public function acsgsuwqowgsyqqo($gqgemcmoicmgaqie = []) : array
    {
        goto sockocsycmkaeosg;
        syisomgawcsqeemk:
        uoewiggumomegksg:
        goto asoecuscmsyusmkg;
        oaqeoqsksuyyggmg:
        $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo);
        goto kkmuuoscccmokkiw;
        miugmimciywcgswm:
        $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi);
        goto aqekkeqmmewoyawu;
        sockocsycmkaeosg:
        if (!(!isset($gqgemcmoicmgaqie['year']) || !isset($gqgemcmoicmgaqie['monthnum']) || empty($gqgemcmoicmgaqie['year']) || $gqgemcmoicmgaqie['year'] == 'false' || $gqgemcmoicmgaqie['monthnum'] == 'false')) {
            goto uoewiggumomegksg;
        }
        goto ugkwqaywmwqucoeo;
        asoecuscmsyusmkg:
        $mwemskcucwsyycwm = $gqgemcmoicmgaqie['monthnum'];
        goto kwasqmcyiswoaiuu;
        awuwuuuagqysukku:
        $gyskaqycyaywiiyi = $mwemskcucwsyycwm <= 6 ? $gyskaqycyaywiiyi = 31 * 24 * 3600 : ($mwemskcucwsyycwm == 12 && !$iogigmsgiwaecekq ? 29 * 24 * 3600 : 30 * 24 * 3600);
        goto miugmimciywcgswm;
        mcqwuawosciucemq:
        $gqgemcmoicmgaqie['monthnum'] = '';
        goto emeeocqaisksyioq;
        kkmuuoscccmokkiw:
        $iogigmsgiwaecekq = $usqcwoasmiiomgks % 33 % 4 - 1 == (int) ($usqcwoasmiiomgks % 33 * 0.05) ? 1 : 0;
        goto awuwuuuagqysukku;
        ugkwqaywmwqucoeo:
        return $gqgemcmoicmgaqie;
        goto syisomgawcsqeemk;
        kwasqmcyiswoaiuu:
        $usqcwoasmiiomgks = $gqgemcmoicmgaqie['year'];
        goto kiskwawumeiiieuk;
        aqekkeqmmewoyawu:
        $gqgemcmoicmgaqie['date_query'] = ['after' => $miisqgccsqqcscia, 'before' => $caacssaumiqeaoaw];
        goto mcqwuawosciucemq;
        maggecymmmesqmqs:
        return $gqgemcmoicmgaqie;
        goto csaksaisgawusswg;
        kiskwawumeiiieuk:
        $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, 1, $usqcwoasmiiomgks);
        goto oaqeoqsksuyyggmg;
        emeeocqaisksyioq:
        $gqgemcmoicmgaqie['year'] = '';
        goto maggecymmmesqmqs;
        csaksaisgawusswg:
    }
    
    public function yeawaimmmecwweoa($yguegskigigqemaw, $post_type) : bool
    {
        goto qkiyyywwuiuackao;
        cimascmiesomqgqs:
        return $yeawaimmmecwweoa;
        goto easuiqiooiwgswmm;
        mcagemacuqyskogs:
        $yeawaimmmecwweoa = true;
        goto aamgqoqyyooimqkm;
        ossakckwskyqusmm:
        if (!in_array($post_type, $cscgiqqaucusigwm)) {
            goto ecgwgamiseokmise;
        }
        goto mcagemacuqyskogs;
        qkiyyywwuiuackao:
        $yeawaimmmecwweoa = $yguegskigigqemaw;
        goto gyskcwykkyakeims;
        gyskcwykkyakeims:
        $cscgiqqaucusigwm = [self::POST, self::PAGE, 'attachment'];
        goto ossakckwskyqusmm;
        aamgqoqyyooimqkm:
        ecgwgamiseokmise:
        goto cimascmiesomqgqs;
        easuiqiooiwgswmm:
    }
}

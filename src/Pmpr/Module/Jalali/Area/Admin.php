<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b62cf86             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Jalali\Setting; use WP_Post; class Admin extends Base { public function wigskegsqequoeks() { if ($this->weysguygiseoukqw(Setting::qguiuummyqgiskeu, false)) { $this->qcsmikeggeemccuu('load-edit.php', [$this, 'iiawaeywaciioaco'])->qcsmikeggeemccuu('load-upload.php', [$this, 'iiawaeywaciioaco'])->qcsmikeggeemccuu('restrict_manage_posts', [$this, 'qkkgasscqmqyiqwu'])->cecaguuoecmccuse('wp_date', [$this, 'egiuyaokiumwyyum'], 9999, 3); } $this->qcsmikeggeemccuu('load-options-general.php', [$this, 'aqkowacckgyeescu'])->qcsmikeggeemccuu('media_buttons', [$this, 'ugiqqmamaqgmkgkm'], 21)->qcsmikeggeemccuu('save_post', [$this, 'mckwugcacskwoqwu'], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('mce_css', [$this, 'ymsmsywaommeycgq'])->cecaguuoecmccuse('mce_buttons', [$this, 'qwmicoqmsgsaiggi'])->cecaguuoecmccuse('comment_save_pre', [$this, 'semmskukaeyeouue'])->cecaguuoecmccuse('mce_external_plugins', [$this, 'kywkmyokogeyayyw']); if ($this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { $this->cecaguuoecmccuse('date_formats', [$this, 'cwyuycgicumkeequ'])->cecaguuoecmccuse('pre_get_posts', [$this, 'kgeiicuauqaqgmsw'])->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 4)->cecaguuoecmccuse('ajax_query_attachments_args', [$this, 'acsgsuwqowgsyqqo'])->cecaguuoecmccuse('media_library_months_with_files', [$this, 'yeceiewgomwacmmw'])->cecaguuoecmccuse('disable_months_dropdown', [$this, 'yeawaimmmecwweoa'], 10, 2); } if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $this->cecaguuoecmccuse('the_title', [$this, 'beekyawqaoysgowq'], 999); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $this->cecaguuoecmccuse('the_title', [$this, 'gwyqggqwgaawqmww'], 999); } parent::kgquecmsgcouyaya(); } public function iiawaeywaciioaco() { $this->cecaguuoecmccuse('posts_where', [$this, 'gcyuqqgwseaumuyg'])->cecaguuoecmccuse('pre_get_posts', [$this, 'kgeiicuauqaqgmsw']); } public function kgeiicuauqaqgmsw($gqgemcmoicmgaqie) { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->kgkwyuuwwyoskcsq($gqgemcmoicmgaqie)) { $gcisockiummsmcag = $gqgemcmoicmgaqie->get('m'); $ygykagaqyuawwiyo = $gqgemcmoicmgaqie->get('hour'); $sckumcuqemuukces = $gqgemcmoicmgaqie->get('minute'); $gcegymooyemmaysk = $gqgemcmoicmgaqie->get('second'); $usqcwoasmiiomgks = $gqgemcmoicmgaqie->get('year'); $mwemskcucwsyycwm = $gqgemcmoicmgaqie->get('monthnum'); $oqkwcmcmimkmkwgk = $gqgemcmoicmgaqie->get('day'); if (!empty($gcisockiummsmcag)) { $eomsgokgyssmwmai = strlen($gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); if ($eomsgokgyssmwmai > 5) { $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); } if ($eomsgokgyssmwmai > 7) { $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); } if ($eomsgokgyssmwmai > 9) { $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); } if ($eomsgokgyssmwmai > 11) { $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); } if ($eomsgokgyssmwmai > 13) { $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); } } if ($usqcwoasmiiomgks && $usqcwoasmiiomgks < 1700) { $iogigmsgiwaecekq = $usqcwoasmiiomgks % 33 % 4 - 1 == (int) ($usqcwoasmiiomgks % 33 * 0.05) ? 1 : 0; $miisqgccsqqcscia = date('Y-m-d H:i:s', $this->ogmieugosioacswq(0, 0, 0, 1, 1, $usqcwoasmiiomgks)); $caacssaumiqeaoaw = date('Y-m-d H:i:s', $this->ogmieugosioacswq(0, 0, 0, 1, 1, $usqcwoasmiiomgks + 1)); if (!empty($mwemskcucwsyycwm)) { $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, 1, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $gyskaqycyaywiiyi = $mwemskcucwsyycwm <= 6 ? $gyskaqycyaywiiyi = 31 * 24 * 3600 : ($mwemskcucwsyycwm == 12 && !$iogigmsgiwaecekq ? 29 * 24 * 3600 : 30 * 24 * 3600); $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); } if (!empty($oqkwcmcmimkmkwgk)) { $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $gyskaqycyaywiiyi = 1 * 24 * 3600; $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); } if (!empty($ygykagaqyuawwiyo)) { $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, 0, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $gyskaqycyaywiiyi = 1 * 3600; $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); } if (!empty($sckumcuqemuukces)) { $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, $sckumcuqemuukces, 0, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $gyskaqycyaywiiyi = 1 * 60; $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); } if (!empty($gcegymooyemmaysk)) { $ceikekewmwsmqyqo = $this->ogmieugosioacswq($ygykagaqyuawwiyo, $sckumcuqemuukces, $gcegymooyemmaysk, $mwemskcucwsyycwm, $oqkwcmcmimkmkwgk, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $gyskaqycyaywiiyi = 1; $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); } $this->caokeucsksukesyo()->skckwsgymkimyuwo()->ccwowuakmqoemoem($gqgemcmoicmgaqie, ['date_query' => [[Constants::AFTER => $miisqgccsqqcscia, Constants::BEFORE => $caacssaumiqeaoaw]]]); } } } public function qwmicoqmsgsaiggi($qyukicweqoisimwg) { array_push($qyukicweqoisimwg, 'separator', 'ltr', 'rtl'); return $qyukicweqoisimwg; } public function cwyuycgicumkeequ($cmaiwckmwcaymcua) : array { return array_merge($cmaiwckmwcaymcua, ['d F Y', 'Y/m/d', 'd p Y']); } public function ugiqqmamaqgmkgkm() { if ($this->kmuweyayaqoeqiyw()->moeogyisgeuwoeea()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->gmqyuaqwgiayskei('', ['class' => 'wp-media-buttons-icon dashicons dashicons-edit']); $swqimwqeweekeusq->yuawgssgauywkiia([$wkaqekwwgqsqwcoi, __('Writing Correction', PR__MDL__JALALI)], '#', ['id' => 'virastar', 'class' => 'button virastar', 'data-width' => 800]); } } public function ymsmsywaommeycgq($mswwwqcouwqecwos) : string { $yggmykakaiikqmem = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, 'tinymce.css'); if ($yggmykakaiikqmem) { $mswwwqcouwqecwos .= ", {$yggmykakaiikqmem}"; } return $mswwwqcouwqecwos; } public function aqkowacckgyeescu() { $kywuswuiuaiyomse = $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo, false); $kugcmmgkuuysuuwo = $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu, false); if (!$kugcmmgkuuysuuwo && $kywuswuiuaiyomse) { $this->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 4); } else { if ($kugcmmgkuuysuuwo && !$kywuswuiuaiyomse) { $this->ggmgmqswqkgecosg('date_i18n', [$this, 'kegkegukuqqiakko']); } } } public function qkkgasscqmqyiqwu() { global $post_type, $wpdb; if ($this->sscegwueamckwmcy('disable_months_dropdown', false, $post_type)) { return; } $ymccyoouuqkaacik = (array) $wpdb->get_results($this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\n\t\t\tSELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month, DAY( post_date ) as day\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE post_type = %s AND post_status <> 'auto-draft'\n\t\t\tORDER BY post_date DESC\n\t\t\t", $post_type)); $msuwimywkyqkwiym = count($ymccyoouuqkaacik); if (!$msuwimywkyqkwiym || 1 == $msuwimywkyqkwiym && 0 == $ymccyoouuqkaacik[0]->month) { return; } $gcisockiummsmcag = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg('m', 0); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ugousekwcsgumqis = 0; $qiouiwasaauyaaue = $swqimwqeweekeusq->uuccukgasskgimsq('option', [selected($gcisockiummsmcag, 0, false), Constants::ciyoccqkiamemcmm => 0]); foreach ($ymccyoouuqkaacik as $arc_row) { if (0 == $arc_row->year) { continue; } $mwemskcucwsyycwm = zeroise($arc_row->month, 2); $usqcwoasmiiomgks = $arc_row->year; $eqwyacwmcqusmwoq = mktime(0, 0, 0, $mwemskcucwsyycwm, $arc_row->day, $usqcwoasmiiomgks); $gaemgswqmuaysywa = $this->mikaiusgimoekqye($eqwyacwmcqusmwoq, 'F Y'); $ocogsiouoiuuguym = $this->mikaiusgimoekqye($eqwyacwmcqusmwoq, 'Ym', 'en'); if ($ugousekwcsgumqis != $ocogsiouoiuuguym) { $qiouiwasaauyaaue .= $swqimwqeweekeusq->uuccukgasskgimsq('option', [selected($gcisockiummsmcag, $ocogsiouoiuuguym, false), Constants::ciyoccqkiamemcmm => $ocogsiouoiuuguym], $gaemgswqmuaysywa); } $ugousekwcsgumqis = $ocogsiouoiuuguym; } $swqimwqeweekeusq->sykissckqqccoiqs('select', ['class' => 'm'], $qiouiwasaauyaaue); } public function uckqyiacyueouiuo($cqgoimumaewouews, $post) { if ($post) { $ekasyoagocygouom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke('Y/m/d H:i:s', $post, false); if ($ekasyoagocygouom) { $cqgoimumaewouews = $this->mikaiusgimoekqye($ekasyoagocygouom, 'd F Y H:i'); } } return $cqgoimumaewouews; } public function kywkmyokogeyayyw($mseykiqqcmyesccu) { $mseykiqqcmyesccu['directionality'] = includes_url('js/tinymce/plugins/directionality/plugin.min.js'); return $mseykiqqcmyesccu; } public function yeceiewgomwacmmw($ymccyoouuqkaacik) { global $wpdb, $wp_locale; if ($wp_locale) { for ($ciyackuwsqkoqese = 1; $ciyackuwsqkoqese <= 12; $ciyackuwsqkoqese++) { $eiaysiqcywusmwoe = $this->uacmswwoiqckokew()->eiaysiqcywusmwoe($ciyackuwsqkoqese); $wp_locale->month[str_pad((string) $ciyackuwsqkoqese, 2, '0', STR_PAD_LEFT)] = $eiaysiqcywusmwoe; $wp_locale->month_abbrev[$this->uacmswwoiqckokew()->eiaysiqcywusmwoe($ciyackuwsqkoqese)] = $eiaysiqcywusmwoe; } } if ($wpdb) { $ymccyoouuqkaacik = $wpdb->get_results($this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\n\t\t\tSELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month, DAY( post_date ) as day\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE post_type = %s\n\t\t\tORDER BY post_date DESC", Constants::cqycgsyykemiygou)); $pre_date = ''; foreach ($ymccyoouuqkaacik as $wgywewwaswowuooi => $month_year) { if ($pre_date == $month_year->year . $month_year->month) { unset($ymccyoouuqkaacik[$wgywewwaswowuooi]); continue; } $pre_date = $month_year->year . $month_year->month; [$month_year->year, $month_year->month] = $this->uacmswwoiqckokew()->uuwciykyuogimcou($month_year->year, $month_year->month, $month_year->day); } } return $ymccyoouuqkaacik; } public function mckwugcacskwoqwu($post) { $post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($post); if ($post) { if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $post->post_title = $this->beekyawqaoysgowq($post->post_title); $post->post_content = $this->beekyawqaoysgowq($post->post_content); $post->post_excerpt = $this->beekyawqaoysgowq($post->post_excerpt); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $post->post_title = $this->gwyqggqwgaawqmww($post->post_title); $post->post_content = $this->gwyqggqwgaawqmww($post->post_content); $post->post_excerpt = $this->gwyqggqwgaawqmww($post->post_excerpt); } } return $post; } public function acsgsuwqowgsyqqo($gqgemcmoicmgaqie = []) : array { if (!isset($gqgemcmoicmgaqie['year']) || !isset($gqgemcmoicmgaqie['monthnum']) || empty($gqgemcmoicmgaqie['year']) || $gqgemcmoicmgaqie['year'] == 'false' || $gqgemcmoicmgaqie['monthnum'] == 'false') { return $gqgemcmoicmgaqie; } $mwemskcucwsyycwm = $gqgemcmoicmgaqie['monthnum']; $usqcwoasmiiomgks = $gqgemcmoicmgaqie['year']; $ceikekewmwsmqyqo = $this->ogmieugosioacswq(0, 0, 0, $mwemskcucwsyycwm, 1, $usqcwoasmiiomgks); $miisqgccsqqcscia = date('Y-m-d H:i:s', $ceikekewmwsmqyqo); $iogigmsgiwaecekq = $usqcwoasmiiomgks % 33 % 4 - 1 == (int) ($usqcwoasmiiomgks % 33 * 0.05) ? 1 : 0; $gyskaqycyaywiiyi = $mwemskcucwsyycwm <= 6 ? $gyskaqycyaywiiyi = 31 * 24 * 3600 : ($mwemskcucwsyycwm == 12 && !$iogigmsgiwaecekq ? 29 * 24 * 3600 : 30 * 24 * 3600); $caacssaumiqeaoaw = date('Y-m-d H:i:s', $ceikekewmwsmqyqo + $gyskaqycyaywiiyi); $gqgemcmoicmgaqie['date_query'] = ['after' => $miisqgccsqqcscia, 'before' => $caacssaumiqeaoaw]; $gqgemcmoicmgaqie['monthnum'] = ''; $gqgemcmoicmgaqie['year'] = ''; return $gqgemcmoicmgaqie; } public function yeawaimmmecwweoa($yguegskigigqemaw, $useksmwkuswkwcqg) : bool { $yeawaimmmecwweoa = $yguegskigigqemaw; $cscgiqqaucusigwm = [Constants::mswoacegomcucaik, Constants::imywcsggckkcywgk, Constants::cqycgsyykemiygou]; if (in_array($useksmwkuswkwcqg, $cscgiqqaucusigwm, true)) { $yeawaimmmecwweoa = true; } return $yeawaimmmecwweoa; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
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
        parent::kgquecmsgcouyaya();
        $this->cecaguuoecmccuse('posts_where', [$this, 'gcyuqqgwseaumuyg'], 10, 2);
        if ($this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) {
            $this->cecaguuoecmccuse('wp_date', [$this, 'egiuyaokiumwyyum'], 9999, 3)->cecaguuoecmccuse('date_i18n', [$this, 'kegkegukuqqiakko'], 10, 3)->cecaguuoecmccuse('the_date', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('time_ago', [$this, 'beekyawqaoysgowq'], 100)->cecaguuoecmccuse('date_time_ago', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('get_comment_date', [$this, 'mikaiusgimoekqye'], 99, 3)->cecaguuoecmccuse('get_comment_time', [$this, 'mikaiusgimoekqye'], 99, 3);
        }
        if ($this->weysguygiseoukqw(Setting::FRONT_CONVERT_LETTERS)) {
            $this->cecaguuoecmccuse('wp_title', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_title', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_excerpt', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_content', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('the_category', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('comment_text', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('comments_number', [$this, 'gwyqggqwgaawqmww'], 999)->cecaguuoecmccuse('wp_list_categories', [$this, 'gwyqggqwgaawqmww'], 999);
        }
        if ($this->weysguygiseoukqw(Setting::FRONT_CONVERT_NUMBERS)) {
            $this->cecaguuoecmccuse('wp_title', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_title', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_excerpt', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('comment_text', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('number_format_i18n', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('wp_list_categories', [$this, 'beekyawqaoysgowq'])->cecaguuoecmccuse('the_content', [$this, 'beekyawqaoysgowq'], 999)->cecaguuoecmccuse('get_comments_number', [$this, 'beekyawqaoysgowq'], 99);
        }
        if ($this->weysguygiseoukqw(Setting::FRONT_CONVERT_PERMALINK_DATES)) {
            $this->cecaguuoecmccuse('post_link', [$this, 'ueoacwsyeeawcamc'], 10, 3);
        }
    }
    
    public function ueoacwsyeeawcamc($iwywmkygwewiamwm, $post)
    {
        $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post, true);
        $aaokuekaimigoyue = ManipulatePost::aqcogscycyycgkuq($aokagokqyuysuksm);
        $ocogsiouoiuuguym = ManipulatePost::squyiyimquqicqke('Y-m-d H:i:s', $aokagokqyuysuksm, false);
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($aokagokqyuysuksm);
        $iooyomkykmsiiquc = DecoratorOption::get('home');
        $auucwmuqkeskqoai = strpos($iwywmkygwewiamwm, '%postname%') !== false || strpos($iwywmkygwewiamwm, '%pagename%') !== false;
        $gumeikyqiciaiocq = ['%year%', '%monthnum%', '%day%', '%hour%', '%minute%', '%second%', $auucwmuqkeskqoai ? '' : '%postname%', '%post_id%', '%category%', '%author%', $auucwmuqkeskqoai ? '' : '%pagename%'];
        if ($aokagokqyuysuksm) {
            if ($useksmwkuswkwcqg == 'page') {
                $iwywmkygwewiamwm = DecoratorPage::qmgcisuuikgmqcsu($aokagokqyuysuksm, $auucwmuqkeskqoai);
            } elseif ($post->post_type == 'attachment') {
                $iwywmkygwewiamwm = DecoratorAttachment::qmgcisuuikgmqcsu($post, $auucwmuqkeskqoai);
            } else {
                $migiiksoiymissge = ManipulateSetting::ewswusimyeosaogm();
                
                if ('' == $migiiksoiymissge || in_array($post->post_status, ['draft', 'pending', 'auto-draft', 'future'])) {
                    $iwywmkygwewiamwm = "{$iooyomkykmsiiquc}/?p={$aokagokqyuysuksm}";
                } else {
                    $uaaoyoimqcqewueg = strtotime($ocogsiouoiuuguym);
                    $guwumyyyakswawas = '';
                    if (strpos($migiiksoiymissge, '%category%') !== false) {
                        $cocugsyymkwcoaee = get_the_category($aokagokqyuysuksm);
                        if ($cocugsyymkwcoaee) {
                            usort($cocugsyymkwcoaee, 'wp_list_sort');
                        }
                        $guwumyyyakswawas = $cocugsyymkwcoaee[0]->slug;
                        if ($omwmuycmeqcqokom = $cocugsyymkwcoaee[0]->category_parent) {
                            $guwumyyyakswawas = get_category_parents($omwmuycmeqcqokom, false, '/', true) . $guwumyyyakswawas;
                        }
                    }
                    if (!$guwumyyyakswawas) {
                        $ggauoeuaesiymgee = get_category(DecoratorOption::get('default_category'));
                        $guwumyyyakswawas = is_wp_error($ggauoeuaesiymgee) ? '' : $ggauoeuaesiymgee->slug;
                    }
                    $qscaoekmoooeuyqg = null;
                    if (strpos($migiiksoiymissge, '%author%') !== false) {
                        $qscaoekmoooeuyqg = ManipulateUser::ygwimyogyaqgumam(ManipulatePost::mguqscccckuywsya($aokagokqyuysuksm), 'user_nicename');
                    }
                    $ocogsiouoiuuguym = explode(" ", $this->mikaiusgimoekqye($uaaoyoimqcqewueg, 'Y m d H i s', 'en'));
                    $gaawswgugsqsasqw = [$ocogsiouoiuuguym[0], $ocogsiouoiuuguym[1], $ocogsiouoiuuguym[2], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[4], $ocogsiouoiuuguym[5], $aaokuekaimigoyue, $aokagokqyuysuksm, $guwumyyyakswawas, $qscaoekmoooeuyqg, $aaokuekaimigoyue];
                    $migiiksoiymissge = $iooyomkykmsiiquc . str_replace($gumeikyqiciaiocq, $gaawswgugsqsasqw, $migiiksoiymissge);
                    $iwywmkygwewiamwm = user_trailingslashit($migiiksoiymissge, 'single');
                }
            }
        }
        return $iwywmkygwewiamwm;
    }
}

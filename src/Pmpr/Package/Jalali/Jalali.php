<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680ecaa1e22             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Jalali\Area\Area; class Jalali extends Container { public function __construct() { goto kssuqmsgmaaeqigw; kssuqmsgmaaeqigw: $this->gkieogwukagigisy(__DIR__); goto uwusswwekqcsisus; mciumqyyossyiuyk: parent::__construct(); goto acaeigkmigikeuyu; kqyeukywmgismyaq: egwgyekaiqomyeaa: goto mukwsuuuqcgesmwc; uwusswwekqcsisus: if (!$this->gmiyqqaekqcsoime()) { goto egwgyekaiqomyeaa; } goto mciumqyyossyiuyk; acaeigkmigikeuyu: $this->iemaakgqgqosiecm(); goto kqyeukywmgismyaq; mukwsuuuqcgesmwc: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\x5f\151\156\151\x74", [$this, "\x79\145\171\151\147\165\171\x65\x67\155\x6d\x79\165\163\145\141"], 21); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { goto cqeoguiqiymkyweo; wykuosegisygosiq: date_default_timezone_set("\x41\x73\151\141\57\x54\145\150\162\x61\156"); goto ugikgkwuwmgymgus; omgcsmsikaggaooc: Asset::symcgieuakksimmu(); goto wykuosegisygosiq; cqeoguiqiymkyweo: Area::symcgieuakksimmu(); goto omgcsmsikaggaooc; ugikgkwuwmgymgus: } public function yeyiguyegmmyusea() { goto aiqekkyauwswayyq; wiiqigwgyuiuksia: syykqmkiyoekqsek: goto mqoygcuqwacgycek; mmcikqikqecaeswu: if (DecoratorOption::get($omkysikckkcieckq, 0)) { goto syykqmkiyoekqsek; } goto ywsywoumuaykkeaa; aiqekkyauwswayyq: $omkysikckkcieckq = "{$this->akuociswqmoigkas()}\137\141\x63\164\x69\x76\x61\x74\x65"; goto mmcikqikqecaeswu; ywsywoumuaykkeaa: DecoratorOption::update("\127\x50\114\x41\x4e\107", "\x65\x6e\x5f\x55\x53"); goto wsqiqkiucakewgou; yaumwqeommqigswq: try { if (!function_exists("\x77\160\x5f\144\157\167\156\x6c\x6f\141\144\137\x6c\141\x6e\x67\x75\141\147\145\137\160\x61\x63\x6b")) { goto omemqagskckoeoog; uyksacasqywyessc: gsgyayuaekgyoumc: goto sqmqwqeoygcmqcim; aeuosggumiiwoesm: if (!wp_can_install_language_pack()) { goto gsgyayuaekgyoumc; } goto wyqmeyoaggwuioak; omemqagskckoeoog: require_once ABSPATH . "\57\167\x70\55\141\x64\x6d\x69\156\57\x69\156\x63\x6c\165\144\x65\163\x2f\x74\162\x61\156\163\154\x61\164\151\x6f\x6e\x2d\x69\156\x73\164\x61\x6c\154\x2e\160\x68\160"; goto aeuosggumiiwoesm; wyqmeyoaggwuioak: @wp_download_language_pack("\x66\x61\137\x49\122"); goto uyksacasqywyessc; sqmqwqeoygcmqcim: } } catch (Exception $wgaoewqkwgomoaai) { } goto wiiqigwgyuiuksia; wsqiqkiucakewgou: DecoratorOption::update($omkysikckkcieckq, 1); goto yaumwqeommqigswq; mqoygcuqwacgycek: } }

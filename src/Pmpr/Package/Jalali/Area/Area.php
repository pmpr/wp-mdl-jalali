<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali\Area;

use Pmpr\Common\Foundation\Decorator\DecoratorI18N;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Area extends Common
{
    
    public function __construct()
    {
        parent::__construct();
        $this->iemaakgqgqosiecm();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw('get_age'), [$this, 'gcmeamqagaouiskc'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw('convert_date'), [$this, 'mikaiusgimoekqye'], 10, 3)->cecaguuoecmccuse($this->ygyygikyocoymgaw('trans_word'), [$this, 'uygeikwmwmiwsqca'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw('trans_datetime'), [$this, 'mikaiusgimoekqye'], 10, 3)->cecaguuoecmccuse($this->ygyygikyocoymgaw('trans_number'), [$this, 'ieacowssemeuewag'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    public function iemaakgqgqosiecm()
    {
        goto icuukwkwqeoogyae;
        gcogomgmqcgkeceg:
        Front::symcgieuakksimmu();
        goto cksomiiqscosigke;
        ikqagqacuwcgwmqy:
        iauwkeeaqsgweeoo:
        goto gcogomgmqcgkeceg;
        iwcmgioeaiyuacwi:
        Admin::symcgieuakksimmu();
        goto iyyaiuccouqowyga;
        iyyaiuccouqowyga:
        goto aycqgowuwagcgque;
        goto ikqagqacuwcgwmqy;
        icuukwkwqeoogyae:
        if (!is_admin()) {
            goto iauwkeeaqsgweeoo;
        }
        goto iwcmgioeaiyuacwi;
        cksomiiqscosigke:
        aycqgowuwagcgque:
        goto ugmukcwgcioqgywy;
        ugmukcwgcioqgywy:
    }
    
    public function gcmeamqagaouiskc($usqcwoasmiiomgks, $ksskkagoieiyuuwe = true)
    {
        goto wucacaegysmiusai;
        omqyuuomwywmqeiq:
        if (!($asygkgscoucyqgus < 1)) {
            goto euoscysqgugsqewc;
        }
        goto oysyuiqmsokoykaq;
        misiasooemyskoay:
        euoscysqgugsqewc:
        goto eomqeimoequmagum;
        ycaqooeeseougumo:
        kisccmsaieigisiu:
        goto eceeoiwuagocweus;
        eeomcmuiqwgwwuqk:
        if (!$usqcwoasmiiomgks) {
            goto mwwygasiagaqsimo;
        }
        goto mseokuecmeoyoggk;
        cqkyumayoemqsueu:
        return $asygkgscoucyqgus;
        goto ksqmcugkcmsooeaw;
        eceeoiwuagocweus:
        $cugkqygegsymsyic = date('Y');
        goto aeockieewgkequae;
        yeaqsiqgakskoykg:
        if (!$ksskkagoieiyuuwe) {
            goto kisccmsaieigisiu;
        }
        goto esgyqksmcukeuwyk;
        aeockieewgkequae:
        $asygkgscoucyqgus = $cugkqygegsymsyic - $ggkaciewmeqmgckg;
        goto omqyuuomwywmqeiq;
        esgyqksmcukeuwyk:
        $ggkaciewmeqmgckg = $this->kkkikouyuqigocai()->msywmyaoqmaegsuy($usqcwoasmiiomgks);
        goto iigmgswcogqemgao;
        wucacaegysmiusai:
        $asygkgscoucyqgus = 0;
        goto eeomcmuiqwgwwuqk;
        iigmgswcogqemgao:
        $ggkaciewmeqmgckg = $this->uacmswwoiqckokew()->iiemucyoiawywqmw($ggkaciewmeqmgckg, 1, 1)[0];
        goto ycaqooeeseougumo;
        mseokuecmeoyoggk:
        $usqcwoasmiiomgks = ManipulateString::ucymkkoowkqeauga($usqcwoasmiiomgks, '/');
        goto uookseqsmsqgweuy;
        eomqeimoequmagum:
        mwwygasiagaqsimo:
        goto cqkyumayoemqsueu;
        oysyuiqmsokoykaq:
        $asygkgscoucyqgus = 1;
        goto misiasooemyskoay;
        uookseqsmsqgweuy:
        $ggkaciewmeqmgckg = ManipulateString::ucymkkoowkqeauga($usqcwoasmiiomgks, '-');
        goto yeaqsiqgakskoykg;
        ksqmcugkcmsooeaw:
    }
    
    public function mikaiusgimoekqye($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $somiuasmmwkuceag = 'fa')
    {
        goto qykcggwgkweasuii;
        ogciikaecauiwgyk:
        ukmgwuiqwgyiouec:
        goto meiqywmwuoogckss;
        okawiaowosqickgq:
        $somiuasmmwkuceag = DecoratorI18N::iyouigcsiacgwksc();
        goto ogciikaecauiwgyk;
        geoiegikocwmwosi:
        $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        goto wasuquysysmqyegg;
        qykcggwgkweasuii:
        if ($saqmwwmqiwmkiwaa) {
            goto sukcyismwageqgok;
        }
        goto geoiegikocwmwosi;
        wasuquysysmqyegg:
        sukcyismwageqgok:
        goto eqsuaywswuesuika;
        eqsuaywswuesuika:
        if ($somiuasmmwkuceag) {
            goto ukmgwuiqwgyiouec;
        }
        goto okawiaowosqickgq;
        meiqywmwuoogckss:
        return parent::mikaiusgimoekqye($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
        goto oyeygeykqwcqoeic;
        oyeygeykqwcqoeic:
    }
}

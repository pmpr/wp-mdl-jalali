<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
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
        if (!is_admin()) {
            Front::symcgieuakksimmu();
        } else {
            Admin::symcgieuakksimmu();
        }
    }
    
    public function gcmeamqagaouiskc($usqcwoasmiiomgks, $ksskkagoieiyuuwe = true)
    {
        $asygkgscoucyqgus = 0;
        if ($usqcwoasmiiomgks) {
            $usqcwoasmiiomgks = ManipulateString::ucymkkoowkqeauga($usqcwoasmiiomgks, '/');
            $ggkaciewmeqmgckg = ManipulateString::ucymkkoowkqeauga($usqcwoasmiiomgks, '-');
            if ($ksskkagoieiyuuwe) {
                $ggkaciewmeqmgckg = $this->kkkikouyuqigocai()->msywmyaoqmaegsuy($usqcwoasmiiomgks);
                $ggkaciewmeqmgckg = $this->uacmswwoiqckokew()->iiemucyoiawywqmw($ggkaciewmeqmgckg, 1, 1)[0];
            }
            $cugkqygegsymsyic = date('Y');
            $asygkgscoucyqgus = $cugkqygegsymsyic - $ggkaciewmeqmgckg;
            if ($asygkgscoucyqgus < 1) {
                $asygkgscoucyqgus = 1;
            }
        }
        return $asygkgscoucyqgus;
    }
    
    public function mikaiusgimoekqye($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $somiuasmmwkuceag = 'fa')
    {
        if (!$saqmwwmqiwmkiwaa) {
            $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
        }
        if (!$somiuasmmwkuceag) {
            $somiuasmmwkuceag = DecoratorI18N::iyouigcsiacgwksc();
        }
        return parent::mikaiusgimoekqye($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
    }
}

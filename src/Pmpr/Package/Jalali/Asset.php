<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb99363ba3             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;

class Asset extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'enqueue'])->qcsmikeggeemccuu('admin_head', [$this, 'qeiswqciwugcqmyu'], 9999)->qcsmikeggeemccuu('enqueue_datepicker_assets', [$this, 'muquyaimcyiwcecu']);
    }
    public function enqueue()
    {
        if (!ManipulateAjax::mcgoysmkqsqooceq()) {
            $eygsasmqycagyayw = $this->miocmcoykayoyyau();
            if ($this->moeogyisgeuwoeea()) {
                $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis('virastar', $eygsasmqycagyayw->get('virastar.js'))->ayuciigykaswwqeo('jquery'));
            }
            $this->muquyaimcyiwcecu();
            $egsumesakcaaukem = $this->kmuweyayaqoeqiyw()->pwugmawueqmkaeim($this->weysguygiseoukqw(Setting::ADMIN_FONT));
            if (is_string($egsumesakcaaukem)) {
                $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye('jalali-font', $egsumesakcaaukem));
            }
        }
    }
    
    public function muquyaimcyiwcecu(string $mcaisukqqyosuasi = self::ADMIN)
    {
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        $oqkcmcewgaqymmoe = $eygsasmqycagyayw->owygwqwawqoiusis('datepicker', $eygsasmqycagyayw->get('datepicker.js'))->ayuciigykaswwqeo('jquery');
        $iesegggmcccqyquo = $eygsasmqycagyayw->awgyqswkqywwmkye('datepicker', $eygsasmqycagyayw->get('datepicker.css'));
        if ($mcaisukqqyosuasi === self::ADMIN) {
            $eygsasmqycagyayw->ayeieigcckcmsikq($oqkcmcewgaqymmoe)->ayeieigcckcmsikq($iesegggmcccqyquo);
        } else {
            $eygsasmqycagyayw->oeoquuwkoywiuesy($oqkcmcewgaqymmoe)->oeoquuwkoywiuesy($iesegggmcccqyquo);
        }
    }
    public function qeiswqciwugcqmyu()
    {
        $iaaeswuecqawokwi = $this->weysguygiseoukqw(Setting::ADMIN_FONT);
        if ($iaaeswuecqawokwi) {
            echo $this->iuygowkemiiwqmiw('font_styles', ['font' => $iaaeswuecqawokwi]);
        }
    }
}

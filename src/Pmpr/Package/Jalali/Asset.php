<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
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
        goto eouwacqiommmeaqc;
        eouwacqiommmeaqc:
        if (ManipulateAjax::mcgoysmkqsqooceq()) {
            goto igmmqwyawcuuckkq;
        }
        goto sqwuqegeiisoiiuq;
        egesuwkqkmaigaoe:
        $this->muquyaimcyiwcecu();
        goto syusgosewwkoagoq;
        sqwuqegeiisoiiuq:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto uscokkmquayiukag;
        icumkkykaoqycqqu:
        wiwoiyoakywqyaiy:
        goto oeamoqweiueaueay;
        ugogoekeckgcmuaw:
        isewysikysqewkis:
        goto egesuwkqkmaigaoe;
        uscokkmquayiukag:
        if (!$this->moeogyisgeuwoeea()) {
            goto isewysikysqewkis;
        }
        goto ykqsuiyyosyeyscc;
        syusgosewwkoagoq:
        $egsumesakcaaukem = $this->kmuweyayaqoeqiyw()->pwugmawueqmkaeim($this->weysguygiseoukqw(Setting::ADMIN_FONT));
        goto mcqucouuiuoagqwc;
        oeamoqweiueaueay:
        igmmqwyawcuuckkq:
        goto owgsameoayaogsma;
        eweaaismksecwagy:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye('jalali-font', $egsumesakcaaukem));
        goto icumkkykaoqycqqu;
        mcqucouuiuoagqwc:
        if (!is_string($egsumesakcaaukem)) {
            goto wiwoiyoakywqyaiy;
        }
        goto eweaaismksecwagy;
        ykqsuiyyosyeyscc:
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis('virastar', $eygsasmqycagyayw->get('virastar.js'))->ayuciigykaswwqeo('jquery'));
        goto ugogoekeckgcmuaw;
        owgsameoayaogsma:
    }
    
    public function muquyaimcyiwcecu(string $mcaisukqqyosuasi = self::ADMIN)
    {
        goto gqimwsyemoewagcy;
        esagiiawomyacuiw:
        $iesegggmcccqyquo = $eygsasmqycagyayw->awgyqswkqywwmkye('datepicker', $eygsasmqycagyayw->get('datepicker.css'));
        goto maaisuqwkymeguys;
        ayceeyuocgowqwsa:
        kyiwsiakwgiwouyi:
        goto iuwkiyimqmgguose;
        gqimwsyemoewagcy:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto aoaqwygkaagiuuws;
        sksgcusuyqcwqswe:
        goto awgmegueeqeyqamu;
        goto ayceeyuocgowqwsa;
        aoaqwygkaagiuuws:
        $oqkcmcewgaqymmoe = $eygsasmqycagyayw->owygwqwawqoiusis('datepicker', $eygsasmqycagyayw->get('datepicker.js'))->ayuciigykaswwqeo('jquery');
        goto esagiiawomyacuiw;
        iuwkiyimqmgguose:
        $eygsasmqycagyayw->ayeieigcckcmsikq($oqkcmcewgaqymmoe)->ayeieigcckcmsikq($iesegggmcccqyquo);
        goto yggseoaommssscwo;
        qkyciyiwkmgkmquk:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($oqkcmcewgaqymmoe)->oeoquuwkoywiuesy($iesegggmcccqyquo);
        goto sksgcusuyqcwqswe;
        maaisuqwkymeguys:
        if ($mcaisukqqyosuasi === self::ADMIN) {
            goto kyiwsiakwgiwouyi;
        }
        goto qkyciyiwkmgkmquk;
        yggseoaommssscwo:
        awgmegueeqeyqamu:
        goto aeiemwacaiygemmg;
        aeiemwacaiygemmg:
    }
    public function qeiswqciwugcqmyu()
    {
        goto oeusomaaeekakake;
        giuccakymqymawgk:
        echo $this->iuygowkemiiwqmiw('font_styles', ['font' => $iaaeswuecqawokwi]);
        goto sicgyiyiocyygkoc;
        sicgyiyiocyygkoc:
        yyqygaokeccgugos:
        goto cyosacayacumuaks;
        oeusomaaeekakake:
        $iaaeswuecqawokwi = $this->weysguygiseoukqw(Setting::ADMIN_FONT);
        goto kwuckkyqaygwgcuy;
        kwuckkyqaygwgcuy:
        if (!$iaaeswuecqawokwi) {
            goto yyqygaokeccgugos;
        }
        goto giuccakymqymawgk;
        cyosacayacumuaks:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b569c18b95             |
    |_______________________________________|
*/

namespace Pmpr\Package\Jalali;

use Pmpr\Common\Foundation\Container\Container as BaseClass;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;

class Container extends BaseClass
{
    
    public function __construct()
    {
        $this->settingObj = Setting::symcgieuakksimmu();
        parent::__construct();
    }
    
    public function moeogyisgeuwoeea() : bool
    {
        return ManipulatePost::uqwgsuysegkweago($this->weysguygiseoukqw(Setting::VIRASTAR_POST_TYPE_TARGETS, []));
    }
}

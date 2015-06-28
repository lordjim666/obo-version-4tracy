<?php

namespace lordjim666\obo;

use Tracy;

class TracyBridge {

    public static function initialize() {
        $blueScreen = Tracy\Debugger::getBlueScreen();

        if (class_exists("\obo\obo")) {
            $version = \obo\obo::_VERSION;
            Tracy\Debugger::getBar()->getPanel('Tracy:info')->data['obo'] = $version;
            $blueScreen->info[] = "obo $version";
        }
    }

}

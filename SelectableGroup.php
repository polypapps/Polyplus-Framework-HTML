<?php

namespace Common\Framework\Html;


/**
 * A group of selectable options.
 * @author rodrigo
 */
interface SelectableGroup {
    
    public function addOption(Option $option, $selected = false);
    
}

?>

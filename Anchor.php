<?php

namespace Common\Framework\Html;

/**
 * Description of Anchor
 * 
 * Creates a bookmark on the page to be acessed by an <a> tag after.
 *
 * @author rodrigo
 */
class Anchor extends VisibleElement{
    
    /**
     * Creantes an anchor
     * @param \Document $document
     * @param string $id
     */
    public function __construct(\Document $document, $id) {
        parent::__construct($document, "a");
        $this->setId($id);
    }
    
}

?>

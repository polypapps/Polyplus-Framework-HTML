<?php

namespace Common\Framework\Html;


/**
 * Description of UnorderedList
 *
 * An unordered list starts with the <ul> tag. Each list item starts with the <li> tag.
 * 
 * The list items are marked with bullets (typically small black circles).
 * 
 * @author rodrigo
 */
class UnorderedList extends VisibleElement{
    
    /**
     * Creates an unordened List
     * @param Document $document
     */
    public function __construct(Document $document) {
        parent::__construct($document, "ul");
    }
    
    /**
     * Adds a list item to this list.
     * @param ListItem $item item to be added
     */
    public function addListItem(ListItem $item) {
        $this->appendChild($item);
    }
    
}

?>

<?php

namespace Common\Framework\Html;


/**
 * Description of ListItem
 *
 * The <li> tag defines a list item.
 * 
 * The <li> tag is used in ordered lists(<ol>), unordered lists (<ul>), and in menu lists (<menu>).
 * 
 * @author rodrigo
 */
class ListItem extends VisibleElement{
    
    /**
     * Creats a new List item
     * @param \Document $document
     * @param string $text an optional text to the list item.
     */
    public function __construct(Document $document, $text = "") {
        parent::__construct($document, "li");
        
        if($text !== "") {
            
            $this->appendChild(new \DOMText($text));
            
        }
    }    
    
}

?>

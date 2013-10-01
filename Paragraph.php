<?php

namespace Common\Framework\Html;


/**
 * Description of Paragraph
 * 
 * The <p> tag defines a paragraph.
 * 
 * Browsers automatically add some space (margin) before and after each <p> element. 
 * The margins can be modified with CSS (with the margin properties).
 *
 * @author rodrigo
 */
class Paragraph extends VisibleElement{
    
    /**
     * Creates an Paragraph
     * @param \Document $document
     * @param String $content An optional content to the paragraph
     */
    public function __construct(Document $document, $content = "") {
        parent::__construct($document, "p");
        
        if($content != "")
            $this->nodeValue = $content;
    }
    
}

?>

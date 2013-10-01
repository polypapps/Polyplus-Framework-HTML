<?php

namespace Common\Framework\Html;


/**
 * Represent a standard table cell '<td>' or a table header '<th>'
 *
 * The <td> tag defines a standard cell in an HTML table.
 * The text in <td> elements are regular and left-aligned by default.
 * The text in <th> elements are bold and centered by default.
 * 
 * @author rodrigo
 */
class TableCell extends VisibleElement{
    
    /**
     * 
     * @param Document $document Document where the table cell will be atached.
     * @param type $content Optional, content to be added to the cell
     * @param type $header If true, this cell will be a '<th>'. the default is false (e.g it will be a '<td>' by default).
     */
    public function __construct(Document $document, $content = "", $header = false) {
        if($header)
            $tagName = "th";
        else
            $tagName = "td";
        
        parent::__construct($document, $tagName);
        
        if($content !== "") {
            
            $this->addContent($content);
            
        }
    }
    
    /**
     * Adds a content to the cell
     * @param DOMNode, string $content The content to be added. If this content is a instance of
     * DOMNode, it will be appended, else, it will be converted into a DOMText to be apppended.
     */
    public function addContent($content) {
        if( $content instanceof \DOMNode)
            $this->appendChild($content);
        else
            $this->appendChild(new \DOMText($content));
    }
    
}

?>

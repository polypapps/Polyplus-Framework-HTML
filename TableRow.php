<?php

namespace Common\Framework\Html;


/**
 * Represent a standard table row '<tr>'
 * 
 * The <tr> tag defines a row in an HTML table.
 * 
 * A <tr> element will contain one or more <th> or <td> elements.
 * 
 * @author rodrigo
 */
class TableRow extends VisibleElement{
        
    /**
     * creates an table row
     * @param Document $document
     */
    public function __construct(Document $document) {
        
        parent::__construct($document, "tr");
    }


    
}

?>

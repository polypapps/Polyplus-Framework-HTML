<?php

namespace Common\Framework\Html;


/**
 * Represents a Table element.
 * 
 * Tables are defined with the <table> tag.
 * 
 * A table is divided into rows (with the <tr> tag), and each row is divided into data cells (with the <td> tag). 
 * td stands for "table data," and holds the content of a data cell. 
 * A <td> tag can contain text, links, images, lists, forms, other tables, etc.
 *
 * @author rodrigo
 */
class Table extends VisibleElement{
    
    /**
     * Header of the table. contains the title of the columns.
     * @var type 
     */
    private $head;
    
    /**
     * 
     * @param Document $document Document where the table will be atached.
     * @param array $head Array containing the string of column's titles.
     */
    public function __construct(Document $document, array $head) {
        parent::__construct($document, "table");
        
        $this->head = $head;
        $head = $this->buildRow($head, true);
        $this->appendChild($head);
    }
    
    /**
     * 
     * @return Int number of columns in the table.
     */
    private function getColumnCount() {
        return count($this->head);
    }

    /**
     * Build a row in the table
     * @param array $row Row to be builded. array containing Strings of each column in the correct order.
     * @throws InvalidRowSizeException if the size of the array is different from the table's column count
     */
    private function buildRow(array $row, $header = false) {
        if (count($row) == $this->getColumnCount()) {
            
            $tr = new TableRow($this->document);
            if($header) {
                $tr->addClass ("tableHeader");
                $tbody = new VisibleElement($this->document, "thead");
            }
            foreach ($row as $cell) {
                if(!($cell instanceof TableCell))
                    $cell = new TableCell($this->document, $cell, $header);
                
                $tr->appendChild($cell);
            }
            
            if($header) {
                $tbody->appendChild($tr);
                return $tbody;
            } else {
                return $tr;
            }
            
        } else {
            throw new InvalidRowSizeException;
        }
    }
    
    /**
     * Adds a row to the table.
     * @param array $row Row to be added. array containing Strings of each column in the correct order.
     */
    public function addRow(array $row, $id = NULL) {
        $tr = $this->buildRow($row);
        
        if($id !== NULL)
            $tr->setId ($id);
        
        $this->appendChild($tr);
    }
    
}

?>

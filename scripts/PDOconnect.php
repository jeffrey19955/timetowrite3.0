<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDOconnect
 *
 * @author Jeffrey
 */
class PDOconnect extends PDO {
    public function __construct() {
        try{
        parent::__construct('mysql:host=82.157.27.52;dbname=timetowrite', 'timetowrite', 'bPrMrYgp' , array(PDO::ATTR_PERSISTENT => true));
        }catch(Exception $e)
        {
            
        }
      }
      
    public function select($table)
    {
     $statement = $this->prepare("SELECT * FROM $table");
    }
    
    public function insert()
    {
        
    }
    
    public function update()
    {
        
    }
    
    public function delete()
    {
        
    }
      
}
?>

<?php 
namespace Phppot\Model;

use Phppot\Datasource;

class FAQ
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
    }
    
    /**
     * to get the interview questions
     *
     * @return array result record
     */
    function getFAQ() 
    {
        $query = "SELECT id, fname, lname, throw1, throw2, throw3, throw4, throw5, throw6, result1, sex, event FROM compdata WHERE event = 'JAVELIN' AND sex = 'W' ORDER BY result1 DESC, result2 DESC, result3 DESC";
        $result = $this->ds->select($query);
        return $result;
    }
    
    /**
     * to edit redorcbased on the question_id
     *
     * @param string $columnName
     * @param string $columnValue
     * @param string $questionId
     */
    function editRecord($columnName, $columnValue, $questionId) 
    {
        $query = "UPDATE compdata set " . $columnName . " = ? WHERE  id = ?";
        
        $paramType = 'si';
        $paramValue = array(
            $columnValue,
            $questionId
        );
        $this->ds->execute($query, $paramType, $paramValue);
    }
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This class represents a student in class and holds their details.
 *
 * @author Lancelei Herradura
 */
class Student {
    
    /**
     * _construct
     * 
     * Constructs a Student object.
     * 
     * Author: Lancelei Herradura
     * Date:   August 8, 2017
     * 
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * add_email
     * 
     * This function adds an email address that the student goes by.
     * The email address is accompanied by for which it is used for.
     * 
     * Author: Lancelei Herradura
     * Date:   August 8, 2017
     * 
     * @param string $which email category
     * @param string $address email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * add_grade
     * 
     * This function adds a grade to the Student's array of grades.
     * 
     * Author: Lancelei Herradura
     * Date:   August 8, 2017
     * 
     * @param integer $grade grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * average
     * 
     * Returns the calculated average of the Student's grades.
     * 
     * Author: Lancelei Herradura
     * Date: August 8, 2017
     * 
     * @return integer calculated average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * toString
     * 
     * Returns a string representation of the Student's details in
     * pretty format.
     * 
     * Author: Lancelei Herradura
     * Date: August 8, 2017
     * 
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    

}

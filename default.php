<?php
      class Programmer {
           // Class Properties
           var $name;         // Programmer's name
           var $experience;   // How long has been programming
           var $lang;         // Favorite Language
           var $education;    // Highest degree earned
           // Class Constructor - function same name as the class
           function Programmer($name, $experience, $lang, $education) {
                $this->name=$name;
                $this->experience=$experience;
                $this->lang=$lang;
                $this->education=$education;
           }
           // Getter/Setter functions for all properties in the class
           function get_name() {
                return $this->name;
           }
           function set_name($newname) {
                $this->name = $newname;
           }
           function get_experience() {
                return $this->experience;
           }
           function set_experience($newexperience) {
                $this->experience = $newexperience;
           }
           function get_lang() {
                return $this->lang;
           }
           function set_lang($newlang) {
                $this->lang = $newlang;
           }
           function get_education() {
                return $this->education;
           }
           function set_education($neweducation) {
                $this->education = $neweducation;
           }
           // Utility data dump function
           function output() {
                echo "Programmer Name: ".$this->name."<br>";
                echo $this->name." has ".$this->experience." years of programming experience.<br>";
                echo $this->lang." is ".$this->name."'s favorite programming language.<br>";
                echo $this->name." holds the degree: ".$this->education."<br><br>";
           }
      }
      // Instantiating a programmer
      $paul = new Programmer('Paul Conrad',12,'C++','Bachelor of Science in Computer Science');
      $paul->output();
      // Oops, Paul has programmed alot longer than 12 year, really is 22 years
      $paul->set_experience(22);
      $paul->output();
 ?>

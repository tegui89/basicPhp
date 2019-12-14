<?php

    class BaseElement {
        private $title;
        private $description;
        private $month;
    
        public function __construct($t, $des, $m) {
            $this->setTitle($t);  
            $this->description = $des; 
            $this->month = $m;
        }
            
        public function setDescription($des) {
            $this->description = $des;
        }

        public function getDescription() {
            return $this->description;
        }

        public function setTitle($t) {
            if($t == '') {
                $this->title = 'S\E';
            } else {
                $this->title = $t;
            }
        }

        public function getTitle() {
            return $this->title;
        }

        public function setMonth($m) {
            $this->month = $m;
        }

        public function getMonth() {
            return $this->month;
        }

        function getDuration() {
            // Revisar salidas
            $years = floor($this->month / 12);
            $diffMonth = $this->month % 12;
            if($years == 0 || $diffMonth == 0){
            return $years == 0 && $diffMonth == 0 ? '' : $years == 0 ? "$diffMonth months" : "$years years";
            } 
            else 
            return $years > 1 ? $diffMonth > 1 ? "$years years and $diffMonth months" : "$years years and $diffMonth month" : $diffMonth > 1 ? "$years year and $diffMonth months" : "$years year  and $diffMonth months";
        }
    }
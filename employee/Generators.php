<?php

class Generators{

    public function generateID(){

         echo date('Y') . '-' . rand(1000,9999);
    }
}
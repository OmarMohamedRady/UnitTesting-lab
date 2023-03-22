<?php
class Factorial{
    public function fact($num)
    {
        if(is_int($num) && $num>=0 ){
            if ($num < 2) {
                return 1;
            }
            else
              return ($num * $this->fact($num - 1));

           
        }else
        return null;  
    }
}


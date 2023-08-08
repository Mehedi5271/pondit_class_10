<?php 

abstract class animal
{
     abstract public function hello(); //abstract funtion er kno body thake na; abrstract class er kno object create kora jay na


   
}

class cat extends animal
{
    public function hello()
    {
        return 'meo';
    }
}

$cat = new cat;
echo $cat ->hello();

?>
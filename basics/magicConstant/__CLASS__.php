// 	If used inside a class, the class name is returned.
// __CLASS__

 <?php 
 
 class Adrian {
    public function className() {
        return __CLASS__;
    }
 }
 
 $name = new Adrian();
 echo $name->className();

 // OUTPUT: Adrian
 // which is the name of the class or object
 ?>
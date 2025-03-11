<?php

// If used inside a namespace, the name of the namespace is returned.	
namespace namespaceName;

function myValue(){
  return __NAMESPACE__;
}

echo myValue();
?>
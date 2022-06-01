<?php
echo "hello" ;

class Book {
    
    $ISBN;
    $Author;
    $Title;
    $Description;
    $BookList;

    function Display_ISBN($ISBN;) {
         return $this->GetBookISBN = $ISBN;

    }
    function Display_Author( $Author;) {
      return $this->GetAuthor = $Author;

    }
    function Display_Title($Title;) {
      return $this->BookTitle += $Title;

    }
    function Display_Description( $Description;) {return $this->GetBookDescription = $Description;
        
    }

   function Display_BookList() {

 }
 
      echo $Book -> GetBookISBN();
        
      echo $Book -> GetBookAuthor();
        
      echo $Book -> GetBookTitle();
        
      echo $Book -> GetBookDescreption();
    
      echo $Book -> GetBookBookList();
    
    
}
?>
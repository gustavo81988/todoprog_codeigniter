<article class="articulo">
    
    
    <?php
        
        $data = array(
            '5'=>'http://www.google.com',
            '17'=>'http://www.facebook.com'
        );
        
        
        echo $this->calendar->generate($this->uri->segment(3),$this->uri->segment(4));
    
    ?>
    
    
</article>
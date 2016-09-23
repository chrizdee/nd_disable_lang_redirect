<?php

class Hooks extends Frontend {

    public function hookGetRootPageFromUrl()
    {
        
        if($this->Environment->request == '')
        {
            $this->import('Database');
            $objRootPage = $this->Database->prepare("SELECT id, dns, language, fallback FROM tl_page WHERE type='root' AND published=1 AND fallback=1")
                                          ->limit(1)
                                          ->execute();
            return $objRootPage;
        }
    }

}
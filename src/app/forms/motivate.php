<?php
namespace app\forms;

use std, gui, framework, app;
use action\Element; 
use php\io\Stream; 


class motivate extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        Element::loadContentAsync($this->textArea, 'https://raw.githubusercontent.com/aleksejtalanov13/alekseiymotivator/main/motivators.txt', function () use ($e, $event) {
            $this->toast('Загрузка завершена.');
        });
    }

}

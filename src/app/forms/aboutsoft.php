<?php
namespace app\forms;

use std, gui, framework, app;


class aboutsoft extends AbstractForm
{

    /**
     * @event link.action 
     */
    function doLinkAction(UXEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://discord.gg/Pq5sp68FAQ');
    }

    /**
     * @event linkAlt.action 
     */
    function doLinkAltAction(UXEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://www.youtube.com/channel/UCE9SHLtV9h6SEcUkrfbpVFA');
    }

    /**
     * @event link3.action 
     */
    function doLink3Action(UXEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://t.me/talanov14');
    }

    /**
     * @event link4.action 
     */
    function doLink4Action(UXEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://github.com/aleksejtalanov13');
    }

}

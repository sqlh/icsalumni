<?php

    // drupal_add_library is invoked automatically when a form element has the
    // '#ajax' property, but since we are not rendering a form here, we have to
    // do it ourselves.
    drupal_add_library('system', 'drupal.ajax');


        // The use-ajax class is special, so that the link will call without causing
        // a page reload. Note the /nojs portion of the path - if javascript is
        // enabled, this part will be stripped from the path before it is called.
        $link1 = l(t('Graph'), 'ajax_link_callback/graph/nojs/', array('attributes' => array('class' => array('use-ajax'))));
        $link2 = l(t('List'), 'ajax_link_callback/list/nojs/', array('attributes' => array('class' => array('use-ajax'))));
        $link3 = l(t('Create Alert'), 'ajax_link_callback/alert/nojs/', array('attributes' => array('class' => array('use-ajax'))));

        $output = "<span>$link1</span><span>$link2</span><span>$link3</span><div id='myDiv'></div>";
        print $output;

?>


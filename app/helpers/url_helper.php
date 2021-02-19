<?php

function redirect($page)
{
    header('Location: http://' . URL_PATH . $page);
}
<?php
if($request->getMethod() == "GET")
    $response->status(500)->send("This is a test a get response");
else
    $response->status(404)->send("This is a test post response");
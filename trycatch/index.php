<?php 

try {
    throw new Exception("Error", 400);
} catch(Exception $err) {
    echo json_encode(array(
        "message"=>$err->getMessage(),
        "line"=>$err->getLine(),
        "file"=>$err->getFile(),
        "code"=>$err->getCode()
    ));
}

?>
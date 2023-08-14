<?php 

function args_function() {
    return func_get_args();
}

var_dump(args_function("Wends", "Batata", "Cenoura", 10));

?>
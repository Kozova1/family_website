<?php
if ($_POST && $_POST['payload']){
    $payload = json_decode($_POST['payload'], true);
    if (isset($payload['ref']) && $payload['ref'] == 'refs/heads/master'){
        exec("/usr/bin/git pull origin master >> ./webhook.log 2>&1 && echo $(date) >> ./webhook.log");
    }
}
?>

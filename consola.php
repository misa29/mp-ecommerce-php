<?php       
       //echo "THis is a test file on a test repo for testing the deploy functionality using github webhooks!!!!";
       echo exec('php -r "copy("https://getcomposer.org/installer", "composer-setup.php");"');
       echo exec("php -r 'if (hash_file('sha384', 'composer-setup.php') === 'c31c1e292ad7be5f49291169c0ac8f683499edddcfd4e42232982d0fd193004208a58ff6f353fde0012d35fdd72bc394') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;'");
       echo exec('php composer-setup.php');
       echo exec("php -r 'unlink('composer-setup.php');'");
?>

<?php
echo "\n========= START PAYLOAD ===========\n";
passthru('composer about 2>&1');
passthru('git version 2>&1');
passthru('git remote add mergeupstream git@github.com:timlouie/timd10test.git 2>&1');
passthru('git merge mergeupstream 2>&1');
echo "\n========= END PAYLOAD ===========\n";

//ttimtestmergeupstream
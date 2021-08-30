<?php

// Print current date
echo date ('y-m-d h:i:s'). '<br>';

// Print yesterday

echo date ('y-m-d h:i:s', time()- 60*60*24). '<br>';

// Different format: https://www.php.net/manual/en/function.date.php

// Print current timestamp

echo time(). '<br>';
// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

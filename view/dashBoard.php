<?php

$email = $_SESSION['email'];
$quiz = $_SESSION['quiz'];

$date = date('d-m-y');

echo <<<EOF

<link href="../css/dashBoardStyle.css" rel="stylesheet">


<body>
    <h2 id="dashboardHeading"> Welkom  <u> $email! </u> </h2>
    <h5 id="date"> Het is vandaag: <i> $date </i> </h5>
    
    <div class="container">


    </div>

</body>
</html>
EOF;

?>
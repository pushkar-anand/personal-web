<?php
session_start();
session_regenerate_id();
$allKeys = array("sofdule", "mkss", "wishthem", "mo", "mka", "20", "sb");

if (isset($_GET['list'])) {
    $protocol = $_SERVER['SERVER_PROTOCOL'];
    $domain = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $parameters = $_SERVER['QUERY_STRING'];
//next we do a bit of string manipulation to convert output like HTTP/1.1 to http
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';

//now the final part to concatenate all this together to form the URL
    $FinalUrl = $protocol . '://' . $domain . $script . '?' . $parameters;

    $list = $_GET['list'];
    if (!in_array($list, $allKeys)) {
        header('HTTP/1.1 400 Bad Request', true, 400);
        exit;
    }
    $projectExists = false;
    $jsonFile = "project.json";
    $projectData = file_get_contents($jsonFile);
    $jsonArr = json_decode($projectData, true);
    $linkExists = false;

    foreach ($jsonArr["Projects"] as $key => $value) {
        if ($value["key"] == $_GET['list']) {
            $projectExists = true;
            $projectName = $value["name"];
            $projectInfo = $value["info"];
            $projectImage = $value["image"];
            if (array_key_exists("link", $value)) {
                $linkExists = true;
                $projectLink = $value["link"];
            }
            break;
        }
    }

    if ($projectExists == true) {
        ?>
        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <title><?php echo $projectName . ': By Pushkar'; ?></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="theme-color" content="#1881f2">
            <meta name="description" content="<?php echo $projectInfo; ?>">
            <meta name="image" content="<?php echo $projectImage; ?>">
            <!-- Twitter -->
            <meta name="twitter:card" content="summary">
            <meta name="twitter:title" content="<?php echo $projectName; ?>">
            <meta name="twitter:description" content="<?php echo $projectInfo; ?> ">
            <meta name="twitter:site" content="Pushkar_Anand_0">
            <meta name="twitter:creator" content="Pushkar_Anand_0">
            <meta name="twitter:image:src" content="<?php echo $projectImage; ?>">
            <!-- Open Graph general (Facebook, Pinterest & Google+) -->
            <meta property="og:title" content="<?php echo $projectName; ?>">
            <meta property="og:description" content="<?php echo $projectInfo; ?>">
            <meta property="og:image" content="<?php echo $projectImage; ?>">
            <meta property="og:url" content="<?php echo $FinalUrl; ?>">
            <meta property="og:site_name" content="<?php echo $projectName; ?>">
            <meta property="og:locale" content="en_US">
            <meta property="fb:admins" content="100002803841254">
            <meta property="og:type" content="website">

            <link rel="shortcut icon" href="media/favicon.ico">
            <link rel="icon" sizes="16x16 32x32 64x64" href="media/favicon.ico">
            <link rel="icon" type="image/png" sizes="196x196" href="media/favicon-192.png">
            <link rel="icon" type="image/png" sizes="160x160" href="media/favicon-160.png">
            <link rel="icon" type="image/png" sizes="96x96" href="media/favicon-96.png">
            <link rel="icon" type="image/png" sizes="64x64" href="media/favicon-64.png">
            <link rel="icon" type="image/png" sizes="32x32" href="media/favicon-32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="media/favicon-16.png">
            <link rel="apple-touch-icon" href="media/favicon-57.png">
            <link rel="apple-touch-icon" sizes="114x114" href="media/favicon-114.png">
            <link rel="apple-touch-icon" sizes="72x72" href="media/favicon-72.png">
            <link rel="apple-touch-icon" sizes="144x144" href="media/favicon-144.png">
            <link rel="apple-touch-icon" sizes="60x60" href="media/favicon-60.png">
            <link rel="apple-touch-icon" sizes="120x120" href="media/favicon-120.png">
            <link rel="apple-touch-icon" sizes="76x76" href="media/favicon-76.png">
            <link rel="apple-touch-icon" sizes="152x152" href="media/favicon-152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="media/favicon-180.png">
            <meta name="msapplication-TileColor" content="#FFFFFF">
            <meta name="msapplication-TileImage" content="media/favicon-144.png">
            <meta name="msapplication-config" content="media/browserconfig.xml">
            <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
        <h1> <?php echo $projectName; ?> </h1>
        <img src="<?php echo $projectImage; ?>" style="max-width: 250px;"/>
        <h3><?php echo $projectInfo ?></h3>
        <?php
        if ($linkExists) {
            ?>
            <a href="<?php echo $projectLink ?>">See project</a>
            <?php
        }
        ?>
        </body>
        </html>


        <?php
    }

} else {
    ?>
    <!DOCTYPE HTML>
    <html>
    <?php
    $jsonFile = "project.json";
    $projectData = file_get_contents($jsonFile);
    $jsonArr = json_decode($projectData, true);


    foreach ($jsonArr["Projects"] as $key => $value) {
        echo "Name: " . $value["name"] . "<br/>";
        echo "Info: " . $value["info"] . "<br/>";
        if (array_key_exists("link", $value)) {
            echo "Link: " . $value["link"] . "<br/>";
        }
        echo "<br/><br/><br/><br/>";;
    }
    ?>
    </html>
    <?php
}
?>

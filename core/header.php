<?php
$css_type=0; //0=normal;1=who
if ($slug=="who") $css_type=1;   
function getImageSrc($dom) {
    $xpath = new DOMXPath($dom);
    $elements = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' tgme_page_photo ')]//img");
    if ($elements->length > 0) {
        return $elements->item(0)->getAttribute('src');
    }
    return 'nancy.jpg';  // Return a default value if no element was found
}

function getTitleText($dom) {
    $xpath = new DOMXPath($dom);
    $elements = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' tgme_page_title ')]");
    if ($elements->length > 0) {
        return $elements->item(0)->nodeValue;
    }
    return '';  // Return an empty string if no element was found
}

function getElementsByClassNames($dom, $classNames) {
    $xpath = new DOMXPath($dom);
    $result = array();

    foreach ($classNames as $className) {
        $result[$className] = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' {$className} ')]");
    }

    return $result;
}

$dom = new DOMDocument;
@$dom->loadHTMLFile('https://nancy.t.me');  // from a file

$classNames = array('tgme_page_description', 'class2', 'class3');
$elements = getElementsByClassNames($dom, $classNames);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo getTitleText($dom); ?> - Connect</title>
<link rel="icon" href="<?php echo getImageSrc($dom); ?>" type="image/x-icon">
<style>
<?php if ($css_type ==1) { ?>
    body {
        font-family: 'Trebuchet MS', sans-serif;
        padding: 0; /* Reset padding */
        margin: 0; /* Reset margin */
        background-color: #f4f4f4;
        color: #000;
    }

    nav {
        background-color: #008CBA;
        padding: 1em;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        margin: 0; /* Reset margin */
    }

    nav ul {
        list-style-type: none;
        margin: 0; /* Reset margin */
        padding: 0; /* Reset padding */
        overflow: hidden;
    }

    nav li {
        float: left;
        margin-right: 1em;
        padding: 0; /* Reset padding */
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 0.5em 1em;
        text-align: center;
    }

    .container {
        padding: 2em;
        margin-top: 5em; /* Adjusted margin to account for navbar */
    }

    .profile-info {
        background-color: #fff;
        padding: 2em;
        border-radius: 8px;
        text-align: center;
        margin: auto;
        max-width: 500px; /* Limit the width */
    }

    .profile-image {
        border-radius: 50%;
        margin-bottom: 1em;
    }

    .link-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008CBA;
        color: #fff !important;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        text-decoration: none !important;/* Override underline for this specific link */
    }

    a {
        color: black;
        text-decoration: underline;
    }

    /* Dark Mode Styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #121212;
            color: #fff;
        }

        .profile-info {
            background-color: #1f1f1f;
        }

        a, .link-button {
            color: lightgrey;
            text-decoration: underline;
        }
    }
    <?php }elseif($css_type==0){//normal?>
    
        body {
        font-family: 'Trebuchet MS', sans-serif;
        padding: 0; /* Reset padding */
        margin: 0; /* Reset margin */
        background-color: #f4f4f4;
        color: #000;
    }

    nav {
        background-color: #008CBA;
        padding: 1em;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        margin: 0; /* Reset margin */
    }

    nav ul {
        list-style-type: none;
        margin: 0; /* Reset margin */
        padding: 0; /* Reset padding */
        overflow: hidden;
    }

    nav li {
        float: left;
        margin-right: 1em;
        padding: 0; /* Reset padding */
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 0.5em 1em;
        text-align: center;
    }

    .container {
    padding: 2em;
    margin-top: 5em; /* Adjusted margin to account for navbar */
    width: 100%;
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
}


  .profile-info {
    background-color: #fff;
    padding: 2em;
    border-radius: 8px;
    text-align: center;
    margin: auto;
    width: 100%; /* Set to 100% to fill the container */
    box-sizing: border-box; /* Include padding and border in the element's total width and height */
}


    .profile-image {
        border-radius: 50%;
        margin-bottom: 1em;
    }

    .link-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008CBA;
        color: #fff !important;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        text-decoration: none !important;/* Override underline for this specific link */
    }

    a {
        color: black;
        text-decoration: underline;
    }

    /* Dark Mode Styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #121212;
            color: #fff;
        }

        .profile-info {
            background-color: #1f1f1f;
        }

        a, .link-button {
            color: lightgrey;
            text-decoration: underline;
        }
    }
    <?php } ?>
</style>
</head>
<body>

<nav>
    <ul>
        <li><a href="https://nancy.ee">Home</a></li>
        <li><a href="https://nancy.ee/brand">Brand</a></li>
        <li><a href="https://nancy.ee/who">Who is Nancy?</a></li>
    </ul>
</nav>

<div class="container">
    <div class="profile-info">


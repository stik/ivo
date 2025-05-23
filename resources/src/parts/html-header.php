<?php
/** FUNCTIONS */
function load_part($template, $args = []) {
    $templatePath = './' . $template . ".php";
    if (file_exists($templatePath)) {
        extract($args);
        include $templatePath;
    }else {
        echo "Template {$templatePath} not found.";
    }
}
?>
<?php header("Content-Type: text/html; charset=Windows-1250"); ?>

<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- SWIPER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- BASE CSS -->
  <link href="./output.css" rel="stylesheet">
  <!-- Splide -->
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

</head>
<body class="overflow-x-clip mx-auto" x-data="detectDevice()">
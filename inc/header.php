<?php
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000, must-revalidate");

    $local ='http://localhost/benhxahoi.andongclinic.vn'
    // $local ='https://benhxahoi.andongclinic.vn'
?>
<!DOCTYPE html>
<html ⚡ lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description"
        content="Phòng khám đa khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám đa khoa</title>

    <script defer src="<?php $local ?>/js/cdn_image.min.js"></script>
    <script defer src="https://cdn.ampproject.org/v0.js"></script>
    <script custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js" defer></script>
    <style amp-boilerplate>
    body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        opacity: 0;
    }

    @keyframes -amp-start {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style><noscript>
        <style amp-boilerplate>
        body {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none;
            margin: 0 auto;
            width: 100%;
            height: auto;
            font-size: 1rem;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden !important;
            max-width: var(--max-width);
        }
        </style>
    </noscript>

    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" href="css/index.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>

    <noscript>
        <link rel="stylesheet" href="css/index.css">

    </noscript>
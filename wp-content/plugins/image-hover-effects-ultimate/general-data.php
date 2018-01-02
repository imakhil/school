<?php

function iheu_ultimate_oxi_shortcode_general1($styleid, $styledata, $listdata, $userdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table; 
                    z-index: 1;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
                    <?php
                    if ($styledata[41] == 'yes') {
                        echo ' border-bottom: 1px solid currentColor;';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
                    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-backface-visibility: visible;
                    backface-visibility: visible;
                }
            </style>
            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if (!empty($value['title'])) {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if (!empty($value['files'])) {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if (!empty($value['buttom_text'])) {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if (empty($value['link'])) {
                    $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
                }
                if (!empty($value['link']) && empty($value['buttom_text'])) {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
                }
                if (!empty($value['link']) && !empty($value['buttom_text'])) {
                    $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }

                echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '"  '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
    <?php
}

function iheu_ultimate_oxi_shortcode_general2($styleid, $styledata, $listdata, $userdata) {

    wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
    wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
    ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transition: all 0.8s ease-in-out;
                    -moz-transition: all 0.8s ease-in-out;
                    transition: all 0.8s ease-in-out;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
                    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
                    <?php
                    if ($styledata[41] == 'yes') {
                        echo ' border-bottom: 1px solid currentColor;';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
                    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
                <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,                
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

            </style>

            <?php
            foreach ($listdata as $value) {
                $backgoundimage = '';
                $opennewtab = '';
                $iheuh3 = '';
                $iheup = '';
                $iheubuttontext = '';
                $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
                if (!empty($value['hoverimage'])) {
                    $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                }
                if ($styledata[17] == '_blank') {
                    $opennewtab = 'target="_blank"';
                }
                if (!empty($value['title'])) {
                    $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                }
                if (!empty($value['files'])) {
                    $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                }
                if (!empty($value['buttom_text'])) {
                    $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                }

                if (empty($value['link'])) {
                    $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info" ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
                }
                if (!empty($value['link']) && empty($value['buttom_text'])) {
                    $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
                }
                if (!empty($value['link']) && !empty($value['buttom_text'])) {
                    $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info" ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
                }
                $adminheading = '';
                $admindata = '';
                if ($userdata == 'admin') {
                    $adminheading = 'iheu-editing';
                    $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                }
                echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
            }
            ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general3($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">

            <style>

                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    z-index: 11;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>


                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: scale(1) translateX(0);
                    -moz-transform: scale(1) translateX(0);
                    -ms-transform: scale(1) translateX(0);
                    -o-transform: scale(1) translateX(0);
                    transform: scale(1) translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateX(100%);
                    -moz-transform: scale(0.5) translateX(100%);
                    -ms-transform: scale(0.5) translateX(100%);
                    -o-transform: scale(0.5) translateX(100%);
                    transform: scale(0.5) translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: scale(1) translateX(0);
                    -moz-transform: scale(1) translateX(0);
                    -ms-transform: scale(1) translateX(0);
                    -o-transform: scale(1) translateX(0);
                    transform: scale(1) translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateX(-100%);
                    -moz-transform: scale(0.5) translateX(-100%);
                    -ms-transform: scale(0.5) translateX(-100%);
                    -o-transform: scale(0.5) translateX(-100%);
                    transform: scale(0.5) translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: scale(1) translateY(0);
                    -moz-transform: scale(1) translateY(0);
                    -ms-transform: scale(1) translateY(0);
                    -o-transform: scale(1) translateY(0);
                    transform: scale(1) translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateY(100%);
                    -moz-transform: scale(0.5) translateY(100%);
                    -ms-transform: scale(0.5) translateY(100%);
                    -o-transform: scale(0.5) translateY(100%);
                    transform: scale(0.5) translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: scale(1) translateY(0);
                    -moz-transform: scale(1) translateY(0);
                    -ms-transform: scale(1) translateY(0);
                    -o-transform: scale(1) translateY(0);
                    transform: scale(1) translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: scale(0.5) translateY(-100%);
                    -moz-transform: scale(0.5) translateY(-100%);
                    -ms-transform: scale(0.5) translateY(-100%);
                    -o-transform: scale(0.5) translateY(-100%);
                    transform: scale(0.5) translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                    pointer-events: auto;
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general4($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;

                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transition: all 0.4s ease-in-out;
                    -moz-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease;
                    -moz-transition: all 0.35s ease;
                    transition: all 0.35s ease;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>


                .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info{
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info{
                    pointer-events:auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img{
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img{
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img{
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top a:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general5($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2{
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-transform-style: preserve-3d;
                    -moz-transform-style: preserve-3d;
                    -ms-transform-style: preserve-3d;
                    -o-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    position: absolute;
                    width:100%;
                    height:100%;
                    top: 0;
                    left: 0;                    
                    z-index:1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotate3d(0, 1, 0, 180deg);
                    -moz-transform: rotate3d(0, 1, 0, 180deg);
                    -ms-transform: rotate3d(0, 1, 0, 180deg);
                    -o-transform: rotate3d(0, 1, 0, 180deg);
                    transform: rotate3d(0, 1, 0, 180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotate3d(0, 1, 0, -180deg);
                    -moz-transform: rotate3d(0, 1, 0, -180deg);
                    -ms-transform: rotate3d(0, 1, 0, -180deg);
                    -o-transform: rotate3d(0, 1, 0, -180deg);
                    transform: rotate3d(0, 1, 0, -180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotateX(-180deg);
                    -moz-transform: rotateX(-180deg);
                    -ms-transform:  rotateX(-180deg);
                    -o-transform:  rotateX(-180deg);
                    transform:  rotateX(-180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    visibility: hidden;
                    -webkit-transform: rotateX(180deg);
                    -moz-transform: rotateX(180deg);
                    -ms-transform:  rotateX(180deg);
                    -o-transform:  rotateX(180deg);
                    transform:  rotateX(180deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    float:left;
                    width:100%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
                    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info-2{
                    -webkit-transform: rotate3d(0, 1, 0, 180deg);
                    -moz-transform: rotate3d(0, 1, 0, 180deg);
                    -ms-transform: rotate3d(0, 1, 0, 180deg);
                    -o-transform: rotate3d(0, 1, 0, 180deg);
                    transform: rotate3d(0, 1, 0, 180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info-2{
                    -webkit-transform: rotate3d(0, 1, 0, -180deg);
                    -moz-transform: rotate3d(0, 1, 0, -180deg);
                    -ms-transform: rotate3d(0, 1, 0, -180deg);
                    -o-transform: rotate3d(0, 1, 0, -180deg);
                    transform: rotate3d(0, 1, 0, -180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0deg);
                    -moz-transform: rotateX(0deg);
                    -ms-transform: rotateX(0deg);
                    -o-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0deg);
                    -moz-transform: rotateX(0deg);
                    -ms-transform: rotateX(0deg);
                    -o-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info {
                    visibility: visible;
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                        <div class="iheu-info-2">
                                                                 <div class="iheu-info"  ' . $backgoundimage . '>
                                                                    <div class="iheu-data">
                                                                        ' . $iheuh3 . '
                                                                        ' . $iheup . '
                                                                    </div>
                                                                </div>
                                                        </div>     
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                     <div class="iheu-info-2">
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                   <div class="iheu-data">
                                                                       ' . $iheuh3 . '
                                                                       ' . $iheup . '
                                                                       ' . $iheubuttontext . '
                                                                   </div>
                                                            </div>
                                                      </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general6($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    pointer-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
                    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up .iheu-info {
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);

                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5);
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_up.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down .iheu-info {
                    -webkit-transform: scale(1.5);
                    -moz-transform: scale(1.5);
                    -ms-transform: scale(1.5);
                    -o-transform: scale(1.5);
                    transform: scale(1.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);                                        
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up .iheu-info {
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out 0.2s;
                    -moz-transition: all 0.35s ease-in-out 0.2s;
                    transition: all 0.35s ease-in-out 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);                                        
                    ponter-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.scale_down_up.iheu-touch .iheu-info{
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general7($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container image-ultimate-container-<?php echo $styleid; ?>"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-out;
                    -moz-transition: all 0.35s ease-out;
                    transition: all 0.35s ease-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transition: all 0.35s ease 0.2s;
                    -moz-transition: all 0.35s ease 0.2s;
                    transition: all 0.35s ease 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
                    <?php
                    if ($styledata[41] == 'yes') {
                        echo ' border-bottom: 1px solid currentColor;';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
                    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general8($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                    overflow:hodden;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img-2 {
                    width: 100%;
                    float: left;
                    height: 100%;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.3s ease-in-out;
                    -moz-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img-2 .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transition: all 0.3s ease-in-out 0.3s;
                    -moz-transition: all 0.3s ease-in-out 0.3s;
                    transition: all 0.3s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transition: all 0.3s ease-in-out 0.3s;
                    -moz-transition: all 0.3s ease-in-out 0.3s;
                    transition: all 0.3s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info-2 .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out 0.6s;
                    -moz-transition: all 0.35s ease-in-out 0.6s;
                    transition: all 0.35s ease-in-out 0.6s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img-2{
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img-2 .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info-2{
                    opacity: 1;
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info-2 .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info-2 .iheu-info{
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img-2 .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info-2 {
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info-2{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img-2 .iheu-img {
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info-2 {
                    -webkit-transform: translateX(-100%);
                    -moz-transform: translateX(-100%);
                    -ms-transform: translateX(-100%);
                    -o-transform: translateX(-100%);
                    transform: translateX(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateX(100%);
                    -moz-transform: translateX(100%);
                    -ms-transform: translateX(100%);
                    -o-transform: translateX(100%);
                    transform: translateX(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info-2{
                    -webkit-transform: translateX(0);
                    -moz-transform: translateX(0);
                    -ms-transform: translateX(0);
                    -o-transform: translateX(0);
                    transform: translateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info-2 {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img-2 .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info-2{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info-2 {
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img-2 .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img-2 .iheu-img {
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info-2,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info-2{
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img-2">
                                                         <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                     </div>
                                                     <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img-2">
                                                            <div class="iheu-img">
                                                                <img src="' . $value['image'] . '">
                                                            </div>
                                                        </div>
                                                        <div class="iheu-info-2">
                                                             <div class="iheu-info"  ' . $backgoundimage . '>
                                                                <div class="iheu-data">
                                                                    ' . $iheuh3 . '
                                                                    ' . $iheup . '
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img-2">
                                                         <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                         </div>
                                                     </div>
                                                     <div class="iheu-info-2">
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                               <div class="iheu-data">
                                                                   ' . $iheuh3 . '
                                                                   ' . $iheup . '
                                                                   ' . $iheubuttontext . '
                                                               </div>
                                                        </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general9($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-out;
                    -moz-transition: all 0.35s ease-out;
                    transition: all 0.35s ease-out;
                    pointer-events:none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease 0.2s;
                    -moz-transition: all 0.35s ease 0.2s;
                    transition: all 0.35s ease 0.2s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    pointer-events: auto;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }
        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general10($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">

            <style>

                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    z-index: 11;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    -ms-transform: scale(0);
                    -o-transform: scale(0);
                    transform: scale(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data h3,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data p,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-data .iheu-button{
                    -webkit-transition: all 0.25s ease 0.25s;
                    -o-transition: all 0.25s ease 0.25s;
                    -moz-transition: all 0.25s ease 0.25s;
                    transition: all 0.25s ease 0.25s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    -ms-transform: scale(1);
                    -o-transform: scale(1);
                    transform: scale(1);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(50px) scale(0.5);
                    -moz-transform: translateY(50px) scale(0.5);
                    -ms-transform: translateY(50px) scale(0.5);
                    -o-transform: translateY(50px) scale(0.5);
                    transform: translateY(50px) scale(0.5);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-50px) scale(0.5);
                    -moz-transform: translateY(-50px) scale(0.5);
                    -ms-transform: translateY(-50px) scale(0.5);
                    -o-transform: translateY(-50px) scale(0.5);
                    transform: translateY(-50px) scale(0.5);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general11($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transform-origin: 50% 50%;
                    -moz-transform-origin: 50% 50%;
                    -ms-transform-origin: 50% 50%;
                    -o-transform-origin: 50% 50%;
                    transform-origin: 50% 50%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transition: all 0.35s ease 0.35s;
                    -moz-transition: all 0.35s ease 0.35s;
                    transition: all 0.35s ease 0.35s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
                    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                    -moz-transform: translateZ(-1000px) rotateY(-90deg);
                    -ms-transform: translateZ(-1000px) rotateY(-90deg);
                    -o-transform: translateZ(-1000px) rotateY(-90deg);
                    transform: translateZ(-1000px) rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateY(90deg);
                    -moz-transform: translateZ(-1000px) rotateY(90deg);
                    -ms-transform: translateZ(-1000px) rotateY(90deg);
                    -o-transform: translateZ(-1000px) rotateY(90deg);
                    transform: translateZ(-1000px) rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateY(90deg);
                    -moz-transform: translateZ(-1000px) rotateY(90deg);
                    -ms-transform: translateZ(-1000px) rotateY(90deg);
                    -o-transform: translateZ(-1000px) rotateY(90deg);
                    transform: translateZ(-1000px) rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                    -moz-transform: translateZ(-1000px) rotateY(-90deg);
                    -ms-transform: translateZ(-1000px) rotateY(-90deg);
                    -o-transform: translateZ(-1000px) rotateY(-90deg);
                    transform: translateZ(-1000px) rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateY(0);
                    -moz-transform: translateZ(0) rotateY(0);
                    -ms-transform: translateZ(0) rotateY(0);
                    -o-transform: translateZ(0) rotateY(0);
                    transform: translateZ(0) rotateY(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateX(90deg);
                    -moz-transform: translateZ(-1000px) rotateX(90deg);
                    -ms-transform: translateZ(-1000px) rotateX(90deg);
                    -o-transform: translateZ(-1000px) rotateX(90deg);
                    transform: translateZ(-1000px) rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                    -moz-transform: translateZ(-1000px) rotateX(-90deg);
                    -ms-transform: translateZ(-1000px) rotateX(-90deg);
                    -o-transform: translateZ(-1000px) rotateX(-90deg);
                    transform: translateZ(-1000px) rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                    -moz-transform: translateZ(-1000px) rotateX(-90deg);
                    -ms-transform: translateZ(-1000px) rotateX(-90deg);
                    -o-transform: translateZ(-1000px) rotateX(-90deg);
                    transform: translateZ(-1000px) rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateZ(-1000px) rotateX(90deg);
                    -moz-transform: translateZ(-1000px) rotateX(90deg);
                    -ms-transform: translateZ(-1000px) rotateX(90deg);
                    -o-transform: translateZ(-1000px) rotateX(90deg);
                    transform: translateZ(-1000px) rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateZ(0) rotateX(0);
                    -moz-transform: translateZ(0) rotateX(0);
                    -ms-transform: translateZ(0) rotateX(0);
                    -o-transform: translateZ(0) rotateX(0);
                    transform: translateZ(0) rotateX(0);
                }
            </style>
    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }
        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general12($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }

                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    -webkit-transform: scale(0.5);
                    -moz-transform: scale(0.5);
                    -ms-transform: scale(0.5);
                    -o-transform: scale(0.5);
                    transform: scale(0.5);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float:left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
                    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    pointer-events: none;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    visibility: visible;
                    pointer-events: auto;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: translateX(100%) rotate(180deg);
                    -moz-transform: translateX(100%) rotate(180deg);
                    -ms-transform: translateX(100%) rotate(180deg);
                    -o-transform: translateX(100%) rotate(180deg);
                    transform: translateX(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: translateX(-100%) rotate(-180deg);
                    -moz-transform: translateX(-100%) rotate(-180deg);
                    -ms-transform: translateX(-100%) rotate(-180deg);
                    -o-transform: translateX(-100%) rotate(-180deg);
                    transform: translateX(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: translateX(0) rotate(0);
                    -moz-transform: translateX(0) rotate(0);
                    -ms-transform: translateX(0) rotate(0);
                    -o-transform: translateX(0) rotate(0);
                    transform: translateX(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: translateY(-100%) rotate(-180deg);
                    -moz-transform: translateY(-100%) rotate(-180deg);
                    -ms-transform: translateY(-100%) rotate(-180deg);
                    -o-transform: translateY(-100%) rotate(-180deg);
                    transform: translateY(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: translateY(-100%) rotate(-180deg);
                    -moz-transform: translateY(-100%) rotate(-180deg);
                    -ms-transform: translateY(-100%) rotate(-180deg);
                    -o-transform: translateY(-100%) rotate(-180deg);
                    transform: translateY(-100%) rotate(-180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: translateY(100%) rotate(180deg);
                    -moz-transform: translateY(100%) rotate(180deg);
                    -ms-transform: translateY(100%) rotate(180deg);
                    -o-transform: translateY(100%) rotate(180deg);
                    transform: translateY(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: translateY(100%) rotate(180deg);
                    -moz-transform: translateY(100%) rotate(180deg);
                    -ms-transform: translateY(100%) rotate(180deg);
                    -o-transform: translateY(100%) rotate(180deg);
                    transform: translateY(100%) rotate(180deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: translateY(0) rotate(0);
                    -moz-transform: translateY(0) rotate(0);
                    -ms-transform: translateY(0) rotate(0);
                    -o-transform: translateY(0) rotate(0);
                    transform: translateY(0) rotate(0);
                    -webkit-transition-delay: 0.4s;
                    -moz-transition-delay: 0.4s;
                    transition-delay: 0.4s;
                }


            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general13($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                    overflow: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;

                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    z-index:1;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width:100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
                    <?php
                    if ($styledata[77] == 'float: left ;') {
                        echo 'margin-left : ' . $styledata[79] . 'px';
                    }
                    if ($styledata[77] == 'float: right;') {
                        echo 'margin-right : ' . $styledata[81] . 'px';
                    }
                    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                }

            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general14($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">
            <style>
                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-perspective: 900px;
                    -moz-perspective: 900px;
                    perspective: 900px;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }
                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    visibility: visible;
                    opacity: 1;
                    -webkit-transition: all 0.4s ease-out;
                    -moz-transition: all 0.4s ease-out;
                    transition: all 0.4s ease-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transition: all 0.35s ease-in-out 0.3s;
                    -moz-transition: all 0.35s ease-in-out 0.3s;
                    transition: all 0.35s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>

                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    visibility: hidden;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    visibility: visible;
                    opacity: 1;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-img {
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                    -webkit-transform-origin: 100% 50%;
                    -moz-transform-origin: 100% 50%;
                    -ms-transform-origin: 100% 50%;
                    -o-transform-origin: 100% 50%;
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right .iheu-info {
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    -ms-transform: rotateY(90deg);
                    -o-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                    -webkit-transform-origin: 0% 50%;
                    -moz-transform-origin: 0% 50%;
                    -ms-transform-origin: 0% 50%;
                    -o-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-img{
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    -ms-transform: rotateY(-90deg);
                    -o-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.left_to_right.iheu-touch .iheu-info{
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-img {
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                    -webkit-transform-origin: 0% 50%;
                    -moz-transform-origin: 0% 50%;
                    -ms-transform-origin: 0% 50%;
                    -o-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left .iheu-info {
                    -webkit-transform: rotateY(-90deg);
                    -moz-transform: rotateY(-90deg);
                    -ms-transform: rotateY(-90deg);
                    -o-transform: rotateY(-90deg);
                    transform: rotateY(-90deg);
                    -webkit-transform-origin: 100% 50%;
                    -moz-transform-origin: 100% 50%;
                    -ms-transform-origin: 100% 50%;
                    -o-transform-origin: 100% 50%;
                    transform-origin: 100% 50%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-img{
                    -webkit-transform: rotateY(90deg);
                    -moz-transform: rotateY(90deg);
                    -ms-transform: rotateY(90deg);
                    -o-transform: rotateY(90deg);
                    transform: rotateY(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.right_to_left.iheu-touch .iheu-info{
                    -webkit-transform: rotateY(0);
                    -moz-transform: rotateY(0);
                    -ms-transform: rotateY(0);
                    -o-transform: rotateY(0);
                    transform: rotateY(0);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-img {
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                    -webkit-transform-origin: 50% 100%;
                    -moz-transform-origin: 50% 100%;
                    -ms-transform-origin: 50% 100%;
                    -o-transform-origin: 50% 100%;
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom .iheu-info {
                    -webkit-transform: rotateX(-90deg);
                    -moz-transform: rotateX(-90deg);
                    -ms-transform: rotateX(-90deg);
                    -o-transform: rotateX(-90deg);
                    transform: rotateX(-90deg);
                    -webkit-transform-origin: 50% 0;
                    -moz-transform-origin: 50% 0;
                    -ms-transform-origin: 50% 0;
                    -o-transform-origin: 50% 0;
                    transform-origin: 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-img{
                    -webkit-transform: rotateX(90deg);
                    -moz-transform: rotateX(90deg);
                    -ms-transform: rotateX(90deg);
                    -o-transform: rotateX(90deg);
                    transform: rotateX(90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.top_to_bottom.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                }

                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-img {
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                    -webkit-transform-origin: 50% 0;
                    -moz-transform-origin: 50% 0;
                    -ms-transform-origin: 50% 0;
                    -o-transform-origin: 50% 0;
                    transform-origin: 50% 0;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top .iheu-info {
                    -webkit-transform: rotateX(90deg);
                    -moz-transform: rotateX(90deg);
                    -ms-transform: rotateX(90deg);
                    -o-transform: rotateX(90deg);
                    transform: rotateX(90deg);
                    -webkit-transform-origin: 50% 100%;
                    -moz-transform-origin: 50% 100%;
                    -ms-transform-origin: 50% 100%;
                    -o-transform-origin: 50% 100%;
                    transform-origin: 50% 100%;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-img{
                    -webkit-transform: rotateX(-90deg);
                    -moz-transform: rotateX(-90deg);
                    -ms-transform: rotateX(-90deg);
                    -o-transform: rotateX(-90deg);
                    transform: rotateX(-90deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.bottom_to_top.iheu-touch .iheu-info{
                    -webkit-transform: rotateX(0);
                    -moz-transform: rotateX(0);
                    -ms-transform: rotateX(0);
                    -o-transform: rotateX(0);
                    transform: rotateX(0);
                }
            </style>

    <?php
    foreach ($listdata as $value) {
        $backgoundimage = '';
        $opennewtab = '';
        $iheuh3 = '';
        $iheup = '';
        $iheubuttontext = '';
        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
        if (!empty($value['hoverimage'])) {
            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
        }
        if ($styledata[17] == '_blank') {
            $opennewtab = 'target="_blank"';
        }
        if (!empty($value['title'])) {
            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
        }
        if (!empty($value['files'])) {
            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
        }
        if (!empty($value['buttom_text'])) {
            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
        }

        if (empty($value['link'])) {
            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
        }
        if (!empty($value['link']) && empty($value['buttom_text'])) {
            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
        }
        if (!empty($value['link']) && !empty($value['buttom_text'])) {
            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
        }
        $adminheading = '';
        $admindata = '';
        if ($userdata == 'admin') {
            $adminheading = 'iheu-editing';
            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
        }
        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . ' ' . $styledata[85] . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
    }
    ?>
        </div>
    </div>
            <?php
        }

        function iheu_ultimate_oxi_shortcode_general15($styleid, $styledata, $listdata, $userdata) {

            wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
            wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
            wp_enqueue_style('iheu-google-font', 'https://fonts.googleapis.com/css?family=' . $styledata[37] . '|' . $styledata[51] . '|' . $styledata[63] . '');
            ?>
    <div class="image-ultimate-container"> 
        <div class="image-ultimate-row">

            <style>

                .image-ultimate-map-absulate{
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                }
                .image-ultimate-map-absulate img{
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-map-absulate a{
                    text-decoration: none !important;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>{
                    position: relative;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                }

                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    display: table;
                }

                .image-ultimate-hover-animation-<?php echo $styleid; ?> {
                    animation-duration: <?php echo $styledata[21]; ?>s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?>, 
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img:before,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img img, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-img img,
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info, .image-ultimate-hover-<?php echo $styleid; ?> a .iheu-info{
                    border-radius: <?php echo $styledata[3]; ?>%;
                    -moz-border-radius:  <?php echo $styledata[3]; ?>%;
                    -webkit-border-radius:  <?php echo $styledata[3]; ?>%;
                    transition: 0.5s;
                }
                .image-ultimate-hover-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[9]; ?>px;
                }
                .image-ultimate-map-<?php echo $styleid; ?> {
                    max-width: <?php echo $styledata[5]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .image-ultimate-map-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[7] / $styledata[5] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img:before {
                    position: absolute;
                    display: block;
                    content: '';
                    width: 100%;
                    height: 100%;
                    box-shadow: inset 0 0 0 <?php echo $styledata[25]; ?>px <?php echo $styledata[27]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-img {
                    width: 100%;
                    float: left;
                    opacity: 1;
                    visibility: visible;
                    -webkit-transform: scale(1) rotate(0);
                    -moz-transform: scale(1) rotate(0);
                    -ms-transform: scale(1) rotate(0);
                    -o-transform: scale(1) rotate(0);
                    transform: scale(1) rotate(0);
                    -webkit-transition: all 0.35s ease-in-out;
                    -moz-transition: all 0.35s ease-in-out;
                    transition: all 0.35s ease-in-out;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info {
                    background: <?php echo $styledata[13]; ?>;
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transform: scale(0.5) rotate(-720deg);
                    -moz-transform: scale(0.5) rotate(-720deg);
                    -ms-transform: scale(0.5) rotate(-720deg);
                    -o-transform: scale(0.5) rotate(-720deg);
                    transform: scale(0.5) rotate(-720deg);
                    -webkit-transition: all 0.35s ease-in-out 0.3s;
                    -moz-transition: all 0.35s ease-in-out 0.3s;
                    transition: all 0.35s ease-in-out 0.3s;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info .iheu-data{
                    display: table-cell;
    <?php echo $styledata[15]; ?>
                    padding: <?php echo $styledata[11]; ?>px; 
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info h3 {
                    font-size: <?php echo $styledata[33]; ?>px;
                    font-weight: <?php echo $styledata[39]; ?>;
                    padding-bottom: <?php echo $styledata[43]; ?>px;
                    margin-bottom: <?php echo $styledata[45]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[37]); ?>;
                    display: inline-block;
                    color: <?php echo $styledata[35]; ?>;
    <?php
    if ($styledata[41] == 'yes') {
        echo ' border-bottom: 1px solid currentColor;';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> .iheu-info p {
                    font-size: <?php echo $styledata[47]; ?>px;
                    font-weight: <?php echo $styledata[53]; ?>;
                    margin-bottom: <?php echo $styledata[55]; ?>px;
                    margin-top: 0;
                    line-height: 120%;
                    width: 100%;
                    float: left;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[51]); ?>;
                    color: <?php echo $styledata[49]; ?>;
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button{
                    padding: <?php echo $styledata[73]; ?>px <?php echo $styledata[75]; ?>px;
                    -webkit-border-radius: <?php echo $styledata[71]; ?>px;
                    -moz-border-radius: <?php echo $styledata[71]; ?>px;
                    border-radius: <?php echo $styledata[71]; ?>px;
                    font-weight: <?php echo $styledata[65]; ?>;
                    font-size: <?php echo $styledata[57]; ?>px;
                    font-family: <?php echo iheu_font_familly_special_charecter($styledata[63]); ?>;
                    background: <?php echo $styledata[61]; ?>;
                    color: <?php echo $styledata[59]; ?>;
                    text-decoration: none;
                    display:table;
    <?php echo $styledata[77]; ?>
    <?php
    if ($styledata[77] == 'float: left ;') {
        echo 'margin-left : ' . $styledata[79] . 'px';
    }
    if ($styledata[77] == 'float: right;') {
        echo 'margin-right : ' . $styledata[81] . 'px';
    }
    ?>
                }
                .image-ultimate-hover-<?php echo $styleid; ?> a.iheu-button:hover{
                    background: <?php echo $styledata[69]; ?>;
                    color: <?php echo $styledata[67]; ?>;
                }
    <?php echo $styledata[83]; ?>
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-img,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-img{
                    opacity: 0;
                    visibility: hidden;
                    -webkit-transform: scale(0.5) rotate(720deg);
                    -moz-transform: scale(0.5) rotate(720deg);
                    -ms-transform: scale(0.5) rotate(720deg);
                    -o-transform: scale(0.5) rotate(720deg);
                    transform: scale(0.5) rotate(720deg);
                }
                .image-ultimate-hover-<?php echo $styleid; ?>:hover .iheu-info,
                .image-ultimate-hover-<?php echo $styleid; ?>.iheu-touch .iheu-info{
                    opacity: 1;
                    visibility: visible;
                    -webkit-transform: scale(1) rotate(0);
                    -moz-transform: scale(1) rotate(0);
                    -ms-transform: scale(1) rotate(0);
                    -o-transform: scale(1) rotate(0);
                    transform: scale(1) rotate(0);
                }
            </style>
                    <?php
                    foreach ($listdata as $value) {
                        $backgoundimage = '';
                        $opennewtab = '';
                        $iheuh3 = '';
                        $iheup = '';
                        $iheubuttontext = '';
                        $dataavanimation = '';
                $dataanimation = '';
                if (!empty($styledata[19])) {
                    $dataanimation = 'image-ultimate-animation-js';
                    $dataavanimation = 'data-av-animation="'.$styledata[19].'"';
                }
                        if (!empty($value['hoverimage'])) {
                            $backgoundimage = 'style="background: linear-gradient( ' . $styledata[13] . ', ' . $styledata[13] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
                        }
                        if ($styledata[17] == '_blank') {
                            $opennewtab = 'target="_blank"';
                        }
                        if (!empty($value['title'])) {
                            $iheuh3 = '<h3 class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['title']) . ' </h3>';
                        }
                        if (!empty($value['files'])) {
                            $iheup = '<p class="' . $styledata[23] . '"> ' . iheu_html_special_charecter($value['files']) . ' </p>';
                        }
                        if (!empty($value['buttom_text'])) {
                            $iheubuttontext = '<a ' . $opennewtab . ' href="' . $value['link'] . '" class="' . $styledata[23] . ' iheu-button"> ' . iheu_html_special_charecter($value['buttom_text']) . ' </a>';
                        }

                        if (empty($value['link'])) {
                            $valuedata = '<div class="iheu-img">
                                                          <img src="' . $value['image'] . '">
                                                    </div>
                                                     <div class="iheu-info"  ' . $backgoundimage . '>
                                                        <div class="iheu-data">
                                                            ' . $iheuh3 . '
                                                            ' . $iheup . '
                                                        </div>
                                                    </div>';
                        }
                        if (!empty($value['link']) && empty($value['buttom_text'])) {
                            $valuedata = '<a ' . $opennewtab . '  href="' . $value['link'] . '" class="iheutabhover"> 
                                                        <div class="iheu-img">
                                                             <img src="' . $value['image'] . '">
                                                        </div>
                                                         <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                            </div>
                                                        </div>
                                                     </a>';
                        }
                        if (!empty($value['link']) && !empty($value['buttom_text'])) {
                            $valuedata = '<div class="iheu-img">
                                                         <img src="' . $value['image'] . '">
                                                     </div>
                                                      <div class="iheu-info"  ' . $backgoundimage . '>
                                                            <div class="iheu-data">
                                                                ' . $iheuh3 . '
                                                                ' . $iheup . '
                                                                ' . $iheubuttontext . '
                                                            </div>
                                                     </div>';
                        }
                        $adminheading = '';
                        $admindata = '';
                        if ($userdata == 'admin') {
                            $adminheading = 'iheu-editing';
                            $admindata = '<div class="iheu-admin-absulote">
                                    <div class="iheu-style-absulate-edit">
                                        <form method="post"> ' . wp_nonce_field("iheueditdata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-primary" type="submit" value="edit" name="edit">Edit</button>
                                        </form>
                                    </div>
                                    <div class="iheu-style-absulate-delete">
                                        <form method="post">  ' . wp_nonce_field("iheudeletedata") . '
                                            <input type="hidden" name="item-id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger " type="submit" value="delete" name="delete">Delete</button>
                                        </form>
                                    </div>
                                </div>';
                        }
                        echo '<div class="' . $styledata[1] . ' '.$dataanimation.' image-ultimate-hover-animation-' . $styleid . ' image-ultimate-hover-padding-' . $styleid . ' ' . $adminheading . '" '.$dataavanimation.'>
                                            <div class="image-ultimate-map-' . $styleid . '">
                                                <div class="image-ultimate-map-absulate">
                                                    <div class="image-ultimate-hover image-ultimate-hover-' . $styleid . '">
                                                            ' . $valuedata . '
                                                    </div>
                                                </div>
                                            </div>
                                            ' . $admindata . '
                                        
                                         </div>';
                    }
                    ?>
        </div>
    </div>
            <?php
        }

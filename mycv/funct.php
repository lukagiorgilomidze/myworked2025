<?php 

function h1 ($values, $class = null){
echo '<h1 class="'. $class. '">' .$values. '</h1>';
};
function p ($values, $class = null){
echo '<p class="'. $class. '">' .$values. '</p>';
};
function h2 ($values, $class = null){
echo '<h2 class="'. $class. '">' .$values. '</h2>';
};

function h3 ($values, $class = null){
echo '<h3 class="'. $class. '">' .$values. '</h3>';
};
function h4 ($values, $class = null){
echo '<h4 class="'. $class. '">' .$values. '</h4>';
};
function h5 ($values, $class = null){
echo '<h5 class="'. $class. '">' .$values. '</h5>';
};
function h6 ($values, $class = null){
echo '<h6 class="'. $class. '">' .$values. '</h6>';
};
function img ($values, $class = null){
echo '<img src="'.$values.'" class="'. $class. '">';
};

function ul ($values, $class = null){
echo '<ul class="'. $class. '">' .$values. '</ul>';
};
function ol ($values, $class = null){
echo '<ol class="'. $class. '">' .$values. '</ol>';
};
function li ($values, $class = null){
echo '<li class="'. $class. '">' .$values. '</li>';
};
function a ($values, $class = null, $link = null){
echo '<a href="' .$link. '" class="'. $class. '">' .$values. '</a>';
};
function aimg ($values, $class = null, $link = null){
echo '<a href="' .$link. '" class="'. $class. '"><img src="'.$values.'" class="'. $class. '"></a>';
};

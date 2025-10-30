<?php 



function headerBox($headers){
    echo '<div class="headbox">';
        foreach($headers as $header ){
    echo '<div class="headtittle">';
    echo h1($header['name']);
    echo h1($header['lastname']);
    echo h4($header['favorite']);

    echo '</div>';
    echo '<div class="headimg">';
    echo img($header['img'],'imgprofile');

    echo '</div>';
        }
   
        echo '</div>';
    

};

function contcs($conct){
echo '<div class="contacts">';
foreach ($conct as $contact) {
    echo h3($contact['phone']);
    echo h3($contact['mail']);
    echo h3($contact['local']);

 };   
echo '</div>';
};

function skills($skl){
        echo '<div class="skills">';
    echo h2('უნარები');
   foreach ($skl as $skill) {
    echo li($skill['skill1']);
    echo li($skill['skill2']);
    echo li($skill['skill3']);
    echo li($skill['skill4']);
    echo li($skill['skill5']);
    echo li($skill['skill6']);
    echo li($skill['skill7']);
    echo li($skill['skill8']);
 }; 
    echo '</div>';
};

function schol($schols) {
        echo '<div class="school">';
    echo h2('განათლება');
    foreach ($schols as $school) {
    echo h3($school['title/bio/year/info/skill1']);
    echo h5($school['title/bio/year/info/skill2']);
    echo h3($school['title/bio/year/info/skill3']);
    echo p($school['title/bio/year/info/skill4']);
    echo h3($school['title/bio/year/info/skill5']);
    echo h5($school['title/bio/year/info/skill6']);
 };
    echo '</div>';
};





function bio($info) {
        echo '<div class="bio">';
    echo h2('ბიოგრაფია');
 foreach ($info as $bio) {
    echo p($bio['bio']);

 }
    echo '</div>';
};


function experiences($expers)  {
     echo '<div class="exp">';
    foreach ($expers as $exp) {
       
       echo '<div class="boxx1">';
echo h2('გამოცდილება');
    echo h3($exp['title/bio/info/skill1']);
    echo h5($exp['title/bio/info/skill2']);
    echo '<div class="li">';
    echo li($exp['title/bio/info/skill3']);
    echo li($exp['title/bio/info/skill4']);
    echo li($exp['title/bio/info/skill5']);
    echo li($exp['title/bio/info/skill6']);
    echo li($exp['title/bio/info/skill7']);
    echo '</div>';

    echo '</div>';

    echo '<div class="boxx2">';
    echo h3($exp['title/bio/info/skill8']);
    echo h5($exp['title/bio/info/skill9']);
    echo h5($exp['title/bio/info/skill10']);
    
    echo '<div class="li">';
    echo li($exp['title/bio/info/skill11']);
    echo li($exp['title/bio/info/skill12']);
    echo li($exp['title/bio/info/skill13']);
    echo li($exp['title/bio/info/skill14']);

    echo '</div>';
    
    echo '</div>';
    echo '<div class="boxx3">';
    echo h3($exp['title/bio/info/skill15']);
    echo h5($exp['title/bio/info/skill16']);
    echo h5($exp['title/bio/info/skill17']);    
    echo '<div class="li">';
    echo li($exp['title/bio/info/skill18']);
    echo li($exp['title/bio/info/skill19']);
    echo '</div>';
    };
    echo '</div>';

};


function footerSet($footers){
echo '<footer>';
echo '<div class="footerss">';
foreach ($footers as $social) {
    aimg($social['icons']['ifacebook'],'icon', $social['facebook']);
    aimg($social['icons']['iInstagram'],'icon', $social['Instagram']);
    aimg($social['icons']['iX'],'icon', $social['X']);
};
echo '</div>';
echo '</footer>';
};
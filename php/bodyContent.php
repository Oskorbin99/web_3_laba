<?php
// Модуль Основого контента

echo "
<div id ='BodyContent'>
            <div id ='BodyImgText'> </div>
            <div id ='BodyImg'>
                <img  width = '50%' height = '50%' id= 'Img_body' >
                <p id= 'text_body'> </p>
                </img>
            </div>
            Песни:<br>
            <p id = 'mus1'></p>
            <audio controls id ='Audiomus1' >
                <source  type='audio/mpeg'>
            </audio>
            <p id = 'mus2'></p>
            <audio controls id ='Audiomus2'>
                <source type='audio/mpeg'>
            </audio>
        </div>
        "
?>
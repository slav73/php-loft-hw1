<?php
const PICTURES_TOTAL = 80;
const PICTURES_FLOMASTER = 23;
const PICTURES_PENSIL = 40;

$picturesPaint = PICTURES_TOTAL - PICTURES_FLOMASTER - PICTURES_PENSIL;

echo 'На школьной выставке ', PICTURES_TOTAL, ' рисунков. ', PICTURES_FLOMASTER,
' выполнены фломастерами, ',  PICTURES_PENSIL, ' карандашами, а остальные — красками. 
Сколько рисунков, выполненные красками, на школьной выставке? <br /><br />
Ответ: красками выполнено ', $picturesPaint, ' рисунков';

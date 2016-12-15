


<p>
Сразу после установки фреймворка, рабочая версия дефолтной страницы должна
запуститься по адресу openserver\domains\yii-shop\basic\web.
Но при первом запуске мы увидим такую картинку:
</p>
<img src="1-1.png" alt="альтернативный текст">
<p>
Исправляется это следующим образом:
идем в папку \basic\config и открываем фаил web.php
<img src="1-2.png" alt="альтернативный текст">
и пишем в 12 строке в качестве значения любую информацию.
Так же чля подключения ЧПУ добавим следующую строку:


        <?
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qwerty', // пишем в это значение
            'baseUrl' => '', // добавляем строку для ЧПУ
        ],
        ?>

далее в этом же файле для создания ЧПУ раскомментируем слуедующие строки:        
        
        <?
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        ?>
        
        
        
</p>












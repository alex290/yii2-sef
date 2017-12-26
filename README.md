Yii2 ЧПУ ссылок (URL) для сайта
=======


Установка
------------

Предпочтительный способ установки этого расширения через [composer](http://getcomposer.org/download/).

Запустить

```
php composer.phar require --prefer-dist alex290/yii2-sef "1.0.0"
```

или добавить

```
"alex290/yii2-sef": "1.0.0"
```

в секцию require вашего `composer.json` файла.

**И запустить миграцию файла**

	yii migrate/up --migrationPath=@vendor/alex290/yii2-sef/migrations

Можно создать вручную. А именно - таблицу `sef`, в ней только 3 поля:

id (primaryKey, AUTO_INCREMENT);
link (varchar(255));
link_sef (varchar(255)).


Использование
-----

В файле: `config/web.php` прописать

        'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
                [ 
                    'class' => 'alex290\sef\SefRule',
                    'connectionID' => 'db',
                ],
            ],
        ],

Для админки можно создать модель `Sef`, а можно использовать готовую `alex290\sef\Sef`

'link' = это поле оригинальной ссылки например, article/view?id=49

'link_sef' = это поле синоним URL

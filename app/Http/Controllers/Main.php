<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;


use simplehtmldom\HtmlWeb;
use simplehtmldom\simple_html_dom;


class Main extends Controller
{
    public function searchImages($url, $findPages = true)
    {
        $method = __METHOD__;
        static $i = 1;
        $n = 200;
        $doc = new HtmlWeb();
        $data = $doc->load($url);
        // очищаем страницу от лишних данных, это не обязательно, но когда HTML сильно захламлен бывает удобно почистить его, для дальнейшего анализа
        foreach ($data->find('script,link,comment') as $tmp) $tmp->outertext = '';
        // находим URL страниц только для первого вызова функции
        if ($findPages and count($data->find('div.b-pager__pages a'))) {
            foreach ($data->find('div.b-pager__pages a') as $a) {
                // довольно распространенный случай - локальный URL. Поэтому иногда url надо дополнять до полного
                if (!preg_match('#^http://#', $a->href)) $a->href = 'http://images.yandex.ru' . $a->href;
                // и еще дна тонкость, & надо заменять на &
                $a->href = str_replace('&', '&', $a->href);
                // вызываем функцию для каждой страницы
                $this->$method($a->href, false);
            }
        }
        // находим все изображения на странице
        if (count($data->find('img'))) {
            foreach ($data->find('img') as $img) {
                // выводим на экран изображение
                echo '<img src="' . $img->src . '"/>';
                // и скачиваем его в файл
                //file_put_contents('data/' . ($i++) . '.jpg', file_get_contents($img->src));
                if ($i > $n) exit; // завершаем работу если скачали достаточно фотографий
            }
        }
        echo count($data->find('img'));
        $data->clear(); // подчищаем за собой
        unset($data);
    }


    public function main()
    {


        return view('components.home');
    }

    

    public function showParse()
    {
        $url = 'http://images.yandex.ru/yandsearch?text=' . urlencode('rainbow') . '&rpt=image';
        $this->searchImages($url);
    }
}

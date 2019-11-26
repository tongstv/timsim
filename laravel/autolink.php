<?php

if(!class_exists('Laravel'))
{
    include_once "app/laravel.php";
}



class autolinkbuild extends Laravel
{

    protected $table = 'page';


    public function buildlink($page_url)
    {

        include ('app/lib/class.autokeyword.php');
        $data = $this->where('page_url', trim($page_url))->first()->toArray();


        $res = $data;

        $data = $data['page_detail'];

        $params['content'] = $data; //page content


        $params['min_word_length'] = 5; //minimum length of single words
        $params['min_word_occur'] = 2; //minimum occur of single words
        $params['min_2words_length'] = 3; //minimum length of words for 2 word phrases
        $params['min_2words_phrase_length'] = 10; //minimum length of 2 word phrases
        $params['min_2words_phrase_occur'] = 2; //minimum occur of 2 words phrase
        $params['min_3words_length'] = 3; //minimum length of words for 3 word phrases
        $params['min_3words_phrase_length'] = 10; //minimum length of 3 word phrases
        $params['min_3words_phrase_occur'] = 2; //minimum occur of 3 words phrase


        $this->table = "smartlink";

        $keyword = new autokeyword($params, "iso-8859-1");

        $keywords = $keyword->get_keywords();


        $keys = $this->select("link", "keywords")->orderby('id', 'desc')->get();

        foreach ($keys as $key) {


            $keyword_array[$key->keywords] = $key->link;
        }


        include ('app/lib/class.autolink.php');

        $autolink = new autolink($keywords, $keyword_array, $data, "link", "link", "i");


        echo $autolink->linkKeywords();


    }


}

$autolink = new autolinkbuild;
if (isset($_REQUEST['page_url'])) {
    $autolink->buildlink(trim($_REQUEST['page_url']));
}

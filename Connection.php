<?php

class Connection {
    private $host = 'localhost';
    private $dbname = 'my_portfolio';
    private $user = 'mysql';
    private $pass = 'mysql';
    private $charset = 'utf8';
    private $dsn;

    public function tryConnect(){
        try{
            $this->dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
            $DBH = new PDO($this->dsn,$this->user,$this->pass);
            $DBH->exec("set names utf8");
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DBH;
        }
        catch (PDOException $e){
            $e->getMessage();
        }
    }

    //вывод новостей из БД
   public function get_news() {
        $DBH = $this->tryConnect();
        $news_it = $DBH->query("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
        return $news_it;
    }

    public function get_news_ajax() {
        $limit = 3;

        $page = intval(@$_GET['page']);
        $page = (empty($page)) ? 1 : $page;
        $start = ($page != 1) ? $page * $limit - $limit : 0;

        $DBH = $this->tryConnect();
        $sth = $DBH->prepare("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id  LIMIT {$start}, {$limit}");
        $sth->execute();
        $items = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }

    public function get_all_news() {
        $DBH = $this->tryConnect();
        $news_it = $DBH->query("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id")->fetchAll(PDO::FETCH_ASSOC);
        return $news_it;
    }

//счетчик перехода по ссылке
    public function count_views($id) {
        $DBH = $this->tryConnect();
        $DBH->query("UPDATE news_it SET views = views + 1 WHERE id = $id");
    }

//количество страниц
    public function count_news()
    {
        $DBH = $this->tryConnect();
        $sth = $DBH->prepare("SELECT COUNT(`id`) FROM `news_it`");
        $sth->execute();
        $total = $sth->fetch(PDO::FETCH_COLUMN);
        $amt = ceil($total / 3);
        return $amt;
    }

}


//$host = 'localhost';
//$dbname = 'my_portfolio';
//$user = 'mysql';
//$pass = 'mysql';

//$option = [
//  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//  PDO::ATTR_STRINGIFY_FETCHES => false,
//  PDO::ATTR_EMULATE_PREPARES => false
//];

//    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $option);

//вывод новостей из БД
//function get_news() {
//    global $DBH;
//    $news_it = $DBH->query("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
//   return $news_it;
//}
//
////счетчик перехода по ссылке
//function count_views($id) {
//    global $DBH;
//    $DBH->query("UPDATE news_it SET views = views + 1 WHERE id = $id");
//}
//
////количество страниц
//function count_news()
//{
//    global $DBH;
//    $sth = $DBH->prepare("SELECT COUNT(`id`) FROM `news_it`");
//    $sth->execute();
//    $total = $sth->fetch(PDO::FETCH_COLUMN);
//    $amt = ceil($total / 3);
//    return $amt;
//}
?>



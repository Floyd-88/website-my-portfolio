<?php

class Connection
{
    private $host = 'localhost';
    private $dbname = 'my_portfolio';
    private $user = 'mysql';
    private $pass = 'mysql';
    private $charset = 'utf8';
    private $dsn;

    public function tryConnect()
    {
        try {
            $this->dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
            $DBH = new PDO($this->dsn, $this->user, $this->pass);
            $DBH->exec("set names utf8");
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DBH;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    //вывод новостей из БД
    public function get_news()
    {
        $DBH = $this->tryConnect();
        $news_it = $DBH->query("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
        return $news_it;
    }

    public function get_news_ajax()
    {
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

    public function get_all_news()
    {
        $DBH = $this->tryConnect();
        $news_it = $DBH->query("SELECT news_it.id, title, categorie_name, text, img, alt_img, link_news, views FROM news_it JOIN categorie ON news_it.categorie_id = categorie.id")->fetchAll(PDO::FETCH_ASSOC);
        return $news_it;
    }

//счетчик перехода по ссылке
    public function count_views($id)
    {
        $DBH = $this->tryConnect();
        $DBH->query("UPDATE news_it SET views = views + 1 WHERE id = $id");
    }

//количество страниц c новостями
    public function count_news()
    {
        $DBH = $this->tryConnect();
        $sth = $DBH->prepare("SELECT COUNT(`id`) FROM `news_it`");
        $sth->execute();
        $total = $sth->fetch(PDO::FETCH_COLUMN);
        $amt = ceil($total / 3);
        return $amt;
    }

    //вывод отзывов
    public function show_reviews()
    {
        $DBH = $this->tryConnect();
        $sth = $DBH->query("SELECT * FROM `new_reviews`")->fetchAll(PDO::FETCH_ASSOC);
        return $sth;
    }

    //вывод списка работ
    public function show_works()
    {
        $DBH = $this->tryConnect();
        $works = $DBH->query("SELECT m.id, name_work, category_id, date, c.title, title_image, links_work, description_works FROM my_works m  JOIN category_works c ON m.category_id = c.id  LIMIT 3")->fetchAll(PDO::FETCH_ASSOC);
        return $works;
    }

    public function get_works_ajax()
    {
        $limit = 3;

        $page = intval(@$_GET['page']);
        $page = (empty($page)) ? 1 : $page;
        $start = ($page != 1) ? $page * $limit - $limit : 0;

        $DBH = $this->tryConnect();
        $sth = $DBH->prepare("SELECT m.id, name_work, category_id, date, c.title, title_image, links_work, description_works FROM my_works m  JOIN category_works c ON m.category_id = c.id  LIMIT {$start}, {$limit}");
        $sth->execute();
        $items = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }

    //вывод всех работ
    public function show_All_works()
    {
        $DBH = $this->tryConnect();
        $works = $DBH->query("SELECT m.id, name_work, category_id, date, c.title, title_image, links_work, description_works FROM my_works m  JOIN category_works c ON m.category_id = c.id")->fetchAll(PDO::FETCH_ASSOC);
        return $works;
    }

    //количество страниц c работами
    public function count_works()
    {
        $DBH = $this->tryConnect();
        $sth = $DBH->prepare("SELECT COUNT(`id`) FROM `my_works`");
        $sth->execute();
        $total = $sth->fetch(PDO::FETCH_COLUMN);
        $amt = ceil($total / 3);
        return $amt;
    }

    //вывод картинок в модальном окне с превью проекта
    public function show_image_modal_previews($n)
    {
        $DBH = $this->tryConnect();
        $prewies = $DBH->query("SELECT m.id, i.image_link FROM my_works m JOIN image_works i ON i.id_work = m.id WHERE i.id_work = $n")->fetchAll(PDO::FETCH_ASSOC);
        return $prewies;
    }

//Оставление отзыва
    public function despatchReviews($name, $email, $name_project, $rating, $reviews)
    {
        try {
            $DBH = $this->tryConnect();
            $repeat_info = $DBH->query("SELECT * FROM new_reviews WHERE name='$name' AND email='$email' AND name_project = '$name_project' AND rating = '$rating' AND reviews = '$reviews'")->fetchAll(PDO::FETCH_ASSOC);

            if (empty($repeat_info)) {
                $reviews_add = "INSERT INTO new_reviews(name, email, name_project, rating, reviews) VALUES ('$name', '$email', '$name_project', '$rating', '$reviews')";
                $DBH->exec($reviews_add);
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }

    //Отправка сообщения в БД
    public function despatchMessage($name, $email, $text)
    {
        try {
            $DBH = $this->tryConnect();
            $repeat_info = $DBH->query("SELECT * FROM message WHERE name='$name' AND email='$email' AND text = '$text'")->fetchAll(PDO::FETCH_ASSOC);

            if (empty($repeat_info)) {
                $message_add = "INSERT INTO message(name, email, text) VALUES ('$name', '$email', '$text')";
                $DBH->exec($message_add);
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }
}
?>
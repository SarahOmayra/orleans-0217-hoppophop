<?php

namespace Hph\Model;


class NewsManager extends \Hph\Db
{
    public function getNews($limit)
    {
        $req = "SELECT * FROM news LIMIT 0, $limit";
        return $this->render($req, 'News');
    }
    public function getNewsOne($id)
    {
        $req = "SELECT * FROM news WHERE id=$id";
        return $this->render($req, 'News');
    }
    public function getBreakingNews()
    {
        $req = "SELECT * FROM news WHERE status='1'";
        return $this->render($req, 'News');
    }
}
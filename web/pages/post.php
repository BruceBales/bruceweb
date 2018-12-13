<?php

namespace Blog\Pages;

class post 
{

    public function Data($id, $db) {

        $view_data = array();


        $titlestmt = "select title from blog.posts where id = $id;";
        $contentstmt = "select content from blog.posts where id = $id;";

        foreach ($db->query($titlestmt) as $row) {
            $view_data["title"] = $row['title'];
        }
        foreach ($db->query($contentstmt) as $row) {
            $view_data["content"] = $row['content'];
        }


        return $view_data;
    }

    public function Template() {
        return "post.html";
    }

}
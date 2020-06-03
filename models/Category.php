<?php

class Category
{

    /**
     * Returns an array of categories
     */
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM model_cat ');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id_category'] = $row['id_category'];
            $categoryList[$i]['category'] = $row['category'];
            $i++;
        }

        return $categoryList;
    }

}
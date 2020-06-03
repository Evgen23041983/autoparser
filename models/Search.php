<?php

class Search
{

    const SHOW_BY_DEFAULT = 6;

    public static function getSearchProducts($price1, $price2, $model, $keyword, $year, $city)
    {
        if ($model) 
        {
            
            $price1 = intval($price1);
            $price2 = intval($price2);
            $keyword = "%$keyword%";
            $year = "%$year%";
            $city = "%$city%";
           
            $db = Db::getConnection();            
            $products = array();
            $result = $db->prepare("SELECT * FROM auto WHERE  auto_category = :model AND (auto_price BETWEEN :price1 AND :price2) AND (auto_name LIKE :keyword) AND (auto_year LIKE :year) AND (auto_city LIKE :city) ");
            $result->bindValue('model', $model, PDO::PARAM_STR);
            $result->bindValue('price1', $price1, PDO::PARAM_INT);
            $result->bindValue('price2', $price2, PDO::PARAM_INT);
            $result->bindValue('keyword', $keyword, PDO::PARAM_STR);
            $result->bindValue('year', $year, PDO::PARAM_STR);
            $result->bindValue('city', $city, PDO::PARAM_STR);
           

            $result->execute();
            


            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['auto_id'] = $row['auto_id'];
                $products[$i]['auto_name'] = $row['auto_name'];
                $products[$i]['auto_price'] = $row['auto_price'];
                $products[$i]['auto_bigImage'] = $row['auto_bigImage'];
                $products[$i]['auto_link'] = $row['auto_link'];
                $products[$i]['auto_year'] = $row['auto_year'];
                $products[$i]['auto_city'] = $row['auto_city'];
                $products[$i]['auto_v'] = $row['auto_v'];
                $products[$i]['auto_list'] = $row['auto_list'];
                $products[$i]['auto_des'] = $row['auto_des'];
                
                
                $i++;
            }
            return $products;  
        }
    }

    public static function getTotalProductsInCategory($price1, $price2, $model, $keyword, $year, $city)
    {
        $price1 = intval($price1);
            $price2 = intval($price2);
            $keyword = "%$keyword%";
            $year = "%$year%";
            $city = "%$city%";
           
            $db = Db::getConnection();            
            $products = array();

        $result = $db->prepare("SELECT count(auto_id) AS count FROM auto WHERE  auto_category = :model AND (auto_price BETWEEN :price1 AND :price2) AND (auto_name LIKE :keyword) AND (auto_year LIKE :year) AND (auto_city LIKE :city)");
        $result->bindValue('model', $model, PDO::PARAM_STR);
        $result->bindValue('price1', $price1, PDO::PARAM_INT);
        $result->bindValue('price2', $price2, PDO::PARAM_INT);
        $result->bindValue('keyword', $keyword, PDO::PARAM_STR);
        $result->bindValue('year', $year, PDO::PARAM_STR);
        $result->bindValue('city', $city, PDO::PARAM_STR);

        $result->execute();
            
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    
}

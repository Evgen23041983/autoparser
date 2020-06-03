<?php

class Product
{

    const SHOW_BY_DEFAULT = 6;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $products = array();

        $result = $db->query('SELECT * FROM auto ' . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['auto_id'] = $row['auto_id'];
                $products[$i]['auto_category'] = $row['auto_category'];
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
    
    /**
     * Returns an array of products
     */
  public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval($page);            
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
        
            $db = Db::getConnection();            
            $products = array();
            $result = $db->query("SELECT * FROM auto "
                    . "WHERE  id_category = '$categoryId' "
                    . "LIMIT ".self::SHOW_BY_DEFAULT
                    . ' OFFSET '. $offset);


            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['auto_id'] = $row['auto_id'];
                $products[$i]['auto_category'] = $row['auto_category'];
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
    
    
    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM auto WHERE auto_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    
    
    
    
    
    
    public static function getProdustsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM auto WHERE auto_id IN ($idsString)";

        $result = $db->query($sql);        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['auto_id'] = $row['auto_id'];
            $products[$i]['auto_name'] = $row['auto_name'];
            $products[$i]['auto_link'] = $row['auto_link'];
            $products[$i]['auto_price'] = $row['auto_price'];
            $products[$i]['auto_bigImage'] = $row['auto_bigImage'];
            $products[$i]['auto_v'] = $row['auto_v'];
            $products[$i]['auto_year'] = $row['auto_year'];
            $i++;
        }

        return $products;
    }

    
    
    
    
    
    
    
    
    
    
    /**
     * Returns an array of recommended products
     */
    public static function getRecomendetProducts()
    {
       
            
            $db = Db::getConnection();            
            $products = array();
            $result = $db->prepare("SELECT * FROM auto WHERE  recomented = 1 ");
            
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

/**
     * Returns total products
     */
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(auto_id) AS count FROM auto '
                . 'WHERE id_category ="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getProductImage($id)
    {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            $images = array();
            
            $result = $db->prepare('SELECT auto_name FROM auto WHERE auto_id = :id');
            $result->bindValue('id', $id, PDO::PARAM_INT);
            $result->execute();
            $name = $result->fetchColumn();

            $result = $db->prepare('SELECT * FROM img WHERE category= :name'); 
            $result->bindValue('name', $name, PDO::PARAM_STR);
            $result->execute();
            
            
            $i = 0;
            while ($row = $result->fetch()) {
                $images[$i]['category'] = $row['category'];
                $images[$i]['auto_path'] = $row['auto_path'];
                
                $i++;
            }
    
            return $images;
        }
    }

    
}



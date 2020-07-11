<?php

class Category
{

    public static function getCategoriesList()
    {
        $db = Db::getDbConnection();
        $sort_order = 'sort_order';

        $request = $db->prepare("SELECT * FROM category ORDER BY ? ASC");
        $request->bind_param('s', $sort_order);
        $request->execute();
        $result = $request->get_result();

        $categoriesList = array();
        $i = 0;
        while($row = $result->fetch_assoc())   {
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['name'] = $row['name'];
            $categoriesList[$i]['sort_order'] = $row['sort_order'];
            $categoriesList[$i]['status'] = $row['status'];
            $i++;
        }

        return $categoriesList;
    }

}

?>
<h1>Кулинарный Справочник</h1>
<div>
    <?php
    $criteria = new CDbCriteria();
    $criteria->limit = 10;
    $criteria->order ='rand()';
   
    $list = Recepty::model()->findAll($criteria);
    foreach ($list as $recept){
        echo $recept->name;
         }
     ?>    
    
</div>
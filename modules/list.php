<?php
if (!isset ($_GET['sort'])){
    $sort = 'id';
} else {
    $sort = $_GET['sort'];
}

    $sth = $pdo->prepare("SELECT * FROM info ORDER BY " . $sort . " ASC ");

    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();
    $lists = $sth->fetchAll();

    foreach ($lists as $list):
?>
        <div class="info flex">
            <p><?php echo $list["year"];?></p>
            <p><?php echo $list["month"];?></p>
            <p><?php echo $list["ip"];?></p>
            <p><?php echo $list["button_id"];?></p>
            <p><?php echo $list["count_of_clicks"];?></p>
         </div>
        </div>

        <?php
    endforeach;


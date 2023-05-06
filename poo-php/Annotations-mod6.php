<?php ?>

    <?php for($i=0; $i <= 0; $i++){ ?>
        <tr>
            <td><?php echo h($bike->brand);?></td>
            <td><?php echo h(money_format('$%i', $bike->price));?></td>
    <?php }?>


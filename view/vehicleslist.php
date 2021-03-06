<?php include('view/header.php')?>
<section id="list" class="list">
    <p>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <input type="hidden" name="action" value="list_vehicles">
            <select name="makeID">
                <option value="0">View All Makes</option>
                <?php foreach($makes as $make) : ?>
                    <?php if($makeID == $make['ID']) { ?>
                        <option value="<?= $make['ID']?>" selected>
                        <?php } else { ?>
                            <option value="<?= $make['ID']?>">
                            <?php } ?>
                    <?= $make['Make'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button class="add-button bold">GO</button>
        </form>
                        </p>
    <p>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <input type="hidden" name="action" value="list_vehicles">
            <select name="typeID">
                <option value="0">View All Types</option>
                <?php foreach($types as $type) : ?>
                    <?php if($typeID == $type['ID']) { ?>
                        <option value="<?= $type['ID']?>" selected>
                        <?php } else { ?>
                            <option value="<?= $type['ID']?>">
                            <?php } ?>
                    <?= $type['Type'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button class="add-button bold">GO</button>
        </form>
                        </p>
    <p>
        <form action="." method="get" id="list__header_select" class="list__header_select">
            <input type="hidden" name="action" value="list_vehicles">
            <select name="classID">
                <option value="0">View All Classes</option>
                <?php foreach($classes as $class) : ?>
                    <?php if($classID == $class['ID']) { ?>
                        <option value="<?= $class['ID']?>" selected>
                        <?php } else { ?>
                            <option value="<?= $class['ID']?>">
                            <?php } ?>
                    <?= $class['Class'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <button class="add-button bold">GO</button>
        </form>
        </p>
        <form action = "sort" method = "get">
        <tr><td width="61"><p>Sort by:</p></td>
        <p>Price</p>
        <td width="28"><input name="sort" type="radio" value="pricedesc" />
        <p>Year</p>
        <td width="28"><input name="sort" type="radio" value="yeardesc" />
        </form>
<?php if($vehicles) { ?>
<div class = "table-wrapper">
    <table class="fl-table">
    <thead>
        <tr>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
            <th>Type</th>
            <th>Class</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($vehicles as $vehicle){ ?>
                <td><?= $vehicle['Year']; ?></td>
                <td><?= $vehicle['Make']; ?></td>
                <td><?= $vehicle['Model']; ?></td>
                <td><?= $vehicle['Type']; ?></td>
                <td><?= $vehicle['Class']; ?></td>
                <td><?= $vehicle['Price']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php } else { ?>
<br>
<?php if($makeID) { ?>
<p>No tasks exist for this category yet.</p>
<?php } else { ?>
<p>No vehicles available.</p>
<?php } ?>
<br>
<?php } ?>
</section>

            
<?php include('view/footer.php')?>
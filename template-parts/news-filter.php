<div class="controls">
    <!-- Get a list of all categories in the database, excluding those not assigned to posts -->
    <span class="filter-heading">Filter</span>
    <ul>
        <li type="button" data-filter="all">All</li>
        <?php
    $all_categories = get_categories(array(
        'hide_empty' => true
    ));
    ?>

        <!-- Iterate through each category -->

        <?php foreach($all_categories as $category): ?>
        <!-- Output control button markup, setting the data-filter attribute as the category "slug" -->

        <li type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
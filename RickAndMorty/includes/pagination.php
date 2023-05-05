<div class="pagination">
    <?php
    $prevPage = $page > 1 ? $page - 1 : 1;
    $nextPage = $page < $data->info->pages ? $page + 1 : $data->info->pages;

    if ($page > 1) {
        echo '<a href="?page=' . $prevPage . '">&laquo; Prev</a>';
    }

    $startPage = max(1, $page - 4);
    $endPage = min($data->info->pages, $page + 4);

    if ($startPage > 1) {
        echo '<a href="?page=1">1</a>';
        echo '<span>...</span>';
    }

    for ($i = $startPage; $i <= $endPage; $i++) {
        $class = $i == $page ? ' class="active"' : '';
        echo '<a href="?page=' . $i . '"' . $class . '>' . $i . '</a>';
    }

    if ($endPage < $data->info->pages) {
        echo '<span>...</span>';
        echo '<a href="?page=' . $data->info->pages . '">' . $data->info->pages . '</a>';
    }

    if ($page < $data->info->pages) {
        echo '<a href="?page=' . $nextPage . '">Next &raquo;</a>';
    }
    ?>
</div>

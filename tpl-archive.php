<?php
/**
 * 日志归档
 *
 * @package custom
 *
 */
?>

<?php $this->need('header.php'); ?>

<div class="mainbody">

    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=100000')->to($archives);
    $output = '';

    $posts_rebuild = array();
        while($archives->next()):
            $post_year = date('Y',$archives->created);
            $post_mon = date('m',$archives->created);
            $posts_rebuild[$post_year][$post_mon][] = '<li style="list-style-type:circle;padding:5px;">- '.date('d',$archives->created).' * <a href="'. $archives->permalink .'">'. $archives->title .'</a></li>';
        endwhile;
        
        foreach ($posts_rebuild as $key => $value) {
            
            $year = $key;
            foreach ($value as $key_m => $value_m) {
                $output .= '<h3 style="margin-top:0;padding-top:8px; text-align:center">' . $year . ' - ' . $key_m . '</h3><ul>';
                foreach ($value_m as $key => $value_d) {
                    $output .=  $value_d;
                }
                $output .= '</ul>';
            }
        }   

    echo $output;
    ?>
</div>

<?php $this->need('footer.php'); ?>

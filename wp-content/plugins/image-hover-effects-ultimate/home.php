<?php
if (!defined('ABSPATH'))
    exit;
if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
?>
<div class="wrap">
    <h1> Image Hover Effects <a href="<?php echo admin_url("admin.php?page=image-hover-ultimate-new"); ?>" class="btn btn-primary"> Add New</a></h1>
    <div class="iheu-admin-wrapper table-responsive" style="margin-top: 20px; margin-bottom: 20px;">
        <table class="table table-hover widefat " style="background-color: #fff; border: 1px solid #ccc">
            <thead>
                <tr>
                    <th style="width: 11%">ID</th>
                    <th style="width: 13%">Name</th>
                    <th style="width: 13%">Template</th>
                    <th style="width: 50%">Shortcode</th>
                    <th style="width: 13%">Edit Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                global $wpdb;
                if (!empty($_POST['delete']) && is_numeric($_POST['id'])) {
                    if (!wp_verify_nonce($nonce, 'iheuhomedelete')) {
                        die('You do not have sufficient permissions to access this page.');
                    } else {
                        $id = (int) $_POST['id'];
                        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
                        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %d", $id));
                    }
                }

                if (!empty($_POST['clone']) && is_numeric($_POST['id'])) {
                    if (!wp_verify_nonce($nonce, 'iheuhomeclone')) {
                        die('You do not have sufficient permissions to access this page.');
                    } else {
                        $id = (int) $_POST['id'];
                        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
                        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $id), ARRAY_A);
                        $name = $data['name'] . '-clone';
                        $style_name = $data['style_name'];
                        $css = $data['css'];
                        $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
                        $redirect_id = $wpdb->insert_id;
                        if ($redirect_id == 0) {
                            $url = admin_url("admin.php?page=image-hover-ultimate-new");
                        }
                        if ($redirect_id != 0) {
                            $url = admin_url("admin.php?page=image-hover-ultimate-new&styleid=$redirect_id");
                        }
                        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
                        exit;
                    }
                }
                $data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'image_hover_ultimate_style ORDER BY id DESC', ARRAY_A);
                foreach ($data as $value) {
                    $id = $value['id'];
                    echo ' <tr>';
                    echo ' <td>' . $id . '</td>';
                    echo '  <td >' . $value['name'] . '</td>';
                    echo ' <td >' . $value['style_name'] . '</td>';
                    echo '<td ><span>Shortcode <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="[iheu_ultimate_oxi id=&quot;' . $id . '&quot;]"></span>'
                    . '<span>Php Code <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[iheu_ultimate_oxi  id=&quot;' . $id . '&quot;]&#039;); ?&gt;"></span></td>';
                    echo '<td >
                                    <form method="post">
                                    ' . wp_nonce_field("iheuhomeclone") . '
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <button class="btn btn-primary" style="float:left"  title="Clone" type="submit" value="clone" name="clone"><i class="fa fa-clone" aria-hidden="true"></i></button>  
                                    </form>
                                    <a href="' . admin_url("admin.php?page=image-hover-ultimate-new&styleid=$id") . '"  title="Edit"  class="btn btn-info" style="float:left; margin-right: 5px; margin-left: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form method="post">
                                            ' . wp_nonce_field("iheuhomedelete") . '
                                            <input type="hidden" name="id" value="' . $id . '">
                                            <button class="btn btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>  
                                    </form>
                                   
                             </td>';
                    echo ' </tr>';
                }
                ?>

            </tbody>
        </table> 
    </div>
</div>
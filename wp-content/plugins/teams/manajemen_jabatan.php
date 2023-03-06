<?php

require_once 'jabatan_class.php';
require_once(ABSPATH . 'wp-admin/includes/screen.php');
require_once(ABSPATH . 'wp-admin/includes/template.php');


function show_jabatan(){
    global $wpdb;
    $table_name = $wpdb->prefix . "jabatan";
    $tbljabatan = new Jabatan_List_Table();
    echo '<div class="wrap">
        <h2>Data Jabatan <a href="?page=input_jabatan" class="add-new-h2">Tambah Data</a></h2>';
        $tbljabatan->prepare_items();

        echo'<form method="post">';
            $tbljabatan->display();
        echo'</form></div>';
}

// show_jabatan();
?>


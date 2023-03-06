<?php

if ( ! class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');


}

class Jabatan_List_Table extends WP_List_Table {
    function get_columns(){
        $column = array(
            'id_jabatan' => 'Id Jabatan',
            'nama_jabatan' => 'Nama Jabatan'
        );
        return $column;
    }

    function prepare_items(){
        global $wpdb;
        $table_name = $wpdb->prefix . "jabatan";

        $query = "SELECT * FROM " . $table_name;
        $rows = $wpdb->get_results($query);

        $columns = $this->get_columns();
        $hidden  = array();
        $sortable = array();
        $this->columns_headers = array($columns, $hidden, $sortable);
        $this->items = $rows;
    }

    function column_default($item, $column_name){
        return $item->$column_name;
    }

}

?>

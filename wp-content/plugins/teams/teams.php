<?php
/*
Plugin Name: Data tim
Plugin URI: https://www.rohiabdulloh.com/wordpress-plugin
Description: menampilkan data tim developer pada halaman pengunjung
Version: 1.0
Author URI: www.rohiabdulloh.com
*/

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'manajemen_jabatan.php');
require_once(ROOTDIR . 'manajemen_pegawai.php');
require_once(ROOTDIR . 'jabatan_class.php');
// require_once(ROOTDIR . 'pegawai_class.php');

add_action('admin_menu', 'peg_buat_menu');

function peg_buat_menu(){
    add_menu_page('pegawai','pegawai','activate_plugins','peg_mainmenu','show_pegawai');
    add_submenu_page('peg_mainmenu','Data Pegawai','Data Pegawai','Administrator','show_pegawai','show_pegawai');
    add_submenu_page(null,'Tambah Pegawai','Tambah Pegawai','Administrator','input_pegawai','input_pegawai');
    add_submenu_page('peg_mainmenu','Edit Pegawai','Edit Pegawai','Administrator','edit_pegawai','edit_pegawai');
    add_submenu_page('peg_mainmenu','Data Jabatan','Data Jabatan','Administrator','show_jabatan','show_jabatan');
    add_submenu_page(null,'Tambah Jabatan','Tambah Jabatan','Administrator','input_jabatan','input_jabatan');
    add_submenu_page(null,'Edit Jabatan','Edit Jabatan','Administrator','edit_jabatan','edit_jabatan');
}

// function show_pegawai() {
//     // your code for displaying the list of employees goes here
//     echo "<h1>List of Employees</h1>";
//     // ...
// }


register_activation_hook( __FILE__ , 'peg_active');
function peg_active(){
    global $wpdb;
    $tabel_pegawai = $wpdb->prefix . "pegawai";
    $tabel_jabatan = $wpdb->prefix . "jabatan";

    ob_start();
    $sql="CREATE TABLE IF NOT EXISTS " . $tabel_jabatan . "(
        id_jabatan int(12) NOT NULL AUTO_INCREMENT,
        nama_jabatan varchar(50) NOT NULL,
        PRIMARY KEY(id_jabatan)
    );";

    $wpdb->query($sql);

    $sql="CREATE TABLE IF NOT EXISTS " . $tabel_pegawai . "(
        id_pegawai int(12) NOT NULL AUTO_INCREMENT,
        nama_pegawai varchar(255) NOT NULL,
        jenis_kelamin enum('L','P') NOT NULL,
        tgl_lahir date NOT NULL,
        id_jabatan int(12) NOT NULL,
        keterangan text NOT NULL,
        foto varchar(255) NOT NULL,
        PRIMARY KEY(id_pegawai)
    );";

    $wpdb->query($sql);
}

register_uninstall_hook(__FILE__ , 'peg_uninstall');
function peg_uninstall(){
    global $wpdb;
    $tabel_pegawai = $wpdb->prefix."pegawai";
    $tabel_jabatan = $wpdb->prefix."jabatan";

    $sql ="DROP TABLE" . $tabel_pegawai . ";";
    $wpdb->query($sql);

    $sql ="DROP TABLE" . $tabel_jabatan . ";";
    $wpdb->query($sql);
}
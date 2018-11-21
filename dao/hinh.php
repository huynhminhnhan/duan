<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_album là tên loại
 * @throws PDOException lỗi thêm mới
 */
function hinh_insert($hinh,$ma_kh,$maalb){
    $sql = "INSERT INTO hinh(hinh,makh,maalb) VALUES(?,?,?)";
    pdo_execute($sql, $hinh,$ma_kh,$maalb);
}

/**
 * Cập nhật tên loại
 * @param int $maalbum là mã loại cần cập nhật
 * @param String $ten_album là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
/* function album_update($maalbum, $tenalbum,$stt,$img){
    $sql = "UPDATE albumsanpham SET tenalbum=?,stt=?,imgalbum=? WHERE maalbum=?";
    pdo_execute($sql, $tenalbum,$stt,$img, $maalbum);
} */

/**
 * Xóa một hoặc nhiều loại
 * @param mix $maalbum là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function hinh_delete($mahinh){
    $sql = "DELETE FROM hinh WHERE mahinh=?";
    if(is_array($mahinh)){
        foreach ($mahinh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $mahinh);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function hinh_select_all(){
    $sql = "SELECT * FROM hinh ORDER BY mahinh DESC";
    return pdo_query($sql);
}
function hinh_select_limit(){
    $sql = "SELECT * FROM hinh
    ORDER BY RAND() LIMIT 9";
    return pdo_query($sql);
}
function hinh_select_all_by_maablum($maalb){
    $sql = "SELECT * FROM hinh WHERE maalb=? ORDER BY RAND(mahinh)";
    return pdo_query($sql,$maalb);
}

/**
 * Truy vấn một loại theo mã
 * @param int $maalbum là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function hinh_select_by_id($mahinh){
    $sql = "SELECT * FROM hinh WHERE mahinh=?";
    return pdo_query_one($sql, $mahinh);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $maalbum là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function album_exist($maalbum){
    $sql = "SELECT count(*) FROM albums WHERE maalbum=?";
    return pdo_query_value($sql, $maalbum) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM album WHERE parent = ".intval($parent)." ORDER BY tenalbum"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('maalbum'=>$rs['maalbum'],'tenalbum'=>$space.$rs['tenalbum']); 
//		$trees = Menu($rs['maalbum'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 
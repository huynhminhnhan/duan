<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_dichvu là tên loại
 * @throws PDOException lỗi thêm mới
 */
function blog_insert($hinh_lb,$tenloaiblog){
    $sql = "INSERT INTO loaiblog(imgloaiblog,tenloaiblog) VALUES(?,?)";
    pdo_execute($sql, $hinh_lb,$tenloaiblog);
}

/**
 * Cập nhật tên loại
 * @param int $madichvu là mã loại cần cập nhật
 * @param String $ten_dichvu là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function blog_update($mablog, $tenblog,$stt,$img){
    $sql = "UPDATE blog SET tenblog=?,stt=?,imgblog=? WHERE mablog=?";
    pdo_execute($sql, $tenblog,$stt,$img, $madichvu);
}

/**
 * Xóa một hoặc nhiều loại
 * @param mix $maloaiblog là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function blog_delete($maloaiblog){
    $sql = "DELETE FROM loaiblog WHERE maloaiblog=?";
    if(is_array($maloaiblog)){
        foreach ($maloaiblog as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $maloaiblog);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function blog_select_all(){
    $sql = "SELECT * FROM loaiblog ORDER BY maloaiblog DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $madichvu là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
/* function blog_select_by_id($maloaiblog){
    $sql = "SELECT * FROM loaiblog WHERE maloaiblog=?";
    return pdo_query_one($sql, $maloaiblog);
} */
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $madichvu là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
/* function dichvu_exist($madichvu){
    $sql = "SELECT count(*) FROM dichvus WHERE madichvu=?";
    return pdo_query_value($sql, $madichvu) > 0;
} */
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM dichvu WHERE parent = ".intval($parent)." ORDER BY tendichvu"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('madichvu'=>$rs['madichvu'],'tendichvu'=>$space.$rs['tendichvu']); 
//		$trees = Menu($rs['madichvu'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 
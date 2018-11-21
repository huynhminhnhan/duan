<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_dichvu là tên loại
 * @throws PDOException lỗi thêm mới
 */
function dichvu_insert($tendv,$don_gia,$giam_gia,$hinh,$mo_ta,$so_luot_xem){
    $sql = "INSERT INTO dichvu(tendv,don_gia,giam_gia,hinh,mo_ta,so_luot_xem) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $tendv,$don_gia,$giam_gia,$hinh,$mo_ta,$so_luot_xem);
}

/**
 * Cập nhật tên loại
 * @param int $madichvu là mã loại cần cập nhật
 * @param String $ten_dichvu là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function dichvu_update($madichvu, $tendichvu,$stt,$img){
    $sql = "UPDATE dichvusanpham SET tendichvu=?,stt=?,imgdichvu=? WHERE madichvu=?";
    pdo_execute($sql, $tendichvu,$stt,$img, $madichvu);
}

/**
 * Xóa một hoặc nhiều loại
 * @param mix $madichvu là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function dichvu_delete($madv){
    $sql = "DELETE FROM dichvu WHERE madv=?";
    if(is_array($madv)){
        foreach ($madv as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $madv);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function dichvu_select_all(){
    $sql = "SELECT * FROM dichvu ORDER BY madv DESC";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $madichvu là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function dichvu_select_by_id($madichvu){
    $sql = "SELECT * FROM dichvusanpham WHERE madichvu=?";
    return pdo_query_one($sql, $madichvu);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $madichvu là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function dichvu_exist($madichvu){
    $sql = "SELECT count(*) FROM dichvus WHERE madichvu=?";
    return pdo_query_value($sql, $madichvu) > 0;
}
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
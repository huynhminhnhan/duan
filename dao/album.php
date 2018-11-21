<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_album là tên loại
 * @throws PDOException lỗi thêm mới
 */
function album_insert($tenalb,$ma_dv,$img_album){
    $sql = "INSERT INTO album(tenalb,madv,img_album) VALUES(?,?,?)";
    pdo_execute($sql, $tenalb,$ma_dv,$img_album);
}

/**
 * Cập nhật tên loại
 * @param int $maalbum là mã loại cần cập nhật
 * @param String $ten_album là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function album_update($tenalbum,$madv,$img_album,$maalb){
    $sql = "UPDATE album SET tenalb=?,madv=?,img_album=? WHERE maalb=?";
    pdo_execute($sql, $tenalbum,$madv,$img_album,$maalb);
}

/**
 * Xóa một hoặc nhiều loại
 * @param mix $maalbum là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function album_delete($maalb){
    $sql = "DELETE FROM album WHERE maalb=?";
    if(is_array($maalb)){
        foreach ($maalb as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $maalb);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function album_select_all(){
    $sql = "SELECT * FROM album ORDER BY maalb DESC";
    return pdo_query($sql);
}

function ablum_select_by_id($maalb){
    $sql = "SELECT * FROM album WHERE maalb=?";
    return pdo_query_one($sql, $maalb);
}

/**
 * Truy vấn một loại theo mã
 * @param int $maalbum là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
/* function album_select_by_id($maalbum){
    $sql = "SELECT * FROM albumsanpham WHERE maalbum=?";
    return pdo_query_one($sql, $maalbum);
} */
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $maalbum là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
/* function album_exist($maalbum){
    $sql = "SELECT count(*) FROM albums WHERE maalbum=?";
    return pdo_query_value($sql, $maalbum) > 0;
} */
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
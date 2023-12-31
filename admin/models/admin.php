<?php
require_once "db.php";
class Admin extends Db
{
     //LOGIN.
     public function loginAdmin($username) {
        $sql = self::$connection->prepare("SELECT * FROM admin where username_admin = ? ");
        $sql->bind_param("s",$username);//return an object
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function getAdminLogin($username, $permission)
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM admin WHERE permission = ? AND username_admin = ?");
        $sql->bind_param('ss', $permission, $username);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    /** 
     * LẤY DANH SÁCH TẤT CẢ USER CANDIDATE
     */
    static function getAllCandidate()
    {
        $sql = self::$connection->prepare("SELECT * FROM admin");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Lấy danh sách tát cả User Candidate và phân trang:
    static function getAllUsers_andCreatePagination($page, $resultsPerPage)
    {
        //Tính xem nên bắt đầu hiển thị từ trang có số thứ tự là bao nhiêu:
        $firstLink = ($page - 1) * $resultsPerPage; //(Trang hiện tại - 1) * (Số kết quả hiện thị trên 1 trang)
        // Dùng LIMIT để giới hạn số lượng kết quả được hiển thị trên 1 trang:
        $sql = self::$connection->prepare("SELECT * FROM user LIMIT $firstLink, $resultsPerPage");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //phuong thuc select 
    public function getPass($admin)
    {
        $sql = self::$connection->prepare("SELECT `password_admin` FROM admin WHERE `username_admin` like  '$admin'");
        $items = array();
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //Phuong thuc lay password
    public function getPassword($admin)
    {
   
		foreach($this->getPass($admin) as $pass=>$get)
			{  
                $password = $get['password_admin'];
			}
		return $password;
    }
    public function checkRole($username){
        $sql = self::$connection->prepare("SELECT Role FROM `user` WHERE `username` = ?");
        $sql->bind_param('s',$username);
        return $sql->execute();
    }

    /**
     * Xóa User Candidate theo id:
     */
    static function deleteCandidateByID($id)
    {
        $sql = self::$connection->prepare("DELETE FROM admin WHERE id_admin = ? and permission = 'candidate'");
        $sql->bind_param("i", $id);
        $sql->execute();
    }
    /** 
     * PAGINATE: Đánh số trang, tạo link tới các trang.
     */
    static function paginate($url, $page, $totalResults, $resultsPerPage, $offset)
    {
        $totalLinks = ceil(floatval($totalResults) / floatval($resultsPerPage));
        $links = "";

        $from = $page - $offset;
        $to = $page + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }

        $firstLink = "";
        $lastLink = "";
        $prevLink = "";
        $nextLink = "";

        // Trường hợp để xuất hiện $firstLink, $látLink, $prevLink, $nextLink:
        if ($page > 1) {
            $prev = $page - 1;
            $prevLink = "<a style=\"padding:10px;\" href='$url" . "page=$prev'>< Previous</a>";
            $firstLink = "<a style=\"padding:10px;\" href='$url" . "page=1'><< First</a>";
        }
        if ($page < $totalLinks) {
            $next = $page + 1;
            $nextLink = "<a style=\"padding:10px;\" href='$url" . "page=$next'>Next ></a>";
            $lastLink = "<a style=\"padding:10px;\" href='$url" . "page=$totalLinks'>Last >></a>";
        }
        // $links:
        for ($i = $from; $i <= $to; $i++) {
            if ($page == $i) {
                $links = $links . "<a style=\"padding:10px;text-decoration:underline;color:red;font-weight:bold;\" href='$url" . "page=$i'>$i</a>";
            } else {
                $links = $links . "<a style=\"padding:10px;\" href='$url" . "page=$i'>$i</a>";
            }
        }
        return $firstLink . $prevLink . $links . $nextLink . $lastLink;
    }
}

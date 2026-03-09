<?php

$students = [

["ten"=>"Nguyen Van A","ngaySinh"=>"2002-01-01","gioiTinh"=>"Nam","toan"=>8,"van"=>7,"anh"=>9],
["ten"=>"Tran Thi B","ngaySinh"=>"2002-02-02","gioiTinh"=>"Nu","toan"=>9,"van"=>8,"anh"=>8],
["ten"=>"Le Van C","ngaySinh"=>"2002-03-03","gioiTinh"=>"Nam","toan"=>7,"van"=>6,"anh"=>8],
["ten"=>"Pham Thi D","ngaySinh"=>"2002-04-04","gioiTinh"=>"Nu","toan"=>8,"van"=>9,"anh"=>9],
["ten"=>"Hoang Van E","ngaySinh"=>"2002-05-05","gioiTinh"=>"Nam","toan"=>6,"van"=>7,"anh"=>7],
["ten"=>"Nguyen Thi F","ngaySinh"=>"2002-06-06","gioiTinh"=>"Nu","toan"=>9,"van"=>9,"anh"=>8],
["ten"=>"Tran Van G","ngaySinh"=>"2002-07-07","gioiTinh"=>"Nam","toan"=>8,"van"=>6,"anh"=>7],
["ten"=>"Le Thi H","ngaySinh"=>"2002-08-08","gioiTinh"=>"Nu","toan"=>7,"van"=>8,"anh"=>9],
["ten"=>"Pham Van I","ngaySinh"=>"2002-09-09","gioiTinh"=>"Nam","toan"=>6,"van"=>6,"anh"=>7],
["ten"=>"Do Thi K","ngaySinh"=>"2002-10-10","gioiTinh"=>"Nu","toan"=>8,"van"=>9,"anh"=>8],
["ten"=>"Nguyen Van L","ngaySinh"=>"2002-11-11","gioiTinh"=>"Nam","toan"=>7,"van"=>7,"anh"=>7],
["ten"=>"Tran Thi M","ngaySinh"=>"2002-12-12","gioiTinh"=>"Nu","toan"=>9,"van"=>8,"anh"=>9],
["ten"=>"Le Van N","ngaySinh"=>"2002-01-15","gioiTinh"=>"Nam","toan"=>6,"van"=>7,"anh"=>6],
["ten"=>"Pham Thi O","ngaySinh"=>"2002-02-18","gioiTinh"=>"Nu","toan"=>8,"van"=>8,"anh"=>8],
["ten"=>"Hoang Van P","ngaySinh"=>"2002-03-20","gioiTinh"=>"Nam","toan"=>7,"van"=>6,"anh"=>7],
["ten"=>"Nguyen Thi Q","ngaySinh"=>"2002-04-21","gioiTinh"=>"Nu","toan"=>9,"van"=>9,"anh"=>9],
["ten"=>"Tran Van R","ngaySinh"=>"2002-05-22","gioiTinh"=>"Nam","toan"=>8,"van"=>7,"anh"=>8],
["ten"=>"Le Thi S","ngaySinh"=>"2002-06-23","gioiTinh"=>"Nu","toan"=>8,"van"=>8,"anh"=>7],
["ten"=>"Pham Van T","ngaySinh"=>"2002-07-24","gioiTinh"=>"Nam","toan"=>6,"van"=>7,"anh"=>6],
["ten"=>"Do Thi U","ngaySinh"=>"2002-08-25","gioiTinh"=>"Nu","toan"=>9,"van"=>9,"anh"=>8]

];

# Tính điểm trung bình

foreach($students as &$sv){
    $sv["dtb"] = ($sv["toan"] + $sv["van"] + $sv["anh"]) / 3;
}

# Lọc sinh viên nữ

function sinhVienNu($students){

    $ketQua = [];

    foreach($students as $sv){

        if($sv["gioiTinh"] == "Nu"){
            $ketQua[] = $sv;
        }

    }

    return $ketQua;
}

# Sinh viên điểm >=8

function sinhVienGioi($students){

    $ketQua = [];

    foreach($students as $sv){

        if($sv["dtb"] >= 8){
            $ketQua[] = $sv;
        }

    }

    return $ketQua;
}

# Sắp xếp theo tên

usort($students,function($a,$b){

    return strcmp($a["ten"],$b["ten"]);

});

print_r($students);

# Tìm nữ có điểm cao nhất

$nu = sinhVienNu($students);

$max = $nu[0];

foreach($nu as $sv){

    if($sv["dtb"] > $max["dtb"]){
        $max = $sv;
    }

}

echo "Nu co diem cao nhat:\n";
print_r($max);

?>

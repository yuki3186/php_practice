<?php
// Staffというクラス(型)を宣言。クラスの1文字目は大文字
// Staffというクラス(型)を宣言。クラスの1文字目は大文字
class Staff
{

  // property
    public $name;
    public $age;

    // constructor
    public function __construct($staff_name)
    {
        $this->name = $staff_name;
    }
}

//クラスStaffのインスタンスを作成。(引数で$staff_nameに渡してあげます。)
$tanaka = new Staff("tanaka");

//index.phpで書いていた下記が必要なくなります。
//$tanaka->name = "tanaka";

echo $tanaka->name; // tanaka

?>



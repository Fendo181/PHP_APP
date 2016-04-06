<?php

//User
class User{
    //propaty
    public $name;
    
    //static propaty
    
    public static $count=0;
    //constracter
    
    public function __construct($name){
        //->を使う
        //this ->(アクセス) 変数(propaty)=$引数
        $this ->name =$name;
        
        //static propaty
        self::$count++;
        
    }
    
        
    //method
    public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "Hi ,iam $this->name!";
        print "<br>";
    }
    
    //static メソッド
    public static  function getMessage(){
        echo "hello form User class!";
    }
}


//クラス継承

class AdminUser extends User{
    
    
    //小クラスでOverwrite
    
      public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "[admmin]Hi ,iam $this->name!";
        print "<br>";
    }
    

    public function sayHello(){
        echo "hello from Admin!";
        print "<br>";
    }
    
    
}


//instance作成

$tom =new User("TOM");
$bob =new User("BOB");
$steve =new AdminUser("Steave");

echo User::$count;



print "<br>";


//static メソッドアクセス
User::getMessage();


?>
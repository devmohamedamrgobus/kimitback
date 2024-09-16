<?php


//class category{
//    public $tablename = 'category';
//    public function insert()
//    {
//        echo 'insert';
//    }
//}
//
//
//
//$x = new category();
//echo $x->insert();











//class calc{
//    public $x;
//
//    public $y;
//
//    public function sum()
//    {
//        echo $this->x + $this->y;
//    }
//
//
//    public function mult()
//    {
//        echo $this->x * $this->y;
//    }
//}



//$c = new calc();
//$c->x = 10;
//$c->y = 50;
//$c->mult();
//
//echo '<hr>';
//
//
//$test = new calc();
//$test->x = 20;
//$test->y = 100;
//$test->mult();













//class a {
//    public function a_method()
//    {
//        echo 'a method';
//    }
//}
//
//
//
//class b extends a{
//    public function b_method()
//    {
//        echo 'b method';
//    }
//}
//
//
//$b = new b;
//$b->b_method();





//class crud{
//
//    private $table = 'crud';
//
//    public function insert()
//    {
//        echo $this->table;
//    }
//}

//$c = new crud();
//echo $c->table;
//$c->insert();


//class category extends crud {
//    public function update()
//    {
//        echo $this->table;
//    }
//}

//$c = new category();
//echo $c->update();


//interface crud
//{
//    public function insert();
//    public function update();
//    public function delete();
//    public function select();
//}
//
//
//
//
//class db implements crud{
//
//    public function insert()
//    {
//        // TODO: Implement insert() method.
//    }
//
//    public function update()
//    {
//        // TODO: Implement update() method.
//    }
//
//    public function delete()
//    {
//        // TODO: Implement delete() method.
//    }
//
//    public function select()
//    {
//        // TODO: Implement select() method.
//    }
//}


// abstract class connection{

//    abstract public function con();
// }

// abstract class db {
//    abstract public function insert();
//    abstract public function update();
// }



// class dbmysql extends connection{
//     public function insert(){
//         echo 'mysql insert';
//     }

//     public function update(){
//         echo 'mysql update';

//     }

//     public function con(){

//     }
// }


// class dbsql implements db{
//     public function insert(){
//         echo 'sql insert';
//     }

//     public function update(){
//         echo 'sql update';

//     }
// }


















// $db = new dbsql;

// $db->insert();



// trait db {

// }


// trait a {
//     public function amethod(){
//         echo 'a';
//     }
// }

// trait b {
//     public function bmethod(){
//         echo 'b';
//     }
// }


// class mysqldb{
//     use a,b;
// }


// $m = new mysqldb;
// $m->bmethod();

//dml
    // insert , update , delete

// dql 
    // select     


// class db{
//    static public $connection = 'mysql';
//     const PI = 22/7;

//     public function test(){
//         self::PI;
//     }
// }    


// $d = new db;


// class mysqldb extends db{
//     public function insert(){
//         echo 'mysql insert';
//     }
// }


// $mysqldb = new mysqldb;
// $mysqldb->insert();


namespace kimit;

class db{
    public function insert(){
        echo 'insert';
    }
}







<?php 
$user=["name"=>"anil","age"=>"23","email"=>"anil@gmail.com"];
$userJson=json_encode($user);

echo $userJson;
?>
<br>
<?php  
$data ='{"name":"anil","age":"23","email":"anil@gmail.com"}';
$dataArray = json_decode($data);
print_r($dataArray);
?>
<br>
<?php  
$data ='{"name":"anil","age":"23","email":"anil@gmail.com"}';
$dataArray = json_decode($data,true);
print_r($dataArray);
?>
<br>
<?php 
echo date ("D-M-Y");
echo "<br/>";
echo date("d-m-y");
echo "<br>";
echo date("h:i:sa");
echo "<br>";
echo date("s");
echo "<br>";
echo date("sa");
?>
<?php 
$users=["anil","peter","sam","bruce","tony"];
// if(is_array($users)){
//     echo "this ia an array";
// }
// else{
//     echo "this is not array";
// }
echo "<br>";
echo count($users);
echo "<br>";
unset($users[3]);
array_push($user,"siddhu");
array_pop($users);

print_r(array_keys($users));
?>

<?php 
       include_once "index.php";
       include_once "header.php";
?>

<?php
$a = 10;
$b = 20;
echo $a + $b;
echo "<br>";
echo test();
echo $a - $b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
function test(){
    echo "after20";
    return 20;
}
?>

<?php 
class employee {
    public $name;
    public $age;
    public $salary;

    function work(){
        echo $this->name.' is working';
    }
}
echo "<br>";
$obj1 = new employee();
$obj1 -> name = 'prince';
$obj1 -> age = 23;
$obj1 -> salary = 6565;
print_r($obj1);
$obj1->work();
echo "<br>";
$obj2 = new employee();
$obj2 -> name = 'Rajesh';
$obj2 -> age = 25;
$obj2 -> salary = 10000;
print_r($obj2);
$obj2 -> work();
?>

<?php 
class employees {
    public $name;
    public $age;
    public $salary;
   
    function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;

        echo 'hi i am constructor';
    }
    function work(){
        echo $this->name.' is working. His age is'.$this->age.'And monthly earning is'.$this->salary;
    }
}
echo "<br>";
$emp1 = new employees('prasad',40,20000);
$emp2 = new employees('uranus',56,30000);
echo "<br>";
echo json_encode($emp1);
echo "<br>";
echo json_encode($emp2);
echo "<br>";
$emp1->work();
echo "<br>";
$emp2->work();
?>
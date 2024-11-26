<?php
echo "Hello World!";
?>

<div>
<?php
echo 4 + 2;
echo 4 - 2;
echo 4 * 2;
echo 4 / 2;
?>
</div>


<?php $tmp = 1; ?>
<div><?php echo $tmp; ?></div>

<?php
$a = "PHP";
$b = "is fun!";
echo $a . " " . $b;
?>

<div>
<?php
$program = "PHP";
echo $program . " is fun!";
echo $program . " is easy!";
?>
</div>

<?php
var_dump(6);
var_dump("6"); 
?>

<div>
<?php
var_dump(1 == 1);
?>
</div>

<div>
<?php
$score = 40;
if($score >= 60) {
    echo "You passed!";
} else {
    echo "You failed!";
}
?>
</div>

<div>
<?php
$language = ["PHP", "HTML", "CSS"];
foreach ($language as $lang) {
    echo $lang . " ";
}
?>
</div>

<div>
<?php
$arr = ["key1" => "PHP", "key2" => "HTML", "key3" => "CSS"];
echo $arr["key1"];
?>
</div>

<div>
<?php
function study($lang){
    echo $lang . " is fun!";
    echo $lang . " is easy!";
}
study("PHP");
study("HTML");
?>
</div>

<div>
<?php
function calcTax($i){
    if(is_int($i) === false){
        // throw new Exception("This is not an integer!");
    }
    return $i * 1.1;
}

echo calcTax(100);
echo calcTax("100");
?>
</div>

<div>
<?php
Class Cat {
    private $name;
    private $weight;

    public function __construct($name, $weight){
        $this->name = $name;
        $this->weight = $weight;
    }
    public function eat($food) {
        $this->weight += 1; 
        echo "Weight:{$this->weight}kg";
    }
    public function cry(){
        echo "I'm {$this->name}!";
    }
}
$cat1 = new Cat("Tama", 3);
$cat2 = new Cat("Kuro", 5);

$cat1->eat("fish");
$cat2->eat("milk");
$cat1->eat("fish");
?>
</div>
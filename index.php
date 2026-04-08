<?php
    //Задание 1
    class Employee {
        public $name;
        public $age;
        public $salary;
        
        public function __construct($name, $age, $salary) {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;        
        }
        //Задание 3
        public function getName() {
            return $this->name;        
        }
        //Задание 4
        public function getAge() {
            return $this->age;
        }
        //Задание 5
        public function getSalary() {
            return $this->salary;        
        }
    }
    $employee1 = new Employee("Карина", 18, 100000);
    $employee2 = new Employee("Вера", 19, 10000);
    //Задание 2
    echo "Задание 2. Сумма зарплат: " . ($employee1->salary + $employee2->salary) . "   рублей" . " и сумма возрастов: " . ($employee1->age + $employee2->age) . " лет<br>";
    //Задание 3,4,5
    echo "Задание 3,4,5 (созданы методы и по нему выведено на экран). Имя - " . $employee1->getName() . " возраст - " . $employee1->getAge() . " зарплата - " . $employee1->getSalary() . "<br>"; 

?>

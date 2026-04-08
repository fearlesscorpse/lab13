<?php
    //Задание 1
    class Employee {
        public $name;
        private $age;
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
        //Задание 5 и 6
        public function getSalary($emp2) {
            return $this->salary + $emp2->salary;        
        }
        //Задание 7 и 8
        public function setAge($newAge) {
            if($newAge >= 18) {
                $this->age = $newAge;
            } else {
                echo "Задание 8. Вам еще работать в нашей компании рано<br>";            
            }
        }
    }
    $employee1 = new Employee("Карина", 18, 100000);
    $employee2 = new Employee("Вера", 19, 10000);
    //Задание 2
    $sumAge = $employee1->getAge() + $employee2->getAge();
    echo "Задание 2. Сумма зарплат: " . ($employee1->salary + $employee2->salary) . "   рублей" . " и сумма возрастов: " . $sumAge . " лет<br>";
    //Задание 3,4,5
    echo "Задание 3,4,5 (созданы методы и по нему выведено на экран). Имя - " . $employee1->getName() . "<br>"; 
    //Задание 6
    echo "Задание 6. Сумма зарплат через метод getSalary() - " . $employee1->getSalary($employee2) . " рублей<br>";
    //Задание 7
    $employee2->setAge(20);
    echo "Задание 7. Новый возраст работника2 (через setAge()) - " . $employee2->getAge() . " лет<br>"; 
?>


<?php

class students
{
    private $name;
    private $roll;
    private $marks;

    public function __construct($name, $roll, $marks)
    {
        $this->name = $name;
        $this->roll = $roll;
        $this->setMarks($marks);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRoll()
    {
        return $this->roll;
    }

    public function getMarks()
    {
        return $this->marks;
    }

    public function setMarks($marks)
    {
        if (is_numeric($marks) && $marks >= 0 && $marks <= 100)
        {
            $this->marks = $marks;
        }
        else
        {
            $this->marks = null;
        }
    }

    public function getGrade()
    {
        if ($this->marks === null)
        {
            return "Invalid marks";
        }
        elseif ($this->marks >= 90)
        {
            return "A";
        }
        elseif ($this->marks >= 80)
        {
            return "B";
        }
        elseif ($this->marks >= 70)
        {
            return "C";
        }
        elseif ($this->marks >= 60)
        {
            return "D";
        }
        else
        {
            return "F";
        }
    }
}

echo "Student Management System\n";

echo "Enter student name: ";
$name = trim(fgets(STDIN));

echo "Enter roll number: ";
$roll = trim(fgets(STDIN));

echo "Enter marks (0-100): ";
$marks = trim(fgets(STDIN));


$student = new students($name, $roll, $marks);


echo "\nStudent Details\n";

echo "Name: " . $student->getName() . "\n";
echo "Roll Number: " . $student->getRoll() . "\n";
echo "Marks: " . $student->getMarks() . "\n";
echo "Grade: " . $student->getGrade() . "\n";

?>

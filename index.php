
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

    // Validate marks
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

$student = null;
$error = "";

    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>

<body>

<h2>Student Management System</h2>

<form method="POST">

    <label>Student Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Roll Number:</label>
    <input type="number" name="roll" min="1" step="1" required>
    <br><br>

    <label>Marks:</label>
    <input type="number" name="marks" min="0" max="100"
           step="any" required>
    <br><br>

    <button type="submit">Submit Details</button>

</form>

<hr>

<?php

if ($error != "")
{
    echo htmlspecialchars($error) . "<br>";
}

if ($student !== null)
{
    echo "<h3>Student Details</h3>";

    echo "Name: " .
        htmlspecialchars($student->getName()) . "<br>";

    echo "Roll Number: " .
        $student->getRoll() . "<br>";

    echo "Marks: " .
        $student->getMarks() . "<br>";

    echo "Grade: " .
        $student->getGrade() . "<br>";
}

?>

</body>
</html>

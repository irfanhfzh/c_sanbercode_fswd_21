<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 

        echo "No Display for Soal 1 <br> Jawabannya ada di Code";

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";

        echo "<h3> Soal 3</h3>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $biodata = array(
            "Name" => array(
            "name1" => "Will Byers", 
            "name2" => "Mike Wheeler", 
            "name3" => "Jim Hopper", 
            "name4" => "Eleven"
            ),
            "Age" => array(
            "age1" => 12, 
            "age2" => 12, 
            "age3" => 43, 
            "age4" => 12
            ),
            "Aliases" => array(
            "alias1" => "Will the Wise", 
            "alias2" => "Dungeon Master", 
            "alias3" => "Chief Hopper", 
            "alias4" => "El"
            ),
            "Status" => array("status" => "Alive")
        );
    ?>
    <ul>
        <li>Name: <?php echo $biodata["Name"]["name1"] ?></li>
        <li>Age: <?php echo $biodata["Age"]["age1"] ?></li>
        <li>Aliases: <?php echo $biodata["Aliases"]["alias1"] ?></li>
        <li>Status: <?php echo $biodata["Status"]["status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Name"]["name2"] ?></li>
        <li>Age: <?php echo $biodata["Age"]["age2"] ?></li>
        <li>Aliases: <?php echo $biodata["Aliases"]["alias2"] ?></li>
        <li>Status: <?php echo $biodata["Status"]["status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Name"]["name3"] ?></li>
        <li>Age: <?php echo $biodata["Age"]["age3"] ?></li>
        <li>Aliases: <?php echo $biodata["Aliases"]["alias3"] ?></li>
        <li>Status: <?php echo $biodata["Status"]["status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Name"]["name4"] ?></li>
        <li>Age: <?php echo $biodata["Age"]["age4"] ?></li>
        <li>Aliases: <?php echo $biodata["Aliases"]["alias4"] ?></li>
        <li>Status: <?php echo $biodata["Status"]["status"] ?></li>
    </ul>
</body>
</html>
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

        echo "Kids : ";
        print_r($kids);
        echo "<br> Adults : ";
        print_r($adults);

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
            "Biodata1" => array("Name" => "Will Byers", "Age" => 12, "Alias" => "Will the Wise", "Status" => "Alive"),
            "Biodata2" => array("Name" => "Mike Wheeler", "Age" => 12, "Alias" => "Dungeon Master", "Status" => "Alive"),
            "Biodata3" => array("Name" => "Jim Hopper", "Age" => 43, "Alias" => "Chief Hopper", "Status" => "Deceased"),
            "Biodata4" => array("Name" => "Eleven", "Age" => 12, "Alias" => "El", "Status" => "Alive")
        );
        echo "<h3>Asosiatif Array</h3>";
        echo "<pre>";
        print_r($biodata);
        echo "</pre>";
    ?>
    <h3>Array Multidimensi</h3>
    <ul>
        <li>Name: <?php echo $biodata["Biodata1"]["Name"] ?></li>
        <li>Age: <?php echo $biodata["Biodata1"]["Age"] ?></li>
        <li>Aliases: <?php echo $biodata["Biodata1"]["Alias"] ?></li>
        <li>Status: <?php echo $biodata["Biodata1"]["Status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Biodata2"]["Name"] ?></li>
        <li>Age: <?php echo $biodata["Biodata2"]["Age"] ?></li>
        <li>Aliases: <?php echo $biodata["Biodata2"]["Alias"] ?></li>
        <li>Status: <?php echo $biodata["Biodata2"]["Status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Biodata3"]["Name"] ?></li>
        <li>Age: <?php echo $biodata["Biodata3"]["Age"] ?></li>
        <li>Aliases: <?php echo $biodata["Biodata3"]["Alias"] ?></li>
        <li>Status: <?php echo $biodata["Biodata3"]["Status"] ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $biodata["Biodata4"]["Name"] ?></li>
        <li>Age: <?php echo $biodata["Biodata4"]["Age"] ?></li>
        <li>Aliases: <?php echo $biodata["Biodata4"]["Alias"] ?></li>
        <li>Status: <?php echo $biodata["Biodata4"]["Status"] ?></li>
    </ul>
</body>
</html>
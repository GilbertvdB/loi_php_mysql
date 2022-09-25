<?php 
//alle funties

//Geef de BMI resultaat aan.
function bmi_resultaat($lengte, $grens) {
    echo "<br><br>";
    for ($x = 40; $x <= 150; $x+=10) {
        $bmi_x = $x / ($lengte * $lengte);  // bmi bij x gewicht
        
        switch ($bmi_x){
            case ($bmi_x < $grens[0]):
                $grenzen = " u hebt ondergewicht.<br>";
                break;
            case ($bmi_x >= $grens[0] AND $bmi_x < $grens[1]):
                $grenzen = " u hebt gezond gewicht.<br>";
                break;
            case ($bmi_x >= $grens[1] AND $bmi_x < $grens[2]):
                $grenzen = " u hebt overgewicht.<br>";
                break;
            case ($bmi_x >= $grens[2]):
                $grenzen = " u hebt ernstig overgewicht.<br>";
                break;
        }
        echo "<li>Bij een gewicht van $x kg hebt u een bmi van $bmi_x,".$grenzen."</li>";
    }
}

// functie voor groep 1
function groep_1($geslacht) {
    // informatie voor groep 1 (18 jaar en onder)
    $info = <<<_INFO
        <p>BMI grenzen veranderen met de leeftijd en verschillen voor jongens en meisjes.
        Dit komt vanwege groei en de verandering in spier- en vetmassa.
        In de afbeeldingen hieronder zie je hoe de BMI-grenzen veranderen met de leeftijd
        voor de gekozen geslacht.</p>
        _INFO;
    
    // BMI grafieken voor geslacht
    $img_bmi_jon = "img/bmi_jongens.png";
    $img_bmi_mei = "img/bmi_meisjes.png";
    
    // toon correcte geslacht bmi grafiek
    if ($geslacht == "man") {
        echo " geslacht is man.</strong>";
        echo $info;
        echo "<img src='$img_bmi_jon' alt='BMI jongens'>";
    }
    elseif ($geslacht == "vrouw"){
        echo " geslacht is vrouw.</strong>";
        echo $info;
        echo "<img src='$img_bmi_mei' alt='BMI meisjes'>";
    }
}

// main
function main() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //groep bmi grenzen
        $groep_2 = array(18.5, 25, 30); // tussen 19 en 69 jaar.
        $groep_3 = array(22, 28, 30);  // vanaf 70 jaar en boven.
        
        // set variabels na sturen van formulier
        $lengte = ($_POST["lengte"]) / 100;  // van cm naar meter
        $gewicht = $_POST["gewicht"];
        $leeftijd = $_POST["leeftijd"];
        $geslacht = $_POST["geslacht"];
        $bmi = $gewicht / ($lengte * $lengte);
        
        // toon de BMI resultaat
        echo "<h2>Resultaat</h2>";
        echo "Uw BMI is $bmi.<br><br>";
        //groep 1
        if ($leeftijd < 19) {  
            echo "<strong>BMI overzicht voor groep: Leeftijd 18 en onder,";
            groep_1($geslacht);
        }
        //groep 2
        elseif ($leeftijd >= 19 && $leeftijd < 70) {  
            echo "<strong>BMI overzicht voor groep: Leeftijd tussen 19 en 70.</strong>";
            bmi_resultaat($lengte,$groep_2);
        }
        //groep 3
        else {  
            echo "<strong>BMI overzicht voor groep: Leeftijd boven 70.</strong>";
            bmi_resultaat($lengte,$groep_3);
        }
    }
}
?>
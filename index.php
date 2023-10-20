<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Laboratorium 13</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="lab/style.css">
    <style>
        * {
            font-family: 'Courier New';
        }

        .chromatic {
            text-shadow:
                -2px -2px 0 rgba(255, 53, 53, 0.744),
                2px 2px 0 rgba(117, 209, 255, 0.789);
        }

        .paper {
            border: 1px solid;
            border-top-right-radius: 68px 2px;
            border-top-left-radius: 2px 53px;
            border-bottom-right-radius: 2px 73px;
            border-bottom-left-radius: 78px 1.3px;
            box-shadow: 15px 28px 25px -18px rgba(0, 0, 0, 0.61);
        }

        .sticky-notes {
            font-size: large;
            background-color: white;
            width: 100px;
            background-color: lightyellow;
            width: 75%;
            padding: 10px 30px;
            margin: 100px;
            box-sizing: border-box;
            margin: 1rem auto;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, .25)
        }

        #misja,
        #kontakt {
            padding-right: 10%;
            padding-left: 10%;
            font-size: 200%;
            text-shadow: -2px -2px 0 rgba(255, 255, 255, 0.744),
                2px 2px 0 rgba(255, 255, 255, 0.789);
            ;
        }

        #misja h1,
        #kontakt h1 {
            font-size: 150%;
        }

        input[type=number] {
            font-size: 200%;
            height: 75px;
            width: 40%;
            padding: 5px;
            margin-right: 10%;
        }

        input[type=text] {
            font-size: 200%;
            height: 75px;
            width: 100%;
            padding: 5px;
        }

        textarea {
            resize: none;
            font-size: 200%;
            width: 100%;
            padding: 5px;
        }

        input[type=submit],
        button {
            font-size: 125%;
            background-color: black;
            color: white;
            height: 75px;
        }
    </style>

    <script src="lab/script.js"></script>

<body>
    <div id="container">
        <div id="header">
            <h1><span>Laboratorium 13</span></h1>

            <h2><span>Odkrywamy, Badamy, ███████████</span></h2>

        </div>


        <div id="content">


            <div id="main">


                <div id="title" class="chromatic">
                    O naszym Laboratorium
                    <hr>
                </div>

                <div id="page-content">



                    <div class="description sticky-notes paper">
                        <p><span style="font-size:130%;"><strong>Ludzkość w obecnym stanie istnieje od setek tysięcy
                                    lat, jednakże dopiero kilka ostatnich cokolwiek dla nas znaczyło.</strong></span>
                        </p>
                        <p><span style="font-size:130%;">Co zajmowało nam czas przez te niezliczone lata? Garbiliśmy się
                                w jaskiniach przy tlących się ogniskach, baliśmy się rzeczy, których nie byliśmy w
                                stanie zrozumieć. Nie wiedzieliśmy, dlaczego słońce co rano wschodzi znad horyzontu;
                                czym były te wielkie ptaki z ludzkimi głowami; skały, które ożywały; monstra, na których
                                widok traciło się zmysły. Zwaliśmy je &quot;bogami&quot; i &quot;diabłami&quot;.
                                Błagaliśmy, by oszczędziły nam swego gniewu; modliliśmy się o zbawienie.</span></p>
                        <p><span style="font-size:130%;">Niektóre z nich pomarły, a ludzkość zaczęła sobie w końcu
                                radzić. Świat nabiera coraz więcej sensu. Jednakże niewyjaśnione zjawiska będą nam
                                towarzyszyć już zawsze; wygląda na to, że sam Wszechświat wymaga egzystencji rzeczy,
                                których nigdy nie będziemy w stanie pojąć</span></p>
                        <p><span style="font-size:130%;"><strong>Ludzkość nie może się bać.</strong> Nikt inny nas nie
                                ochroni. Czas stawić czoła zagrożeniom.</span></p>
                        <span style="font-size:130%;">Reszta ludzkości pozostaje niedoinformowana, ale my musimy z
                            ciemnością walczyć, zabezpieczać ją i izolować od sfery publicznej. Niech będzie innym dane
                            żyć w rozkosznej iluzji normalnego świata.<br />

                            <img src="lab/logo-dark.png" style="width: 63px; margin: 22px 15px 0 42px; float: left;" alt="scp-logo-signature.png" class="image" /><br />
                            <strong>Odkryjmy. Zbadajmy. ████████████.</strong></span>
                        <p><span style="font-size:130%;"><strong>&#8212; Admin</strong></span></p>
                    </div>
                    <hr />
                    <div id="misja">
                        <h1 id="Naglowek" class="chromatic"><span>Nasza Misja</span></h1>
                        <p>Nasza placówka badawcza zajmuje się interdyscyplinarnymi badaniami nad zjawiskami o
                            niezwykłych właściwościach, które mogą mieć znaczenie dla rozwoju naszej wiedzy i postępu
                            naukowego. W szczególności, nasza placówka skupia się na analizie zdolności szczególnie
                            uzdolnionych dzieci, co pozwala nam lepiej zrozumieć i opisać te unikalne zjawiska. W
                            naszych badaniach uwzględniamy różne aspekty, od biologicznych i psychologicznych, po
                            fizyczne i parapsychologiczne. </p>
                        <p>
                            Nasz zespół składa się z wysoce wykwalifikowanych naukowców i specjalistów, którzy posiadają
                            szeroką wiedzę i doświadczenie w swoich dziedzinach. Pracując w kooperacji z innymi
                            instytucjami i badaczami, jesteśmy w stanie zapewnić nie tylko najwyższą jakość naszych
                            badań, ale także dostarczać innowacyjne i wartościowe wyniki. </p>
                        <p>
                            Dbamy o bezpieczeństwo i dobrostan wszystkich uczestników naszych badań, zapewniając im
                            pełne wsparcie i opiekę. Nasze działania są zawsze zgodne z obowiązującymi przepisami i
                            standardami etycznymi, a nasze procedury i protokoły są ciągle udoskonalane, aby zapewnić
                            jak najlepszą ochronę i opiekę dla naszych uczestników. </p>
                        <p>
                            Jeśli jesteś zainteresowany naszymi badaniami lub chcesz uzyskać więcej informacji na ich
                            temat, zachęcamy do kontaktu z nami. Jesteśmy zawsze gotowi odpowiedzieć na wszelkie pytania
                            i wyjaśnić nasze metody i cele.</p>
                    </div>
                    <hr>
                    <div id="kontakt">
                        <h1 class="chromatic">Skontaktuj się z nami</h1>
                        <form action="index.php" method="post">
                            <script>
                                function generateRandomNumber() {
                                    number = '';
                                    for (var i = 0; i < 9; i++) {
                                        number += Math.floor(Math.random() * 10);
                                    }
                                    document.getElementById('numer').value = number;
                                }
                            </script>


                            <label for="losuj">Twój numer telefonu:</label> <br>
                            <input type="number" id="numer" name="numer" readonly required>
                            <button type="button" onclick="generateRandomNumber()" name="losuj">Losuj</button><br><br>
                            <label for="nazwisko">Twoje nazwisko:</label> <br>
                            <input type="text" id="nazwisko" name="nazwisko" required maxlength="30"> <br><br>

                            <label for="wiadomosc">Wiadomość:</label><br>
                            <textarea name="wiadomosc" id="wiadomosc" cols="30" rows="10" maxlength="450" required></textarea><br><br>

                            <input type="submit" value="Wyślij" style="width: 100%;"><br><br>
                        </form>
                        <?php
                        if (isset($_POST['nazwisko']) && isset($_POST['wiadomosc'])) {
                            $conn = mysqli_connect('localhost', 'root', '', 'lab');
                            $numer = $_POST['numer'];
                            $nazwisko = $_POST['nazwisko'];
                            $wiadomosc = $_POST['wiadomosc'];

                            mysqli_query($conn, "INSERT INTO `wiadomosci` VALUES ('$numer' , '$nazwisko' , '$wiadomosc')");

                            mysqli_close($conn);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>




        <div id="footer">

            <p class="chromatic" style="font-size: 100%">&copy; Laboratorium 13</p>
        </div>
    </div>

</body>

</html>
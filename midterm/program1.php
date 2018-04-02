<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Find the letter</title>
    <style>
        
	td {
		font-size: 1.8em;
	}
	#wrapper {
		margin: 0 auto;
		width: 800px;
		text-align: center;
	}
    </style>
    <!--<title>index</title>-->
    <!--<link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
    <!--  <a href="index.html" class="w3-bar-item w3-button">HOME</a>-->
</head>

<header>
    <h1>Aces vs Kings</h1>
    </header>

<body>
    <div id="wrapper">
        <form method="POST">
            Number of Rows:
            <input type="text" name="rows" value="5" />
            <br>
            <br>
            
         	Number of Columns: 
            <input type="text" name="Columns" value="5" /> 
            <br>
            <br>

          
         	Suit to omit: 
            <select name="omitSuit">
                <option value="1">Hearts</option>
                <option value="2">Clubs</option>
                <option value="3">Diamonds</option>
                <option value="4">Spades</option>
            </select>
        <input type="submit">
        <br>
        <br>
<table border="1" cellpadding="5" style="margin:auto"><tbody>
    <tr>
        <td style="background:yellow">
            <img src="img/cards/1.png">
            </td>
            <td>
                 <img src="img/cards/2.png">
            </td>
            <td>
                <img src="img/cards/3.png">
            </td>
            <td>
                 <img src="img/cards/4.png">
            </td>
            <td>
                <img src="img/cards/5.png">
            </td>
            </tr> 
            <tr>
            <td>
                <img src="img/cards/6.png">
            </td>
            <td>
            <img src="img/cards/7.png">
            </td>
            <td>
            <img src="img/cards/8.png">
            </td>
            <td>
            <img src="img/cards/11.png">
            </td>
            <td style="background:cyan">
            <img src="img/cards/13.png">
            </td>
            </tr>
            <tr>
            <td>
                <img src="img/cards/28.png">
                </td>
                <td>
            <img src="img/cards/31.png">
            </td>
            <td>
                <img src="img/cards/34.png">
            </td>
            <td>
            <img src="img/cards/35.png">
            </td>
            <td>
            <img src="img/cards/36.png">
            </td>
            </tr>
            <tr>
            <td>
                <img src="img/cards/38.png">
            </td>
            <td style="background:cyan">
                <img src="img/cards/39.png">
            </td>
                <td>
            <img src="img/cards/41.png">
            </td>
            <td>
            <img src="img/cards/45.png">
            </td>
            <td>
            <img src="img/cards/46.png">
            </td>
            </tr>
            <tr>
            <td>
            <img src="img/cards/47.png">
            </td>
            <td>
            <img src="img/cards/48.png">
            </td>
            <td>
            <img src="img/cards/49.png">
            </td>
            <td>
            <img src="img/cards/51.png">
            </td>
            <td style="background:cyan">
            <img src="img/cards/52.png">
            </td>
            </tr>
            </tbody>
            </table>            
        </table>
        </form>
    </div>

</body>

</html>

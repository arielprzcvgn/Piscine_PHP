<?PHP
session_start();
include("log_mysqli.php");
?>
<HTML>

<HEAD>
    <TITLE>E_COMMERCE</TITLE>
    <LINK REL="stylesheet" HREF="index.css">
    <LINK REL="stylesheet" HREF="style.css">
    <LINK REL="stylesheet" HREF="cart.css">
    <script src="prod_functions.js"></script>
</HEAD>

<BODY bgcolor=#CCCCCC>
    <HEADER id="top">
        <IMG SRC="ressources/others/e-boutique.jpg" id=logo alt='logo'>
        <?PHP
$notconnected = "<A HREF='login/index.html' id='login'>Se connecter</A>" .
    "<A HREF='login/create.html' id='create'>Cr&eacuteer un compte</A>";
$connected = "<A id=login>Bonjour, " . $_SESSION[logged_on_user] . $_SESSION[admin] . "</A>" .
    "<A HREF='list_order.php' id='order'>Mes commandes</A>" .
    "<A HREF='login/logout.php' id='create'>D&eacuteconnexion</A>";
if ($_SESSION[logged_on_user])
    echo $connected;
else
    echo $notconnected;
?>
    </HEADER>
    <DIV id="menu">
        <IMG SRC="ressources/others/categorie.png" id='categorie' alt='categorie'>
        <hr width=90%>
        <ul class="menud">
            <li><a href="#">V&ecirctements</a>
                <ul>
                    <li><a href="tees.php" target="vitrine">Tee-Shirt</a></li>
                    <li><a href="pull.php" target="vitrine">Pull</a></li>
                    <li><a href="pant.php" target="vitrine">Pantalons</a></li>
                </ul>
            </li>
            <hr width=90%>
            <li><a href="#">D&eacuteguisement</a>
                <ul>
                    <li><a href="kigu.php" target="vitrine">Kigurumi</a></li>
                    <li><a href="masque.php" target="vitrine">Masque</a></li>
                </ul>
            </li>
            <hr width=90%>
            <li><a href="#">Humains</a>
                <ul>
                    <li><a href="hb.php" target="vitrine">Homme blanc<BR />h&eacutet&eacutetero cisgenre</a></li>
                    <li><a href="chauve.php" target="vitrine">Chauve</a></li>
                </ul>
            </li>
            <hr width=90%>
            <li><a href="#">NOUS CONTACTER</a></li>
        </ul>
        <DIV id="middle" alt="vitrine">
            <IFRAME id=vitrine name='vitrine' SRC="tees.php"></IFRAME>
        </DIV>
</BODY>

</HTML>
<ul class="menu">
    <li><a href="<?php echo $Accueil ?>index.php">Accueil</a></li>

	<li><a href="#">Exos HTML</a>
		<ul>
			<li><a href="<?php echo $ExoHTML ?>exo1.php">Exercice n°1</a></li>
            <li><a href="<?php echo $ExoHTML ?>exo2.php">Exercice n°2</a></li>
            <li><a href="<?php echo $ExoHTML ?>exo3.php">Exercice n°3</a></li>
            <li><a href="<?php echo $ExoHTML ?>exo4.php">Exercice n°4</a></li>
		</ul>
    </li>

    <li><a href="#">Exos CSS</a>
		<ul>
			<li><a href="<?php echo $ExoCSS ?>exo1.php">Exercice n°1</a></li>
            <li><a href="<?php echo $ExoCSS ?>exo2.php">Exercice n°2</a></li>
            <li><a href="<?php echo $ExoCSS ?>exo3.php">Exercice n°3</a></li>
            <li><a href="<?php echo $ExoCSS ?>exo4.php">Exercice n°4</a></li>
		</ul>
    </li>
    <li><a href="#">Exos PhP TP1</a>
		<ul>
			      <li><a href="<?php echo $ExoPHP ?>TP1/Exo1/exo1.php">Exercice n°1</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo2/exo2.php">Exercice n°2</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo3/exo3.php">Exercice n°3</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo4/exo4.php">Exercice n°4</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo5/exo5.php">Exercice n°5</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo6/exo6.php">Exercice n°6</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo7/exo7.php">Exercice n°7</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/Exo8/exo8.php">Exercice n°8</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP1/ExoFinal/exofinal.php">Exercice Final</a></li>
		</ul>
    </li>
    <li><a href="#">Exos PhP TP2</a>
		<ul>
			      <li><a href="<?php echo $ExoPHP ?>TP2/Exo1/exo1.php">Exercice n°1</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP2/Exo2/exo2.php">Exercice n°2</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP2/Exo3/exo3.php">Exercice n°3</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP2/ExoFinal/exofinal.php">Exercice Final</a></li>
		</ul>
    </li>
    <li><a href="#">Exos PhP TP3</a>
		<ul>
		        <li><a href="<?php echo $ExoPHP ?>TP3/Exo1/exo1.php">Exercice n°1</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP3/Exo2/exo2.php">Exercice n°2</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP3/Exo3/exo3.php">Exercice n°3</a></li>
            <li><a href="<?php echo $ExoPHP ?>TP3/ExoFinal/exofinal.php">Exercice Final</a></li>
		</ul>
    </li>
</ul>

<style>

    /* Les Menus */

.menu, .menu ul{
    padding:0;
    margin:0;
    list-style:none;
    text-align:center;
    }
    .menu li{
    display:inline-block;
    position:relative;
    border-radius:0px 0px 9px 9px;
    margin: 0% 1% 0% 1%;
    }
    .menu ul li{
    display:inherit;
    border-radius:0;
    }
    .menu ul li:first-child{
    border-radius:9px 9px 0px 0px;
    }
    .menu ul li:last-child{
    border-radius:0 0 9px 9px;
    }
    .menu ul{
    position:absolute;
    z-index: 1000;
    max-height:0;
    left: 0;
    right: 0;
    overflow:hidden;
    -moz-transition: .8s all .3s;
    -webkit-transition: .8s all .3s;
    transition: .8s all .3s;
    }
    .menu li:hover ul{
    max-height:30em;
    }
    /* background des liens menus */
  
    .menu li:first-child, .menu li:nth-child(2), .menu li:nth-child(3), .menu li:nth-child(4), .menu li:nth-child(5), .menu li:nth-child(6), .menu li:nth-child(7){
    background-color: #729EBF;
    background-image: -webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
    background-image:linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
    }
    
    /* background des liens sous menus */

    .menu li:first-child li, .menu li:nth-child(2) li, .menu li:nth-child(3) li, .menu li:nth-child(4) li, .menu li:nth-child(5) li, .menu li:nth-child(6) li, .menu li:nth-child(7) li{
    background:#333A40;
    }
    
    /* background des liens menus et sous menus au survol */
    
    .menu li:first-child:hover, .menu li:first-child li:hover, .menu li:nth-child(2):hover, .menu li:nth-child(2) li:hover, .menu li:nth-child(3):hover, .menu li:nth-child(3) li:hover, .menu li:nth-child(4):hover, .menu li:nth-child(4) li:hover, .menu li:nth-child(5):hover, .menu li:nth-child(5) li:hover, .menu li:nth-child(6):hover, .menu li:nth-child(6) li:hover, .menu li:nth-child(7):hover, .menu li:nth-child(7) li:hover{
    background:#609CC9;
    }
    
    /* les liens */
    .menu a{
    text-decoration:none;
    display:block;
    padding:8px 32px;
    color:#fff;
    font-family: "sao-font";
    }
    .menu ul a{
    padding:8px 0;
    }
    .menu li:hover li a{
    color:#fff;
    text-transform:inherit;
    }
    .menu li:hover a, .menu li li:hover a{
    color:#000;
    }

    </style>
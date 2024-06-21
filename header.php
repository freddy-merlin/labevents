 
<header>
    

<div class="contenue">
    <div class="logo">
        <a href="index.php"><img src="logo1.jpg" alt=""></a>
    </div>

    <nav>
        <ul class="menu">
            <li class="menue-items">
                <a href="">Catégorie</a>
                <ul class="submenue">
                    <li> <a href="#Mariage">Mariage</a></li>
                    <li> <a href="#Communion"> Bâpteme/Communion</a></li>
                    <li><a href="#Anniversaire">Anniversaire</a></li>

                </ul>
            </li>
           <li class="menue-items"> <a href="index.php?page=anniversaire">Nous Contacter </a> </li>
           <li class="menue-items"> <a href="index.php?page=anniversaire">  A propos  </a>  </li>

            
        </ul>
    </nav>
</div>
 </header>

 <style>

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* Assurez-vous que le header est au-dessus des autres éléments */
    background-color: white; /* Vous pouvez ajuster la couleur selon votre design */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Optionnel: Ajoute une ombre pour un meilleur contraste */
}

.contenue{
    display : flex;
    justify-content : space-between;
    align-items : center; 
    padding : 0.2rem 2rem;
    background-color : whitesmoke;
}

nav{
    flex-grow: 1;
    text-align:left;
     
}

 
.menu{
    list-style:  none;
    margin-block:0;
    float:right;
    padding :0;
    display : flex;
     
}

.menue-items{
    position :  relative;
    margin-left:2rem;
}

.menue-items a{
    text-decoration:none;
    color:#333;
    /* padding: 1rem 1.5rem; */
    display:block;
}

.menue-items a:hover{
    background-color : #ddd;
}

.submenue{
    display:  none;
    position :  absolute;
    top:100%;
    left:0;
    margin:0;
    padding :0;
    list-style:  none;
    background-color : #f8f8f8;
    box-shadow : 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
     
}

.submenue li{
    width:200px;
     
     
}
.submenue li a{
    padding:10px 15px;
     
}

.menue-items:hover .submenue{
    display:block;
}

.logo img {
   width: 100px;
   height : 69px;
     
}
 </style>


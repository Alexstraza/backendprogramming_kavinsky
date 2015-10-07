<body>

<header>
    <h2>Kavinsky</h2>


<nav>
    <ul>
        <li{if $currentPage eq "news"} class="selected" {/if}><a href="index.php?page=news">Home</a></li>
        <li{if $currentPage eq "albums"} class="selected" {/if}><a href="index.php?page=albums">Albums</a></li>
        <li{if $currentPage eq "tours"} class="selected" {/if}><a href="index.php?page=tours">Tours</a></li>
        <li{if $currentPage eq "about"} class="selected" {/if}><a href="index.php?page=about">About Kavinsky</a></li>
        <li{if $currentPage eq "contact"} class="selected" {/if}><a href="index.php?page=contact">Contact</a></li>
    </ul>
</nav>
</header>




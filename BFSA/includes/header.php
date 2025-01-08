<?php
session_start();
require_once '../config/db.php';

?>
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="dropdown">
            <!-- Zmieniony przycisk z funkcją onclick -->
            <button class="dropbtn" onclick="toggleDropdown()">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-a" href="../public/index.php">Strona główna<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-a" href="../public/about_me.php">współpraca ze mną</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-a" href="../public/trainer.php">social media</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-a" href="../public/profile.php">profil</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-a" href="../public/progress.php">mój postęp</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-a" href="../public/contact.php">kontakt</a>
                </li>

                <!-- Dodanie linku do logowania/wylogowywania i rejestracji -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="navbar-a" href="../public/logout.php">Wyloguj się</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="navbar-a" href="../public/login.php">Zaloguj się</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-a" href="../public/register.php">Zarejestruj się</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<script>
    // Funkcja otwierająca/zamykająca dropdown
    function toggleDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Zamknięcie dropdown jeśli użytkownik kliknie poza nim
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>



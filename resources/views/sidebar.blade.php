<!-- sidebar.html -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('form') }}">
                    <img src="img/form.png" alt="Home Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Form" -->
                    Form
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('lacak_dm') }}">
                    <img src="img/lacak-status.png" alt="File Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Lacak Status" -->
                    Lacak Status
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ulasan') }}">
                    <img src="img/review.png" alt="Review Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Ulasan" -->
                    Ulasan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('panduan') }}">
                    <img src="img/panduan.png" alt="Guide Icon" style="height: 30px; margin-right: 8px;"> <!-- Ikon untuk "Panduan" -->
                    Panduan
                </a>
            </li>
        </ul>
    </div>
</nav>

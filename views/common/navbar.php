<!-- Header -->
<header id="header">
    <a href="france" class="title">Hyperspace</a>
    <nav>
        <ul>
            <li><a href="<?= URL ?>index" class="<?= str_contains(FULL_URL, "index") || str_contains(FULL_URL, "home") ? "active" : "" ?>">Home</a></li>
            <li><a href="<?= URL ?>villes" class="<?= str_contains(FULL_URL, "villes") ? "active" : "" ?>">villes</a></li>
            <li><a href="<?= URL ?>elements"  class="<?= str_contains(FULL_URL, "elements") ? "active" : "" ?>">Elements</a></li>
            <li><a href="<?= URL ?>allusers"  class="<?= str_contains(FULL_URL, "allusers") ? "active" : "" ?>">Users</a></li>
        </ul>
    </nav>
</header>

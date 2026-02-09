<?php
// helpers to simple active state
function isActive($page)
{
    echo strpos($_SERVER['PHP_SELF'], $page) !== false ? 'active' : '';
}
?>

<!-- Floating Mobile Menu Button (Only visible on mobile) -->
<button class="mobile-nav-toggle d-lg-none" type="button" aria-label="Toggle Menu">
    <i class="bi bi-list"></i>
</button>

<nav class="navbar navbar-expand-lg d-none d-lg-flex">
    <div class="container-fluid justify-content-center">
        <div class="collapse navbar-collapse show" id="navbarNav">
            <ul class="navbar-nav mx-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link <?php isActive('index.php'); ?>"
                        href="<?php echo $root ?? ''; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php isActive('about.php'); ?>"
                        href="<?php echo $root ?? ''; ?>about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php isActive('events.php'); ?>"
                        href="<?php echo $root ?? ''; ?>events.php">Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php isActive('chapters'); ?>"
                        href="<?php echo $root ?? ''; ?>chapters/" id="chaptersDropdown" role="button"
                        aria-expanded="false">
                        Chapters
                    </a>
                    <ul class="dropdown-menu border-0 shadow" aria-labelledby="chaptersDropdown">
                        <li><a class="dropdown-item" href="<?php echo $root ?? ''; ?>chapters/mumbai">Mumbai</a></li>
                        <li><a class="dropdown-item coming-soon" href="#">London <span>Soon</span></a></li>
                        <li><a class="dropdown-item coming-soon" href="#">Berlin <span>Soon</span></a></li>
                        <li>
                            <hr class="dropdown-divider opacity-50">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $root ?? ''; ?>chapters/start">Start a Chapter</a>
                        </li>
                        <li><a class="dropdown-item small text-royal-violet"
                                href="<?php echo $root ?? ''; ?>chapters/">All Chapters</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-nowrap <?php isActive('support-us.php'); ?>"
                        href="<?php echo $root ?? ''; ?>support-us.php">Support Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php isActive('contact.php'); ?>"
                        href="<?php echo $root ?? ''; ?>contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Full Screen Overlay Menu -->
<div class="mobile-overlay-menu d-lg-none">
    <div class="mobile-menu-close">
        <i class="bi bi-x-lg"></i>
    </div>
    <div class="text-center mb-5 mt-4">
        <img src="<?php echo $root ?? ''; ?>assets/images/logo.png" alt="Mumbai Women Coders Logo" height="50">
    </div>
    <ul class="mobile-nav-links list-unstyled text-center">
        <li><a href="<?php echo $root ?? ''; ?>index.php" class="<?php isActive('index.php'); ?>">Home</a></li>
        <li><a href="<?php echo $root ?? ''; ?>about.php" class="<?php isActive('about.php'); ?>">About</a></li>
        <li><a href="<?php echo $root ?? ''; ?>events.php" class="<?php isActive('events.php'); ?>">Events</a></li>
        <li class="mobile-dropdown">
            <a href="<?php echo $root ?? ''; ?>chapters/" class="<?php isActive('chapters'); ?>">Chapters</a>
            <ul class="list-unstyled small mt-2">
                <li><a href="<?php echo $root ?? ''; ?>chapters/mumbai" class="py-2">Mumbai</a></li>
                <li><a href="#" class="py-2 opacity-50">London (Coming Soon)</a></li>
                <li><a href="#" class="py-2 opacity-50">Berlin (Coming Soon)</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $root ?? ''; ?>support-us.php" class="<?php isActive('support-us.php'); ?>">Support
                Us</a></li>
        <li><a href="<?php echo $root ?? ''; ?>contact.php" class="<?php isActive('contact.php'); ?>">Contact</a></li>
    </ul>
    <div class="mt-5 text-center px-4">
        <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank" class="btn btn-premium w-100">Join
            Community</a>
    </div>
</div>
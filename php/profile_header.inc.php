<?php
echo '
    <div class="nk-shop-header">
        <a href="userprofile.php" class="nk-shop-header-back"><span class="nk-icon-arrow-left"></span>Back to My Profile</a>
        <a href="#" class="nk-btn-color-white dropdown-toggle" data-toggle="dropdown">
            My Profile
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-anchor" href="userprofile.php">Profile Overview</a></li>
            <li><a class="dropdown-anchor" href="updateProfile.php">Profile Update</a></li>
            <li class="dropdown-divider"></li>
            <li><a class="dropdown-anchor" href="display-item.php">All My Listings</a></li>
            <li><a class="dropdown-anchor" href="sell-item.php">Sell An Item</a></li>
        </ul>
        <a href="assets/php/logout.php" class="nk-btn-color-white">
            Logout
        </a>
    </div>
';
?>
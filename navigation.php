<?php
echo '   <nav>
                <div class="link">
                    <a id="index-page" href="index.php?id=' . $_GET['id'] . '">
                        <img src="photos/home.png" alt="" />
                        <p>sākums</p>
                    </a>
                </div>
                <div class="link">
                    <a id="plans-page" href="plans.php?id=' . $_GET['id'] . '">
                        <img src="photos/phone.png" alt="" />
                        <p>tarifi</p>
                    </a>
                </div>
                <div class="link">
                    <a id="profile-page" href="profile.php?id=' . $_GET['id'] . '">
                        <img src="photos/user_profile.png" alt="" />
                        <p>profils</p>
                    </a>
                </div>
            </nav>';
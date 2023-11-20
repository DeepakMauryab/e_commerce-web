<?php
include "./layout/header.php";
?>

<div class="userProfile">
    <div class="container section flex gap-1">
        <div class="w-20 sidebar">
            <div class="profile">
                <figure><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQq6gaTf6N93kzolH98ominWZELW881HqCgw&usqp=CAU"
                        alt=""></figure>
                <h6>Deepak Kumar</h6>
            </div>
            <div class="mobile w-90">
                <p> <i class="bi bi-phone"></i> Mobile Number</p>
                <h6>9919156766 <i class="bi bi-patch-check-fill"></i></h6>
            </div>
            <div class="mobile w-90">
                <p><i class="bi bi-envelope"></i> Email Id</p>
                <h6>dk@ga.com <i class="bi bi-patch-check-fill"></i></h6>
            </div>
            <div class="buttons flex flex-column items-start w-90 gap-half">
                <button class="openUserProfile" value="order"><i class="bi bi-boxes"></i> Orders
                    History</button>
                <button class="openUserProfile" value="info"><i class="bi bi-person"></i> Personal Information</button>
                <button class="openUserProfile" id="logout" value="logout"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </div>
        </div>
        <div class="w-80 bookingHistory">
            <div id="personalInfo">
                <?php include "./personalInfo.php" ?>

            </div>
            <div id="BookingHistory">
                <?php include "./BookingHistory.php" ?>
            </div>
        </div>
    </div>
</div>



<?php
include "./layout/footer.php";
?>
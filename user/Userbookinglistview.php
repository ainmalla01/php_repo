
<style>
   .bookinglist {
    height: 70vh; 
    width: 90%;/* Set the height to 70% of the viewport height */
    max-width: 100%; /* Set the width to 80% of the viewport width */
    position:relative; /* Position the element absolutely */
    /* Position the left edge 5% from the left of the containing block */
    background-color: blueviolet; /* Set the background color to blueviolet */
    display: flex; /* Use flexbox layout */
    align-self: center; /* Align the element vertically in the center */
    overflow-x:hidden ;
    align-items: center;
    justify-content: center;
    overflow-y:auto;
}
.roomslist{
    min-height: max-content;
    height: 100%;
    width: 80%;
    background-color: antiquewhite;
}

</style>
<div class="bookinglist">
    <div class="roomslist">
        <?php require "./rooms.php"?>

    </div>

</div>
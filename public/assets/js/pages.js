function showConfirmation(a) {
    var result = window.confirm("All updated data will be lost.\nAre you sure you want to go back?");

    if (result) {
        if (a == 1) {
            window.location.href = "1-Personal-Details.php";
        } else if (a == 2) {  
            window.location.href = "2-Family-Information.php";
        } else if (a == 3) {
            window.location.href = "3-Bank-Account-Details.php";
        } else if (a == 4) {
            window.location.href = "4-Academic-Qualifications.php";
        } else if (a == 5) {  
            window.location.href = "5-Experience-(before-joining).php";
        } else if (a == 6) {
            window.location.href = "6-Appointment-&-Relieving-Details.php";
        } else if (a == 7) {
            window.location.href = "7-Promotion-Details.php";
        } else if (a == 8) {
            window.location.href = "8-Awards-&-Recognitions.php";
        } else if (a == 9) {  
            window.location.href = "9-Computer-Courses-Competed.php";
        } else if (a == 10) {
            window.location.href = "10-Any-Other-Information.php";
        } else if (a == 11) {
            window.location.href = "11-Professional-References.php"
        }
    } 
}
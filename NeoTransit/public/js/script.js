var map;

function initMap() {
    var mortuwaUniversity = { lat: 6.7945, lng: 79.9004 }; // Replace YOUR_LATITUDE and YOUR_LONGITUDE with the actual coordinates of Mortuwa University
    map = new google.maps.Map(document.getElementById('googleMap'), {
        center: mortuwaUniversity,
        zoom: 16 // Adjust the zoom level as needed
    });

    // var marker = new google.maps.Marker({
    //     position: mortuwaUniversity,
    //     map: map,
    //     title: "Mortuwa University"
    // });
}

document.addEventListener("DOMContentLoaded", function() {
    var submitRoleBtn = document.getElementById("submitRoleBtn");
    submitRoleBtn.addEventListener("click", submitRole);
});

function submitRole() {
    var userRole = document.getElementById("userRole").value;
    var genderSelection = document.getElementById("genderSelection");
    genderSelection.style.display = "block";
}

document.getElementById("showMapBtn").addEventListener("click", showMap);

function showMap() {
    var userType = document.getElementById("userRole").value;
    var gender = document.querySelector('input[name="gender"]:checked').value;

    // Mock data for toilet locations based on userType and gender
    var toilets = getToilets(userType, gender);

    // Display the map with toilet locations
    var mapDiv = document.getElementById("map");
    mapDiv.style.display = "block";

    // Display toilet locations on the map
    displayToiletsOnMap(toilets);
}
var globalToilets; // Declare a global variable

function getToilets(userType, gender) {
    // Mock data for toilets (replace with actual data from your database or API)
    if (userType === "guest") {
        if (gender === "male") {
            return { lat: 6.79528, lng: 79.89928, name: "Guest Male Toilet 1" }; // Example location 1
        } else {
            return  { lat: 6.79530, lng: 79.89998, name: "Guest Female Toilet 1" }; // Example location 3
        }
    } else if (userType === "student") {
        if (gender === "male") {
            return { lat: 6.79410, lng: 79.89940, name: "Student Male Toilet 1" } ; // Example location 5

        } else {
            return { lat: 6.79500, lng: 79.89960, name: "Student Female Toilet 1" }; // Example location 7
        }
    } else if (userType === "staff") {
        if (gender === "male") {
            return { lat: 6.79430, lng: 79.89980, name: "Staff Male Toilet 1" }; // Example location 9
        } else {
            return { lat: 6.79450, lng: 79.89990, name: "Staff Female Toilet 1" };// Example location 11
        }
    }
}

function displayToiletsOnMap(toilets) {
    var infowindow = new google.maps.InfoWindow();

    toilets.forEach(function(toilet) {
        var marker = new google.maps.Marker({
            position: toilet,
            map: map,
            title: toilet.name,
        });

        // Add click event listener to each marker
        marker.addListener('click', function() {
            // Create and display info window with toilet details
            var content = '<div><h3>' + toilet.name + '</h3><p>Toilet details: ...</p></div>'; // Add toilet details here
            infowindow.setContent(content);
            infowindow.open(map, marker);
        });
    });
}



function redirectToRoleSelection() {
    window.location.href = "role.html";
}

function redirectToMap() {
    window.location.href = "map.html";
}

function submitRole() {
    var userRole = document.getElementById("userRole").value;
    localStorage.setItem("userRole", userRole); // Store the user role in localStorage
    redirectToGenderSelection();
}

function redirectToGenderSelection() {
    window.location.href = "gender.html";
}

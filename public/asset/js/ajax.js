function changeFilter() {
    var searchtype = document.getElementById('filterType').value;
    if (searchtype == 1) {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbyTeam()" type="search" placeholder="Search by teams " class="form-control" id="search" name="search">';
    } else {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbyStadium()" type="search" placeholder="Search by stadiums " class="form-control" id="search" name="search">';
    }
}
// Function to search projects by Team

function searchbyTeam() {
    var search = document.getElementById('search').value;
    showProjectByTeam(search);
}

// Function to search projects by Stadium

function searchbyStadium() {
    var search = document.getElementById('search').value;
    showProjectByStadium(search);
}

function showProjectByTeam(team) {
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/Filter/",
        method: "post",
        data: {
            search: team
        },
        success: function (data) {
            displayMatches(JSON.parse(res));
        }
    });
}

function showProjectByStadium(stadium) {
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/",
        method: "post",
        data: {
            search: stadium
        },
        success: function (data) {
            displayMatches(JSON.parse(res));
        }
    });
}

function showProjectByDate() {
    var date = $('.datelimit').value;
    console.log(date);
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/Filter/",
        method: "post",
        data: {
            Datelimit: date
        },
        success: function (data) {
            displayMatches(JSON.parse(res));
        }
    });
}
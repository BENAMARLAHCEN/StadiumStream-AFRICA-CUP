function changeFilter() {
    var searchtype = document.getElementById('filterType').value;
    if (searchtype == 1) {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbyTeam()" type="search" placeholder="Search by teams " class="form-control" id="search" name="search">';
    } else {
        document.getElementById('searchinput').innerHTML = '<input oninput="searchbyStadium()" type="search" placeholder="Search by stadiums " class="form-control" id="search" name="search">';
    }
}
// Function to search Matchs by Team

function searchbyTeam() {
    var search = document.getElementById('search').value;
    showMatchByTeam(search);
}

// Function to search Matchs by Stadium

function searchbyStadium() {
    var search = document.getElementById('search').value;
    showMatchByStadium(search);
}

function showMatchByTeam(team) {
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/Filter/filterByTeam",
        method: "post",
        data: {
            search: team
        },
        success: function (data) {
            $('.allMatche-section').html(data);
        }
    });
}

function showMatchByStadium(stadium) {
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/Filter/filterByStaduim",
        method: "post",
        data: {
            search: stadium
        },
        success: function (data) {
            $('.allMatche-section').html(data);
        }
    });
}

function showMatchByDate() {

    var date = $('.datelimit').val();
    $.ajax({
        url: "http://localhost/StadiumStream-AFRICA-CUP/Filter/filterByTime",
        method: "post",
        data: {
            Datelimit: date
        },
        success: function (data) {
            $('.allMatche-section').html(data);
        }
    });
}
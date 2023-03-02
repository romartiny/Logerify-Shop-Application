function searchInput() {
    searchTableDesktop();
    searchTableMobile();
}

function searchTableDesktop() {
    let input, filter, found, table, tr, td, i, j;
    input = document.getElementById("inputText");
    filter = input.value.toUpperCase();
    table = document.getElementById("log-table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}

function searchTableMobile() {
    let input, filter, found;
    input = document.getElementById("inputText");
    filter = input.value.toUpperCase();
    let els = document.getElementsByClassName("mobile-block-box");

    for(let i = 0; i < els.length; i++){
        if(els[i].innerHTML.toUpperCase().indexOf(filter) > -1){
            found = true;
        }
        if (found) {
            els[i].style.display = "";
            found = false;
        } else {
            els[i].style.display = "none";
        }
    }
}
